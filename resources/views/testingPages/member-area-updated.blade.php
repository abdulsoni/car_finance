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



<!--Header Starts-->

<header class="member-area-updated-header">
    <div class="header-top-menu-member">

        <div class="col-sm-2 logo-style ">

        </div>

        <div class="desktopShow col-sm-2" style="border-right:none">

        </div>


        <div class="desktopShow col-sm-1" style="border-right:none">


        </div>

        <div class="desktopShow col-sm-1" style="border-right:none ">

            <!-- <img class="imgMiddle" src="images/vehicle/trust.png"> -->
        </div>

        <div class="desktopShow col-sm-2" style=" padding-top: 10px;">

            <!--center>
              <div class="secureIcon">
                 <img src="images/landing/lockPng.png" alt="">
                   <div class="">
                     <h3>SECURE</h3>

                     <p>SSL ENCRYPTION</p>



                   </div>



              </div>



            </center-->



        </div>



        <div class="col-md-4" style="border:none;text-align: center ">

            <div class="mobileStyle pull-right ">

              <span class="phone-number">

                <a class="member-nav" href="{{url('login')}}" style="color: #b1b1b1;"> <i class="fa fa-user navbar-fa"></i> Members's Area</a>

               <a class="member-phone" style="color: white;font-family: Roboto SlabBold, sans-serif !important; font-size: 16px;font-weight: 700;" href="tel:01202 286500">  <i class="fa fa-phone"></i>  01202 286500</a>

              </span>



            </div>

        </div>

    </div>



    </div>

    </div>








    <!--Navbar Starts-->
    <nav class="navbar-inverse bg-top-bar hidden-xs">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" onclick="window.location.href='{{url('apply-now')}}'">APPLY NOW</button></li>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" href="javascript:void(0)">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <div class="col-xs-4 col-md-4">
                <a class="navbar-brand" href="{{url('/')}}"> <img class="indexLogo" src="{{asset('public/images/landing/quick_car_logo.png')}}" alt=""></a>
            </div>
            <div class="col-xs-8 col-md-8">
                <ul class="nav navbar-nav pull-right navsukh">
                    <li><button class="btn-primary btn-lg pull-right apply-btn" onclick="window.location.href='#'">LOGOUT </button></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Start Mobile Menu-->
    <div id="mob-nav-wrapper" class="hidden-lg hidden-xl mob-nav-wrapper">
        <div class="mmenu-banner">
            <a href="/">
                <img style="margin-left:20px;margin-top:20px;width:132px;" src="{{asset('public/images/landing/quick_car_logo.png')}}">
            </a>
            <div class="apply-container">
                <a href="#" class="btn btn-primary btn-sm call-to-action-btn apply-btn-mobile apply-btn2" >LOGOUT</a>
            </div>
        </div>
        <input type="checkbox" id="mmenu" name="mmenu" class="mmenu-checkbox">
        <div class="mmenu-container">
            <div class="clear-fix"></div>
            <input id="toggle" type="checkbox">
            <label class="mmenu-toggle cheesburger" for="mmenu"></label>
            <label class="cheesburger" for="mmenu">
                <div class="top-bun"></div>
                <div class="meat"></div>
                <div class="bottom-bun"></div>
            </label>
        </div>
        <div class="mmenu mm">
            <label class="mmenu-toggle" style="height:1px;width:1px;background:none;"  for="mmenu"><span>Toggle</span></label>
            <ul class="mobile-mmenu">

                <li>
                    <a class="member-nav" href="{{url('login')}}"> <i class="fa fa-user navbar-fa"></i> Members's Area</a>
                </li>
                <li>
                   <a  href="tel:01202 286500"> <i class="fa fa-phone"></i>  01202 286500</a>
                </li>

                <li class="li-mobile-cta-phone">
                    <!--<div class="mobile-cta-phone">
                        <a href="tel:01202 286500" class="btn call-to-action-btn menu-btn-mobile" style="text-align: center;border: none;background-image: none;margin-left: 0px;/*margin-right: 10px;*/background-color: #203757;color: #fff;padding-top: 6px;"><img src="" style="margin-right:10px;margin-top:-2px;"> 01202 286500</a>
                    </div>-->
                    <!--<div class="mobile-cta-apply">
                        <a href="#" class="btn call-to-action-btn menu-btn-mobile" style="text-align: center;border: none;background-image: none;margin-left: 0px;background-color: #db0a5b;color: #fff;padding-top: 6px;">LOGOUT</a>
                    </div>-->
                </li>


            </ul>
        </div>
    </div>
    <!--Ends Mobile Menu-->
    <!--Navbar Ends-->
