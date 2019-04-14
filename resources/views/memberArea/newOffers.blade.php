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
              <div class="col-sm-2 col-xs-3 currentPage">
                <a href="{{url('new-offers')}}">New Offers</a>
              </div>
            </div>
          </div>
        </div>
        <div class="find-car-loading-main" id="fetchingData">
          <div class="loading-cars-image">
            <img src="{{ asset('public/images/car-loading.gif') }}"/>
            <h2 class="loading-car-gif">Loading cars...</h2>
          </div>
        </div>
        <!--Find car Start-->
        <div class="find-car-main" id="mainCarSection">
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
                                    <!-- <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
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
                                    </div> -->

                                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                        <div class="find-car-input-main">
                                            <div class="row no-padding">
                                                <div class="col-xs-5">
                                                    <div class="label-main">
                                                        <label>Transmission</label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-7">
                                                    <select name="transmission"  class="find-select-box">
                                                      <option value=""> All</option>
                                                      <option value="AUTOMATIC">Automatic</option>
                                                      <option value="MANUAL">Manual</option>
                                                      <option value="SEMI-AUTOMATIC">Semi-Automatic</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                        <div class="find-car-input-main">
                                            <div class="row no-padding">
                                                <div class="col-xs-5">
                                                    <div class="label-main">
                                                        <label>Make</label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-7">
                                                    <select name="makes" id="btnMake1" class="find-select-box">
                                                        <option value="">Any</option>
                                                        <option value="Abarth">Abarth</option><option value="AC">AC</option>
                                                        <option value="Alfa Romeo">Alfa Romeo</option>
                                                        <option value="Ariel">Ariel</option>
                                                        <option value="Aston Martin">Aston Martin</option>
                                                        <option value="Audi">Audi</option>
                                                        <option value="Austin">Austin</option>
                                                        <option value="BAC">BAC</option>
                                                        <option value="Bentley">Bentley</option>
                                                        <option value="BMW">BMW</option>
                                                        <option value="Bugatti">Bugatti</option>
                                                        <option value="Buick">Buick</option>
                                                        <option value="Cadillac">Cadillac</option>
                                                        <option value="Caterham">Caterham</option>
                                                        <option value="Chevrolet">Chevrolet</option>
                                                        <option value="Chrysler">Chrysler</option>
                                                        <option value="Citroen">Citroen</option>
                                                        <option value="Coachmen">Coachmen</option>
                                                        <option value="Corvette">Corvette</option>
                                                        <option value="Dacia">Dacia</option>
                                                        <option value="Daewoo">Daewoo</option>
                                                        <option value="DAF">DAF</option>
                                                        <option value="Daihatsu">Daihatsu</option>
                                                        <option value="Daimler">Daimler</option>
                                                        <option value="DAX">DAX</option>
                                                        <option value="Dodge">Dodge</option>
                                                        <option value="DS">DS</option>
                                                        <option value="Ducati">Ducati</option>
                                                        <option value="Ferrari">Ferrari</option>
                                                        <option value="Fiat">Fiat</option>
                                                        <option value="Ford">Ford</option>
                                                        <option value="Ginetta">Ginetta</option>
                                                        <option value="Great Wall">Great Wall</option>
                                                        <option value="Harley-Davidson">Harley-Davidson</option>
                                                        <option value="Hillman">Hillman</option>
                                                        <option value="Honda">Honda</option>
                                                        <option value="Hummer">Hummer</option>
                                                        <option value="Hyundai">Hyundai</option>
                                                        <option value="Infiniti">Infiniti</option>
                                                        <option value="Isuzu">Isuzu</option>
                                                        <option value="Iveco">Iveco</option>
                                                        <option value="Jaguar">Jaguar</option>
                                                        <option value="Jeep">Jeep</option>
                                                        <option value="Jensen">Jensen</option>
                                                        <option value="Kia">Kia</option>
                                                        <option value="KTM">KTM</option>
                                                        <option value="Lada">Lada</option>
                                                        <option value="Lamborghini">Lamborghini</option>
                                                        <option value="Lancia">Lancia</option>
                                                        <option value="Land Rover">Land Rover</option>
                                                        <option value="LDV">LDV</option>
                                                        <option value="Lexus">Lexus</option>
                                                        <option value="Lincoln">Lincoln</option>
                                                        <option value="Lotus">Lotus</option>
                                                        <option value="LTC">LTC</option>
                                                        <option value="Malaguti">Malaguti</option>
                                                        <option value="Maserati">Maserati</option>
                                                        <option value="Maybach">Maybach</option>
                                                        <option value="Mazda">Mazda</option>
                                                        <option value="McLaren">McLaren</option>
                                                        <option value="Mercedes-Benz">Mercedes-Benz</option>
                                                        <option value="MG">MG</option>
                                                        <option value="Microcar">Microcar</option>
                                                        <option value="MINI">MINI</option>
                                                        <option value="Mitsubishi">Mitsubishi</option>
                                                        <option value="Mitsuoka">Mitsuoka</option>
                                                        <option value="Morgan">Morgan</option>
                                                        <option value="Morris">Morris</option>
                                                        <option value="Nissan">Nissan</option>
                                                        <option value="Noble">Noble</option>
                                                        <option value="Opel">Opel</option>
                                                        <option value="Panther">Panther</option>
                                                        <option value="Perodua">Perodua</option>
                                                        <option value="Peugeot">Peugeot</option>
                                                        <option value="Piaggio">Piaggio</option>
                                                        <option value="Pontiac">Pontiac</option>
                                                        <option value="Porsche">Porsche</option>
                                                        <option value="Proton">Proton</option>
                                                        <option value="Renault">Renault</option>
                                                        <option value="Riley">Riley</option>
                                                        <option value="Rolls-Royce">Rolls-Royce</option>
                                                        <option value="Rover">Rover</option>
                                                        <option value="Saab">Saab</option>
                                                        <option value="SEAT">SEAT</option>
                                                        <option value="Skoda">Skoda</option>
                                                        <option value="smart">smart</option>
                                                        <option value="Ssangyong">Ssangyong</option>
                                                        <option value="Subaru">Subaru</option>
                                                        <option value="Suzuki">Suzuki</option>
                                                        <option value="Tesla">Tesla</option>
                                                        <option value="Toyota">Toyota</option>
                                                        <option value="Triumph">Triumph</option>
                                                        <option value="TVR">TVR</option>
                                                        <option value="Ultima">Ultima</option>
                                                        <option value="Vauxhall">Vauxhall</option>
                                                        <option value="Volkswagen">Volkswagen</option>
                                                        <option value="Volvo">Volvo</option>
                                                        <option value="Westfield">Westfield</option>
                                                        <option value="Yamaha">Yamaha</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                        <div class="find-car-input-main">
                                            <div class="row no-padding">
                                                <div class="col-xs-5">
                                                    <div class="label-main">
                                                        <label>Model</label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-7">
                                                    <select name="model" id="btnModel1" class="find-select-box">
                                                        <option value="">Any</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                        <div class="find-car-input-main">
                                            <div class="row no-padding">
                                                <div class="col-xs-5">
                                                    <div class="label-main">
                                                        <label>Fuel</label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-7">
                                                    <select name="selectFuel"  class="find-select-box">
                                                        <option value="">All</option>
                                                        <option value="PETROL">Petrol</option>
                                                        <option value="DIESEL">Petrol</option>
                                                        <option value="ELECTRIC">Electric</option>
                                                        <option value="HYBRID">Hybrid</option>
                                                        <option value="OTHER">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                        <div class="find-car-input-main">
                                            <div class="row no-padding">
                                                <div class="col-xs-5">
                                                    <div class="label-main">
                                                        <label>Mileage</label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-7">
                                                    <select name="minMileage"  class="find-select-box">
                                                      <option value="">Min Mileage</option>
                                                      <option value="100">up to 100</option>
                                                      <option value="500">up to 500</option>
                                                      <option value="1000">up to 1,000</option>
                                                      <option value="5000">up to 5,000</option>
                                                      <option value="10000">up to 10,000</option>
                                                      <option value="20000">up to 20,000</option>
                                                      <option value="30000">up to 30,000</option>
                                                      <option value="40000">up to 40,000</option>
                                                      <option value="50000">up to 50,000</option>
                                                      <option value="60000">up to 60,000</option>
                                                      <option value="70000">up to 70,000</option>
                                                      <option value="80000">up to 80,000</option>
                                                      <option value="90000">up to 90,000</option>
                                                      <option value="100000">up to 100,000</option>
                                                      <option value="110000">over 100,000</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                        <div class="find-car-input-main">
                                            <div class="row no-padding">
                                                <div class="col-xs-5">
                                                    <div class="label-main">
                                                        <label>Mileage</label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-7">
                                                    <select name="Mileage"  class="find-select-box">
                                                      <option value="">Max Mileage</option>
                                                      <option value="100">up to 100</option>
                                                      <option value="500">up to 500</option>
                                                      <option value="1000">up to 1,000</option>
                                                      <option value="5000">up to 5,000</option>
                                                      <option value="10000">up to 10,000</option>
                                                      <option value="20000">up to 20,000</option>
                                                      <option value="30000">up to 30,000</option>
                                                      <option value="40000">up to 40,000</option>
                                                      <option value="50000">up to 50,000</option>
                                                      <option value="60000">up to 60,000</option>
                                                      <option value="70000">up to 70,000</option>
                                                      <option value="80000">up to 80,000</option>
                                                      <option value="90000">up to 90,000</option>
                                                      <option value="100000">up to 100,000</option>
                                                      <option value="110000">over 100,000</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                        <button type="button" onclick="searchCarsData()" class="btn-find-car-submit">
                                          Search Results
                                        </button>
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
                            <!-- <div class="col-xs-12 no-padding">

                                    <div class="total-results-section">
                                        <h2><span><strong>(2,254)</strong></span> Results <span class="span-2">Found</span></h2>
                                    </div>

                            </div> -->


                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                <div class="right-section-top">
                                    <div class="row no-padding">
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 no-padding">
                                            <!-- <div class="total-result-top">
                                                <p><span><strong>7,894</strong></span> Cars Found</p>
                                            </div> -->
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 no-padding">
                                            <div class="row no-padding d-flex-center">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-10">
                                                    <div class="select-box-res">
                                                        <select name=""  onchange="showTotalResults(this.value)">
                                                            <option disabled selected>Cars per page</option>
                                                            <option value="10">10 Results</option>
                                                            <option value="20">20 Results</option></select>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-10">
                                                    <div class="select-box-price">
                                                        <select name="sorting" onchange="SortingCars(this.value)">
                                                            <option value="" selected disabled>Sort Cars By</option>
                                                            <option value="price_asc">Price (Low to high)</option>
                                                            <option value="price_desc">Price (High to low)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="CarsSection">

                            </div>

                            <!--Pagination Section Starts-->
                            <!-- <div class="pagination-section">
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
                            </div> -->
                            <!--Pagination Section Ends-->



                        </div>
                        </div>
                        <div class="pagination-section">
                            <div class="row no-padding no-margin">
                                <div class="col-lg-12 no-padding">
                                    <div class="pagination-inner-section">
                                      <div class="containerPagination">

                                      </div>
                                        <div class="float"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-section">
                            <div class="row no-padding no-margin">
                                <div class="col-lg-12 no-padding">
                                    <div class="pagination-inner-section">
                                      <div class="containerPagination1">

                                      </div>
                                        <div class="float"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-section">
                            <div class="row no-padding no-margin">
                                <div class="col-lg-12 no-padding">
                                    <div class="pagination-inner-section">
                                      <div class="containerPagination2">

                                      </div>
                                        <div class="float"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-section">
                            <div class="row no-padding no-margin">
                                <div class="col-lg-12 no-padding">
                                    <div class="pagination-inner-section">
                                      <div class="containerPaginationSort" style="display:none">

                                      </div>
                                        <div class="float"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Right Section Ends-->
                </div>
            </div>
        </div>

          <!-- <div class="container containerPagination"></div>
          <div class="container containerPagination1"></div>
          <div class="container containerPagination2"></div> -->


        <input type="hidden" id="currentPage" value="">

        <input type="hidden" id="nextPage" value="">

        <input type="hidden" id="previousPage" value="">

        <input type="hidden" id="lastPage" value="">


        <!--Find car End-->

        <!--Memberarea Desc Section Starts-->
        <!-- <div class="memberarea-desc-section">
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
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--Memberarea Desc Section Ends-->

        <!--Memberarea Car main Section Starts-->

        <!--Memberarea Car Main Section Ends-->





    </div>
