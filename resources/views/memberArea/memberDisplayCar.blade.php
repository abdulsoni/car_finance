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

<!--Member Area Slider Starts-->
<div class="memberarea-slider">
    <div class="container">
        <div class="memberarea-slider-inner">
            <div class="row no-padding no-margin">
                <div class="col-lg-12 no-padding no-margin">
                    <div class="row no-padding">
                        <div class="col-lg-12 no-padding no-margin">
                            <div class="member-area-slider-icon text-center">
                                <img src="{{url('public/images/membersarea/icon-memberarea-slider.png')}}" class="img-responsive" alt=""/>
                            </div>

                            <div class="member-area-slider-title">
                                <p class="text-center"><span>Hi {{Auth::user()->name}}</span><br>
                                    You’ve been pre-approved with one<br>
                                    of our certified lenders.</p>
                            </div>

                            <div class="memberarea-slider-btn-outer text-center">

                                <div class="row no-padding no-margin d-flex-center">
                                    <div class="btn-memberarea-slider1-outer">
                                        <a href="{{ url('find-cars') }}" class="btn-memberarea-slider1">Search for a car</a>
                                    </div>

                                    <!-- <div class="btn-memberarea-slider2-outer">
                                        <a href="{{ url('new-offers') }}" class="btn-memberarea-slider3">Nearly New Offers</a>
                                    </div> -->

                                    <div class="btn-memberarea-slider2-outer">
                                        <a href="#" data-toggle="modal" data-target="#myModal" class="btn-memberarea-slider2">I've found a car</a>
                                    </div>
                                  </div>

                                <!--                                        <a href="{{ url('find-cars') }}" class="btn-memberarea-slider1">Search for a car</a>
                                                                        <a href="#" data-toggle="modal" data-target="#myModal" class="btn-memberarea-slider2">I've found a car</a>-->

                                <!--I've Found Modal Starts-->
                                <div class="modal fade" id="myModal" role="dialog" style="z-index: 10000000000;">
                                    <div class="modal-dialog car-found-dialog car-found-dialog-2 ">

                                        <!-- Modal content-->
                                        <div class="modal-content car-found-content">
                                            <div class="modal-header car-found-header">
                                                <button type="button" class="close car-found-close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Add a car you’ve found</h4>
                                            </div>
                                            <div class="modal-body car-found-body">
                                                <p>
                                                    <i>Add as many cars as you want, as they’ll be added to your cars. We’ll need to verify the dealer and run some checks on them.</i>
                                                </p>
                                                <form class="" action="{{route('addCar')}}" method="post">
                                                  @csrf
                                                <div class="form-group car-found-group">
                                                    <label class="car-found-label" for="vehicle_registration">Vehicle Registration<span class="car-found-star">*</span></label>
                                                    <input type="text" class="form-control car-found-textbox" name="registerationInfo" id="vehicle_registration">
                                                </div>
                                                <div class="form-group car-found-group">
                                                    <label class="car-found-label" for="price">Price<span class="car-found-star">*</span></label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i>£</i></span>
                                                        <input type="text" name="price" class="form-control car-found-textbox" id="price">
                                                    </div>
                                                </div>
                                                <div class="form-group car-found-group">
                                                    <label for="mileage" class="car-found-label">Mileage<span class="car-found-star">*</span></label>
                                                    <input type="text" name="vehicleMileage" class="form-control car-found-textbox" id="mileage">
                                                </div>
                                                <div class="form-group car-found-group">
                                                    <label class="car-found-label" for="reference">Name or website of dealership<span class="car-found-star">*</span></label>
                                                    <input type="text" name="dealerName" class="form-control car-found-textbox" id="reference">
                                                </div>
                                                <div class="form-group">
                                                    <label>&nbsp;</label>
                                                    <button type="submit" class="btn btn-info btn-lg btn-add-car">Add Car</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--I've Found Modal Ends-->

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Member Area Slider Ends-->


<div class="container-fluid no-padding1 hideOnMobile">
    <div class="row">
        <div class="col-sm-12 no-padding1">
            <div class="col-sm-2 col-xs-3 borderTriangle">
                <a href="{{url('dashboard')}}">Home</a>
            </div>
            <div class="col-sm-2 col-xs-3 borderTriangle">
                <a href="{{url('find-cars')}}">Find a Car</a>
            </div>
            <div class="col-sm-2 col-xs-3 currentPage">
                <a id='breadTitle' href="#"></a>
            </div>
        </div>
    </div>
</div>

