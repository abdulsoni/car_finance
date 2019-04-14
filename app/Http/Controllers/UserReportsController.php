<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wishlist;
use App\User;
use App\EmploymentTime;
use App\CarAddress;
use App\UploadDocuments;
use App\UploadSelfie;
use App\ActivityLog;
use App\TaskLog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class UserReportsController extends Controller
{
    public function ViewWishlist(){
    	$user_id=Auth::user()->id;
        $wishlist = Wishlist::where('wishlists.uId',$user_id)->get();
        $result = json_decode($wishlist, true);
        $wishlist_count = Wishlist::where('wishlists.uId',$user_id)->count();
      return view('memberArea.savedCars',['saved_cars'=>$wishlist], ['wishlist_count'=>$wishlist_count]);
    }

    public function uploadDocuments(Request $request){
    	$user_id=Auth::user()->id;
    	$upload_documents = new UploadDocuments;
    	request()->validate(['photo_id' => 'image|mimes:jpeg,png,jpg,gif,svg',]);
        if(request()->photo_id!=null)
        {
	        $imageName = time().'photo_id.'.request()->photo_id->getClientOriginalExtension();
	        request()->photo_id->move(public_path('images/upload_documents/'), $imageName);
	        $upload_documents['file'] = $imageName;
        }
        $upload_documents['uid'] = $user_id;
        $upload_documents['upload_type'] = 'photo_id';
        $upload_documents->save();

        /* Add Activity Log Start */
        $activity_log = new ActivityLog;
        $activity_log['uid'] = Auth::user()->id;
        $activity_log['aid'] = $upload_documents->id;
        $activity_log['activity_name'] = $upload_documents->getTable();
        $activity_log->save();
        /* Add Activity Log End */

        /* Add Task Log Start */
        $t_uid = Auth::user()->id;
        $t_tid = $upload_documents->id;
        $t_task_name = $upload_documents->getTable();
        DB::select("call sp_task_logs($t_uid,$t_tid,'$t_task_name')");
        /* Add Task Log End */

        // Session::flash('photoIdSuccess', 'Photo ID Uploaded');
      	return redirect()->back()->with('photoIdSuccess', 'Photo ID Uploaded Successfully');;
    }

    public function uploadSelfie(Request $request){
    	$user_id=Auth::user()->id;
    	$upload_selfie = new UploadSelfie;
    	request()->validate(['selfie_upload' => 'image|mimes:jpeg,png,jpg,gif,svg',]);
        if(request()->upload_selfie!=null)
        {
	        $imageName = time().'upload_selfie.'.request()->upload_selfie->getClientOriginalExtension();
	        request()->upload_selfie->move(public_path('images/upload_documents/'), $imageName);
	        $upload_selfie['file'] = $imageName;
        }
        $upload_selfie['uid'] = $user_id;
        $upload_selfie['upload_type'] = 'selfie';
        $upload_selfie->save();

        /* Add Activity Log Start */
        $activity_log = new ActivityLog;
        $activity_log['uid'] = Auth::user()->id;
        $activity_log['aid'] = $upload_selfie->id;
        $activity_log['activity_name'] = $upload_selfie->getTable();
        $activity_log->save();
        /* Add Activity Log End */

        /* Add Task Log Start */
        $t_uid = Auth::user()->id;
        $t_tid = $upload_selfie->id;
        $t_task_name = $upload_selfie->getTable();
        DB::select("call sp_task_logs($t_uid,$t_tid,'$t_task_name')");
        /* Add Task Log End */

        // Session::flash('uploadSelfie', 'Selfie Uploaded');
      	return redirect()->back()->with('uploadSelfie', 'Selfie Uploaded');
    }
}