</div>

<script>

    $(window).resize(function() {
      if($( window ).width()<991 && $( window ).width()>759){
        $('.haveCarDiv>div>div>div>div>.btnSearchCar ').css('font-size','12px');
        $('.haveCarDiv>div>div>div>div>.btnFoundCar ').css('font-size','12px');
      }
      else{
        $('.haveCarDiv>div>div>div>div>.btnSearchCar ').css('font-size','18px');
      $('.haveCarDiv>div>div>div>div>.btnFoundCar ').css('font-size','18px');
      }
      if($( window ).width()<1000 && $( window ).width()>759){
        $('.appProcessOuter>div>div>.appProcess>h3').css('font-size','14px');
        // $('.haveCarDiv>div>div>div>div>.btnFoundCar ').css('font-size','12px');
      }
      else{
        $('.appProcessOuter>div>div>.appProcess>h3').css('font-size','18px');
      // $('.haveCarDiv>div>div>div>div>.btnFoundCar ').css('font-size','18px');
      }
    });

// var modal = document.getElementById('UploadPhotoModal');
// var btn = document.getElementById("UploadPhoto");
// var span = document.getElementsByClassName("uploadphoto-close")[0];
// btn.onclick = function() {
//     modal.style.display = "block";
// }
// span.onclick = function() {
//     modal.style.display = "none";
// }
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }
//
// var modal = document.getElementById('UploadSelfieModal');
// var btn = document.getElementById("UploadSelfie");
// var span = document.getElementsByClassName("uploadphoto-close")[0];
// btn.onclick = function() {
//     modal.style.display = "block";
// }
// span.onclick = function() {
//     modal.style.display = "none";
// }
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }

    </script>