<div class="find-car-loading-main" id="fetchingData" style="display: none;">
  <div class="loading-cars-image">
    <img src="https://phpstack-227246-696630.cloudwaysapps.com/public/images/car-loading.gif">
    <h2 class="loading-car-gif">Loading cars...</h2>
  </div>
</div>
<div class="row no-padding no-margin">
    <div class="col-lg-12">
        <div class="display-car-main d-flex-center">

            <!--Find Car Detail-1 Starts-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                <div class="find-car-detail">
                    <div class="find-car-detail-inner">
                        <div class="row no-padding no-margin">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                <div class="row no-padding no-margin">
                                    <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 no-padding">
                                        <div class="find-car-image">

                                            <div id="slideshow" class="fullscreen">
                                                <!-- Below are the images in the gallery -->
                                                <!-- <div id="img-1" data-img-id="1" class="img-wrapper active">
                                                    <img src="{{asset('public/images/membersarea/display-car-test.png')}}" class="img-responsive">
                                                </div>
                                                <div id="img-2" data-img-id="2" class="img-wrapper" >
                                                    <img src="{{asset('public/images/membersarea/display-car-test4.png')}}" class="img-responsive">
                                                </div>
                                                <div id="img-3" data-img-id="3" class="img-wrapper">
                                                    <img src="{{asset('public/images/membersarea/display-car-test5.png')}}" class="img-responsive">
                                                </div>
                                                <div id="img-4" data-img-id="4" class="img-wrapper" >
                                                    <img src="{{asset('public/images/membersarea/display-car-test6.png')}}" class="img-responsive">
                                                </div>
                                                <div id="img-4" data-img-id="5" class="img-wrapper">
                                                    <img src="{{asset('public/images/membersarea/display-car-test7.png')}}" class="img-responsive">
                                                </div> -->

                                                <!-- Below are the thumbnails of above images -->
                                                <div class="thumbs-container bottom" style="height:60px !important;">
                                                    <div id="prev-btn" class="prev">
                                                        <img src="{{asset('public/images/membersarea/icon-arrow-left-display.png')}}" alt=""/>
                                                    </div>

                                                    <ul class="thumbs">
                                                        <!-- <li data-thumb-id="1" class="thumb active">
                                                            <img src="{{asset('public/images/membersarea/display-car-test3.png')}}" class="img-responsive">
                                                        </li>
                                                        <li data-thumb-id="2" class="thumb">
                                                            <img src="{{asset('public/images/membersarea/display-car-test4.png')}}" class="img-responsive">
                                                        </li>
                                                        <li data-thumb-id="3" class="thumb active">
                                                            <img src="{{asset('public/images/membersarea/display-car-test5.png')}}" class="img-responsive">
                                                        </li>
                                                        <li data-thumb-id="4" class="thumb">
                                                            <img src="{{asset('public/images/membersarea/display-car-test6.png')}}" class="img-responsive">
                                                        </li>
                                                        <li data-thumb-id="5" class="thumb">
                                                            <img src="{{asset('public/images/membersarea/display-car-test7.png')}}" class="img-responsive">
                                                        </li> -->
                                                    </ul>

                                                    <div id="next-btn" class="next">
                                                        <img src="{{asset('public/images/membersarea/icon-arrow-right-display.png')}}" alt=""/>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <div class="find-car-desc-main">
                                            <div class="row no-padding no-margin">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                                    <div class="find-car-title">
                                                        <p id="vehicleTitles"></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                                    <div class="find-car-price">
                                                        <p id='price'></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                                    <div class="find-car-desc">
                                                        <div class="row no-padding no-margin">
                                                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 no-padding">
                                                                <div class="find-car-desc-label">
                                                                    <p>Registration</p>
                                                                    <p>Engine</p>
                                                                    <!-- <p>Colour</p> -->
                                                                    <p>Doors</p>
                                                                    <p>Transmission</p>
                                                                    <p>Mileage</p>
                                                                    <!-- <p>Year</p> -->
                                                                    <!-- <p>Body Type</p> -->
                                                                    <p>Fuel Type</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-1 no-padding">
                                                                <div class="find-car-desc-label">
                                                                    <p>:</p>
                                                                    <p>:</p>
                                                                    <!-- <p>:</p> -->
                                                                    <p>:</p>
                                                                    <p>:</p>
                                                                    <p>:</p>
                                                                    <!-- <p>:</p> -->
                                                                    <!-- <p>:</p> -->
                                                                    <p>:</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding">
                                                                <div class="find-car-desc-data">
                                                                    <p id='registration'></p>
                                                                    <p id='leters'></p>
                                                                    <p id='colorTable'></p>
                                                                    <p id='doors'></p>
                                                                    <p id='transmissionTable'></p>
                                                                    <p id='mileageTable'></p>
                                                                    <!-- <p id='yearTable'></p> -->
                                                                    <!-- <p id='bodyStyleTable'></p> -->
                                                                    <p id='fuelTable'></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 no-padding">
                                        <div class="wishlist-section-main">
                                            <div class="wishlist-inner">
                                                <div class="wishlist-content">
                                                    <div class="btn-wishlist-main text-center">
                                                        <a onclick="addToWishlist()" href="javascript:void(0)" class="btn-wishlist">Wishlist</a>
                                                    </div>
                                                    <!-- <div class="btn-wishlist-main text-center">
                                                        <a href="javascript:void(0)" id="getServiceHistory" class="btn-service">Service History</a>
                                                    </div>
                                                    <div class="btn-wishlist-main text-center">
                                                        <a href="javascript:void(0)" id="capSpecification" class="btn-specification">Cap Specification</a>
                                                    </div> -->
                                                    <div class="btn-call-me-about text-center">
                                                        <a href="#">Call me about this car</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-padding no-margin">
                        <div class="col-xs-12 no-padding">
                            <div class="need-car-section">
                                <p class="text-center"> Need a hand? Call us: <span>01202 286500</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row no-padding no-margin">
                      <div class="col-sm-12 table-responsive collapse" id="serviceHisory">

                      </div>
                    </div>
                </div>
            </div>
            <div class="float"></div>
            <!--Find Car Detail-1 Ends-->

            <!--Key features Section Starts-->
            <div class="col-lg-10 col-md-11 col-sm-12 col-xs-12 no-padding">
                <div class="key-feature-section">
                    <div class="row no-padding no-margin">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                            <div class="key-feature-title">
                                <h3 class="text-center">Key Features</h3>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                            <div class="key-feature-inner">
                                <div class="row no-padding no-margin d-flex-center">

                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding">
                                        <div class="key-feature-box">
                                            <div class="key-feature-box-img">
                                                <img src="{{asset('public/images/membersarea/icon-keyfeature-1.png')}}" class="img-responsive" alt=""/>
                                            </div>
                                            <div class="key-feature-box-title"><p class="text-center" id='registrationFeatures'></p></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding">
                                        <div class="key-feature-box">
                                            <div class="key-feature-box-img">
                                                <img src="{{asset('public/images/membersarea/icon-keyfeature-2.png')}}" class="img-responsive" alt=""/>
                                            </div>
                                            <div class="key-feature-box-title"><p class="text-center" id='transmission'></p></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding">
                                        <div class="key-feature-box">
                                            <div class="key-feature-box-img">
                                                <img src="{{asset('public/images/membersarea/icon-keyfeature-4.png')}}" class="img-responsive" alt=""/>
                                            </div>
                                            <div class="key-feature-box-title"><p class="text-center" id='mileageFeat'></p></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding">
                                        <div class="key-feature-box">
                                            <div class="key-feature-box-img">
                                                <img src="{{asset('public/images/membersarea/icon-keyfeature-5.png')}}" class="img-responsive" alt=""/>
                                            </div>
                                            <div class="key-feature-box-title"><p class="text-center" id='engine'></p></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding">
                                        <div class="key-feature-box">
                                            <div class="key-feature-box-img">
                                                <img src="{{asset('public/images/membersarea/icon-keyfeature-6.png')}}" class="img-responsive" alt=""/>
                                            </div>
                                            <div class="key-feature-box-title"><p class="text-center" id='fuel'></p></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Key features Section Ends-->

            <!--Keyfeature HR Starts-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="hr-keyfeature">
                    <hr class="hr-gray">
                </div>
            </div>
            <!--Keyfeature HR Ends-->

            <!--Keyfeature Summary Section Starts-->
            <!-- <div class="col-lg-19 col-md-10 col-sm-12 col-xs-12 no-padding"> -->
                <!-- <div class="keyfeature-summary-section">
                    <div class="keyfeature-summary-title">
                        <h3 class="text-center">Summary</h3>
                    </div>
                    <div class="keyfeature-summary-desc">
                        <p class="text-center">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                    </div>
                </div> -->
            </div>
            <!--Keyfeature Summary Section Ends-->
            <div class="container">
              <div class='row'>
                <div class="col-sm-12 summary">
                   <h2 class="featuresHeading">More Features</h3>
                   <div class='row' id="carFeatures">
                   </div>
               </div>
              </div>
           </div>
        </div>
    </div>
