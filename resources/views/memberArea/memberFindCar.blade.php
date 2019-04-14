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
<!--
                                    <div class="btn-memberarea-slider2-outer">
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
      <div class="col-sm-2 col-xs-3 currentPage">
        <a href="{{url('find-cars')}}">Find a Car</a>
      </div>
    </div>
  </div>
</div>

<!--Find Car Main Starts-->
<div class="find-car-loading-main" id="fetchingData">
  <div class="loading-cars-image">
    <img src="{{ asset('public/images/car-loading.gif') }}"/>
    <h2 class="loading-car-gif">Loading cars...</h2>
  </div>
</div>
    <div class="container no-padding" id="CarsDiv">
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
                                          <?php $PstCode = \App\CarAddress::where('uid',Auth::user()->id)->orderBy('id','asc')->first()?>
                                          @if($PstCode->postcode=='')
                                          <input type="text" class="find-text-box" id="postcode" placeholder="" value="{{$PstCode->postcode}}" name="postcode">
                                          @else
                                          <input type="text" class="find-text-box" id="postcode" placeholder="" value="{{$PstCode->postcode}}" name="postcode">
                                          @endif
                                            <!-- <input type="text" placeholder="SW1A2AA" class="find-text-box"/> -->
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
                                            <select name="distance" id="" class="find-select-box">
                                              <option value="1000" selected >National</option>
                                              <option value="1">< 1 Mile</option>
                                              <option value="10">< 10 Mile</option>
                                              <option value="20">< 20 Mile</option>
                                              <option value="30">< 30 Mile</option>
                                              <option value="40">< 40 Mile</option>
                                              <option value="50">< 50 Mile</option>
                                              <option value="60">< 60 Mile</option>
                                              <option value="70">< 70 Mile</option>
                                              <option value="80">< 80 Mile</option>
                                              <option value="90">< 90 Mile</option>
                                              <option value="100">< 100 Mile</option>
                                              <option value="200">< 200 Mile</option>
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
                                            <select name="MinPrice"  class="find-select-box">
                                              <option value="500">Min (Any)</option>
                                              <option value="500">£500</option>
                                              <option value="1000">£1,000</option>
                                              <option value="2000">£2,000</option>
                                              <option value="3000">£3,000</option>
                                              <option value="4000">£4,000</option>
                                              <option value="5000">£5,000</option>
                                              <option value="6000">£6,000</option>
                                              <option value="7000">£7,000</option>
                                              <option value="8000">£8,000</option>
                                              <option value="9000">£9,000</option>
                                              <option value="10000">£10,000</option>
                                              <option value="12500">£12,500</option>
                                              <option value="15000">£15,000</option>
                                              <option value="17500">£17,500</option>
                                              <option value="20000">£20,000</option>
                                              <option value="25000">£25,000</option>
                                              <option value="30000">£30,000</option>
                                              <option value="35000">£35,000</option>
                                              <option value="40000">£40,000</option>
                                              <option value="45000">£45,000</option>
                                              <option value="50000">£50,000</option>
                                              <option value="55000">£55,000</option>
                                              <option value="60000">£60,000</option>
                                              <option value="75000">£75,000</option>
                                              <option value="100000">£100,000</option>
                                              <option value="250000">£250,000</option>
                                              <option value="500000">£500,000</option>
                                              <option value="1000000">£1,000,000</option>
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
                                            <select name="MaxPrice"  class="find-select-box">
                                              <option value="1000000">Max (Any)</option>
                                              <option value="500">£500</option>
                                              <option value="1000">£1,000</option>
                                              <option value="2000">£2,000</option>
                                              <option value="3000">£3,000</option>
                                              <option value="4000">£4,000</option>
                                              <option value="5000">£5,000</option>
                                              <option value="6000">£6,000</option>
                                              <option value="7000">£7,000</option>
                                              <option value="8000">£8,000</option>
                                              <option value="9000">£9,000</option>
                                              <option value="10000">£10,000</option>
                                              <option value="12500">£12,500</option>
                                              <option value="15000">£15,000</option>
                                              <option value="17500">£17,500</option>
                                              <option value="20000">£20,000</option>
                                              <option value="25000">£25,000</option>
                                              <option value="30000">£30,000</option>
                                              <option value="35000">£35,000</option>
                                              <option value="40000">£40,000</option>
                                              <option value="45000">£45,000</option>
                                              <option value="50000">£50,000</option>
                                              <option value="55000">£55,000</option>
                                              <option value="60000">£60,000</option>
                                              <option value="75000">£75,000</option>
                                              <option value="100000">£100,000</option>
                                              <option value="250000">£250,000</option>
                                              <option value="500000">£500,000</option>
                                              <option value="1000000">£1,000,000</option>
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
                                        <div class="col-xs-4">
                                            <div class="label-main">
                                                <label>Model</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-8">
                                            <select name="model" id="btnModel1" class="find-select-box">
                                                <option value="">Any</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
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
                            </div> -->

                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="find-car-input-main">
                                    <div class="row no-padding">
                                        <div class="col-xs-4">
                                            <div class="label-main">
                                                <label>Mileage</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-8">
                                            <select name="Mileage" id="" class="find-select-box">
                                              <option value="110000">Any</option>
                                              <option value="100">up to 100 miles</option>
                                              <option value="500">up to 500 miles</option>
                                              <option value="1000">up to 1,000 miles</option>
                                              <option value="5000">up to 5,000 miles</option>
                                              <option value="10000">up to 10,000 miles</option>
                                              <option value="20000">up to 20,000 miles</option>
                                              <option value="30000">up to 30,000 miles</option>
                                              <option value="40000">up to 40,000 miles</option>
                                              <option value="50000">up to 50,000 miles</option>
                                              <option value="60000">up to 60,000 miles</option>
                                              <option value="70000">up to 70,000 miles</option>
                                              <option value="80000">up to 80,000 miles</option>
                                              <option value="90000">up to 90,000 miles</option>
                                              <option value="100000">up to 100,000 miles</option>
                                              <option value="110000">over 100,000 miles</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <input type="button" onclick="searchCarsData()" class="btn-find-car-submit" value="Search Results"/>
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
                                <h2><span><strong id="totalResults">(0)</strong></span> Results <span class="span-2">Found</span></h2>
                            </div>

                    </div>


                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                        <div class="right-section-top">
                            <div class="row no-padding">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 no-padding">
                                    <div class="total-result-top">
                                        <!-- <p><span><strong id="totalResults">(0)</strong></span> Cars Found</p> -->
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 no-padding">
                                    <div class="row no-padding d-flex-center">
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-10">
                                            <div class="select-box-res">
                                                <!-- <select name="" id="">
                                                    <option value="">10 Results</option>
                                                    <option value="">20 Results</option></select>
                                                </select> -->

                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-10">
                                            <div class="select-box-price">
                                                <select name="" onchange="sortingData(this.value)" id="">
                                                    <option value="" selected disabled>Sort Cars by</option>
                                                    <option value="0">Distance</option>
                                                    <option value="1">Price (Low to high)</option>
                                                    <option value="2">Price (High to low)</option>
                                                    <option value="14">Mileage (Low - High)</option>
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
                    <!--Pagination Section Ends-->



                </div>
                </div>
            </div>
            <!--Right Section Ends-->
        </div>
    </div>
