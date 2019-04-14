function sortingData(s){
    $('#fetchingData').show();
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
                    "PostCode": "W1U6QJ",
                    "Age": maxAge,
                    "SortOrder":sortOrder,
                    "Distance": distance,
                    "IsExDemo": false,
                    "IsPreReg": false
                  };
                  var data = JSON.stringify(jsonData)
                  var items =[];
                  var carsData =[];
                  var carAPI = 'http://206.189.220.74:8080/api/search';
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
                                    "PaginationCurrentPage": 1,
                                    "Colours": color,
                                    "Doors": doors,
                                    "FuelTypes": fuelType,
                                    "PostCode": "W1U6QJ",
                                    "Age": maxAge,
                                    "SortOrder":sortOrder,
                                    "Distance": distance,
                                    "IsExDemo": false,
                                    "IsPreReg": false
                                  };
                                    $('#fetchingData').show();
                                  var dataJ = JSON.stringify(jsonData)
                                  var items1 =[];
                                  var carsData1 =[];
                                  var carAPIS = 'http://206.189.220.74:8080/api/search/next/'+num+'/'+lastPage;
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
                                      $('.containerPagination').show();
                                    // console.log("Total Records: "+items[0].TotalRecords);
                                    for(var i = 0; i<=carsData1.length; i++){
                                      if(carsData1[i].ObjectType=="UsedVehicleResult"){
                                        var car = '<div class="col-sm-12 carDetail"><div class="col-sm-4"><div class="carImg"><img onclick="clickToGetCar('+carsData1[i].VehicleId+')" src='+carsData[i].MainImage.Medium+' alt="car image"><h3 id="imageCount'+i+'"><img src="public/images/landing/cameraIcon.png" alt="">'+carsData1[i].ImageCount+'</h3></div></div><div class="col-sm-8"><h2 class="nameTitle" onclick="clickToGetCar('+carsData1[i].VehicleId+')" id="makeModel'+i+'">'+carsData1[i].Manufacturer+' '+carsData1[i].Model+'</h2><h3 id="vehicleTitle'+i+'">'+carsData1[i].RegistrationYear+' ('+carsData1[i].RegistrationNumberYear+')'+carsData1[i].Variant+'</h3><h2 class="amount" id="price'+i+'">£ '+carsData1[i].GBPPrice.slice(2)+'</h2><div class="col-sm-12 findIconsDiv no-padding"><ul><li><img src="public/images/landing/calendarIcon.png" alt="calendar"><h4 id="registerationInfo'+i+'">'+carsData1[i].RegistrationYear+' ('+carsData1[i].RegistrationNumberYear+' reg)</h4></li><li><img src="public/images/landing/manualIcon.png" alt="Manual"><h4 id="vehicleTransmission'+i+'">'+carsData1[i].Transmission+'</h4></li><li><img src="images/landing/milesIcon.png" alt="Performance"><h4 id="vehicleMileage'+i+'">'+carsData1[i].MileageInt+' Miles</h4></li><li><img src="public/images/landing/petrolIcon.png" alt="Petrol"><h4 id="vehicleFuel'+i+'">'+carsData1[i].FuelType+'</h4></li></ul><ul><li><img class="location" src="public/images/landing/locationIcon.png" alt="location Icon"><h4 id="vehicleDistance'+i+'">'+carsData1[i].Distance+' Miles away from BH65JB</h4></li></ul></div><button type="button" onclick="addToWishlist('+i+')" name="button" class="btn btnWishlist "> <i class="fa fa-heart-o"></i> Wishlist</button><input type="hidden" id="pageUrl'+i+'" value="'+carsData1[i].DetailsPageUrl+'"><input type="hidden" id="vehicleId'+i+'" value="'+carsData1[i].VehicleId+'"><input type="hidden" id="vehicleImage'+i+'" value="'+carsData1[i].MainImage.Medium+'"><input type="hidden" id="dealerName'+i+'" value="'+carsData1[i].Dealer.Name+'"><input type="hidden" id="dealerPhone'+i+'" value="'+carsData1[i].Dealer.PhoneNumber+'"></div></div>';
                                        var carData = '';
                                        var PagData ='';
                                        var page = '';
                                        $('#CarsSection').append(car);
                                        $('#totalResults').html("("+items[0].TotalRecords+ ") Results Found");

                                          $('#paginationUl').append(PagData);

                                      }
                                      else{
                                        // console.log(carsData1[i]);
                                      }
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
                      $('.containerPagination').show();
                    // console.log("Total Records: "+items[0].TotalRecords);
                    for(var i = 0; i<=carsData.length; i++){
                      if(carsData[i].ObjectType=="UsedVehicleResult"){
                        var car = '<div class="col-sm-12 carDetail"><div class="col-sm-4"><div class="carImg"><img onclick="clickToGetCar('+carsData[i].VehicleId+')" src='+carsData[i].MainImage.Medium+' alt="car image"><h3 id="imageCount'+i+'"><img src="public/images/landing/cameraIcon.png" alt="">'+carsData[i].ImageCount+'</h3></div></div><div class="col-sm-8"><h2 class="nameTitle" onclick="clickToGetCar('+carsData[i].VehicleId+')" id="makeModel'+i+'">'+carsData[i].Manufacturer+' '+carsData[i].Model+'</h2><h3 id="vehicleTitle'+i+'">'+carsData[i].RegistrationYear+' ('+carsData[i].RegistrationNumberYear+')'+carsData[i].Variant+'</h3><h2 class="amount" id="price'+i+'">£ '+carsData[i].GBPPrice.slice(2)+'</h2><div class="col-sm-12 findIconsDiv no-padding"><ul><li><img src="public/images/landing/calendarIcon.png" alt="calendar"><h4 id="registerationInfo'+i+'">'+carsData[i].RegistrationYear+' ('+carsData[i].RegistrationNumberYear+' reg)</h4></li><li><img src="public/images/landing/manualIcon.png" alt="Manual"><h4 id="vehicleTransmission'+i+'">'+carsData[i].Transmission+'</h4></li><li><img src="public/images/landing/milesIcon.png" alt="Performance"><h4 id="vehicleMileage'+i+'">'+carsData[i].MileageInt+' Miles</h4></li><li><img src="public/images/landing/petrolIcon.png" alt="Petrol"><h4 id="vehicleFuel'+i+'">'+carsData[i].FuelType+'</h4></li></ul><ul><li><img class="location" src="public/images/landing/locationIcon.png" alt="location Icon"><h4 id="vehicleDistance'+i+'">'+carsData[i].Distance+' Miles away from BH65JB</h4></li></ul></div><button type="button" onclick="addToWishlist('+i+')" name="button" class="btn btnWishlist "> <i class="fa fa-heart-o"></i> Wishlist</button><input type="hidden" id="pageUrl'+i+'" value="'+carsData[i].DetailsPageUrl+'"><input type="hidden" id="vehicleId'+i+'" value="'+carsData[i].VehicleId+'"><input type="hidden" id="vehicleImage'+i+'" value="'+carsData[i].MainImage.Medium+'"><input type="hidden" id="dealerName'+i+'" value="'+carsData[i].Dealer.Name+'"><input type="hidden" id="dealerPhone'+i+'" value="'+carsData[i].Dealer.PhoneNumber+'"></div></div>';
                        var carData = '';
                        var PagData ='';
                        var page = '';
                        $('#CarsSection').append(car);
                        $('#totalResults').html("("+items[0].TotalRecords+ ") Results Found");
                          $('#paginationUl').append(PagData);
                      }
                      else{
                        // console.log(carsData[i]);
                      }
                    }
                      // var PagData = '<li onclick="getClicked('+page+')" id="active'+page+'"><a href="#">'+page+'</a></li>';

                    },error: function(err){
                    // handle errors
                    console.log(err);
                    },
                  });
        } //if postcode != null
}
