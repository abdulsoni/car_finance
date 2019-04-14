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


<div class="container-fluid no-padding1 hideOnMobile">
  <div class="row">
    <div class="col-sm-12 no-padding1">
      <div class="col-sm-2 col-xs-3 borderTriangle">
        <a href="{{url('dashboard')}}">Home</a>
      </div>
      <div class="col-sm-2 col-xs-3 currentPage">
        <a href="{{url('find-car')}}">Find a Car</a>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid searchCarContainer">
  <div class="row" style="margin-right: 0px;">
    <div class="col-xs-12 resultSection d-flex-center">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-11 no-padding">
          <!-- <input type="text" class="search-left-box" placeholder="Search by keywords..."/> -->
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-padding search-right-box">
        <div class="col-sm-12 d-fx-sm-center">
          <div class="col-sm-6 col-xs-12 no-padding leftContent">
            <h3 id="totalResults">(0) Results Found</h3>
          </div>
          <div class="col-lg-3 col-ms-3 col-sm-4 col-xs-12 no-padding rightContent selectdiv">
            <select class="form-control search-select" onchange="sortingData(this.value)" id="sorting" style="height:40px;">
              <option value="0">Sort by distance</option>
              <option value="2">Highest price</option>
              <option value="1">Lowest price</option>
              <!-- <option value="3">Most recently added</option>
              <option value="7">Greatest price reduction</option> -->
              <option value="14">Mileage low - high</option>
              <!-- <option value="15">Mileage high - low</option> -->
              <!-- <option value="16">Age low - high</option>
              <option value="17">Age high - low</option>
              <option value="18">Best MPG</option>
              <option value="19">Lowest annual tax</option> -->
            </select>
          </div>
            <div class="float"></div>
        </div>
        <div class="col-xs-12">
            <hr>
        </div>
      </div>
    </div>
    <div class="col-xs-12 findCarContent d-fx-sm-center">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-11 form-border" >
        <div class="leftSidebar">
        <form id="findCarForm" method="post">
          <div class="col-sm-12 no-padding">
            <div class="col-sm-6">
                <div class="form-group">
                  <label for="email">Postcode</label>
                  <?php $PstCode = \App\CarAddress::where('uid',Auth::user()->id)->orderBy('id','asc')->first()?>
                  @if($PstCode->postcode=='')
                  <input type="text" class="form-control" id="postcode" placeholder="" value="{{$PstCode->postcode}}" name="postcode">
                  @else
                  <input type="text" class="form-control" id="postcode" placeholder="" value="{{$PstCode->postcode}}" name="postcode">
                  @endif
                </div>
                <div class="form-group selectdiv2">
                  <label for="price">Price</label>
                  <select class="form-control" name="MinPrice" id="btnPrice">
                    <option value="500">Min Price (Any)</option>
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

            <div class="col-sm-6 ">
              <div class="form-group selectdiv1">
                <label for="distance">Distance</label>
                <select class="form-control" name="distance" id="distance">
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
              <div class="form-group selectdiv1">
                <label for="price">&nbsp;</label>
                <select class="form-control" name="MaxPrice" id="btnPrice">
                  <option value="1000000">Max Price (Any)</option>
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
            <div class="findCarBtns col-sm-12">
              <h3>Make and Model</h3>
              <div class="form-group">
                <select class="form-control" name="makes" id="btnMake">
                  <option value="">Makes</option>
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
              <div class="form-group">
                <select class="form-control" name="model" id="btnModel">
                  <option value="" sleected >Models</option>
                </select>
              </div>
            </div>
          </div>


          <div class="col-sm-12 no-padding">
            <div class="col-sm-6">
                <div class="form-group selectdiv2">
                  <label for="email">Age</label>
                  <select class="form-control" name="minAge" id="btnPrice">
                    <option value="1">Minimum Age</option>
                    <option value="1">up to 1 year old</option>
                    <option value="2">up to 2 years old</option>
                    <option value="3">up to 3 years old</option>
                    <option value="4">up to 4 years old</option>
                    <option value="5">up to 5 years old</option>
                    <option value="6">up to 6 years old</option>
                    <option value="7">up to 7 years old</option>
                    <option value="8">up to 8 years old</option>
                    <option value="9">up to 9 years old</option>
                    <option value="10">up to 10 years old</option>
                    <option value="11">over 10 years old</option>
                  </select>
                </div>
                <div class="form-group selectdiv2">
                  <label for="mileage">Mileage</label>
                    <select class="form-control" name="minMileage" id="btnPrice">
                      <option value="100">Min Mileage (Any)</option>
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

            <div class="col-sm-6 ">
              <div class="form-group selectdiv1">
                <label for="distance">&nbsp;</label>
                <select class="form-control" name="maxAge" id="btnPrice">
                  <option value="11">Maximum Age</option>
                  <option value="1">up to 1 year old</option>
                  <option value="2">up to 2 years old</option>
                  <option value="3">up to 3 years old</option>
                  <option value="4">up to 4 years old</option>
                  <option value="5">up to 5 years old</option>
                  <option value="6">up to 6 years old</option>
                  <option value="7">up to 7 years old</option>
                  <option value="8">up to 8 years old</option>
                  <option value="9">up to 9 years old</option>
                  <option value="10">up to 10 years old</option>
                  <option value="11">over 10 years old</option>
                </select>
              </div>
              <div class="form-group selectdiv1">
                <label for="price">&nbsp;</label>
                <select class="form-control" name="Mileage" id="btnPrice">
                  <option value="110000">Max Mileage (Any)</option>
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

          <!-- <div class="col-sm-12 no-padding" id="moreFilters" style="display:none">
            <div class="col-sm-12 no-padding" style="margin: 15px 0px;">
              <h5 class="fuelLabel">Fuel Type</h5>
              <div class="col-sm-6">
                <label class="lablFuel">
                    <input type="checkbox" id="any" name="chk" value="">
                    <div>
                        <h3>Any</h3>
                    </div>
                </label>
              </div>
              <div class="col-sm-6">
                <label class="lablFuel">
                    <input type="checkbox" id="bio" name="chk" value="4">
                    <div>
                        <h3>Bio</h3>
                    </div>
                </label>
              </div>
              <div class="col-sm-6">
                <label class="lablFuel">
                    <input type="checkbox" id="diesel" name="chk" value="2">
                    <div>
                        <h3>Diesel</h3>
                    </div>
                </label>
              </div>
              <div class="col-sm-6">
                <label class="lablFuel">
                    <input type="checkbox" id="electric" name="chk" value="3">
                    <div>
                        <h3>Electric</h3>
                    </div>
                </label>
              </div>
              <div class="col-sm-6">
                <label class="lablFuel">
                    <input type="checkbox" id="lpg" name="chk" value="1">
                    <div>
                        <h3>LPG</h3>
                    </div>
                </label>
              </div>
              <div class="col-sm-6">
                <label class="lablFuel">
                    <input type="checkbox" id="petrol" name="chk" value="5">
                    <div>
                        <h3>Petrol</h3>
                    </div>
                </label>
              </div>

            </div>
            <div class="col-sm-6">
                <div class="form-group">
                  <label for="email">Colour</label>
                  <select class="form-control" name="colour" id="btnPrice">
                          <option value="">Any colour</option>
                              <option value="black">Black</option>
                              <option value="blue">Blue</option>
                              <option value="green">Green</option>
                              <option value="red">Red</option>
                              <option value="silver">Silver</option>
                              <option value="white">White</option>
                              <option value="yellow">Yellow</option>
                              <option value="grey">Grey</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="mileage">Body Style</label>
                    <select class="form-control" name="bodyStyle" id="btnPrice">
                        <option value="">Any</option>
                            <option value="4x4">4x4</option>
                            <option value="convertible">Convertible</option>
                            <option value="coupe">Coupe</option>
                            <option value="estate">Estate</option>
                            <option value="hatchback">Hatchback</option>
                            <option value="pick-up">Pick-Up</option>
                            <option value="people carrier">People Carrier</option>
                            <option value="not supplied">Not Supplied</option>
                    </select>
                </div>

            </div>

            <div class="col-sm-6 ">
              <div class="form-group">
                <label for="distance">Transmission</label>
                <select class="form-control" name="transmission" id="btnPrice">
                        <option value="">Any</option>
                        <option value="Automatic">Automatic</option>
                        <option value="Manual">Manual</option>
                </select>
              </div>
              <div class="form-group">
                <label for="price">Doors</label>
                <select class="form-control" name="doors" id="btnPrice">
                        <option value="">Any</option>
                        <option value="2 doors">2</option>
                        <option value="3 doors">3</option>
                        <option value="4 doors">4</option>
                        <option value="5 doors">5</option>
                </select>
              </div>
            </div>

          </div>
          <div class="col-sm-12">
            <h3>More Filters</h3>
          </div> -->
        <div class="col-sm-12 no-padding btnCenter">
          <button type="button" onclick="searchCarsData()" name="search" class="btn searchButton">Search</button>
          <button type="reset" onclick="resetForm()" value="Reset" id="reset"><i class="fa fa-history"> Reset</i></button>
        </div>
        </form>
        </div>
      </div>

      <!-- <button type="submit" class="btn btn-default">Submit</button>
    </form> -->
      <div class="col-lg-8 col-md-8">
        <div id="fetchingData" class="col-sm-12">
          <img src="{{ asset('public/images/fetchingData.svg') }}" alt="Fetching" id="fetchingData">
          <h2>Loading Cars</h2>
        </div>
        <div id="CarsSection" class="car-section-main car-section-search">

        </div>

      </div>
    </div>
  </div>
  <div class="container containerPagination">

  </div>
</div>
</div>
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
