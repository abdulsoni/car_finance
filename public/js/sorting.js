function checkError(){
  $('.carImg>img').on("error", function () {
  this.src="https://"+window.location.hostname+"/public/images/placeholderCar.png";
  });
}
function sortingData(s){
    $('#fetchingData').show();
    $('#CarsDiv').hide();
    $('.containerPagination').empty();
    $('#CarsSection').empty();
  var postcode = $('[name=postcode]').val();
  var distance = $('[name=distance]').val();
  distance = parseInt(distance);
  distance = distance ? distance : 200;
  var minPrice = $('[name=MinPrice]').val();
  minPrice = parseInt(minPrice);
  minPrice = minPrice ? minPrice : 500;
  var maxPrice = $('[name=MaxPrice]').val();
    maxPrice = parseInt(maxPrice);
      maxPrice = maxPrice ? maxPrice : 5000;
  var makes = $('[name=makes]').val();
  makes = makes ? makes : "Ford";
  var model = $('[name=model]').val();
    model = model ? [model] : [];
  var minAge = $('[name=minAge]').val();
    minAge = parseInt(minAge);
    minAge = minAge ? minAge : -1;
  var maxAge = $('[name=maxAge]').val();
    maxAge = parseInt(maxAge);
    maxAge = maxAge ? maxAge : 11;
  var minMileage = $('[name=minMileage]').val();
    minMileage = parseInt(minMileage);
    minMileage = minMileage ? minMileage : -1;
  var maxMileage = $('[name=Mileage]').val();
    maxMileage = parseInt(maxMileage);
    maxMileage = maxMileage ? maxMileage : -1;
  var color = $('[name=colour]').val();
  color = color ? [color] : [];
  var transmission = $('[name=transmission]').val();
  transmission = transmission ? [transmission] : [];
  var bodyStyle = $('[name=bodyStyle]').val();
  bodyStyle = bodyStyle ? [bodyStyle] : [];
  var doors = $('[name=doors]').val();
  doors = doors ? [parseInt(doors)] : [];
  var fuelType =[];
  $.each($("input[name='chk']:checked"), function(){
    fuelType.push($(this).val());
});
  var sortOrder = parseInt(s);
 fuelType = fuelType.join(',');
 fuelType = fuelType ? [parseInt(fuelType)] : [];
var postal = localStorage.getItem('postalCode');
if(postcode==''){
  postcode = 'BH65JB';
}

if(/\s/.test(postcode)){
  postcode = postcode.replace(/ /g,'');
  // console.log("Have Space");
}
      if(postal!='' || postal!=null){
          var jsonData = {
                    "BodyStyles": bodyStyle,
                    "Mileage": maxMileage,
                    "MinPrice": minPrice,
                    "MaxPrice": maxPrice,
                    "Seats": [],
                   "SelectedInsuranceGroup": "*",
                    "Transmissions": transmission,
                    "MakeModels": [
                      {
                        "Trims": [],
                        "Value": makes,
                        "Models": model
                      }
                    ],
                    "PaginationCurrentPage": 1,
                    "Colours": color,
                    "Doors": doors,
                    "FuelTypes": fuelType,
                    "PostCode": postcode,
                    "Age": maxAge,
                    "SortOrder":sortOrder,
                    "Distance": distance,
                    "IsExDemo": false,
                    "IsPreReg": false
                  };
                  var data = JSON.stringify(jsonData)
                  var items =[];
                  var carsData =[];
                  var carAPI = 'https://www.sfeed.co.uk/api/search';
                  localStorage.setItem('cPage',1);
                  $('#CarsSection').empty();
                  $('#totalResults').empty();

                  $.ajax({
                    type: "POST",
                    data:data,
                    beforeSend: function (jqXHR) {
                        jqXHR.setRequestHeader('Authorization', 'Bearer bTB0MDckQzdhUDNy');
                        jqXHR.setRequestHeader('Accept', 'application/json');
                        jqXHR.setRequestHeader('Content-Type', 'application/json');
                    },
                    url:carAPI,
                    dataType: "json",
                    success: function(data) {
                      $('.containerPagination').empty();
                      var lastPage =data.initialPagination.LastPage;
                        $('.containerPagination').bootpag({
                           total: lastPage,
                           page:localStorage.getItem('cPage'),
                           maxVisible: 6,
                           next: 'Next >>',
                           prev: '<< Previous'
                        }).on('page', function(event, num){
                          $('#fetchingData').hide();
                          $('#CarsDiv').show();
                          localStorage.setItem('cPage',num);
                          $('#CarsSection').empty();
                          document.body.scrollTop = 250;
                          document.documentElement.scrollTop = 250;
                        var postal = localStorage.getItem('postalCode')
                          var jsonData1 = {
                                    // "BodyStyles": bodyStyle,
                                    "Mileage": maxMileage,
                                    "MinPrice": minPrice,
                                    "MaxPrice": maxPrice,
                                    // "Seats": [],
                                   // "SelectedInsuranceGroup": "*",
                                    "Transmissions": transmission,
                                    "MakeModels": [
                                      {
                                        // "Trims": [],
                                        "Value": makes,
                                        "Models": model
                                      }
                                    ],
                                    "PaginationCurrentPage": 1,
                                    // "Colours": color,
                                    // "Doors": doors,
                                    "FuelTypes": fuelType,
                                    "PostCode": postcode,
                                    // "Age": maxAge,
                                    "SortOrder":sortOrder,
                                    "Distance": distance,
                                    // "IsExDemo": false,
                                    // "IsPreReg": false
                                  };
                                    $('#fetchingData').show();
                                    $('#CarsDiv').hide();
                                  var dataJ = JSON.stringify(jsonData)
                                  var items1 =[];
                                  var carsData1 =[];
                                  var carAPIS = 'https://www.sfeed.co.uk/api/search/next/'+num+'/'+lastPage;
                                  $.ajax({
                                    type: "POST",
                                    data:dataJ,
                                    beforeSend: function (jqXHR) {
                                        jqXHR.setRequestHeader('Authorization', 'Bearer bTB0MDckQzdhUDNy');
                                        jqXHR.setRequestHeader('Accept', 'application/json');
                                        jqXHR.setRequestHeader('Content-Type', 'application/json');
                                    },
                                    url:carAPIS,
                                    dataType: "json",
                                    success: function(dataPagi) {
                                      document.body.scrollTop = 250;
                                      document.documentElement.scrollTop = 250;
                                        $('#fetchingData').hide();
                                        $('#CarsDiv').show();
                                      localStorage.setItem('lastPage',lastPage);
                                      $('.containerPagination').bootpag({
                                         total: lastPage,
                                         page: localStorage.getItem('cPage'),
                                         maxVisible: 6,
                                         next: 'Next >>',
                                         prev: '<< Previous'
                                      }).on('page', function(event, num){

                                      });
                                        $('#currentPage').val(1);
                                        $('#nextPage').val(2);
                                        $('#lastPage').val(lastPage);
                                        $('#previousPage').val(0);
                                      $.each(dataPagi, function(i, item) {
                                        items1.push(item)
                                      });
                                      $.each(items1[6], function(i, cars) {
                                        carsData1.push(cars)
                                      });
                                      $('#fetchingData').hide();
                                      $('#CarsDiv').show();
                                      $('.containerPagination').show();
                                    // console.log("Total Records: "+items[0].TotalRecords);
                                    for(var i = 0; i<=carsData1.length; i++){
                                      checkError();
                                      // if(carsData1[i].ObjectType=="UsedVehicleResult"){
                                        var doors = carsData1[i].doors;
                                        if(!doors){
                                          doors = '-';
                                        }else{
                                          doors = carsData1[i].doors;
                                          doors = doors.replace('doors','');
                                        }
                                          var car = '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-detail"><div class="find-car-detail-inner"><div class="row no-padding no-margin"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="row no-padding no-margin"><div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="find-car-image" onClick=clickToGetCar("'+carsData1[i].VehicleId+'")><img src='+images+'  onClick=clickToGetCar("'+carsData1[i].VehicleId+'") alt="car image" class="img-responsive"/></div></div><div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="find-car-desc-main" onClick=clickToGetCar("'+carsData1[i].VehicleId+'")><div class="row no-padding no-margin"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-title"><p id="makeModel'+i+'">'+carsData1[i].Manufacturer+' '+carsData1[i].Model+'</p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-price"><p>Price £ '+carsData1[i].GBPPrice.slice(1)+'</p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-desc"><div class="row no-padding no-margin"><div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 no-padding"><div class="find-car-desc-label"><p>Registration</p><p>Colour</p><p>Doors</p><p>Transmission</p><p>Mileage</p></div></div><div class="col-xs-1 no-padding"><div class="find-car-desc-label"><p>:</p><p>:</p><p>:</p><p>:</p><p>:</p></div></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding"><div class="find-car-desc-data"><p>'+carsData1[i].RegistrationYear+'</p><p>Metallic Red</p><p>'+doors+'</p><p id="vehicleTransmission'+i+'">'+carsData1[i].Transmission+'</p><p id="vehicleMileage'+i+'">'+carsData1[i].MileageInt+'</p></div></div></div></div></div></div></div></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="wishlist-section-main"><div class="wishlist-inner"><div class="wishlist-content"><div class="btn-wishlist-main text-center"><a href="javascript:void(0)" onclick="addToWishlist('+i+')" class="btn-wishlist">Wishlist</a></div></div></div></div></div></div></div></div></div><div class="row no-padding no-margin"><div class="col-xs-12 no-padding"><div class="need-car-section"><p class="text-center"> Need a hand? Call us: <span>01202 286500</span></p></div></div></div></div></div><div class="float"></div><input type="hidden" id="pageUrl'+i+'" value="'+carsData1[i].DetailsPageUrl+'"><input type="hidden" id="vehicleId'+i+'" value="'+carsData1[i].VehicleId+'"><input type="hidden" id="vehicleImage'+i+'" value="'+carsData1[i].MainImage.Medium+'"><input type="hidden" id="dealerName'+i+'" value="'+carsData1[i].Dealer.Name+'"><input type="hidden" id="dealerPhone'+i+'" value="'+carsData1[i].Dealer.PhoneNumber+'"></div></div><input type="hidden" id="doors'+i+'" value="'+carsData1[i].doors+'"><input type="hidden" id="registrationWishlist'+i+'" value="'+carsData1[i].RegistrationYear+'">';
                                        var carData = '';
                                        var PagData ='';
                                        var page = '';
                                        $('#CarsSection').append(car);
                                        // $('#totalResults').html("("+items[0].TotalRecords+ ") Results Found");
                                        $('#totalResults').html("("+String(items[0].TotalRecords).replace(/(.)(?=(\d{3})+$)/g,'$1,')+ ")");

                                          $('#paginationUl').append(PagData);

                                      // }
                                      // else{
                                      //   // console.log(carsData1[i]);
                                      // }
                                    }
                                      // var PagData = '<li onclick="getClicked('+page+')" id="active'+page+'"><a href="#">'+page+'</a></li>';

                                    },error: function(err){
                                    // handle errors
                                    console.log(err);
                                    },
                                  });

                        });

                        $('#currentPage').val(1);
                        $('#nextPage').val(2);
                        $('#lastPage').val(lastPage);
                        $('#previousPage').val(0);
                      $.each(data, function(i, item) {
                        items.push(item)
                      });
                      $.each(items[1], function(i, cars) {
                        carsData.push(cars)
                      });
                      $('#fetchingData').hide();
                      $('#CarsDiv').show();
                      $('.containerPagination').show();
                    // console.log("Total Records: "+items[0].TotalRecords);
                    for(var i = 0; i<=carsData.length; i++){
                      checkError();
                      // if(carsData[i].ObjectType=="UsedVehicleResult"){
                      var doors = carsData[i].doors;
                      if(!doors){
                        doors = '-';
                      }else{
                        doors = carsData[i].doors;
                        doors = doors.replace('doors','');
                      }
                      var images = carsData[i].MainImage.Medium;
                      var car = '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-detail"><div class="find-car-detail-inner"><div class="row no-padding no-margin"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="row no-padding no-margin"><div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="find-car-image" onClick=clickToGetCar("'+carsData[i].VehicleId+'")><img src='+images+'  onClick=clickToGetCar("'+carsData[i].VehicleId+'") alt="car image" class="img-responsive"/></div></div><div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="find-car-desc-main" onClick=clickToGetCar("'+carsData[i].VehicleId+'")><div class="row no-padding no-margin"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-title"><p id="makeModel'+i+'">'+carsData[i].Manufacturer+' '+carsData[i].Model+'</p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-price"><p>Price £ '+carsData[i].GBPPrice.slice(1)+'</p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-desc"><div class="row no-padding no-margin"><div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 no-padding"><div class="find-car-desc-label"><p>Registration</p><p>Colour</p><p>Doors</p><p>Transmission</p><p>Mileage</p></div></div><div class="col-xs-1 no-padding"><div class="find-car-desc-label"><p>:</p><p>:</p><p>:</p><p>:</p><p>:</p></div></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding"><div class="find-car-desc-data"><p>'+carsData[i].RegistrationYear+'</p><p>Metallic Red</p><p>'+doors+'</p><p id="vehicleTransmission'+i+'">'+carsData[i].Transmission+'</p><p id="vehicleMileage'+i+'">'+carsData[i].MileageInt+'</p></div></div></div></div></div></div></div></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="wishlist-section-main"><div class="wishlist-inner"><div class="wishlist-content"><div class="btn-wishlist-main text-center"><a href="javascript:void(0)" onclick="addToWishlist('+i+')" class="btn-wishlist">Wishlist</a></div></div></div></div></div></div></div></div></div><div class="row no-padding no-margin"><div class="col-xs-12 no-padding"><div class="need-car-section"><p class="text-center"> Need a hand? Call us: <span>01202 286500</span></p></div></div></div></div></div><div class="float"></div><input type="hidden" id="pageUrl'+i+'" value="'+carsData[i].DetailsPageUrl+'"><input type="hidden" id="vehicleId'+i+'" value="'+carsData[i].VehicleId+'"><input type="hidden" id="vehicleImage'+i+'" value="'+carsData[i].MainImage.Medium+'"><input type="hidden" id="dealerName'+i+'" value="'+carsData[i].Dealer.Name+'"><input type="hidden" id="dealerPhone'+i+'" value="'+carsData[i].Dealer.PhoneNumber+'"></div></div><input type="hidden" id="doors'+i+'" value="'+carsData[i].doors+'"><input type="hidden" id="registrationWishlist'+i+'" value="'+carsData[i].RegistrationYear+'">';
                        var carData = '';
                        var PagData ='';
                        var page = '';
                        $('#CarsSection').append(car);
                        // $('#totalResults').html("("+items[0].TotalRecords+ ") Results Found");
                        $('#totalResults').html("("+String(items[0].TotalRecords).replace(/(.)(?=(\d{3})+$)/g,'$1,')+ ")");
                          $('#paginationUl').append(PagData);
                      // }
                      // else{
                      //   // console.log(carsData[i]);
                      // }
                    }
                      // var PagData = '<li onclick="getClicked('+page+')" id="active'+page+'"><a href="#">'+page+'</a></li>';

                    },error: function(err){
                    // handle errors
                    console.log(err);
                    },
                  });
        } //if postcode != null
}