</div>

</div>

  <input type="hidden" id="leadId" value="<?php if(isset($_SESSION['leadID'])){echo $_SESSION['leadID'];} ?>">
  <input type="hidden" id="vehicleId" value="{{$CarId}}">
  <div id="modalCall" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-sm">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div class="callbackImgDiv">
            <img src="{{asset('public/images/callcentergrey.svg')}}" alt="callBac Img">
            <h4 class="modal-title">Book a call with your advisor</h4>
          </div>
        </div>
        <div class="modal-body">
          <p class="callMeText">Let us know when you’re free for a call and we can talk through things further.</p>
          <p class="callMeText">Would you like to:</p>
            <div class="col-sm-12">
              <button class="btn callMeButton" type="button" name="button">Speak to your adviser now</button>
            </div>
            <div class="col-sm-12">
              <button class="btn callMeButton" type="button" name="button">Schedule Call for Tomorrow</button>
            </div>
        </div>
      </div>

    </div>
  </div>
 <input type="hidden" id="makeModel" value=''>
<input type="hidden" id="dealerName" value=''>
<input type="hidden" id="dealerPhone" value=''>
<input type="hidden" id="registerationInfo" value=''>
<input type="hidden" id="vehicleDistance" value=''>
<input type="hidden" id="vehicleFuel" value=''>
<!-- <input type="hidden" id="vehicleImage" value=''> -->
<img src='' id='vehicleImage' style="width:0px;height:0px;"/>
<input type="hidden" id="vehicleMileage" value=''>
<input type="hidden" id="vehicleTransmission" value=''>
<input type="hidden" id="doorsWishlist" value=''>
<input type="hidden" id="RegistrationYear" value=''>
<script type="text/javascript">

