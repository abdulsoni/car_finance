
$(document).ready(function(){
  var imgCount = 0;
  var thCount = 0;
  var carImage = '../images/placeholderCar.png';
    var vehicleId = $('#vehicleId').val();
    $('.display-car-main').hide();
    $('.featuresHeading').hide();
    $('#fetchingData').show();
    var hitUrl = "https://www.sfeed.co.uk/api/detail/"+vehicleId;
    // var data = {
    //   PostCode:  localStorage.getItem('postalCode')
    // }
    var data = {
      PostCode:  "W1U6QJ"
    }
    data = JSON.stringify(data);
    document.body.scrollTop = 80;
    document.documentElement.scrollTop = 80;
    $('#fetchingData').show();
    var images =[];
    var thumbnail = [];
    var i = '';
    $.ajax({
      type: "POST",
      data:data,
      beforeSend: function (jqXHR) {
          jqXHR.setRequestHeader('Authorization', 'Bearer bTB0MDckQzdhUDNy');
          jqXHR.setRequestHeader('Accept', 'application/json');
          jqXHR.setRequestHeader('Content-Type', 'application/json');
      },
      url:hitUrl,
      dataType: "json",
      success: function(response) {
        $('#fetchingData').hide();
        $('.displayPageContainer').show();
        $.each(response.Images, function(i, item) {
          images.push(item);
        });

        for(i=0; i<images.length; i++){
          imgCount = imgCount+1;
          var mainImage = images[i].Normal;
          var thumbs = images[i].Thumbnail;
          // <img alt="Image " src="'+thumbs+'" data-image="'+mainImage+'" data-description="Total Images '+images.length+'">
          var imagesSlider = '<div id="img-'+[i]+'" data-img-id="'+[i]+'" class="img-wrapper active"><img src="'+thumbs+'" class="img-responsive"></div>';
          var thumbs = '  <li data-thumb-id="'+[i]+'" id='+i+' class="thumb"><img src="'+thumbs+'" class="img-responsive"></li>'

          $('#slideshow').append(imagesSlider);
          $('.thumbs').append(thumbs);

          $('#img-'+[i]+'>img').on("error", function () {
            this.src="https://"+window.location.hostname+"/public/images/placeholderCar.png";
          });
          $('#'+i+'>img').on("error", function () {
            this.src="https://"+window.location.hostname+"/public/images/placeholderCar.png";
          });
        }
        var features = response.vehicleFeatures.map(x=>{
                 return "<div class='col-sm-4'><h5 class='featuresText'><i class='fa fa-check featuresCheck'>&nbsp;&nbsp; </i>" +x+"</h5></div>";
        });
        $('#carFeatures').html(features);
        // $("#gallery").unitegallery();
        var makeModel = response.Manufacturer+' '+response.Model;
        var reg = response.RegistrationYear;
        var desc = response.Description;
        var price = response.GBPOriginalPrice;
        var doors = response.Doors;
        if(!doors){
          doors = '-';
        }
        desc = desc.replace("��", '£');
        price = price.replace("��", '£');
        var img = response.MainImage.Normal;
        $('#bodyStyle').html(response.BodyStyle);
        $('#doors').html(doors);
        $('#leters').html(response.EngineSizeLitres);
        $('#engine').html(response.EngineSizeLitres);
        $('#mileageTable').html(response.MileageInt);
        $('#mileage').html(response.MileageInt);
        $('#mileageFeat').html(response.MileageInt);
        $('#transmissionTable').html(response.Transmission);
        $('#transmission').html(response.Transmission);
        $('#registration').html(reg);
        $('#registrationFeatures').html(reg);
        $('#fuelTable').html(response.FuelType);
        $('#fuel').html(response.FuelType);
        $('#price').html(price);
        $('#breadTitle').show();
        $('#breadTitle').html(makeModel);
        $('#vehicleTitles').html(response.Title);
        $('#summaryData').html(desc);
        $('#vehicleId').html(response.VehicleId);
        $('#doorsWishlist').val(response.Doors);
        $('#vehicleImage').attr('src',img);
        $('#RegistrationYear').val(response.RegistrationYear);
        $('.display-car-main').show();
        $('.featuresHeading').show();
        $('#fetchingData').hide();
      }

    });

  });
