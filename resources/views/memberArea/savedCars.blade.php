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

.selectdiv:after {
  content: '\f078';
    font: normal normal normal 14px/1 FontAwesome;
    color: #cccccc;
    right: 11px;
    top: 0px;
    height: 34px;
    padding: 15px 0px 0px 8px;
    position: absolute;
    pointer-events: none;
  }

/* IE11 hide native button (thanks Matt!) */
select::-ms-expand {
display: none;
}

.selectdiv select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  /* Add some styling */
}
.selectdiv1:after {
  content: '\f078';
    font: normal normal normal 14px/1 FontAwesome;
    color: #cccccc;
    right: 11px;
    top: 0px;
    height: 34px;
    padding: 54px 7px 0px 8px;
    position: absolute;
    pointer-events: none;
  }
.selectdiv2:after {
  content: '';
    font: normal normal normal 14px/1 FontAwesome;
    color: #cccccc;
    right: 11px;
    top: 0px;
    height: 34px;
    padding: 156px 7px 0px 8px;
    position: absolute;
    pointer-events: none;
  }
/* IE11 hide native button (thanks Matt!) */
select::-ms-expand {
display: none;
}
.selectdiv2 select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  /* Add some styling */
}
.selectdiv1 select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  /* Add some styling */
}
</style>
<div class="container-fluid no-padding1 hideOnMobile">
  <div class="row">
    <div class="col-sm-12 no-padding1">
      <div class="col-sm-2 col-xs-3 borderTriangle">
        <a href="{{url('home')}}">Home</a>
      </div>
      <div class="col-sm-2 col-xs-3 currentPage">
        <a href="{{url('saved-cars')}}">Saved Cars</a>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid searchCarContainer">
  <div class="row">

    <div class="col-xs-12 d-fx-md-center">


      <!-- <button type="submit" class="btn btn-default">Submit</button>
    </form> -->
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <h3 id="total-saved-cars">Your Cars ({!! $wishlist_count !!})</h3>
      	<hr class="your-cars-hr">

        <div id="CarsSection" class="car-section-saved">
        @foreach($saved_cars as $saved_car)
          <div class="col-sm-12 carDetail">
  <div class="col-sm-4 col-xs-12">
    <div onclick="clickToGetCar('{!! $saved_car->vehicleId !!}')" class="carImg">
      <img src="{!! $saved_car->vehicleImage !!}" alt="car image">
        <h3 id="imageCount3">
          <img src="public/images/landing/cameraIcon.png" alt="">10
          </h3>
        </div>
      </div>
      <div class="col-sm-8 col-xs-12">
        <h2 class="nameTitle" onclick="clickToGetCar('{!! $saved_car->vehicleId !!}')" id="makeModel3">{!! $saved_car->makeModel !!}</h2>
        <h3 id="vehicleTitle3">{!! $saved_car->vehicleTitle !!}</h3>
        <h2 class="amount" id="price3">{!! $saved_car->price !!}</h2>
        <div class="col-sm-12 findIconsDiv no-padding">
          <ul>
            <li>
              <img src="public/images/landing/calendarIcon.png" alt="calendar">
                <h4 id="registerationInfo3">{!! $saved_car->registerationInfo !!}</h4>
              </li>
              <li>
                <img src="public/images/landing/manualIcon.png" alt="Manual">
                  <h4 id="vehicleTransmission3">{!! $saved_car->vehicleTransmission !!}</h4>
                </li>
                <li>
                  <img src="public/images/landing/milesIcon.png" alt="Performance">
                    <h4 id="vehicleMileage3">{!! $saved_car->vehicleMileage !!}</h4>
                  </li>
                  <li>
                    <img src="public/images/landing/petrolIcon.png" alt="Petrol">
                      <h4 id="vehicleFuel3">{!! $saved_car->vehicleFuel !!}</h4>
                    </li>
                  </ul>
                  <ul>
                    <li>
                      <img class="location" src="public/images/landing/locationIcon.png" alt="location Icon">
                        <h4 id="vehicleDistance3">{!! $saved_car->vehicleDistance !!}</h4>
                      </li>
                    </ul>
                  </div>
                  <input type="hidden" class="CID" value="{!! $saved_car->id !!}">
                  <button type="button" name="button" class="btn btnWishlist saved-cars">
                    <i class="fa fa-heart remove-saved-car"></i> Remove Car
                  </button>
                  <input type="hidden" id="pageUrl3" value="/car-51301019">
                    <input type="hidden" id="vehicleId3" value="51301019">
                      <input type="hidden" id="vehicleImage3" value="https://cdn.images.autoexposure.co.uk/AETA26631/AETV23775453_1e.jpg">
                        <input type="hidden" id="dealerName3" value="Bristol Street Motors Ford Macclesfield">
                          <input type="hidden" id="dealerPhone3" value="01625 241814">
                          </div>
                        </div>
        @endforeach

        </div>

      </div>


          <div class="col-lg-4 col-md-4 col-sm-11 col-xs-11 no-padding">
              <div class="add-car-area">
                  <p class="add-car-heading">Already found a car?</p>
                  <p class="add-car-text">Save any car from any dealer into Your cars.</p>
                  <p class="add-car-text">You'll need the reg. mileage and price</p>
                  
                  <button data-toggle="modal" data-target="#myModal" class="btn btn-md btn-default btn-addcar">Add Car</button>
                  <!--Add Car Modal Starts-->
                  <!--<button data-toggle="modal" data-target="#myModal" class="btn carlinkdash">I've already found a car</button>-->
                  <!--- model ----->
                  @if(Session::has('sessionMessage'))
                      <script type="text/javascript">swal("Success", "{{ Session::get('sessionMessage') }}", "success");</script>
                  @endif
                  <div class="modal fade" id="myModal" role="dialog" style="z-index: 10000000000;">
                      <div class="modal-dialog car-found-dialog">

                          <!-- Modal content-->
                          <div class="modal-content car-found-content">
                              <div class="modal-header car-found-header">
                                  <button type="button" class="close car-found-close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Add a car you’ve found</h4>
                              </div>
                              <div class="modal-body car-found-body">
                                  <p class="car-found-top-p">Add as many cars as you want, as they’ll be added to your cars. We’ll need to verify the dealer and run some checks on them.</p>
                                  <form action="{{ route('addCar') }}" method="post">
                                    @csrf
                                    <div class="form-group car-found-group">
                                        <label class="car-found-label" for="registerationInfo">Vehicle Registration<span class="car-found-star">*</span></label>
                                        <input type="text" class="form-control car-found-textbox" name="registerationInfo" id="registerationInfo" required">
                                    </div>
                                    <div class="form-group car-found-group">
                                        <label class="car-found-label" for="price">Price<span class="car-found-star">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i>£</i></span>
                                            <input type="number" name="price" class="form-control car-found-textbox" id="price" required>
                                        </div>
                                    </div>
                                    <div class="form-group car-found-group">
                                        <label for="mileage" class="car-found-label">Mileage<span class="car-found-star">*</span></label>
                                        <input type="text" name="mileage" class="form-control car-found-textbox" id="mileage" required>
                                    </div>
                                    <div class="form-group car-found-group">
                                        <label class="car-found-label" for="reference">Name or website of dealership<span class="car-found-star">*</span></label>
                                        <input type="text" name="reference" class="form-control car-found-textbox" id="reference" requied>
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
                  <!--Add Car Modal Ends-->
              </div>
              <div class="car-valuation-area">
                  <h2 class="car-valuation-heading">Thinking of part exchange?</h2>
                  <p class="car-valuation-text">Find out how much money you could get for your current car using our free valuation tool.</p>
                  <button class="btn btn-md btn-default btn-car-valuation">Free car valuation</button>
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

}/*
    $("#toggleFilters").click(function(){
      console.log("clicked");
        $("#moreFilters").slideToggle();
    });

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
                var vehicleTransmission = $('#vehicleTransmission'+n).html();
                var vehicleMileage = $('#vehicleMileage'+n).html();
                var vehicleDistance = $('#vehicleDistance'+n).html();
                var registerationInfo = $('#registerationInfo'+n).html();
                var vehicleFuel = $('#vehicleFuel'+n).html();
                var vehicleImage = $('#vehicleImage'+n).val();
                var dealerName = $('#dealerName'+n).val();
                var dealerPhone = $('#dealerPhone'+n).val();
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
                  dealerName:dealerName,
                  dealerPhone:dealerPhone,
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
}*/

/* Remove car from wishlist start */
    $('.saved-cars').click(function(){
    var id = $(".CID").val();
    var uri = 'delete-saved-car/'+id;
    var el = this;
    $.ajax({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      type: "GET",
      url: uri,
      data: id,
      success: function(data){
         $(el).closest( ".carDetail" ).remove();
         swal("Success", "Car deleted successfully", "success");
        }
      });
    });
/* Remove car from wishlist end */
</script>
<script type="text/javascript" src="{{asset('public/js/modelsData.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/sorting.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/searchCar.js')}}"></script>
<!-- <script type="text/javascript" src="{{asset('public/js/loadCars.js')}}"></script> -->
@endsection
