function checkError(){
  $('.carImg>img').on("error", function () {
  this.src="https://"+window.location.hostname+"/public/images/placeholderCar.png";
  });
}
function searchCarsData(){
  var postcode = $('[name=postcode]').val().toUpperCase();
  if(postcode==''){
    postcode = 'BH65JB';
  }

  if(/\s/.test(postcode)){
    postcode = postcode.replace(/ /g,'');
    // console.log("Have Space");
  }

  var distance = $('[name=distance]').val();
  distance = parseInt(distance);
  var minPrice = $('[name=MinPrice]').val();
  minPrice = parseInt(minPrice);
  var maxPrice = $('[name=MaxPrice]').val();
    maxPrice = parseInt(maxPrice);
  var makes = $('[name=makes]').val();
  var model = $('[name=model]').val();
    model = model ? [model] : [];
  var minAge = $('[name=minAge]').val();
    minAge = parseInt(minAge);
  var maxAge = $('[name=maxAge]').val();
    maxAge = parseInt(maxAge);
  var minMileage = $('[name=minMileage]').val();
    minMileage = parseInt(minMileage);
  var maxMileage = $('[name=Mileage]').val();
    maxMileage = parseInt(maxMileage);
  var color = $('[name=colour]').val();
  color = color ? [color] : [];
  var transmission = $('[name=transmission]').val();
  transmission = transmission ? [transmission] : [];
  var bodyStyle = $('[name=bodyStyle]').val();
  bodyStyle = bodyStyle ? [parseInt(bodyStyle)] : [];
  var doors = $('[name=doors]').val();
  doors = doors ? [parseInt(doors)] : [];
  var fuelType =[];
  $.each($("input[name='chk']:checked"), function(){
    fuelType.push($(this).val());
});

 fuelType = fuelType.join(',');
 fuelType = fuelType ? [parseInt(fuelType)] : [];

    var searchData = {
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
    // "Colours": color,
    // "Doors": doors,
    "FuelTypes": fuelType,
    "PostCode": postcode,
    // "Age": maxAge,
    "SortOrder": 0,
    "Distance": distance,
    // "IsExDemo": false,
    // "IsPreReg": false
  }

  searchData = JSON.stringify(searchData);
  var items =[];
  var carsData =[];
  var carAPI = 'https://www.sfeed.co.uk/api/search';
  document.body.scrollTop = 250;
  document.documentElement.scrollTop = 250;
  localStorage.setItem('cPage',1);

if(postcode==''){

  swal({
      title: "Warning",
      text: "Postcode is mandatory!",
      icon: "warning",
      button: true,
      dangerMode: true,
    })
}else{

  $('#CarsSection').empty();
  $('.containerPagination').empty();
  $('#fetchingData').show();
  $('#CarsDiv').hide();
  $('#totalResults').html("(0)");
  $.ajax({
    type: "POST",
    data:searchData,
    beforeSend: function (jqXHR) {
        jqXHR.setRequestHeader('Authorization', 'Bearer bTB0MDckQzdhUDNy');
        jqXHR.setRequestHeader('Accept', 'application/json');
        jqXHR.setRequestHeader('Content-Type', 'application/json');
    },
    url:carAPI,
    dataType: "json",
    success: function(data) {
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
                    "Colours": color,
                    "Doors": doors,
                    "FuelTypes": fuelType,
                    "PostCode": postcode,
                    "Age": maxAge,
                    "SortOrder": 0,
                    "Distance": distance,
                    "IsExDemo": false,
                    "IsPreReg": false
                  };
                    $('#fetchingData').show();
                    $('#CarsDiv').hide();
                  var dataJ = JSON.stringify(jsonData1)
                  // console.log(dataJ);
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
                        $('.containerPagination').empty();
                      localStorage.setItem('lastPage',lastPage);

                        $('#currentPage').val(1);
                        $('#nextPage').val(2);
                        $('#lastPage').val(lastPage);
                        $('#previousPage').val(0);
                      $.each(dataPagi, function(i, item) {
                        items1.push(item)
                      });
                      $.each(items1[1], function(i, cars) {
                        carsData1.push(cars)
                      });
                      $('#fetchingData').hide();
                      $('#CarsDiv').show();
                      $('.containerPagination').show();
                    // console.log("Total Records: "+items[0].TotalRecords);
                    for(var i = 0; i<=carsData1.length; i++){
                      checkError();
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
                        // $('#totalResults').html("("+items[0].TotalRecords+ ")");
                        $('#totalResults').html("("+String(items[0].TotalRecords).replace(/(.)(?=(\d{3})+$)/g,'$1,')+ ")");
                          $('#paginationUl').append(PagData);

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
        var resultFind = false;
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
    if(items[0].TotalRecords>0){
      for(var i = 0; i<=carsData.length; i++){
        checkError();
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
            // $('#totalResults').html("("+items[0].TotalRecords+ ")");
            $('#totalResults').html("("+String(items[0].TotalRecords).replace(/(.)(?=(\d{3})+$)/g,'$1,')+ ")");
              $('#paginationUl').append(PagData);
      }
    }else{
      resultFind = false;
      var car = '<h2 style="color: #5d5d5d;font-weight: 800;text-shadow: -2px 2px 4px #adadad;margin: 100px 0px;text-align:center">Sorry! No Car Found.</h2>';
      $('#CarsSection').append(car);
    }


    },error: function(err){
    // handle errors
    console.log(err);
    },
  });

}
}
