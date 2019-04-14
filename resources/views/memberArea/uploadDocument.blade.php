@extends('layouts.master')
@section('title')
    Quickcarfinance.co.uk | Your Car Loan & Finance Broker
@endsection
@section('meta-description')
    Quickcarfinance.co.uk | Your Car Loan & Finance Broker
@stop
@section('meta-keywords')
    {{-- best beauty academy, skin care, hair style, hair cutting, spa, makeup specialists, nail art, best nail art --}}
@stop
@section('content')
<style>
    .uploadpaprwork-h2{font-weight: bolder;}
    .uploadpapr-p{font-size: 15px;
    font-family: 'Raleway ExtraBold', sans-serif;color: #504744;}
    .bar-both{margin-top: 50px !important;
    text-align: center;
    margin: 0 auto;
    margin-bottom: 18px;}
    .square_btn {
        display: inline-block;
        padding: 0.4em 0em;
    text-decoration: none;
    color: #67c5ff;
    border: solid 2px #67c5ff;
    border-radius: 73px;
    transition: .4s;
    font-size: 18px;
    margin: 30px auto;
}
.square_btn1 {
    display: inline-block;
       padding: 0.4em 0em;
    text-decoration: none;
    color: #67c5ff;
    border: solid 2px #67c5ff;
    border-radius: 73px;
    transition: .4s;
    font-size: 18px;
    margin: 0 auto;
    margin-bottom: 39px;
}
.square_btn:hover {
    background: #67c5ff;
    color: white;
    text-decoration: none;
}
.square_btn1:hover {
    background: #67c5ff;
    color: white;
    text-decoration: none;
}
.plusw{font-size: 2em;
    padding: 0 32px;
    margin: 1px -20px;
    color: #f6f6f6;}
    .contentleftup{    font-size: 24px;
    padding: 0 62px;}
</style>
<div class="container">

    <div class="row d-flex-center upload-document-main">
        <div class="col-md-12 documentsDiv">

            <div class="row d-flex-center">
                <div class="col-lg-8 col-md-7 col-sm-8 col-xs-9">

                    <div class="row d-flex-center">
                        <div class="col-lg-7 col-md-10 col-sm-10 col-xs-12">
                            <div class="row d-flex-center">
                                <div class="col-sm-6 col-xs-6 text-center">
                                    <a onclick="uploadpaper()" style="font-family: 'Raleway ExtraBold', sans-serif;color: #db0a5b;font-size: 18px;cursor: pointer;">
                                        Upload Paperwork
                                    </a>
                                </div>
                                <div class="col-sm-6 col-xs-6 text-center">
                                    <a onclick="Financeagreement()" style="font-family: 'Raleway ExtraBold', sans-serif;color: #a0a0a0;font-size: 18px;cursor: pointer;">
                                        Finance Agreement
                                    </a>
                                </div>
                            </div>
                            <div class="row d-flex-center upload-document-bottom-line">
                                <div class="progLine1 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="progLineRight col-sm-6 col-xs-6" style="background-color: rgb(219, 10, 91);height: 3px;border-radius: 10px 35px;">

                                    </div>
                                    <div class="progLineLeft col-sm-6 col-xs-6" style="background-color: #e6e6e6;height: 3px;border-radius: 10px 35px;">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                    </div>


                <div class="col-xs-12">
                    <div class="row d-flex-center">
                        <div class="col-lg-12">
                            <div class="row d-flex-center">

                                <div class="col-sm-12" id="signinForm">
                                    <h2 class="uploadpaprwork-h2 text-center">Upload your paperwork<span style="color: #30c9db;">.</span></h2>

                                    <p class="uploadpapr-p text-center">
                                        We may need proof of ID and a few other documents. Your Car
                                        <br>
                                        Buying Expert will let you know what's needed.
                                    </p>


                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10 upload-btn-main">

                                    <div class="row d-flex-center">
                                        <div class="col-xs-12">
                                            <a href="#" id="UploadPhoto" data-toggle="modal" data-target="#UploadPhotoModal" class="btn-paper-work-photo text-center">Upload Photo ID</a>
                                        </div>

                                        <div class="col-xs-12">
                                            <a href="#" id="UploadSelfie" data-toggle="modal" data-target="#UploadSelfieModal" class="btn-paper-work-photo text-center">Upload Selfie</a>
                                        </div>
                                    </div>
                                    @if(Session::has('photoIdSuccess'))
	                                    <script type="text/javascript">swal("Success", "{{ Session::get('photoIdSuccess') }}", "success");</script>
	                                @endif
	                                @if(Session::has('uploadSelfie'))
	                                    <script type="text/javascript">swal("Success", "{{ Session::get('uploadSelfie') }}", "success");</script>
	                                @endif


                                    <!--Upload Photo Modal Starts-->
                                    <!--<button id="UploadPhoto" data-toggle="modal" data-target="#UploadPhotoModal" class="btn btn-md btn-default btn-uploadsummary">Upload Photo ID</button>-->
                                    <!-- The Modal -->
                                    <div id="UploadPhotoModal" class="modal fade" role="dialog">

                                        <div class="modal-content car-found-content ">
                                            <div class="modal-header car-found-header">
                                                <button type="button" class="close uploadphoto-close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Upload Photo ID </h4>
                                            </div>
                                            <div class="modal-body car-found-body">
                                                <p style="color: #494949;">We Require a Picture  of your Photo ID</p>
                                                <ul class="liststyleul">
                                                    <li>A Valid driving license </li>
                                                    <li>A Valid Passport</li>
                                                </ul>
                                                <p style="color: #28cede; margin-top: 12px">Scans/ Photo do's and dont's*</p>
                                                <p>It varies by lender,so  your car buying expert will advise you weather it can be scanned or a photo.</p>
                                                <img src="{{url('public/images/membersarea/photo-id.png')}}" class="img-responsive" align="center" style="margin: 0 auto;">
                                                <p style="color: #28cede; margin-top: 12px">Wrong Name or Address</p>
                                                <p>If your or address is currently wrong, we will need you to provide Additional proofs. <a style="color: #28cede;"> Find out more </a> </p>
                                                <br>
                                                <p>If you need more advice just ask your car buying expert.</p>
                                                <div class="form-group paper-work-upload">
                                                	<form class="photo_id_upload" action="{{ route('uploadDocuments') }}" method="post" enctype="multipart/form-data">
                                                		@csrf
	                                                    <label>&nbsp;</label>
	                                                    <button type="button" id="instructionsFooterButton" class="btn btn-info btn-lg btn-add-car">Upload Your Photo ID</button>
	                                                    <p class="statusMsg"></p>
	                                                    <!-- <a id="instructionsFooterButton" class="button">Upload your selfie</a> -->
	                                                    <input id="fileInput" name="photo_id" type="file" style="opacity:0; width: 0; height: 0; overflow: hidden;">
	                                                    <input id="form-submit" name="submit" type="submit" style="opacity:0; width: 0; height: 0; overflow: hidden;">
	                                                </form>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <!--Upload Photo Modal Ends-->

                                    <!--Upload Selfie Modal Starts-->
                                    <!--<button id="UploadSelfie" data-toggle="modal" data-target="#UploadSelfieModal" class="btn btn-md btn-default btn-uploadsummary">Upload Selfie</button>-->
                                    <!-- The Modal -->
                                    <div id="UploadSelfieModal" class="modal fade" role="dialog">

                                        <div class="modal-content car-found-content ">
                                            <div class="modal-header car-found-header">
                                                <button type="button" class="close uploadphoto-close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Upload Selfie </h4>
                                            </div>
                                            <div class="modal-body car-found-body">
                                                <p>We require a selfie of your with your photo ID so we can check who you are.</p>

                                                <p style="color: #28cede; margin-top: 12px">Photo do's and dont's*</p>
                                                <br>
                                                <img src="{{url('public/images/membersarea/photo-selfie.png')}}" class="img-responsive" align="center" style="margin: 0 auto;">
                                                <p style="color: #28cede; margin-top: 12px">How to take your selfie</p>
                                                <p>Hold your ID under your chin.</p>
                                                <p>Make sure we can see your photos match.</p>
                                                <p>Don't add filter or change the picture in any way.</p>

                                                <div class="form-group">
                                                	<form class="selfie_upload" action="{{ route('uploadSelfie') }}" method="post" enctype="multipart/form-data">
                                            		@csrf
	                                                    <label>&nbsp;</label>
	                                                    <button type="button" id="upload_selfie_btn" class="btn btn-info btn-lg btn-add-car">Upload Selfie</button>
	                                                    <input id="upload_selfie" name="upload_selfie" type="file" style="opacity:0; width: 0; height: 0; overflow: hidden;">
		                                                <input id="submit_selfie" name="submit_selfie" type="submit" style="opacity:0; width: 0; height: 0; overflow: hidden;">
	                                                </form>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <!--Upload Selfie Modal Ends-->

                                </div>


                            </div>

                        </div>
                    </div>
                </div>


                </div>


            </div>

        </div>
    </div>

  </div>
<script type="text/javascript" src="{{ asset('public/js/documents-upload.js') }}"></script>
@endsection


<script>
    function uploadpaper() {
$('.progLineRight').css('background-color','#e6e6e6');
$('.progLineLeft').css('background-color','rgb(219, 10, 91)');

}
function Financeagreement() {
    $('.progLineRight').css('background-color','rgb(219, 10, 91)');
$('.progLineLeft').css('background-color','#e6e6e6');
}
</script>