</header>
<!--Header Ends-->





<!--member-area-updated-->
<div class="memberarea-new-main">
    <div class="container-fluid no-padding">

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

                                        <div class="row no-padding mb-btn no-margin d-flex-center">
                                            <div class="btn-memberarea-slider1-outer">
                                                <a href="{{ url('find-cars') }}" class="btn-memberarea-slider1">Search for a car</a>
                                            </div>

                                            <div class="btn-memberarea-slider2-outer">
                                                <a href="#" class="btn-memberarea-slider3">Nearly New Offers</a>
                                            </div>

                                            <div class="btn-memberarea-slider2-outer">
                                                <a href="#" data-toggle="modal" data-target="#myModal" class="btn-memberarea-slider2">I've found a car</a>
                                            </div>

                                            <div class="float"></div>
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
        <div class="memberarea-car-main-section">
            <div class="container">
                <div class="row no-padding">
                    <div class="col-lg-12">

                        <div class="memberarea-car-main-inner">
                            <div class="row">


                                <!--Find Car Detail-1 Starts-->
                                <div class="col-lg-6 col-md-6 col-sm-12 no-margin">
                                    <div class="find-car-detail">
                                        <div class="find-car-detail-inner">
                                            <div class="row no-padding no-margin">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                                    <div class="row no-padding no-margin">
                                                        <div class="col-lg-5 col-md-5 col-sm-4 no-padding">
                                                            <div class="find-car-image">
                                                                <img src="{{asset('public/images/membersarea/find-car-image.jpg')}}" class="img-responsive" alt=""/>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-7 col-md-7 col-sm-8 no-padding">
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
                                                                                        <p>MK61SSO</p>
                                                                                        <p>Metallic Red</p>
                                                                                        <p>3</p>
                                                                                        <p>Manual</p>
                                                                                        <p>70000</p>
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
                                <!--Find Car Detail-1 Ends-->

                                <!--Find Car Detail-2 Starts-->
                                <div class="col-lg-6 col-md-6 col-sm-12 no-margin">
                                    <div class="find-car-detail">
                                        <div class="find-car-detail-inner">
                                            <div class="row no-padding no-margin">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                                    <div class="row no-padding no-margin">
                                                        <div class="col-lg-5 col-md-5 col-sm-4 no-padding">
                                                            <div class="find-car-image">
                                                                <img src="{{asset('public/images/membersarea/find-car-image.jpg')}}" class="img-responsive" alt=""/>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-7 col-md-7 col-sm-8 no-padding">
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
                                                                                        <p>MK61SSO</p>
                                                                                        <p>Metallic Red</p>
                                                                                        <p>3</p>
                                                                                        <p>Manual</p>
                                                                                        <p>70000</p>
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
                                <!--Find Car Detail-2 Ends-->

                                <!--Find Car Detail-3 Starts-->
                                <div class="col-lg-6 col-md-6 col-sm-12 no-margin">
                                    <div class="find-car-detail">
                                        <div class="find-car-detail-inner">
                                            <div class="row no-padding no-margin">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                                    <div class="row no-padding no-margin">
                                                        <div class="col-lg-5 col-md-5 col-sm-4 no-padding">
                                                            <div class="find-car-image">
                                                                <img src="{{asset('public/images/membersarea/find-car-image.jpg')}}" class="img-responsive" alt=""/>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-7 col-md-7 col-sm-8 no-padding">
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
                                                                                        <p>MK61SSO</p>
                                                                                        <p>Metallic Red</p>
                                                                                        <p>3</p>
                                                                                        <p>Manual</p>
                                                                                        <p>70000</p>
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
                                <!--Find Car Detail-3 Ends-->

                                <!--Find Car Detail-4 Starts-->
                                <div class="col-lg-6 col-md-6 col-sm-12 no-margin">
                                    <div class="find-car-detail">
                                        <div class="find-car-detail-inner">
                                            <div class="row no-padding no-margin">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                                    <div class="row no-padding no-margin">
                                                        <div class="col-lg-5 col-md-5 col-sm-4 no-padding">
                                                            <div class="find-car-image">
                                                                <img src="{{asset('public/images/membersarea/find-car-image.jpg')}}" class="img-responsive" alt=""/>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-7 col-md-7 col-sm-8 no-padding">
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
                                                                                        <p>MK61SSO</p>
                                                                                        <p>Metallic Red</p>
                                                                                        <p>3</p>
                                                                                        <p>Manual</p>
                                                                                        <p>70000</p>
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
                                <div class="float"></div>
                                <!--Find Car Detail-4 Ends-->


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--Memberarea Car Main Section Ends-->





    </div>
</div>




@endsection