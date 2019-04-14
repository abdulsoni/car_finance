<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\CarAddress;
use App\EmploymentTime;
use App\SourceFilter;
use App\Wishlist;
use App\ActivityLog;
use App\TaskLog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

  public function SaveApplication(Request $request){
    $uid = Session::get('UID');
    $creeditRating = $request->creeditRating;
    $creeditRating1 = $request->creeditRating1;
    $creeditRating2 = $request->creeditRating2;
    $carType = $request->cars;
    $depositOption = $request->depositOption;
    $drivingLicence = $request->licence;
    $titlePrefix = $request->prefixTitle;
    $ukPassport = $request->qcf_passport;
    $vehicleBudget = $request->budget;
    $vehicleDob = $request->qcf_dob;
    $vehicleEmail = $request->emailAddress;
    $vehicleFirstName = $request->firstName;
    $vehicleLastName = $request->surName;
    $vehicleMarital = $request->marital;
    $vehicleMobile = $request->mobileNumber;
    $emailOptions = $request->email;
    $smsOptions = $request->sms;
    $borrowAmount = $request->borrowAmount;
    if (strpos($borrowAmount, ',') !== false) {
      $borrowAmount =  str_replace(',','',$borrowAmount);
    }else{
      echo $borrowAmount;
    }

    $marketingOptions = $request->marketingOptions;
    $utmCampaign = $request->utmCampaign;
    $utmMedium = $request->utmMedium;
    $utmSource = $request->utmSource;
    $utmTerm = $request->utmTerm;
    $utmContent = $request->utmContent;
    $affiliate = $request->affiliate;
    if($utmSource==''){
      $utmSource = "QCF";
    }
    $vehicleEmail = strtolower($vehicleEmail);
    if($emailOptions==''){
      $emailOptions = 'No';
    }
    if($emailOptions==''){
      $emailOptions = 'No';
    }
    if($marketingOptions==''){
      $marketingOptions = 'No';
    }

    $remember_token = $request->_token;
    if($vehicleBudget=='1'){
    $vehicleBudget = 'Under 150 / month';
    }
    else if($vehicleBudget=='2'){
        $vehicleBudget = '150 - 250 / month';
    }
    else if($vehicleBudget=='3'){
        $vehicleBudget = '251 - 350 / month';
    }
    else if($vehicleBudget=='4'){
        $vehicleBudget = '351 - 450 / month';
    }
    else if($vehicleBudget=='5'){
        $vehicleBudget = '451 - 550 / month';
    }
    else if($vehicleBudget=='6'){
        $vehicleBudget = 'Over 550 / month';
    }
    // $userData = User::where('id',$uid-1)->first();
    $userData =  User::orderBy('id','desc')->whereNotNull('leadId')->first();
    $leadId = $userData->leadId;
    if($leadId==''){
      $leadId = "CF10001";
    }
    else{
      $leadId = $leadId;
      $fin =  ltrim($leadId,'CF');
      $fin = $fin + 1;
      $leadId = "CF".$fin;
    }
    $newVDob = explode('/',$vehicleDob);
    $day = $newVDob[0];
    $month = $newVDob[1];
    $year = $newVDob[2];
    $actualDate = $year."-".$month."-".$day;
    $userTable = User::where('id',$uid)->first();
    $uname = $vehicleFirstName." ".$vehicleLastName;
    Session::put('UserName',$vehicleFirstName." ".$vehicleLastName);
    $userTable['name'] = $vehicleFirstName." ".$vehicleLastName;
    $userTable['vehicleType'] = $carType;
    $userTable['leadId'] = $leadId;
    $userTable['email'] = $vehicleEmail;
    $userTable['password'] = Hash::make('secret');
    $userTable['mobile'] = $vehicleMobile;
    $userTable['monthlyBudget'] = $vehicleBudget;
    $userTable['licenceType'] = $drivingLicence;
    $userTable['creditRating'] = $creeditRating;
    $userTable['depositOption'] = $depositOption;
    $userTable['dob'] = $actualDate;
    $userTable['maritalStatus'] = $vehicleMarital;
    $userTable['licenceType'] = $drivingLicence;
    $userTable['britishPassport'] = $ukPassport;
    $userTable['prefixTitle'] = $titlePrefix;
    $userTable['firstName'] = $vehicleFirstName;
    $userTable['emailOptions'] = $emailOptions;
    $userTable['smsOptions'] = $smsOptions;
    $userTable['marketingOptions'] = $marketingOptions;
    $userTable['lastName'] = $vehicleLastName;
    $userTable['loanAmount'] = $borrowAmount;
    $userTable['userRefference'] = $utmSource;
    $userTable['utmCampaign'] = $utmCampaign;
    $userTable['utmMedium'] = $utmMedium;
    $userTable['utmTerm'] = $utmTerm;
    $userTable['utmContent'] = $utmContent;
    $userTable['affiliate'] = $affiliate;
    $userTable['userType'] = 0;
    $userTable['status'] = 1;
    $fetchUser = User::where('email',$vehicleEmail)->first();
    $src = false;
    if($utmSource==''){
      $utmSource = $affiliate;
    }
    /************** Sources Filters Start ***************/
    $filters = false;
    $sendToAutoConvert = false;
    $currTimeStamp = strtotime(date('h:i:s'));
    $autoConvertApiKey = "no";

    $sourceFilters = SourceFilter::where('pregSource',$utmSource)->first();
      if(is_null($sourceFilters)){
        $filters = false;
      }else{

        // Check lead number filter
        if($sourceFilters->isNumberLeads=='yes'){
        $numLeads = SourceFilter::whereDate('created_at', Carbon::today())->get()->count();
          if($numLeads < $sourceFilters->numberOfLeads){
            $filters = true;
          }
        }
        //// Filter according to specified time
        if($sourceFilters->isTime=='yes'){
          $specTimeStart = strtotime($sourceFilters->timeStart);
          $specTimeEnd = strtotime($sourceFilters->timeEnd);
          if($currTimeStamp > $specTimeStart && $currTimeStamp < $specTimeEnd){
            $filters = true;
          }
        }
        /// Filter according to Date
        if($sourceFilters->isAge=='yes'){
          $ageStart = $sourceFilters->ageStart;
          $ageEnd = $sourceFilters->ageEnd;
          $from = new \DateTime($actualDate);
          $to   = new \DateTime('today');
          $Age = $from->diff($to)->y;
          if($Age <= $ageEnd && $Age >=$ageStart){
            $filters = true;
            /// licence type will be also true in case of age is true
          }
        }
        if($sourceFilters->isDays){
        $currDay = strtolower(date('l', strtotime(date('Y-m-d'))));
        $daysArr = explode(",",$sourceFilters->days);
        $daysArr = array_map('trim',$daysArr);
          if(count($daysArr)>0){
            if(in_array($currDay,$daysArr)==true){
              $filters= true;
            }
          }

        }
        //// Auto Convert Filters
        if($sourceFilters->sendToAutoConvert=='yes'){
          $sendToAutoConvert='yes';
        }else{
          $sendToAutoConvert = 'no';
        }
        // // Check Member Area Filter
        if($sourceFilters->sendToMemArea=='no'){
          $filters=true;
        }else{
          $filters = false;
        }
        if($sourceFilters->autoConvertApi!="no"){
          $autoConvertApiKey = $sourceFilters->autoConvertApi;
        }

      }
    /************** Sources Filters End ***************/
    // return $sourceFilters;
    if($fetchUser){
        $userCount = $fetchUser->count();
    }
    else{
        $userCount = 0;
    }
    if($userCount<1){
    $userTable->save();
    if($userTable->save())
    {
        //Send Welcome Email Section
        // Mail::send('emails.welcomeMail',['data'=>$uname], function ($m) use ($userTable) {
        //     $m->from('info@quickcarfinance.co.uk','Quick Car Finance');
        //     $m->to($userTable['email'], $userTable['name'])->subject("Welcome - Quick Car Finance");
        // });
        //End Welcome Email Seciton

        /* Add Activity Log Start */
          $activity_log = new ActivityLog();
          $activity_log['uid'] = $uid;
          $activity_log['aid'] = $uid;
          $activity_log['activity_name'] = $userTable->getTable();
          $activity_log->save();
          /* Add Activity Log End */

          $t_task_name = $userTable->getTable();
          /* Tasks Log End*/
          DB::select("call sp_task_logs($uid,$uid,'$t_task_name')");
      // $sid = Session::put('SID', $sessionid);
      if(is_null($sourceFilters)){
          return "1#".$leadId."#0#yes#yes#".$autoConvertApiKey;
      }else{
        if($filters==false){
          return "1#".$leadId."#0#yes#yes#".$autoConvertApiKey;
        }
        else{
          return "1#".$leadId."#".$sourceFilters->id."#no#".$sendToAutoConvert."#".$autoConvertApiKey;
        }
      }

      // return "1#".$leadId;
    }
    else{
        if(is_null($sourceFilters)){
          return "3#".$leadId."#0#yes#yes#".$autoConvertApiKey;
        }else{
          if($filters==false){
            return "3#".$leadId."#0#yes#yes#".$autoConvertApiKey;
          }else{
            return "3#".$leadId."#".$sourceFilters->id."#no#".$sendToAutoConvert."#".$autoConvertApiKey;
          }
        }

    }
  }
  else{
    $userTable->save();
    /* Add Activity Log Start */
      $activity_log = new ActivityLog();
      $activity_log['uid'] = $uid;
      $activity_log['aid'] = $uid;
      $activity_log['activity_name'] = $userTable->getTable();
      $activity_log->save();
      /* Add Activity Log End */

      /* Tasks Log Start*/
      $t_task_name = $userTable->getTable();
      DB::select("call sp_task_logs($uid,$uid,'$t_task_name')");
      /* Tasks Log End*/
      if(is_null($sourceFilters)){
        return "2#".$leadId."#0#yes#yes#".$autoConvertApiKey;
      }else{
        if($filters==false){
          return "2#".$fetchUser->leadId."#0#yes#yes#".$autoConvertApiKey;
        }
        else{
          return "2#".$leadId."#".$sourceFilters->id."#no#".$sendToAutoConvert."#".$autoConvertApiKey;
        }
      }

  }


  }

  public function SaveAddressData(Request $request){
    // echo "12";die;
    $sid = Session::get('UID');
    // $sid = session()->getid();
    $buildingNum = $request->buildingNumber;
    $street = $request->street;
    $secondStreet = $request->secondStreet;
    $buildingName = $request->buildingName;
    $residential = $request->residential;
    $town = $request->town;
    $county = $request->county;
    $postcode = $request->postcode;
    $years = $request->years;
    $months = $request->months;
    $totalMonths = $request->totalMonths;
    $addressData = new CarAddress();
    $addressData['residentialStatus'] = $residential;
    $addressData['addressYears'] = $years;
    $addressData['addressMonths'] = $months;
    $addressData['totalMonths'] = $totalMonths;
    $addressData['postcode'] = $postcode;
    $addressData['buildingName'] = $buildingName;
    $addressData['street'] = $street;
    $addressData['street1'] = $secondStreet;
    $addressData['town'] = $town;
    $addressData['county'] = $county;
    $addressData['buildingNumber'] = $buildingNum." ".$buildingName;
    $addressData['userRefference'] ="QCF";
    $addressData['uid'] =$sid;
    $addressData->save();
    if($addressData->save()){
      $totalYears = DB::table('caraddress')
               ->select('uid', DB::raw('SUM(totalMonths) as total_sales'))
               ->groupBy('uid')->where('uid',$sid)
               ->get();
      echo $totalYears[0]->total_sales;
    }
    else{
      echo "Error";
    }
  }

  public function SaveEmploymentData(Request $request){
    $uid = new User();
    $uid['status'] =0;
    $uid->save();
    $userId = $uid->id;
    Session::put('UID',$userId);
    // $sid = session()->getid();
    // Session::put('SID', $sid);
    $empData = new EmploymentTime();
    $employmentStatus = $request->employmentStatus;
    $companyName = $request->companyName;
    $jobTitle = $request->jobTitle;
    $monthlyIncome = $request->monthlyIncome;
    $empYears = $request->empYears;
    $empMonths = $request->employmentMonths;
    if($empMonths==''){
      $empMonths=0;
    }
    if($empYears==''){
      $empYears=0;
    }
    $totalMonths = $request->totalMonths;
    $otherEmploymentStatus='';
    if($employmentStatus=='other'){
        $companyName = '';
        $jobTitle = '';
        $otherEmploymentStatus = $request->otherEmploymentStatus;
        }
    else{
        $otherEmploymentStatus = '';
    }
    $empData['employmentStatus'] =$employmentStatus;
    $empData['companyName'] =$companyName;
    $empData['jobTitle'] =$jobTitle;
    $empData['otherEmploymentStatus'] =$otherEmploymentStatus;
    $empData['employmentYears'] =$empYears;
    $empData['employmentMonths'] =$empMonths;
    $empData['totalMonths'] =$totalMonths;
    $empData['userRefference'] ="QCF";
    $empData['monthlyIncome'] =$monthlyIncome;
    $empData['uid'] =$userId;
    $empData ->save();
    if($empData->save()){
        $totalYears = DB::table('employmenttime')
                 ->select('uid', DB::raw('SUM(totalMonths) as total_months'))
                 ->groupBy('uid')->where('uid',$userId)
                 ->get();
                 // return $totalYears;
        echo $totalYears[0]->total_months;
        }
        else
        {
            echo "Erorr";
        }

  }


    public function SaveEmploymentData1(Request $request){
      $userId = Session::get('UID');
      $empData = new EmploymentTime();
      $employmentStatus = $request->employmentStatus;
      $companyName = $request->companyName;
      $jobTitle = $request->jobTitle;
      $monthlyIncome = $request->monthlyIncome;
      $empYears = $request->empYears;
      $empMonths = $request->employmentMonths;
      if($empMonths==''){
        $empMonths=0;
      }
      if($empYears==''){
        $empYears=0;
      }
      $totalMonths = $request->totalMonths;
      $otherEmploymentStatus='';
      if($employmentStatus=='other'){
          $companyName = '';
          $jobTitle = '';
          $otherEmploymentStatus = $request->otherEmploymentStatus;
          }
      else{
          $otherEmploymentStatus = '';
      }
      $empData['employmentStatus'] =$employmentStatus;
      $empData['companyName'] =$companyName;
      $empData['jobTitle'] =$jobTitle;
      $empData['otherEmploymentStatus'] =$otherEmploymentStatus;
      $empData['employmentYears'] =$empYears;
      $empData['employmentMonths'] =$empMonths;
      $empData['totalMonths'] =$totalMonths;
      $empData['userRefference'] ="QCF";
      $empData['monthlyIncome'] =$monthlyIncome;
      $empData['uid'] =$userId;
      $empData ->save();
      if($empData->save()){
          $totalYears = DB::table('employmenttime')
                   ->select('uid', DB::raw('SUM(totalMonths) as total_months'))
                   ->groupBy('uid')->where('uid',$userId)
                   ->get();
                   // return $totalYears;
          echo $totalYears[0]->total_months;
          }
          else
          {
              echo "Erorr";
          }

    }
  public function ShowThankYou($id){
      $src = SourceFilter::where('id',$id)->first();
      return view('thank-you.thankYou',['Source'=>$src]);
  }
  public function SetUserSession($lid){
    $user = User::where('leadId',$lid)->get();
    // return $user;
    Auth::loginUsingId($user[0]->id,true);
    // return view('/member-area');
    return "success";
  }
  public function ViewDisplayCar($id){
    return view('displayCar.displayCar',['CarId'=>$id]);
  }
  public function NewOffersDisplayCar($id){
    return view('displayCar.displayCarOffers',['CarId'=>$id]);
  }
  public function MemberNewOffers($id){
    return view('memberArea.newOffersDisplay',['CarId'=>$id]);
  }
  public function ViewMemberDisplayCar($id){
    return view('memberArea.memberDisplayCar',['CarId'=>$id]);
  }

  public function AddToWishList(Request $request){
    $wishlist = new Wishlist();
    $image = $request->vehicleImage;

    if (strpos($image, 'mfldirect') !== false) {
      if (strpos($image, '.') !== false) {
        $image = explode('&width',$image);
        $image = $image[0];
      }
    }else{
      if (strpos($image, '?') !== false) {
        $image = explode('?',$image);
        $image = $image[0];
      }
      else{
        $image = $image;
      }
    }

    $last3chars = substr($image, -3);
    $ext = '';
    if($last3chars=='jpg' || $last3chars=='JPG'){
        $ext='.jpg';
    }
    else if($last3chars=='png' || $last3chars=='PNG'){
        $ext='.png';
    }
    if($last3chars=='jpeg' || $last3chars=='JPEG'){
        $ext='.jpeg';
    }
    $timeStamps=time();
    $wishlist['uId'] = $request->leadId;
    $wishlist['vehicleId'] = $request->vehicleId;
    $wishlist['makeModel'] = $request->makeModel;
    $wishlist['vehicleTitle'] = $request->vehicleTitle;
    $wishlist['price'] = $request->price;
    $wishlist['doors'] = $request->doors;
    $wishlist['color'] = $request->color;
    $wishlist['vehicleTransmission'] = $request->vehicleTransmission;
    $wishlist['vehicleMileage'] = $request->vehicleMileage;
    $wishlist['vehicleDistance'] = $request->vehicleDistance;
    $path1 = public_path().'/images/wishlist/'.$timeStamps."".$ext;
    $path = 'https://phpstack-227246-696630.cloudwaysapps.com/public/images/wishlist/'.$timeStamps."".$ext;
    $dbPath = 'https://phpstack-227246-696630.cloudwaysapps.com/public/images/wishlist/'.$timeStamps."".$ext;
    $wishlist['vehicleImage'] = $dbPath;
    $wishlist['dealerName'] = $request->dealerName;
    $wishlist['dealerPhone'] = $request->dealerPhone;
    $wishlist['registerationInfo'] = $request->registerationInfo;
    $wishlist['vehicleFuel'] = $request->vehicleFuel;
    $wishlist['status'] = 1;
    $wishlist->save();
    /* Add Activity Log Start */
    $activity_log = new ActivityLog;
    $activity_log['uid'] = Auth::user()->id;
    $activity_log['aid'] = $wishlist->id;
    $activity_log['activity_name'] = $wishlist->getTable();
    $activity_log->save();
    /* Add Activity Log End */

    /* Tasks Log Start*/
    $t_task_name = $wishlist->getTable();
    $tid = $wishlist->id;
    $uid = Auth::user()->id;
    DB::select("call sp_task_logs($uid,$tid,'$t_task_name')");
    /* Tasks Log End*/

    if($wishlist->save()){
        if (file_exists($path1)) {

        } else {
            file_put_contents($path1, file_get_contents($image));
        }
        echo "0";
    }
  }
    public function SendExistingEmail($lid){
        function generateRandomString($length = 20) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&*';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
    $user = User::where('leadId',$lid)->first();

    $pass = generateRandomString();
    $user['reCreatedProfile'] = 1;
    $user->save();
    if($user->save()){
        //Send Welcome Email Section
     // Mail::send('emails.existingEmail',['data'=>$user->name,'Password'=>$pass], function ($m) use ($user) {
     //    $m->from('info@findfunddeliver.com','Quick Car Finance');
     //    $m->to($user->email, $user->name)->subject("Thanks for visit again - Quick Car Finance");
    // });
    //End Welcome Email Seciton
    Auth::loginUsingId($user->id,true);
    return "success";
    }
    else{
        return 0;
    }

  }
  public function SetFirstPassword(Request $request){
    $userid = Auth::user();
    $password = Hash::make($request->password);
    $userid['password']=$password;
    $userid['reCreatedProfile']=0;
    $userid['registerFlag']=1;
    $userid->save();
    if($userid->save()){
        echo "success";
    }
  }
  public function DeleteSavedCar(Request $request, $id){
    $delete = Wishlist::find($id);
    $delete->delete();
    return 1;
  }
  public function addCar(Request $request){
  $add_car = new Wishlist;
  $add_car['uId'] = Auth::user()->id;
  $add_car['price'] = "£ ".$request->price;
  $add_car['vehicleMileage'] = $request->vehicleMileage;
  $add_car['dealerName'] = $request->dealerName;
  $add_car['registerationInfo'] = $request->registerationInfo;
  $add_car['status'] = 1;
  $add_car->save();
  /* Add Activity Log Start */
    $activity_log = new ActivityLog;
    $activity_log['uid'] = Auth::user()->id;
    $activity_log['aid'] = $add_car->id;
    $activity_log['activity_name'] = $add_car->getTable();
    $activity_log->save();
  /* Add Activity Log End */

  /* Tasks Log Start*/
  $t_task_name = $add_car->getTable();
  $t_tid = $add_car->id;
  $t_uid = Auth::user()->id;
  DB::select("call sp_task_logs($t_uid,$t_tid,'$t_task_name')");
  /* Tasks Log End*/
  Session::flash('carAdded','Car Added');
  return redirect()->back();
 }
 public function sendEmails(){
    $user = User::where('email','mbtjagdeesh@gmail.com')->first();
    // return $user;
    // Mail::send('emails.testEmails',['data'=>$user->name], function ($m) use ($user) {
    //     $m->from('no-reply@quickcarfinance.co.uk','Quick Car Finance');
    //     // $m->to($user->email, $user->name)->subject("Thanks for visit again - Quick Car Finance");
    //     $m->to('ramand295@gmail.com', $user->name)->subject("Thanks for visit again - Quick Car Finance");
    // });
  }

  function ViewMemberArea(){
    $wishlist = Wishlist::where('uid',Auth::user()->id)->get();
    return view('memberArea.memberArea',['Wishlist'=>$wishlist]);
  }
}