<script type="text/javascript" src="{{ asset('public/js/documents-upload.js') }}"></script>

<script type="text/javascript">
function numberWithCommas(x) {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
function clickToGetCar(id){

  // $.redirect("{{--route('viewCar')--}}", {"id": id }, "GET");

  var url = '{{ url("new-offers-display", "id") }}';

  url = url.replace('id', id);

  window.location.href=url;

}

function addToWishlist(n){
        var VID ='';
        // var makeModel = $('#makeModel'+n).html();
        var vehicleTitle = $('#vehicleTitle'+n).html();
        var makes = $('#makes'+n).val();
        var makeModel = makes+' '+vehicleTitle;
        var price = $('#price'+n).html();
        price = price.replace('Price','');
        var vehicleTransmission = $('#transmission'+n).val();
        var vehicleMileage = $('#vehicleMileage'+n).html();
        var vehicleDistance = '';
        var registerationInfo = $('#registerationInfo'+n).html();
        var vehicleFuel = $('#vehicleFuel'+n).val();
        var wishlistDoors = $('#wishlistDoors'+n).val();
        var wishlistColor = $('#wishlistColor'+n).val();
        var vehicleImage = $('#vehicleImage'+n).val();
        var dealerName = '';
        // var dealerPhone = $('#dealerPhone'+n).val();
        var LID = "{{ Auth::user()->id }}";
        var wishlist = "{{ route('addToWishList') }}";

        var data = {
          vehicleId:VID,
          makeModel:makeModel,
          vehicleTitle:vehicleTitle,
          price:price,
          vehicleTransmission:vehicleTransmission,
          vehicleMileage:vehicleMileage,
          vehicleDistance:vehicleDistance,
          vehicleImage:vehicleImage,
          doors:wishlistDoors,
          color:wishlistColor,
          dealerName:dealerName,
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


var proxy ="https://cors-anywhere.herokuapp.com/";

function showTotalResults(number){
  $('#CarsSection').empty();
  $('.containerPagination2').show();
  $('.containerPagination').hide();
  $('.containerPagination1').hide();
  $('.containerPaginationSort').hide();
  $('#fetchingData').show();
  $('#mainCarSection').hide();
 // var postcode = $('[name=postcode]').val().toUpperCase();
 var distance = $('[name=distance]').val();
 var minPrice = $('[name=MinPrice]').val();
 var maxPrice = $('[name=MaxPrice]').val();
 var makes = $('[name=makes]').val();
 var model = $('[name=model]').val();
 var minAge = $('[name=minAge]').val();
 var maxAge = $('[name=maxAge]').val();
 var minMileage = $('[name=minMileage]').val();
 var maxMileage = $('[name=Mileage]').val();
 var color = $('[name=colour]').val();
 var transmission = $('[name=transmission]').val();
 var bodyStyle = $('[name=bodyStyle]').val();
 var doors = $('[name=doors]').val();
 var fuelType = $('[name=selectFuel]').val();
 // var fuelType =$("input[name='chk']:checked");
 if(minMileage==""){
   minMileage = 0;
 }
 if(maxMileage==""){
   maxMileage = 999999
 }
 var empUrl = "http://68.183.141.175/mfl-api.php?page=0&result_per_page="+number+"&make="+makes+"&model="+model+"&fuel="+fuelType+"&door=&transmission="+transmission+"&color=&cap_id=&mileage_min="+minMileage+"&mileage_max="+maxMileage;
 $.ajax({
 type:"GET",
 beforeSend: function(request) {
   request.setRequestHeader("Accept", 'application/json');
 },
 url:proxy+""+empUrl,
 success: function(response){
   document.body.scrollTop = 250;
   document.documentElement.scrollTop = 250;
   response = response.replace(/&quot;/g, '"');
   response = response.replace(/&gt;/g, '>');
   response = response.replace(/&lt;/g, '<');
   response = response.replace(/\"/g, '"');
   response = response.replace(/&amp;/g, '&');
   var finalData = JSON.parse(response);
           $('.containerPagination2').bootpag({
             total: 11,
             page: 1,
             maxVisible: 5,
             next: 'Next >>',
             prev: '<< Previous'
             }).on('page', function(event, num){
               // callFindCars(num,empUrl);
               var empUrl1 = "http://68.183.141.175/mfl-api.php?page="+number+"&result_per_page=10&make="+makes+"&model="+model+"&fuel=&door=&transmission=&color=&cap_id=&mileage_min="+minMileage+"&mileage_max="+maxMileage;
               $('#CarsSection').empty();
               $.ajax({
                 type:"GET",
                 beforeSend: function(request) {
                   request.setRequestHeader("Accept", 'application/json');
                 },
                 url:proxy+""+empUrl1,
                 success: function(response){
                   document.body.scrollTop = 250;
                   document.documentElement.scrollTop = 250;
                   response = response.replace(/&quot;/g, '"');
                   response = response.replace(/&gt;/g, '>');
                   response = response.replace(/&lt;/g, '<');
                   response = response.replace(/\"/g, '"');
                   response = response.replace(/&amp;/g, '&');
                   var finalData = JSON.parse(response);
                   var car;
                   for(var i = 0; i<finalData.length; i++){
                     car = '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-detail"><div class="find-car-detail-inner"><div class="row no-padding no-margin"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="row no-padding no-margin"><div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 no-padding"><div onclick=clickToGetCar("'+finalData[i].regno+'") class="find-car-image"><img onclick=clickToGetCar("'+finalData[i].regno+'") src='+finalData[i].image_links+' class="img-responsive"  alt=""/></div></div><div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="find-car-desc-main" onclick=clickToGetCar("'+finalData[i].regno+'")><div class="row no-padding no-margin"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-title"><p id="vehicleTitle'+i+'">'+finalData[i].model+'</p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-price"><p id="price'+i+'">Price £ '+numberWithCommas(finalData[i].price)+'</p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-desc"><div class="row no-padding no-margin"><div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 no-padding"><div class="find-car-desc-label"><p>Registration</p><p>Colour</p><p>Doors</p><p>Transmission</p><p>Mileage</p></div></div><div class="col-xs-1 no-padding"><div class="find-car-desc-label"><p>:</p><p>:</p><p>:</p><p>:</p><p>:</p></div></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding"><div class="find-car-desc-data"><p id="registerationInfo'+i+'">'+finalData[i].regno+'</p><p>'+finalData[i].color+'</p><p>'+finalData[i].door_number+'</p><p>'+finalData[i].transmission+'</p><p id="vehicleMileage'+i+'">'+finalData[i].mileage+'</p></div></div></div></div></div></div></div></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="wishlist-section-main"><div class="wishlist-inner"><div class="wishlist-content"><div class="btn-wishlist-main text-center"><a href="javascript:void(0)" onclick="addToWishlist('+i+')" class="btn-wishlist">Wishlist</a></div></div></div></div></div></div></div></div></div><div class="row no-padding no-margin"><div class="col-xs-12 no-padding"><div class="need-car-section"><p class="text-center"> Need a hand? Call us: <span>01202 286500</span></p></div></div></div></div></div><input type="hidden" id="vehicleImage'+i+'" value="'+finalData[i].image_links+'" /><input type="hidden" id="makes'+i+'" value="'+finalData[i].make+'" /><input type="hidden" id="vehicleFuel'+i+'" value="'+finalData[i].fuel+'" /><input type="hidden" id="transmission'+i+'" value="'+finalData[i].transmission+'" /><input type="hidden" id="wishlistColor'+i+'" value="'+finalData[i].color+'" /><input type="hidden" id="wishlistDoors'+i+'" value="'+finalData[i].door_number+'" />';
                   // $('#CarsSection').html(car);
                   $('#CarsSection').append(car);
                   $('#fetchingData').hide();
                   $('#mainCarSection').show();
                   }
                 }
             });
         });
   var car;
   for(var i = 0; i<finalData.length; i++){
      car = '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-detail"><div class="find-car-detail-inner"><div class="row no-padding no-margin"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="row no-padding no-margin"><div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 no-padding"><div onclick=clickToGetCar("'+finalData[i].regno+'") class="find-car-image"><img onclick=clickToGetCar("'+finalData[i].regno+'") src='+finalData[i].image_links+' class="img-responsive"  alt=""/></div></div><div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="find-car-desc-main" onclick=clickToGetCar("'+finalData[i].regno+'")><div class="row no-padding no-margin"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-title"><p id="vehicleTitle'+i+'">'+finalData[i].model+'</p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-price"><p id="price'+i+'">Price £ '+numberWithCommas(finalData[i].price)+'</p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-desc"><div class="row no-padding no-margin"><div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 no-padding"><div class="find-car-desc-label"><p>Registration</p><p>Colour</p><p>Doors</p><p>Transmission</p><p>Mileage</p></div></div><div class="col-xs-1 no-padding"><div class="find-car-desc-label"><p>:</p><p>:</p><p>:</p><p>:</p><p>:</p></div></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding"><div class="find-car-desc-data"><p id="registerationInfo'+i+'">'+finalData[i].regno+'</p><p>'+finalData[i].color+'</p><p>'+finalData[i].door_number+'</p><p>'+finalData[i].transmission+'</p><p id="vehicleMileage'+i+'">'+finalData[i].mileage+'</p></div></div></div></div></div></div></div></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="wishlist-section-main"><div class="wishlist-inner"><div class="wishlist-content"><div class="btn-wishlist-main text-center"><a href="javascript:void(0)" onclick="addToWishlist('+i+')" class="btn-wishlist">Wishlist</a></div></div></div></div></div></div></div></div></div><div class="row no-padding no-margin"><div class="col-xs-12 no-padding"><div class="need-car-section"><p class="text-center"> Need a hand? Call us: <span>01202 286500</span></p></div></div></div></div></div><input type="hidden" id="vehicleImage'+i+'" value="'+finalData[i].image_links+'" /><input type="hidden" id="makes'+i+'" value="'+finalData[i].make+'" /><input type="hidden" id="vehicleFuel'+i+'" value="'+finalData[i].fuel+'" /><input type="hidden" id="transmission'+i+'" value="'+finalData[i].transmission+'" /><input type="hidden" id="wishlistColor'+i+'" value="'+finalData[i].color+'" /><input type="hidden" id="wishlistDoors'+i+'" value="'+finalData[i].door_number+'" />';
   // $('#CarsSection').html(car);
   $('#CarsSection').append(car);
   $('#fetchingData').hide();
   $('#mainCarSection').show();
   }

 }
});

}

function searchCarsData(){
   $('#CarsSection').empty();
   $('.containerPagination1').hide();
   $('.containerPagination2').hide();
   $('.containerPagination').hide();
   $('.containerPaginationSort').hide();
   $('#fetchingData').show();
   $('#mainCarSection').hide();
  // var postcode = $('[name=postcode]').val().toUpperCase();
  var distance = $('[name=distance]').val();
  var minPrice = $('[name=MinPrice]').val();
  var maxPrice = $('[name=MaxPrice]').val();
  var makes = $('[name=makes]').val();
  var model = $('[name=model]').val();
  var minAge = $('[name=minAge]').val();
  var maxAge = $('[name=maxAge]').val();
  var minMileage = $('[name=minMileage]').val();
  var maxMileage = $('[name=Mileage]').val();
  if(minMileage==''){
    minMileage = 0;
  }
  if(maxMileage==''){
    maxMileage = 999999;
  }
  var color = $('[name=colour]').val();
  var transmission = $('[name=transmission]').val();
  var bodyStyle = $('[name=bodyStyle]').val();
  var doors = $('[name=doors]').val();
  var fuelType =$("input[name='chk']:checked");
  var empUrl = "http://68.183.141.175/mfl-api.php?page=0&result_per_page=10&make="+makes+"&model="+model+"&fuel=&door=&transmission=&color=&cap_id=&mileage_min="+minMileage+"&mileage_max="+maxMileage;

  $.ajax({
  type:"GET",
  beforeSend: function(request) {
    request.setRequestHeader("Accept", 'application/json');
  },
  url:proxy+""+empUrl,
  success: function(response){
    document.body.scrollTop = 250;
    document.documentElement.scrollTop = 250;
    response = response.replace(/&quot;/g, '"');
    response = response.replace(/&gt;/g, '>');
    response = response.replace(/&lt;/g, '<');
    response = response.replace(/\"/g, '"');
    response = response.replace(/&amp;/g, '&');
    var finalData = JSON.parse(response);
    $('.containerPagination2').hide();
    $('.containerPagination1').show();
    $('.containerPagination').hide();
    $('.containerPaginationSort').hide();
    $('.containerPaginationSort').hide();
            $('.containerPagination1').bootpag({
              total: 23,
              page: 1,
              maxVisible: 5,
              next: 'Next >>',
              prev: '<< Previous'
              }).on('page', function(event, num){
                // callFindCars(num,empUrl);
                var empUrl1 = "http://68.183.141.175/mfl-api.php?page="+num+"&result_per_page=10&make="+makes+"&model="+model+"&fuel=&door=&transmission=&color=&cap_id=&mileage_min="+minMileage+"&mileage_max="+maxMileage;
                $('#CarsSection').empty();
                $('.containerPagination').hide();
                $.ajax({
                  type:"GET",
                  beforeSend: function(request) {
                    request.setRequestHeader("Accept", 'application/json');
                  },
                  url:proxy+""+empUrl1,
                  success: function(response){
                    document.body.scrollTop = 250;
                    document.documentElement.scrollTop = 250;
                    response = response.replace(/&quot;/g, '"');
                    response = response.replace(/&gt;/g, '>');
                    response = response.replace(/&lt;/g, '<');
                    response = response.replace(/\"/g, '"');
                    response = response.replace(/&amp;/g, '&');
                    var finalData = JSON.parse(response);
                    var car;
                    for(var i = 0; i<finalData.length; i++){
                       car = '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-detail"><div class="find-car-detail-inner"><div class="row no-padding no-margin"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="row no-padding no-margin"><div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 no-padding"><div onclick=clickToGetCar("'+finalData[i].regno+'") class="find-car-image"><img onclick=clickToGetCar("'+finalData[i].regno+'") src='+finalData[i].image_links+' class="img-responsive"  alt=""/></div></div><div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="find-car-desc-main" onclick=clickToGetCar("'+finalData[i].regno+'")><div class="row no-padding no-margin"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-title"><p id="vehicleTitle'+i+'">'+finalData[i].model+'</p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-price"><p id="price'+i+'">Price £ '+numberWithCommas(finalData[i].price)+'</p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-desc"><div class="row no-padding no-margin"><div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 no-padding"><div class="find-car-desc-label"><p>Registration</p><p>Colour</p><p>Doors</p><p>Transmission</p><p>Mileage</p></div></div><div class="col-xs-1 no-padding"><div class="find-car-desc-label"><p>:</p><p>:</p><p>:</p><p>:</p><p>:</p></div></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding"><div class="find-car-desc-data"><p id="registerationInfo'+i+'">'+finalData[i].regno+'</p><p>'+finalData[i].color+'</p><p>'+finalData[i].door_number+'</p><p>'+finalData[i].transmission+'</p><p id="vehicleMileage'+i+'">'+finalData[i].mileage+'</p></div></div></div></div></div></div></div></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="wishlist-section-main"><div class="wishlist-inner"><div class="wishlist-content"><div class="btn-wishlist-main text-center"><a href="javascript:void(0)" onclick="addToWishlist('+i+')" class="btn-wishlist">Wishlist</a></div></div></div></div></div></div></div></div></div><div class="row no-padding no-margin"><div class="col-xs-12 no-padding"><div class="need-car-section"><p class="text-center"> Need a hand? Call us: <span>01202 286500</span></p></div></div></div></div></div><input type="hidden" id="vehicleImage'+i+'" value="'+finalData[i].image_links+'" /><input type="hidden" id="makes'+i+'" value="'+finalData[i].make+'" /><input type="hidden" id="vehicleFuel'+i+'" value="'+finalData[i].fuel+'" /><input type="hidden" id="transmission'+i+'" value="'+finalData[i].transmission+'" /><input type="hidden" id="wishlistColor'+i+'" value="'+finalData[i].color+'" /><input type="hidden" id="wishlistDoors'+i+'" value="'+finalData[i].door_number+'" />';
                    // $('#CarsSection').html(car);
                    $('#CarsSection').append(car);
                    $('#fetchingData').hide();
                    $('#mainCarSection').show();
                    }
                  }
              });
          });
    var car;
    for(var i = 0; i<finalData.length; i++){
       car = '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-detail"><div class="find-car-detail-inner"><div class="row no-padding no-margin"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="row no-padding no-margin"><div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 no-padding"><div onclick=clickToGetCar("'+finalData[i].regno+'") class="find-car-image"><img onclick=clickToGetCar("'+finalData[i].regno+'") src='+finalData[i].image_links+' class="img-responsive"  alt=""/></div></div><div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="find-car-desc-main" onclick=clickToGetCar("'+finalData[i].regno+'")><div class="row no-padding no-margin"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-title"><p id="vehicleTitle'+i+'">'+finalData[i].model+'</p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-price"><p id="price'+i+'">Price £ '+numberWithCommas(finalData[i].price)+'</p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-desc"><div class="row no-padding no-margin"><div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 no-padding"><div class="find-car-desc-label"><p>Registration</p><p>Colour</p><p>Doors</p><p>Transmission</p><p>Mileage</p></div></div><div class="col-xs-1 no-padding"><div class="find-car-desc-label"><p>:</p><p>:</p><p>:</p><p>:</p><p>:</p></div></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding"><div class="find-car-desc-data"><p id="registerationInfo'+i+'">'+finalData[i].regno+'</p><p>'+finalData[i].color+'</p><p>'+finalData[i].door_number+'</p><p>'+finalData[i].transmission+'</p><p id="vehicleMileage'+i+'">'+finalData[i].mileage+'</p></div></div></div></div></div></div></div></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="wishlist-section-main"><div class="wishlist-inner"><div class="wishlist-content"><div class="btn-wishlist-main text-center"><a href="javascript:void(0)" onclick="addToWishlist('+i+')" class="btn-wishlist">Wishlist</a></div></div></div></div></div></div></div></div></div><div class="row no-padding no-margin"><div class="col-xs-12 no-padding"><div class="need-car-section"><p class="text-center"> Need a hand? Call us: <span>01202 286500</span></p></div></div></div></div></div><input type="hidden" id="vehicleImage'+i+'" value="'+finalData[i].image_links+'" /><input type="hidden" id="makes'+i+'" value="'+finalData[i].make+'" /><input type="hidden" id="vehicleFuel'+i+'" value="'+finalData[i].fuel+'" /><input type="hidden" id="transmission'+i+'" value="'+finalData[i].transmission+'" /><input type="hidden" id="wishlistColor'+i+'" value="'+finalData[i].color+'" /><input type="hidden" id="wishlistDoors'+i+'" value="'+finalData[i].door_number+'" />';
    // $('#CarsSection').html(car);
    $('#CarsSection').append(car);
    $('#fetchingData').hide();
    $('#mainCarSection').show();
    }

  }
});
}




        function callFindCars(p){
            empUrl = "http://68.183.141.175/mfl-api.php?page="+p+"&result_per_page=10&make=&model=&fuel=&door=&transmission=&color=&cap_id=&mileage_min=0&mileage_max=999999";
          $('#CarsSection').empty();
          $('#fetchingData').show();
          $('#mainCarSection').hide();
          $.ajax({
            type:"GET",
            beforeSend: function(request) {
              request.setRequestHeader("Accept", 'application/json');
            },
            url:proxy+""+empUrl,
            success: function(response){
              document.body.scrollTop = 250;
              document.documentElement.scrollTop = 250;
              response = response.replace(/&quot;/g, '"');
              response = response.replace(/&gt;/g, '>');
              response = response.replace(/&lt;/g, '<');
              response = response.replace(/\"/g, '"');
              response = response.replace(/&amp;/g, '&');
              var finalData = JSON.parse(response);
              var car;
              for(var i = 0; i<finalData.length; i++){
                 car = '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-detail"><div class="find-car-detail-inner"><div class="row no-padding no-margin"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="row no-padding no-margin"><div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 no-padding"><div onclick=clickToGetCar("'+finalData[i].regno+'") class="find-car-image"><img onclick=clickToGetCar("'+finalData[i].regno+'") src='+finalData[i].image_links+' class="img-responsive"  alt=""/></div></div><div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="find-car-desc-main" onclick=clickToGetCar("'+finalData[i].regno+'")><div class="row no-padding no-margin"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-title"><p id="vehicleTitle'+i+'">'+finalData[i].model+'</p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-price"><p id="price'+i+'">Price £ '+numberWithCommas(finalData[i].price)+'</p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-desc"><div class="row no-padding no-margin"><div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 no-padding"><div class="find-car-desc-label"><p>Registration</p><p>Colour</p><p>Doors</p><p>Transmission</p><p>Mileage</p></div></div><div class="col-xs-1 no-padding"><div class="find-car-desc-label"><p>:</p><p>:</p><p>:</p><p>:</p><p>:</p></div></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding"><div class="find-car-desc-data"><p id="registerationInfo'+i+'">'+finalData[i].regno+'</p><p>'+finalData[i].color+'</p><p>'+finalData[i].door_number+'</p><p>'+finalData[i].transmission+'</p><p id="vehicleMileage'+i+'">'+finalData[i].mileage+'</p></div></div></div></div></div></div></div></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="wishlist-section-main"><div class="wishlist-inner"><div class="wishlist-content"><div class="btn-wishlist-main text-center"><a href="javascript:void(0)" onclick="addToWishlist('+i+')" class="btn-wishlist">Wishlist</a></div></div></div></div></div></div></div></div></div><div class="row no-padding no-margin"><div class="col-xs-12 no-padding"><div class="need-car-section"><p class="text-center"> Need a hand? Call us: <span>01202 286500</span></p></div></div></div></div></div><input type="hidden" id="vehicleImage'+i+'" value="'+finalData[i].image_links+'" /><input type="hidden" id="makes'+i+'" value="'+finalData[i].make+'" /><input type="hidden" id="vehicleFuel'+i+'" value="'+finalData[i].fuel+'" /><input type="hidden" id="transmission'+i+'" value="'+finalData[i].transmission+'" /><input type="hidden" id="wishlistColor'+i+'" value="'+finalData[i].color+'" /><input type="hidden" id="wishlistDoors'+i+'" value="'+finalData[i].door_number+'" />';
                // $('#CarsSection').html(car);
                $('#CarsSection').append(car);
                $('#fetchingData').hide();
                $('#mainCarSection').show();
              }

            }
        });
        }
var pg = 1;
$(document).ready(function(){
     $('#fetchingData').show();
     $('#mainCarSection').hide();
 var empUrl = "http://68.183.141.175/mfl-api.php?page=0&result_per_page=10&make=&model=&fuel=&door=&transmission=&color=&cap_id=&mileage_min=0&mileage_max=999999";
      $.ajax({
      type:"GET",
      beforeSend: function(request) {
        request.setRequestHeader("Accept", 'application/json');
      },
      url:proxy+""+empUrl,
      success: function(response){
        document.body.scrollTop = 250;
        document.documentElement.scrollTop = 250;
        response = response.replace(/&quot;/g, '"');
        response = response.replace(/&gt;/g, '>');
        response = response.replace(/&lt;/g, '<');
        response = response.replace(/\"/g, '"');
        response = response.replace(/&amp;/g, '&');
        var finalData = JSON.parse(response);
        $('.containerPagination').show();
                $('.containerPagination').bootpag({
                  total: 23,
                  page: 1,
                  maxVisible: 5,
                  next: 'Next >>',
                  prev: '<< Previous'
                  }).on('page', function(event, num){
                    callFindCars(num);
              });
        var car;
        for(var i = 0; i<finalData.length; i++){
           car = '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-detail"><div class="find-car-detail-inner"><div class="row no-padding no-margin"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="row no-padding no-margin"><div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 no-padding"><div onclick=clickToGetCar("'+finalData[i].regno+'") class="find-car-image"><img onclick=clickToGetCar("'+finalData[i].regno+'") src='+finalData[i].image_links+' class="img-responsive"  alt=""/></div></div><div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="find-car-desc-main" onclick=clickToGetCar("'+finalData[i].regno+'")><div class="row no-padding no-margin"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-title"><p id="vehicleTitle'+i+'">'+finalData[i].model+'</p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-price"><p id="price'+i+'">Price £ '+numberWithCommas(finalData[i].price)+'</p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-desc"><div class="row no-padding no-margin"><div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 no-padding"><div class="find-car-desc-label"><p>Registration</p><p>Colour</p><p>Doors</p><p>Transmission</p><p>Mileage</p></div></div><div class="col-xs-1 no-padding"><div class="find-car-desc-label"><p>:</p><p>:</p><p>:</p><p>:</p><p>:</p></div></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding"><div class="find-car-desc-data"><p id="registerationInfo'+i+'">'+finalData[i].regno+'</p><p>'+finalData[i].color+'</p><p>'+finalData[i].door_number+'</p><p>'+finalData[i].transmission+'</p><p id="vehicleMileage'+i+'">'+finalData[i].mileage+'</p></div></div></div></div></div></div></div></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="wishlist-section-main"><div class="wishlist-inner"><div class="wishlist-content"><div class="btn-wishlist-main text-center"><a href="javascript:void(0)" onclick="addToWishlist('+i+')" class="btn-wishlist">Wishlist</a></div></div></div></div></div></div></div></div></div><div class="row no-padding no-margin"><div class="col-xs-12 no-padding"><div class="need-car-section"><p class="text-center"> Need a hand? Call us: <span>01202 286500</span></p></div></div></div></div></div><input type="hidden" id="vehicleImage'+i+'" value="'+finalData[i].image_links+'" /><input type="hidden" id="makes'+i+'" value="'+finalData[i].make+'" /><input type="hidden" id="vehicleFuel'+i+'" value="'+finalData[i].fuel+'" /><input type="hidden" id="transmission'+i+'" value="'+finalData[i].transmission+'" /><input type="hidden" id="wishlistColor'+i+'" value="'+finalData[i].color+'" /><input type="hidden" id="wishlistDoors'+i+'" value="'+finalData[i].door_number+'" />';
          // $('#CarsSection').html(car);
          $('#CarsSection').append(car);
          $('#fetchingData').hide();
          $('#mainCarSection').show();
        }

      }
  });
});

function SortingCars(param){
  $('#CarsSection').empty();
  $('.containerPagination1').hide();
  $('.containerPagination2').hide();
  $('.containerPagination').hide();
  $('.containerPaginationSort').show();
  $('#fetchingData').show();
  $('#mainCarSection').hide();
 // var postcode = $('[name=postcode]').val().toUpperCase();
 var distance = $('[name=distance]').val();
 var minPrice = $('[name=MinPrice]').val();
 var maxPrice = $('[name=MaxPrice]').val();
 var makes = $('[name=makes]').val();
 var model = $('[name=model]').val();
 var minAge = $('[name=minAge]').val();
 var maxAge = $('[name=maxAge]').val();
 var minMileage = $('[name=minMileage]').val();
 var maxMileage = $('[name=Mileage]').val();
 if(minMileage==''){
   minMileage = 0;
 }
 if(maxMileage==''){
   maxMileage = 999999;
 }
 var color = $('[name=colour]').val();
 var transmission = $('[name=transmission]').val();
 var bodyStyle = $('[name=bodyStyle]').val();
 var doors = $('[name=doors]').val();
 var fuelType =$("input[name='chk']:checked");
 var empUrl = "http://68.183.141.175/mfl-api.php?sort="+param+"&page=0&result_per_page=10&make="+makes+"&model="+model+"&fuel=&door=&transmission=&color=&cap_id=&mileage_min="+minMileage+"&mileage_max="+maxMileage;

 $.ajax({
 type:"GET",
 beforeSend: function(request) {
   request.setRequestHeader("Accept", 'application/json');
 },
 url:proxy+""+empUrl,
 success: function(response){
   document.body.scrollTop = 250;
   document.documentElement.scrollTop = 250;
   response = response.replace(/&quot;/g, '"');
   response = response.replace(/&gt;/g, '>');
   response = response.replace(/&lt;/g, '<');
   response = response.replace(/\"/g, '"');
   response = response.replace(/&amp;/g, '&');
   var finalData = JSON.parse(response);
   $('.containerPagination2').hide();
   $('.containerPagination1').show();
   $('.containerPagination').hide();
           $('.containerPaginationSort').bootpag({
             total: 23,
             page: 1,
             maxVisible: 5,
             next: 'Next >>',
             prev: '<< Previous'
             }).on('page', function(event, num){
               // callFindCars(num,empUrl);
                 var empUrl1 = "http://68.183.141.175/mfl-api.php?sort="+param+"&page="+num+"&result_per_page=10&make="+makes+"&model="+model+"&fuel=&door=&transmission=&color=&cap_id=&mileage_min="+minMileage+"&mileage_max="+maxMileage;
               $('#CarsSection').empty();
               $('.containerPagination').hide();
               $.ajax({
                 type:"GET",
                 beforeSend: function(request) {
                   request.setRequestHeader("Accept", 'application/json');
                 },
                 url:proxy+""+empUrl1,
                 success: function(response){
                   document.body.scrollTop = 250;
                   document.documentElement.scrollTop = 250;
                   response = response.replace(/&quot;/g, '"');
                   response = response.replace(/&gt;/g, '>');
                   response = response.replace(/&lt;/g, '<');
                   response = response.replace(/\"/g, '"');
                   response = response.replace(/&amp;/g, '&');
                   var finalData = JSON.parse(response);
                   var car;
                   for(var i = 0; i<finalData.length; i++){
                      car = '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-detail"><div class="find-car-detail-inner"><div class="row no-padding no-margin"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="row no-padding no-margin"><div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 no-padding"><div onclick=clickToGetCar("'+finalData[i].regno+'") class="find-car-image"><img onclick=clickToGetCar("'+finalData[i].regno+'") src='+finalData[i].image_links+' class="img-responsive"  alt=""/></div></div><div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="find-car-desc-main" onclick=clickToGetCar("'+finalData[i].regno+'")><div class="row no-padding no-margin"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-title"><p id="vehicleTitle'+i+'">'+finalData[i].model+'</p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-price"><p id="price'+i+'">Price £ '+numberWithCommas(finalData[i].price)+'</p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-desc"><div class="row no-padding no-margin"><div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 no-padding"><div class="find-car-desc-label"><p>Registration</p><p>Colour</p><p>Doors</p><p>Transmission</p><p>Mileage</p></div></div><div class="col-xs-1 no-padding"><div class="find-car-desc-label"><p>:</p><p>:</p><p>:</p><p>:</p><p>:</p></div></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding"><div class="find-car-desc-data"><p id="registerationInfo'+i+'">'+finalData[i].regno+'</p><p>'+finalData[i].color+'</p><p>'+finalData[i].door_number+'</p><p>'+finalData[i].transmission+'</p><p id="vehicleMileage'+i+'">'+finalData[i].mileage+'</p></div></div></div></div></div></div></div></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="wishlist-section-main"><div class="wishlist-inner"><div class="wishlist-content"><div class="btn-wishlist-main text-center"><a href="javascript:void(0)" onclick="addToWishlist('+i+')" class="btn-wishlist">Wishlist</a></div></div></div></div></div></div></div></div></div><div class="row no-padding no-margin"><div class="col-xs-12 no-padding"><div class="need-car-section"><p class="text-center"> Need a hand? Call us: <span>01202 286500</span></p></div></div></div></div></div><input type="hidden" id="vehicleImage'+i+'" value="'+finalData[i].image_links+'" /><input type="hidden" id="makes'+i+'" value="'+finalData[i].make+'" /><input type="hidden" id="vehicleFuel'+i+'" value="'+finalData[i].fuel+'" /><input type="hidden" id="transmission'+i+'" value="'+finalData[i].transmission+'" /><input type="hidden" id="wishlistColor'+i+'" value="'+finalData[i].color+'" /><input type="hidden" id="wishlistDoors'+i+'" value="'+finalData[i].door_number+'" />';
                   // $('#CarsSection').html(car);
                   $('#CarsSection').append(car);
                   $('#fetchingData').hide();
                   $('#mainCarSection').show();
                   }
                 }
             });
         });
   var car;
   for(var i = 0; i<finalData.length; i++){
      car = '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-detail"><div class="find-car-detail-inner"><div class="row no-padding no-margin"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="row no-padding no-margin"><div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 no-padding"><div onclick=clickToGetCar("'+finalData[i].regno+'") class="find-car-image"><img onclick=clickToGetCar("'+finalData[i].regno+'") src='+finalData[i].image_links+' class="img-responsive"  alt=""/></div></div><div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="find-car-desc-main" onclick=clickToGetCar("'+finalData[i].regno+'")><div class="row no-padding no-margin"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-title"><p id="vehicleTitle'+i+'">'+finalData[i].model+'</p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-price"><p id="price'+i+'">Price £ '+numberWithCommas(finalData[i].price)+'</p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-desc"><div class="row no-padding no-margin"><div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 no-padding"><div class="find-car-desc-label"><p>Registration</p><p>Colour</p><p>Doors</p><p>Transmission</p><p>Mileage</p></div></div><div class="col-xs-1 no-padding"><div class="find-car-desc-label"><p>:</p><p>:</p><p>:</p><p>:</p><p>:</p></div></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding"><div class="find-car-desc-data"><p id="registerationInfo'+i+'">'+finalData[i].regno+'</p><p>'+finalData[i].color+'</p><p>'+finalData[i].door_number+'</p><p>'+finalData[i].transmission+'</p><p id="vehicleMileage'+i+'">'+finalData[i].mileage+'</p></div></div></div></div></div></div></div></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="wishlist-section-main"><div class="wishlist-inner"><div class="wishlist-content"><div class="btn-wishlist-main text-center"><a href="javascript:void(0)" onclick="addToWishlist('+i+')" class="btn-wishlist">Wishlist</a></div></div></div></div></div></div></div></div></div><div class="row no-padding no-margin"><div class="col-xs-12 no-padding"><div class="need-car-section"><p class="text-center"> Need a hand? Call us: <span>01202 286500</span></p></div></div></div></div></div><input type="hidden" id="vehicleImage'+i+'" value="'+finalData[i].image_links+'" /><input type="hidden" id="makes'+i+'" value="'+finalData[i].make+'" /><input type="hidden" id="vehicleFuel'+i+'" value="'+finalData[i].fuel+'" /><input type="hidden" id="transmission'+i+'" value="'+finalData[i].transmission+'" /><input type="hidden" id="wishlistColor'+i+'" value="'+finalData[i].color+'" /><input type="hidden" id="wishlistDoors'+i+'" value="'+finalData[i].door_number+'" />';
   // $('#CarsSection').html(car);
   $('#CarsSection').append(car);
   $('#fetchingData').hide();
   $('#mainCarSection').show();
   }

 }
});
}



</script>

<script type="text/javascript" src="{{asset('public/js/modelsData.js')}}"></script>
@endsection
