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
        <!-- Breadcrumbs start-->

        <div class="container-fluid no-padding1 hideOnMobile">
          <div class="row">
            <div class="col-sm-12 no-padding1">
              <div class="col-sm-2 col-xs-3 borderTriangle">
                <a href="{{url('/')}}">Home</a>
              </div>
              <div class="col-sm-2 col-xs-3 borderTriangle">
                <a href="{{url('new-car-offers')}}">New Offers</a>
              </div>
              <div class="col-sm-2 col-xs-3 currentPage">
                <a href="#" id="breadTitle"></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Breadcrumbs end-->
        <div class="find-car-loading-main" id="fetchingData">
          <div class="loading-cars-image">
            <img src="{{ asset('public/images/car-loading.gif') }}"/>
            <h2 class="loading-car-gif">Loading cars...</h2>
          </div>
        </div>
      <!--display car start-->
      <div class="row no-padding no-margin" id='displayCarSection' style='display:none'>
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

                                                <!-- Below are the images in the gallery -->
                                                  <div id="slideshow" class="fullscreen" style='height: 32.4em !important;'>
                                                      <div id="img-1" data-img-id="1" class="img-wrapper active">
                                                          <!-- <img src="{{asset('public/images/membersarea/display-car-test.png')}}" class="img-responsive"> -->
                                                      </div>
                                                      <!-- <div id="img-2" data-img-id="2" class="img-wrapper" >
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
                                                      <!-- <div class="thumbs-container bottom">
                                                          <div id="prev-btn" class="prev">
                                                              <img src="{{asset('public/images/membersarea/icon-arrow-left-display.png')}}" alt=""/>
                                                          </div>

                                                          <ul class="thumbs">
                                                              <li data-thumb-id="1" id="thumb1" class="thumb active">
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
                                                      </div> -->
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
                                                                          <p id='registration'></p>
                                                                          <p id='leters'></p>
                                                                          <p id='colorTable'></p>
                                                                          <p id='doors'></p>
                                                                          <p id='transmissionTable'></p>
                                                                          <p id='mileageTable'></p>
                                                                          <p id='yearTable'></p>
                                                                          <p id='bodyStyleTable'></p>
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
                                                              <a href="javascript:void(0)" onclick="addToWishlist()" class="btn-wishlist">Wishlist</a>
                                                          </div>
                                                          <div class="btn-wishlist-main text-center">
                                                              <a href="javascript:void(0)" id="getServiceHistory" class="btn-service">Service History</a>
                                                          </div>
                                                          <div class="btn-wishlist-main text-center">
                                                              <a href="javascript:void(0)" id="capSpecification" class="btn-specification">Cap Specification</a>
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

                          <div class="row no-padding no-margin">
                            <div class="col-sm-12 table-responsive collapse" id="serviceHisory">

                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="row no-padding no-margin">
                    <div class="col-sm-12 no-padding1" id="capInfo" style="display:none">
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
                                                      <img src="{{asset('public/images/membersarea/icon-keyfeature-3.png')}}" class="img-responsive" alt=""/>
                                                  </div>
                                                  <div class="key-feature-box-title"><p class="text-center" id='bodyStyle'></p></div>
                                              </div>
                                          </div>

                                          <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding">
                                              <div class="key-feature-box">
                                                  <div class="key-feature-box-img">
                                                      <img src="{{asset('public/images/membersarea/icon-keyfeature-4.png')}}" class="img-responsive" alt=""/>
                                                  </div>
                                                  <div class="key-feature-box-title"><p class="text-center" id='mileageFeature'></p></div>
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
                  <input type="hidden" id='makesWishlist'/>
                  <input type="hidden" id='priceWishlist'/>
                  <input type="hidden" id='registrationWishlist'/>
                  <input type="hidden" id='imageWishlist'/>
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

              </div>
          </div>
      </div>


      </div>

        <input type="hidden" id="leadId" value="<?php if(isset($_SESSION['leadID'])){echo $_SESSION['leadID'];} ?>">
        <input type="hidden" id="vehicleId" value="">
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
        <script type="text/javascript" src="{{asset('public/js/gallery.js')}}"></script>
        <input type="hidden" id='capId'>
      <!--display car end-->

      <script type="text/javascript">
      var proxy ="https://cors-anywhere.herokuapp.com/";
      var empUrl = 'http://68.183.141.175/mfl-api.php?regno={{$CarId}}';
      function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      }
      $(document).ready(function(){
      document.body.scrollTop = 80;
      document.documentElement.scrollTop = 80;
      $('#fetchingData').show();
      var images =[];
      var thumbnail = [];
      var i = '';
      $.ajax({
        type: "GET",
        url:proxy+""+empUrl,
        beforeSend: function(request) {
          request.setRequestHeader("Accept", 'application/json');
        },
        success: function(response) {
          response = response.replace(/&quot;/g, '"');
          response = response.replace(/&gt;/g, '>');
          response = response.replace(/&lt;/g, '<');
          response = response.replace(/\"/g, '"');
          response = response.replace(/&amp;/g, '&');
          var finalData = JSON.parse(response);
          $('#serviceHisory').append(finalData[0].service_history_html);
          $('#fetchingData').hide();
          $('.displayPageContainer').show();
          $('#displayCarSection').show();
          // $.each(response.Images, function(i, item) {
          //   images.push(item);
          // });
          //
          // for(i=0; i<images.length; i++){
          //   var mainImage = images[i].Normal;
          //   var thumbs = images[i].Thumbnail;
          //   var imagesSlider = '<img alt="Image " src="'+thumbs+'" data-image="'+mainImage+'" data-description="Total Images '+images.length+'">';
          //   $('#gallery').append(imagesSlider);
          //
          // }
          // var features = response.vehicleFeatures.map(x=>{
          //          return "<div class='col-sm-4'><h5 class='featuresText'><i class='fa fa-check featuresCheck'>&nbsp;&nbsp; </i>" +x+"</h5></div>";
          // });
          // $('#carFeatures').html(features);
          // $("#gallery").unitegallery();
          var makeModel = finalData[0].make;
          var reg = finalData[0].year+'('+finalData[0].regno+')';
          var desc = finalData.Description;
          var price = "Price £ "+finalData[0].price;
          // desc = desc.replace("��", '£');
          // price = price.replace("��", '£');
          $('#bodyStyle').html(finalData[0].body);
          $('#leters').html(finalData[0].engine_capacity+" L");
          $('#engine').html(finalData[0].engine_capacity+" L");
          $('#mileageFeature').html(finalData[0].mileage+' Miles');
          $('#transmission').html(finalData[0].transmission);
          $('#registrationFeatures').html(finalData[0].year);
          $('#registration').html(reg);
          $('#fuelType').html(finalData[0].fuel);
          $('#fuel').html(finalData[0].fuel);
          $('#price').html(numberWithCommas(price));
          $('#breadTitle').show();
          $('#breadTitle').html(finalData[0].make);
          $('#vehicleTitles').html(finalData[0].model);
          $('#summaryData').html(desc);
          $('#vehicleId').html(finalData[0].regno);
          $('#makes').html(finalData[0].make);
          $('#makesWishlist').val(finalData[0].make);
          $('#priceWishlist').val(finalData[0].price);
          $('#registrationWishlist').val(finalData[0].regno);
          $('#imageWishlist').val(finalData[0].image_links);
          var color =finalData[0].color;
          var doors =finalData[0].door_number;
          var capId = finalData[0].cap_id;
          var bodyStyle = finalData[0].body;
          var transmission = finalData[0].transmission;
          var fuel = finalData[0].fuel;
          var mileage = finalData[0].mileage;
          var bhp = finalData[0].bhp;
          var mileageDate = finalData[0].mileage_date;
          var capacity = finalData[0].engine_capacity;
          var vin = finalData[0].vin;
          var agreement = finalData[0].agreement_start;
          var door = finalData[0].door_number;
          var location = finalData[0].location;

          var img = "<img src='"+finalData[0].image_links+"' alt='car image' style='width:100%;height: 300px;object-fit:contain'/>"
          $('#color').html(color);
          $('#doors').html(doors);
          $('#img-1').html(img);
          $('#thumb1').html(img);
          $('#colorTable').html(color);
          $('#mileageTable').html(mileage);
          $('#transmissionTable').html(transmission);
          $('#fuelTable').html(fuel);
          $('#bodyStyleTable').html(bodyStyle);
          $('#doorsTable').html(door);
          $('#mileageDateTable').html(mileageDate);
          $('#capacityTable').html(capacity);
          $('#vinTable').html(vin);
          $('#agreementTable').html(agreement);
          $('#bhpTable').html(bhp);
          $('#locationTable').html(location);
          $('#capId').val(finalData[0].cap_id);
          $('#yearTable').html(finalData[0].year);
          callCapSpecifications();
        }

      });
    });

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
              window.location.href='{{ route('login') }}';
          });
        }
        else{
          $('#modalCall').modal('show');
        }
      }
      // $('#capSpecification').click(function(){
      //   var capId = $('#capId').val();
      //   window.open("{{url("cap-info")}}/"+capId,'_blank');
      // });
      $('#getServiceHistory').click(function(){
         $('#serviceHisory').slideToggle('slow');
        var elmnt = document.getElementById("serviceHisory");
        elmnt.scrollIntoView();
    });
      $('#capSpecification').click(function(){
         $('#capInfo').slideToggle('slow');
        var elmnt = document.getElementById("capInfo");
        elmnt.scrollIntoView();
    });
    function addToWishlist(n){
      swal({
        title: "Unauthorized",
        text: "Please login to your account!",
        icon: "error",
        button: true,
        dangerMode: true,
      })
      .then((willDelete) => {
          window.location.href='{{url('login')}}';
      });
    }

    $('#postcode').keyup(function() {
      $(this).val($(this).val().replace(/ +?/g, ''));
    });

    function callCapSpecifications()
    {
      var capId = $('#capId').val();
      var proxy ="https://cors-anywhere.herokuapp.com/";
      var capUrl = "http://www.capnetwork.co.uk/motability/lookup1.aspx";
      var data = {
        "_xsrftoken":"XvPhaRGf",
        "Post_SubID":"77905",
        "Post_BorderCol":"17232E",
        "Post_FillCol":"17232E",
        "Post_Password":"Mota77905",
        "Post_Database":"CAR",
        "Post_iD":capId,
        "Post_LookupDate":"21/12/2018"
      }
      $.ajax({
        type: "POST",
        url:proxy+""+capUrl,
        data:data,
        beforeSend: function(request) {
          request.setRequestHeader("Accept", 'application/json');
        },
        success: function(response) {
          $('#capInfo').append(response);
          var imgsrc = $('#CarImage').attr('src');
          imgsrc = "http://www.capnetwork.co.uk/motability/"+imgsrc
           $('#CarImage').attr('src',imgsrc);
           $('#info>img').attr('src','{{asset('public/images/CAP.gif')}}');
          // console.log(response);
        }
      });
    }
    </script>
@endsection
