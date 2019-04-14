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
                                <p class="text-center"><span>Hi Iain</span><br>
                                    You’ve been pre-approved with one<br>
                                    of our certified lenders.</p>
                            </div>

                            <div class="memberarea-slider-btn-outer text-center">

                                <div class="row no-padding no-margin">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 btn-memberarea-slider1-outer">
                                        <a href="{{ url('find-cars') }}" class="btn-memberarea-slider1">Search for a car</a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 btn-memberarea-slider2-outer">
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
                                                <div class="form-group car-found-group">
                                                    <label class="car-found-label" for="vehicle_registration">Vehicle Registration<span class="car-found-star">*</span></label>
                                                    <input type="text" class="form-control car-found-textbox" name="vehicle_registration" id="vehicle_registration">
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
                                                    <input type="text" name="mileage" class="form-control car-found-textbox" id="mileage">
                                                </div>
                                                <div class="form-group car-found-group">
                                                    <label class="car-found-label" for="reference">Name or website of dealership<span class="car-found-star">*</span></label>
                                                    <input type="text" name="reference" class="form-control car-found-textbox" id="reference">
                                                </div>
                                                <div class="form-group">
                                                    <label>&nbsp;</label>
                                                    <button type="button" class="btn btn-info btn-lg btn-add-car">Add Car</button>
                                                </div>
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
                <a href="{{url('home')}}">Home</a>
            </div>
            <div class="col-sm-2 col-xs-3 currentPage">
                <a href="{{url('find-car')}}">Find a Car</a>
            </div>
        </div>
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
                                                <div id="img-1" data-img-id="1" class="img-wrapper active">
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
                                                </div>

                                                <!-- Below are the thumbnails of above images -->
                                                <div class="thumbs-container bottom">
                                                    <div id="prev-btn" class="prev">
                                                        <img src="{{asset('public/images/membersarea/icon-arrow-left-display.png')}}" alt=""/>
                                                    </div>

                                                    <ul class="thumbs">
                                                        <li data-thumb-id="1" class="thumb active">
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
                                                        </li>
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
                                                        <p>Ford Fiesta S Sedan</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                                    <div class="find-car-price">
                                                        <p>Price £3,000</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                                    <div class="find-car-desc">
                                                        <div class="row no-padding no-margin">
                                                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 no-padding">
                                                                <div class="find-car-desc-label">
                                                                    <p>Registration</p>
                                                                    <p>Engine</p>
                                                                    <p>Colour</p>
                                                                    <p>Doors</p>
                                                                    <p>Transmission</p>
                                                                    <p>Mileage</p>
                                                                    <p>Year</p>
                                                                    <p>Body Type</p>
                                                                    <p>Fuel Type</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-1 no-padding">
                                                                <div class="find-car-desc-label">
                                                                    <p>:</p>
                                                                    <p>:</p>
                                                                    <p>:</p>
                                                                    <p>:</p>
                                                                    <p>:</p>
                                                                    <p>:</p>
                                                                    <p>:</p>
                                                                    <p>:</p>
                                                                    <p>:</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding">
                                                                <div class="find-car-desc-data">
                                                                    <p>MK61SSO</p>
                                                                    <p>99945</p>
                                                                    <p>Metallic Red</p>
                                                                    <p>3</p>
                                                                    <p>Manual</p>
                                                                    <p>70000</p>
                                                                    <p>2012</p>
                                                                    <p>Hatchback</p>
                                                                    <p>Petrol</p>
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
                                                    <p class="text-center">0.22 Miles away<br>
                                                        from BH65JB</p>
                                                    <div class="btn-wishlist-main text-center">
                                                        <a href="#" class="btn-wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="btn-service-history-main text-center">
                                                        <a href="#" class="btn-service-history">Service History</a>
                                                    </div>
                                                    <div class="btn-cap-specification-main text-center">
                                                        <a href="#" class="btn-cap-specification">Cap Specification</a>
                                                    </div>
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
                                            <div class="key-feature-box-title"><p class="text-center">2015 (15 reg)</p></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding">
                                        <div class="key-feature-box">
                                            <div class="key-feature-box-img">
                                                <img src="{{asset('public/images/membersarea/icon-keyfeature-2.png')}}" class="img-responsive" alt=""/>
                                            </div>
                                            <div class="key-feature-box-title"><p class="text-center">Manual</p></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding">
                                        <div class="key-feature-box">
                                            <div class="key-feature-box-img">
                                                <img src="{{asset('public/images/membersarea/icon-keyfeature-3.png')}}" class="img-responsive" alt=""/>
                                            </div>
                                            <div class="key-feature-box-title"><p class="text-center">Convertable</p></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding">
                                        <div class="key-feature-box">
                                            <div class="key-feature-box-img">
                                                <img src="{{asset('public/images/membersarea/icon-keyfeature-4.png')}}" class="img-responsive" alt=""/>
                                            </div>
                                            <div class="key-feature-box-title"><p class="text-center">28,000 Miles</p></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding">
                                        <div class="key-feature-box">
                                            <div class="key-feature-box-img">
                                                <img src="{{asset('public/images/membersarea/icon-keyfeature-5.png')}}" class="img-responsive" alt=""/>
                                            </div>
                                            <div class="key-feature-box-title"><p class="text-center">1.6L</p></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding">
                                        <div class="key-feature-box">
                                            <div class="key-feature-box-img">
                                                <img src="{{asset('public/images/membersarea/icon-keyfeature-6.png')}}" class="img-responsive" alt=""/>
                                            </div>
                                            <div class="key-feature-box-title"><p class="text-center">Petrol</p></div>
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
            <div class="col-lg-19 col-md-10 col-sm-12 col-xs-12 no-padding">
                <div class="keyfeature-summary-section">
                    <div class="keyfeature-summary-title">
                        <h3 class="text-center">Summary</h3>
                    </div>
                    <div class="keyfeature-summary-desc">
                        <p class="text-center">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                    </div>
                </div>
            </div>
            <!--Keyfeature Summary Section Ends-->

        </div>
    </div>