function callMeBack(){
  var memID = $('#leadId').val();
  if(memID==''){
    swal({
      title: "Unauthorized",
      text: "Please login to your account!",
      icon: "error",
      button: true,
      dangerMode: true,
    })
    .then((willDelete) => {
        window.location.href='signIn.php';
    });
  }
  else{
    $('#modalCall').modal('show');
  }
}

function addToWishlist(){
    var VID = $('#vehicleId').val();
    var makeModel = $('#breadTitle').html();
    var vehicleTitle = $('#vehicleTitles').html();
    var vehicleTransmission = $('#transmissionTable').html();
    var price = $('#price').html();
    var doors = $('#doors').html();
    if(doors){
      doors = doors.replace('doors','');
    }else{
      doors = "NA";
    }
    var vehicleTransmission = $('#transmission').html();
    var vehicleMileage = $('#mileageTable').html();
    if(vehicleMileage){
      vehicleMileage = vehicleMileage.replace('Miles','');
    }else{
      vehicleMileage = "NA";
    }
    var vehicleDistance = $('#vehicleDistance').val();
    var registerationInfo = $('#registration').html();
    var vehicleFuel = $('#fuelTable').html();
    var vehicleImage = $('#vehicleImage').attr('src');
    var dealerName = $('#dealerName').val();
    var dealerPhone = $('#dealerPhone').val();
    var LID = "{{ Auth::user()->id }}";
    var wishlist = "{{ route('addToWishList') }}";

    var data = {
        vehicleId:VID,
        makeModel:makeModel,
        vehicleTitle:vehicleTitle,
        price:price,
        doors:doors,
        color:"NA",
        vehicleTransmission:vehicleTransmission,
        vehicleMileage:vehicleMileage,
        vehicleDistance:vehicleDistance,
        vehicleImage:vehicleImage,
        dealerName:dealerName,
        dealerPhone:dealerPhone,
        leadId:LID,
        vehicleFuel:vehicleFuel,
        registerationInfo:registerationInfo
        }
      $.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        type: "POST",
        data:data,
        url:wishlist,
        dataType: "json",
        success: function(response) {
          // console.log(response)
          if(response==0){
            swal({
                title: "Success",
                text: "Car added to your wishlist!",
                icon: "success",
                button: true,
                dangerMode: false,
              });
          }
          else{
            swal({
                title: "Failed",
                text: "Failed to add car in your wishlist!",
                icon: "error",
                button: true,
                dangerMode: true,
              });
          }
        }
      });
  }
</script>
<script type="text/javascript" src="{{asset('public/js/gallery.js')}}"></script>
<script src="{{ asset('public/js/displayCarData.js')}}"></script>
@endsection
