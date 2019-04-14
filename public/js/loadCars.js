function checkError(){
  $('.find-car-image>img').on("error", function () {
    // this.src='../images/placeholderCar.png';
    this.src="https://"+window.location.hostname+"/public/images/placeholderCar.png";
  });
}
var PostalCode = '';
PostalCode = $('#postcode').val();

if(PostalCode==''){
  PostalCode = 'BH65JB';
}

if(/\s/.test(PostalCode)){
  PostalCode = PostalCode.replace(/ /g,'');
}
var postal;
$( document ).ready(function() {
  $.get("https://ipinfo.io", function(response) {
  postal = response.postal;
}, "jsonp");
// if ("geolocation" in navigator){ //check geolocation available
//     //try to get user current location using getCurrentPosition() method
//     navigator.geolocation.getCurrentPosition(function(position){
//             // console.log("Found your location \nLat : "+position.coords.latitude+" \nLang :"+ position.coords.longitude);
//             getPostalCode(position);
//         });
// }else{
//     console.log("Browser doesn't support geolocation!");
// }
// });
//
// var getPostalCode = function(position) {
//   proxy ="https://cors-anywhere.herokuapp.com/";
//   url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + position.coords.latitude + ',' + position.coords.longitude + '&sensor=true&key=AIzaSyCgP5GBZeEY3uVF0_gztVSYoNPBhbZO8B0'
// $.ajax({
//   type: "POST",
//   url:url,
//   dataType: "json",
//   beforeSend: function(){
//   // do something before the request such as show a loading image
//   },
//   error: function(err){
//   // handle errors
//   console.log(err);
//   },
//   success: function(data) {
//     var addresses = data.results; // cache results in a local var
//     $.each(addresses, function(i){ // iterate through to find a postal code
//       if(this.types[0]=="postal_code"){ // check that the type is a postal code
//         var postal=this['address_components'][0]['long_name']; // grab postal string
//           // do something with your result and then lets break the iteration
          if(postal!='' || postal!=null){
            localStorage.setItem('postalCode',postal);
              // console.log(postal);
              var carArray = ["AC","Alfa Romeo","Ariel","Audi","Austin","Bentley","BMW","Bugatti","Buick","Cadillac","Caterham","Chevrolet","Chrysler","Citroen","Coachmen","Corvette","Dacia","Daewoo","DAF","Daihatsu","Daimler","DAX","Dodge","DS","Ducati","Ferrari","Fiat","Ford","Ginetta","Great Wall","Harley-Davidson","Hillman","Honda","Hyundai","Isuzu","Jaguar","Jeep","Lamborghini","Lancia","Land Rover","Lexus","Malaguti","Maserati","Mazda","McLaren","Mercedes-Benz","MG","Microcar","MINI","Mitsubishi","Nissan","Porsche","Renault","Rolls-Royce","Rover","Saab","SEAT","Skoda","smart","Ssangyong","Suzuki","Toyota","Triumph","Vauxhall","Volkswagen","Volvo","Yamaha"];
              var randomAnswer = carArray[Math.floor(Math.random() * carArray.length)];
              // console.log(randomAnswer);
              var jsonData = {
                        // "BodyStyles": [],
                        "Mileage": 100000,
                        "MinPrice": 500,
                        "MaxPrice": 100000,
                        // "Seats": [],
                        // "SelectedInsuranceGroup": "*",
                        "Transmissions": [],
                        "MakeModels": [
                          {
                            // "Trims": [],
                            "Value": "Ford",
                            "Models": []
                          }
                        ],
                        // "PaginationCurrentPage": 4,
                        // "Colours": [],
                        // "Doors": [],
                        "FuelTypes": [],
                        "PostCode": PostalCode,
                        "SortOrder": 0,
                        // "Age": 11,
                        "Distance": 1000,
                        // "IsExDemo": false,
                        // "IsPreReg": false
                      };
                      var data = JSON.stringify(jsonData)
                      var items =[];
                      var carsData =[];
                      var carAPI = ' https://www.sfeed.co.uk/api/search';
                      localStorage.setItem('cPage',1);
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
                            // console.log(data);
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
                                        "Mileage": 110000,
                                        "MinPrice": 500,
                                        "MaxPrice": 30000,
                                        "Transmissions": [],
                                        "MakeModels": [
                                          {
                                            "Value": "Ford",
                                            "Models": []
                                          }
                                        ],
                                        "PaginationCurrentPage": num,
                                        "FuelTypes": [],
                                        "PostCode": PostalCode,
                                        "SortOrder": 0,
                                        "Distance": 1000,
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
                                          $.each(items1[1], function(i, cars) {
                                            carsData1.push(cars)
                                          });
                                          $('#fetchingData').hide();
                                          $('#CarsDiv').show();
                                          $('.containerPagination').show();
                                        for(var i = 0; i<=carsData1.length; i++){
                                          checkError();
                                          var doors = carsData1[i].doors;
                                          if(!doors){
                                            doors = '-';
                                          }else{
                                            doors = carsData1[i].doors;
                                            doors = doors.replace('doors','');
                                          }
                                          console.log(carsData1[i].MainImage.Medium);
                                            var car = '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-detail"><div class="find-car-detail-inner"><div class="row no-padding no-margin"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="row no-padding no-margin"><div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="find-car-image" onClick=clickToGetCar("'+carsData1[i].VehicleId+'")><img src='+carsData1[i].MainImage.Medium+' onClick=clickToGetCar("'+carsData1[i].VehicleId+'") alt="car image" class="img-responsive"/></div></div><div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="find-car-desc-main" onClick=clickToGetCar("'+carsData1[i].VehicleId+'")><div class="row no-padding no-margin"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-title"><pid="makeModel'+i+'">'+carsData1[i].Manufacturer+' '+carsData1[i].Model+'</p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-price"><p>Price £ '+carsData1[i].GBPPrice.slice(1)+'</p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"><div class="find-car-desc"><div class="row no-padding no-margin"><div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 no-padding"><div class="find-car-desc-label"><p>Registration</p><p>Colour</p><p>Doors</p><p>Transmission</p><p>Mileage</p></div></div><div class="col-xs-1 no-padding"><div class="find-car-desc-label"><p>:</p><p>:</p><p>:</p><p>:</p><p>:</p></div></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding"><div class="find-car-desc-data"><p>'+carsData1[i].RegistrationYear+'</p><p>Metallic Red</p><p>'+doors+'</p><p id="vehicleTransmission'+i+'">'+carsData1[i].Transmission+'</p><p id="vehicleMileage'+i+'">'+carsData1[i].MileageInt+'</p></div></div></div></div></div></div></div></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding"><div class="wishlist-section-main"><div class="wishlist-inner"><div class="wishlist-content"><div class="btn-wishlist-main text-center"><a href="javascript:void(0)" onclick="addToWishlist('+i+')" class="btn-wishlist">Wishlist</a></div></div></div></div></div></div></div></div></div><div class="row no-padding no-margin"><div class="col-xs-12 no-padding"><div class="need-car-section"><p class="text-center"> Need a hand? Call us: <span>01202 286500</span></p></div></div></div></div></div><div class="float"></div><input type="hidden" id="pageUrl'+i+'" value="'+carsData1[i].DetailsPageUrl+'"><input type="hidden" id="vehicleId'+i+'" value="'+carsData1[i].VehicleId+'"><input type="hidden" id="vehicleImage'+i+'" value="'+carsData1[i].MainImage.Medium+'"><input type="hidden" id="dealerName'+i+'" value="'+carsData1[i].Dealer.Name+'"><input type="hidden" id="dealerPhone'+i+'" value="'+carsData1[i].Dealer.PhoneNumber+'"></div></div><input type="hidden" id="doors'+i+'" value="'+carsData1[i].doors+'"><input type="hidden" id="registrationWishlist'+i+'" value="'+carsData1[i].RegistrationYear+'">';

                                            /*var car = '<div class="col-sm-12 carDetail"><div class="col-sm-4"><div class="carImg"><img onclick=clickToGetCar("'+carsData1[i].VehicleId+'") src='+carsData1[i].MainImage.Medium+' alt="car image"><h3 id="imageCount'+i+'"><img src="public/images/landing/cameraIcon.png" alt="">'+carsData1[i].ImageCount+'</h3></div></div><div class="col-sm-8"><h2 class="nameTitle" id="makeModel'+i+'" onclick=clickToGetCar("'+carsData1[i].VehicleId+'")>'+carsData1[i].Manufacturer+' '+carsData1[i].Model+'</h2><h3 id="vehicleTitle'+i+'">'+carsData1[i].RegistrationYear+' '+carsData1[i].Variant+'</h3><h2 class="amount" id="price'+i+'">£ '+carsData1[i].GBPPrice.slice(1)+'</h2><div class="col-sm-12 findIconsDiv no-padding"><ul><li><img src="public/images/landing/manualIcon.png" alt="Manual"><h4 id="vehicleTransmission'+i+'">'+carsData1[i].Transmission+'</h4></li><li><img src="public/images/landing/milesIcon.png" alt="Performance"><h4 id="vehicleMileage'+i+'">'+carsData1[i].MileageInt+' Miles</h4></li><li><img src="public/images/landing/petrolIcon.png" alt="Petrol"><h4 id="vehicleFuel'+i+'">'+carsData1[i].FuelType+'</h4></li></ul><ul><li><img class="location" src="public/images/landing/locationIcon.png" alt="location Icon"><h4 id="vehicleDistance'+i+'"> '+PostalCode+'</h4></li></ul></div><button type="button" onclick="addToWishlist('+i+')" name="button" class="btn btnWishlist "> <i class="fa fa-heart-o"></i> Wishlist</button><input type="hidden" id="pageUrl'+i+'" value="'+carsData1[i].DetailsPageUrl+'"><input type="hidden" id="vehicleId'+i+'" value="'+carsData1[i].VehicleId+'"><input type="hidden" id="vehicleImage'+i+'" value="'+carsData1[i].MainImage.Medium+'"><input type="hidden" id="dealerName'+i+'" value="'+carsData1[i].Dealer.Name+'"><input type="hidden" id="dealerPhone'+i+'" value="'+carsData1[i].Dealer.PhoneNumber+'"></div></div><input type="hidden" id="doors'+i+'" value="'+carsData1[i].doors+'"><input type="hidden" id="registrationWishlist'+i+'" value="'+carsData1[i].RegistrationYear+'">';*/
                                            var carData = '';
                                            var PagData ='';
                                            var page = '';
                                            $('#CarsSection').append(car);
                                            // $('#totalResults').html("("+items[0].TotalRecords+ ")");
                                            $('#totalResults').html("("+String(items[0].TotalRecords).replace(/(.)(?=(\d{3})+$)/g,'$1,')+ ")");
                                              $('#paginationUl').append(PagData);
                                        }

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

                            /*var car = '<div class="col-sm-12 carDetail"><div class="col-sm-4"><div class="carImg"><img onclick=clickToGetCar("'+carsData[i].VehicleId+'") src='+images+' alt="car imagess"><h3 id="imageCount'+i+'"><img src="public/images/landing/cameraIcon.png" alt="">'+carsData[i].ImageCount+'</h3></div></div><div class="col-sm-8"><h2 class="nameTitle" onClick=clickToGetCar("'+carsData[i].VehicleId+'") id="makeModel'+i+'">'+carsData[i].Manufacturer+' '+carsData[i].Model+'</h2><h3 id="vehicleTitle'+i+'">'+carsData[i].RegistrationYear+' '+carsData[i].Variant+'</h3><h2 class="amount" id="price'+i+'">£ '+carsData[i].GBPPrice.slice(1)+'</h2><div class="col-sm-12 findIconsDiv no-padding"><ul><li><img src="public/images/landing/manualIcon.png" alt="Manual"><h4 id="vehicleTransmission'+i+'">'+carsData[i].Transmission+'</h4></li><li><img src="public/images/landing/milesIcon.png" alt="Performance"><h4 id="vehicleMileage'+i+'">'+carsData[i].MileageInt+' Miles</h4></li><li><img src="public/images/landing/petrolIcon.png" alt="Petrol"><h4 id="vehicleFuel'+i+'">'+carsData[i].FuelType+'</h4></li></ul><ul><li><img class="location" src="public/images/landing/locationIcon.png" alt="location Icon"><h4 id="vehicleDistance'+i+'"> '+PostalCode+'</h4></li></ul></div><button type="button" onclick="addToWishlist('+i+')" name="button" class="btn btnWishlist "> <i class="fa fa-heart-o"></i> Wishlist</button><input type="hidden" id="pageUrl'+i+'" value="'+carsData[i].DetailsPageUrl+'"><input type="hidden" id="vehicleId'+i+'" value="'+carsData[i].VehicleId+'"><input type="hidden" id="vehicleImage'+i+'" value="'+carsData[i].MainImage.Medium+'"><input type="hidden" id="dealerName'+i+'" value="'+carsData[i].Dealer.Name+'"><input type="hidden" id="dealerPhone'+i+'" value="'+carsData[i].Dealer.PhoneNumber+'"></div></div><input type="hidden" id="doors'+i+'" value="'+carsData[i].doors+'"><input type="hidden" id="registrationWishlist'+i+'" value="'+carsData[i].RegistrationYear+'">';*/
                            var carData = '';
                            var PagData ='';
                            var page = '';
                            $('#CarsSection').append(car);
                            $('#totalResults').html("("+String(items[0].TotalRecords).replace(/(.)(?=(\d{3})+$)/g,'$1,')+ ")");
                            $('#paginationUl').append(PagData);

                        }

                        },error: function(err){
                        // handle errors
                        console.log(err);
                        },
                      });
            } //if postcode != null
      //     }
      //   });
      // } // end success
    }); // end ajax
    // };