</div>
<!--Find Car Main Ends-->
<input type="hidden" id="currentPage" value="">
<input type="hidden" id="nextPage" value="">
<input type="hidden" id="previousPage" value="">
<input type="hidden" id="lastPage" value="">
<script src="https://cdn.jsdelivr.net/npm/jquery.redirect@1.1.4/jquery.redirect.min.js"></script>
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
                var doors = $('#doors'+n).val();
                if(doors){
                  doors = doors.replace('doors','');
                }else{
                  doors = "NA";
                }
                // var vehicleTransmission = $('#vehicleTransmission'+n).html();
                var vehicleMileage = $('#vehicleMileage'+n).html();
                if(vehicleMileage){
                  vehicleMileage = vehicleMileage.replace('Miles','');
                }else{
                  vehicleMileage = "NA";
                }
                var vehicleDistance = $('#vehicleDistance'+n).html();
                var vehicleTransmission = $('#vehicleTransmission'+n).html();
                var registerationInfo = $('#registrationWishlist'+n).val();
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
                  doors:doors,
                  color:'NA',
                  vehicleTransmission:vehicleTransmission,
                  vehicleMileage:vehicleMileage,
                  vehicleDistance:vehicleDistance,
                  vehicleImage:vehicleImage,
                  dealerName:dealerName,
                  // dealerPhone:dealerPhone,
                  registerationInfo:registerationInfo,
                  vehicleFuel:vehicleFuel,
                  leadId:LID
                  }
                  // console.log(data);
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
<script type="text/javascript" src="{{asset('public/js/loadCars.js')}}"></script>
@endsection
