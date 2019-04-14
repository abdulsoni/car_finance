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

                                <div class="row no-padding no-margin d-flex-center">
                                    <div class="btn-memberarea-slider1-outer">
                                        <a href="{{ url('find-cars') }}" class="btn-memberarea-slider1">Search for a car</a>
                                    </div>

                                    <div class="btn-memberarea-slider2-outer">
                                        <a href="{{ url('new-offers') }}" class="btn-memberarea-slider3">Nearly New Offers</a>
                                    </div>

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


<!--Find Car Main Starts-->
<div class="find-car-main">
    <div class="container no-padding">
        <div class="row d-flex-center no-padding">
            <!--Left Section Starts-->
            <div class="col-lg-3 col-md-3 col-sm-11 col-xs-10 no-padding">
                <div class="find-car-left-outer">
                <div class="find-car-left-main">
                    <form>
                        <div class="row d-flex-center no-padding">
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="find-car-left-title">
                                    <p class="text-lg-left text-md-left text-center">Refine your search</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <input type="reset" class="btn-find-car-reset" value="Reset Your Search"/>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="find-car-input-main">
                                    <div class="row no-padding">
                                        <div class="col-xs-4">
                                            <div class="label-main">
                                                <label>Postcode</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-8">
                                            <input type="text" placeholder="SW1A2AA" class="find-text-box"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="find-car-input-main">
                                    <div class="row no-padding">
                                        <div class="col-xs-4">
                                            <div class="label-main">
                                                <label>Distance</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-8">
                                            <select name="" id="" class="find-select-box">
                                                <option value="">National</option>
                                                <option value="">National</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="find-car-input-main">
                                    <div class="row no-padding">
                                        <div class="col-xs-4">
                                            <div class="label-main">
                                                <label>Price</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-8">
                                            <select name="" id="" class="find-select-box">
                                                <option value="">3k - 100k</option>
                                                <option value="">3k - 100k</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="find-car-input-main">
                                    <div class="row no-padding">
                                        <div class="col-xs-4">
                                            <div class="label-main">
                                                <label>Make</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-8">
                                            <select name="" id="" class="find-select-box">
                                                <option value="">Any</option>
                                                <option value="">Any</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="find-car-input-main">
                                    <div class="row no-padding">
                                        <div class="col-xs-4">
                                            <div class="label-main">
                                                <label>Model</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-8">
                                            <select name="" id="" class="find-select-box">
                                                <option value="">Any</option>
                                                <option value="">Any</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="find-car-input-main">
                                    <div class="row no-padding">
                                        <div class="col-xs-4">
                                            <div class="label-main">
                                                <label>Age</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-8">
                                            <select name="" id="" class="find-select-box">
                                                <option value="">Any</option>
                                                <option value="">Any</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="find-car-input-main">
                                    <div class="row no-padding">
                                        <div class="col-xs-4">
                                            <div class="label-main">
                                                <label>Mileage</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-8">
                                            <select name="" id="" class="find-select-box">
                                                <option value="">Any</option>
                                                <option value="">Any</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <input type="submit" class="btn-find-car-submit" value="Search Results"/>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
            <!--Left Section Ends-->


            <!--Right Section Starts-->
            <div class="col-lg-9 col-md-9 col-sm-11 col-xs-10 no-padding">
                <div class="right-section-main">
                <div class="row no-padding">
                    <div class="col-xs-12 no-padding">

                            <div class="total-results-section">
                                <h2><span><strong>(2,254)</strong></span> Results <span class="span-2">Found</span></h2>
                            </div>

                    </div>


                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                        <div class="right-section-top">
                            <div class="row no-padding">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 no-padding">
                                    <div class="total-result-top">
                                        <p><span><strong>7,894</strong></span> Cars Found</p>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 no-padding">
                                    <div class="row no-padding d-flex-center">
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-10">
                                            <div class="select-box-res">
                                                <select name="" id="">
                                                    <option value="">10 Results</option>
                                                    <option value="">20 Results</option></select>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-10">
                                            <div class="select-box-price">
                                                <select name="" id="">
                                                    <option value="">Price (Low to high)</option>
                                                    <option value="">Price (High to low)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Find Car Detail-1 Starts-->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                        <div class="find-car-detail">
                            <div class="find-car-detail-inner">
                                <div class="row no-padding no-margin">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                        <div class="row no-padding no-margin">
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 no-padding">
                                                <div class="find-car-image">
                                                    <img src="{{asset('public/images/membersarea/find-car-image.jpg')}}" class="img-responsive" alt=""/>
                                                </div>
                                            </div>

                                            <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 no-padding">
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

                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding">
                                                <div class="wishlist-section-main">
                                                    <div class="wishlist-inner">
                                                        <div class="wishlist-content">
                                                            <p class="text-center">0.22 Miles away<br>
                                                                from BH65JB</p>
                                                            <div class="btn-wishlist-main text-center">
                                                                <a href="#" class="btn-wishlist">Wishlist</a>
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

                    <!--Find Car Detail-2 Starts-->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                        <div class="find-car-detail">
                            <div class="find-car-detail-inner">
                                <div class="row no-padding no-margin">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                        <div class="row no-padding no-margin">
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 no-padding">
                                                <div class="find-car-image">
                                                    <img src="{{asset('public/images/membersarea/find-car-image.jpg')}}" class="img-responsive" alt=""/>
                                                </div>
                                            </div>

                                            <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 no-padding">
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

                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding">
                                                <div class="wishlist-section-main">
                                                    <div class="wishlist-inner">
                                                        <div class="wishlist-content">
                                                            <p class="text-center">0.22 Miles away<br>
                                                                from BH65JB</p>
                                                            <div class="btn-wishlist-main text-center">
                                                                <a href="#" class="btn-wishlist">Wishlist</a>
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
                    <!--Find Car Detail-2 Ends-->

                    <!--Find Car Detail-3 Starts-->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                        <div class="find-car-detail">
                            <div class="find-car-detail-inner">
                                <div class="row no-padding no-margin">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                        <div class="row no-padding no-margin">
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 no-padding">
                                                <div class="find-car-image">
                                                    <img src="{{asset('public/images/membersarea/find-car-image.jpg')}}" class="img-responsive" alt=""/>
                                                </div>
                                            </div>

                                            <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 no-padding">
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

                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding">
                                                <div class="wishlist-section-main">
                                                    <div class="wishlist-inner">
                                                        <div class="wishlist-content">
                                                            <p class="text-center">0.22 Miles away<br>
                                                                from BH65JB</p>
                                                            <div class="btn-wishlist-main text-center">
                                                                <a href="#" class="btn-wishlist">Wishlist</a>
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
                    <!--Find Car Detail-3 Ends-->

                    <!--Find Car Detail-4 Starts-->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                        <div class="find-car-detail">
                            <div class="find-car-detail-inner">
                                <div class="row no-padding no-margin">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                        <div class="row no-padding no-margin">
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 no-padding">
                                                <div class="find-car-image">
                                                    <img src="{{asset('public/images/membersarea/find-car-image.jpg')}}" class="img-responsive" alt=""/>
                                                </div>
                                            </div>

                                            <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 no-padding">
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

                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding">
                                                <div class="wishlist-section-main">
                                                    <div class="wishlist-inner">
                                                        <div class="wishlist-content">
                                                            <p class="text-center">0.22 Miles away<br>
                                                                from BH65JB</p>
                                                            <div class="btn-wishlist-main text-center">
                                                                <a href="#" class="btn-wishlist">Wishlist</a>
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

                    <!--Find Car Detail-5 Starts-->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                        <div class="find-car-detail">
                            <div class="find-car-detail-inner">
                                <div class="row no-padding no-margin">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                        <div class="row no-padding no-margin">
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 no-padding">
                                                <div class="find-car-image">
                                                    <img src="{{asset('public/images/membersarea/find-car-image.jpg')}}" class="img-responsive" alt=""/>
                                                </div>
                                            </div>

                                            <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 no-padding">
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

                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding">
                                                <div class="wishlist-section-main">
                                                    <div class="wishlist-inner">
                                                        <div class="wishlist-content">
                                                            <p class="text-center">0.22 Miles away<br>
                                                                from BH65JB</p>
                                                            <div class="btn-wishlist-main text-center">
                                                                <a href="#" class="btn-wishlist">Wishlist</a>
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
                    <!--Find Car Detail-5 Ends-->


                    <!--Find Car Detail-6 Starts-->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                        <div class="find-car-detail">
                            <div class="find-car-detail-inner">
                                <div class="row no-padding no-margin">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                        <div class="row no-padding no-margin">
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 no-padding">
                                                <div class="find-car-image">
                                                    <img src="{{asset('public/images/membersarea/find-car-image.jpg')}}" class="img-responsive" alt=""/>
                                                </div>
                                            </div>

                                            <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 no-padding">
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

                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding">
                                                <div class="wishlist-section-main">
                                                    <div class="wishlist-inner">
                                                        <div class="wishlist-content">
                                                            <p class="text-center">0.22 Miles away<br>
                                                                from BH65JB</p>
                                                            <div class="btn-wishlist-main text-center">
                                                                <a href="#" class="btn-wishlist">Wishlist</a>
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
                    <!--Find Car Detail-6 Ends-->


                    <!--Pagination Section Starts-->
                    <div class="pagination-section">
                        <div class="row no-padding no-margin">
                            <div class="col-lg-12 no-padding">
                                <div class="pagination-inner-section">
                                    <ul class="pagination ul-pagination">
                                        <li class="page-item pagination-prev"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item pagination-next"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                    <div class="float"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Pagination Section Ends-->



                </div>
                </div>
            </div>
            <!--Right Section Ends-->
        </div>
    </div>
</div>
<!--Find Car Main Ends-->

@endsection
