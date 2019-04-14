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
<!--member-area-updated-->
<div class="memberarea-new-main">
    <div class="container-fluid no-padding">
    <!-- Landbot Code -->
    <script src="https://static.landbot.io/landbot-widget/landbot-widget-1.0.0.js"></script>
    <div id="landbot-1551376712052" style="width: 100%; height: 700px"></div>
    <script>
    var myLandbotFrame = new LandbotFrameWidget({
        container: '#landbot-1551376712052',
        index: 'https://landbot.io/u/H-141523-ZU6AD0U42EYIZAWB/index.html?email={{ Auth::User()->email }}&name={{ Auth::User()->firstName }}',
    });
    </script>
    <!-- #End Landbot Code -->












        <!--Member Area Slider Starts-->
        <div class="memberarea-slider" style="display:none">
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


        <!--Memberarea Desc Section Starts-->
        <div class="memberarea-desc-section">
            <div class="container">
                <div class="row no-padding no-margin">
                    <div class="col-lg-12 no-padding no-margin">
                        <div class="row no-padding no-margin">
                            <div class="col-lg-12 no-padding no-margin">

                                <div class="memberarea-desc-inner">
                                    <p class="text-center">Not sure what you need? No worries - our team of experts is here to help<br>
                                        every step of the way.</p>
                                </div>

                                <div class="memberarea-desc-btn-outer text-center">

                                    <div class="row no-margin no-padding">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 memberarea-desc-btn1-outer">
                                            <a href="#" class="memberarea-desc-btn1">Speak to an Expert</a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 memberarea-desc-btn2-outer">
                                            <a href="#"class="memberarea-desc-btn2">01202 286500</a>
                                        </div>
                                    </div>

                                    <!--<a href="#" class="memberarea-desc-btn1">Speak to an Expert</a>
                                    <a href="#"class="memberarea-desc-btn2">01202 286500</a>-->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Memberarea Desc Section Ends-->

        <!--Memberarea Car main Section Starts-->
        <div class="memberarea-car-main-section" style="display:none">
            <div class="container">
                <div class="row no-padding">
                    <div class="col-lg-12">

                        <div class="memberarea-car-main-inner">
                            <div class="row">


                                <!--Find Car Detail-1 Starts-->
                                @foreach($Wishlist as $wishlist)
                                <div class="col-lg-6 col-md-6 col-sm-12 no-margin" id='Section{!! $wishlist->id !!}'>
                                    <div class="find-car-detail">
                                        <div class="find-car-detail-inner">
                                            <div class="row no-padding no-margin">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                                    <div class="row no-padding no-margin">
                                                        <div class="col-lg-5 col-md-5 col-sm-4 no-padding">
                                                            <div class="find-car-image">
                                                              @if($wishlist->vehicleImage!='NA')
                                                                <img src="{{$wishlist->vehicleImage}}" class="img-responsive" alt="car images"/>
                                                              @else
                                                              <img src="https://<?php echo $_SERVER['HTTP_HOST'];?>/public/images/placeholderCar.png" class="img-responsive" alt="car images"/>
                                                              @endif
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-7 col-md-7 col-sm-8 no-padding">
                                                            <div class="find-car-desc-main">
                                                                <div class="row no-padding no-margin">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                                                        <div class="find-car-title">
                                                                            @if($wishlist->vehicleTitle!='NA')
                                                                            <p style='height:40px'>{{$wishlist->makeModel}}</p>
                                                                            @else
                                                                            <p style='height:40px'>Car added manually</p>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                                                        <div class="find-car-price">
                                                                            <p>{{$wishlist->price}}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                                                        <div class="find-car-desc">
                                                                            <div class="row no-padding no-margin">
                                                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 no-padding">
                                                                                    <div class="find-car-desc-label">
                                                                                        <p>Registration</p>
                                                                                        <p>Colour</p>
                                                                                        <p>Doors</p>
                                                                                        <p>Transmission</p>
                                                                                        <p>Mileage</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xs-1 no-padding">
                                                                                    <div class="find-car-desc-label">
                                                                                        <p>:</p>
                                                                                        <p>:</p>
                                                                                        <p>:</p>
                                                                                        <p>:</p>
                                                                                        <p>:</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding">
                                                                                    <div class="find-car-desc-data">
                                                                                        <p>{{$wishlist->registerationInfo}}</p>
                                                                                        <p>{{$wishlist->color}}</p>
                                                                                        <p>{{$wishlist->doors}}</p>
                                                                                        <p>{{$wishlist->vehicleTransmission}}</p>
                                                                                        <p>{{$wishlist->vehicleMileage}}</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding text-right" style="margin-top:20px">
                                                                                  <!-- <input type="hidden" class="CID" value=""> -->
                                                                                  <div class="text-left ">
                                                                                      <a href="javascript:void(0)" onclick="RemoveCar('{!! $wishlist->id !!}')" class="saved-cars btnWishlist">Remove Car</a>
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
                                @endforeach
                                <!--Find Car Detail-1 Ends-->

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--Memberarea Car Main Section Ends-->


    </div>
</div>
<div class="modal checkingModal" id="modalPassword" role="dialog"  data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog  modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <h2>Welcome to the</h2>
                <h2 class="membersA">Members Area</h2>
                <p>Here you can find updates on your applciation and search for a car. To get started, set a memorable password so that you can login next time.12
                  <form method="post" onkeypress="return event.keyCode != 13;">
                    <div class="form-group">
                        <input id="password-field" type="password" placeholder="Password" class="form-control" name="password" value="">
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                    <button style="display:block" type="button" id="buttonLoad" onclick="setPassword()" class=" applyNowIndex">Set my password</button>
                    <i style="color:#FFF;font-size:25px;display: none;text-align:center;margin-left:100px" id="buttonLoad1" class="fa fa-refresh fa-spin"></i>
                  </form>
            </div>
        </div>
    </div>
</div>
<?php $registerFlag = Auth::user()->registerFlag; ?>;
<?php $reCreatedProfile = Auth::user()->reCreatedProfile; ?>;
<script>
$(document).ready(function() {
  var url = window.location.href;
  var flags = "<?php echo $registerFlag; ?>";
  var reCreated = "<?php echo $reCreatedProfile; ?>";
  if(flags==0)
  {
    $('#modalPassword').modal('show');
    $('.arrow_box1-dash:after').css('border-top-color: #808080;');
  }
  if(reCreated==1)
  {
    $('#modalPassword').modal('show');
  }

    $(".toggle-password").click(function() {

      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });
});
function setPassword(){
  var password = $('#password-field').val();
  var data={
    "password":password
  };
  var setPassUrl = "{{ route('setFirstPassword') }}";
  $.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      type:"POST",
      url:setPassUrl,
      data:data,
      success: function(response){
          if(response=='success'){
              $('#buttonLoad').hide();
              $('#buttonLoad1').show();
              $('.field-icon').css('top','70%');
            setTimeout(function(){
              $('#modalPassword').modal('hide');
              swal({title: 'Success', text: 'Your password has been set successfully!', type:
               'success'}).then(function(){
                 window.location.href="{{ url('dashboard') }}";
                }
              );
            },4000);
          }
      }
  });
}
/* Remove car from wishlist start */
    // $('.saved-cars').click(function(){
    function RemoveCar(id){
    // var id = $(".CID").val();
    var uri = 'delete-saved-car/'+id+'';
    $.ajax({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      type: "GET",
      url: uri,
      data: id,
      success: function(data){
         $("#Section"+id).remove();
         swal("Success", "Car deleted successfully", "success");
        }
      });
    // });
  }
/* Remove car from wishlist end */
</script>
@endsection