</div>


<script type="text/javascript" src="{{asset('public/js/gallery.js')}}"></script>


<!--<script src="https://cdn.jsdelivr.net/npm/jquery.redirect@1.1.4/jquery.redirect.min.js"></script>
<script type="text/javascript">


function clickToGetCar(id){
 // $.redirect('displayPage.php', {'carID': id }, "GET");
 var url = '{{ url("display-cars", "id") }}';
 url = url.replace('id', id);
 window.location.href=url;

}
    // $("#toggleFilters").click(function(){
    //   console.log("clicked");
    //     $("#moreFilters").slideToggle();
    // });

        $('input:checkbox[name="bio"]').change(
            function(){
                if ($(this).is(':checked') && $(this).val() != '') {
                  $('#bio'). attr("checked", "checked");
                }
            });
        $('input:checkbox[name="electric"]').change(
            function(){
                if ($(this).is(':checked') && $(this).val() != '') {
                  $('#electric'). attr("checked", "checked");
                }
            });
        $('input:checkbox[name="petrol"]').change(
            function(){
                if ($(this).is(':checked') && $(this).val() != '') {
                  $('#petrol'). attr("checked", "checked");
                }
            });
        $('input:checkbox[name="diesel"]').change(
            function(){
                if ($(this).is(':checked') && $(this).val() != '') {
                  $('#diesel'). attr("checked", "checked");
                }
            });
        $('input:checkbox[name="lpg"]').change(
            function(){
                if ($(this).is(':checked') && $(this).val() != '') {
                  $('#lpg'). attr("checked", "checked");
                }
            });


				function addToWishlist(n){
                var VID = $('#vehicleId'+n).val();
                var makeModel = $('#makeModel'+n).html();
                var vehicleTitle = $('#vehicleTitle'+n).html();
                var price = $('#price'+n).html();
                // var vehicleTransmission = $('#vehicleTransmission'+n).html();
                var vehicleMileage = $('#vehicleMileage'+n).html();
                var vehicleDistance = $('#vehicleDistance'+n).html();
                var registerationInfo = $('#registerationInfo'+n).html();
                var vehicleFuel = $('#vehicleFuel'+n).html();
                var vehicleImage = $('#vehicleImage'+n).val();
                var dealerName = $('#dealerName'+n).val();
                // var dealerPhone = $('#dealerPhone'+n).val();
                var LID = "{{ Auth::user()->id }}";
                var wishlist = "{{ route('addToWishList') }}";

                var data = {
                  vehicleId:VID,
                  makeModel:makeModel,
                  vehicleTitle:vehicleTitle,
                  price:price,
                  // vehicleTransmission:vehicleTransmission,
                  vehicleMileage:vehicleMileage,
                  vehicleDistance:vehicleDistance,
                  vehicleImage:vehicleImage,
                  dealerName:dealerName,
                  // dealerPhone:dealerPhone,
                  registerationInfo:registerationInfo,
                  vehicleFuel:vehicleFuel,
                  leadId:LID
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
function resetForm(){
  $('#findCarForm').reset();
}
$('#postcode').keyup(function() {
  $(this).val($(this).val().replace(/ +?/g, ''));
});


</script>
<script type="text/javascript" src="{{asset('public/js/modelsData.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/sorting.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/searchCar.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/loadCars.js')}}"></script>-->
@endsection
