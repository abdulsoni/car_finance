<script src="{{asset('public/js/jscookie.js')}}" type="text/javascript" async></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js" async></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" async></script>
<script>
var totalAddressMonths=0,totalEmploymentMonths=0;
function deleteAllCookies() {
var cookies = document.cookie.split(";");
for (var i = 0; i < cookies.length; i++) {
  var cookie = cookies[i];
  var eqPos = cookie.indexOf("=");
  var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
  document.cookie = name + '=;' +
      'expires=Thu, 01-Jan-1970 00:00:01 GMT;' +
      'path=' + '/;' +
      'domain=' + window.location.host + ';' +
      'secure=;';
}
}
/*  window.onscroll = function() {scrollFunction()}; */
function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      document.getElementById("firstForm").style.display = "";
  } else {
      document.getElementById("firstForm").style.display = "";
  }
}
function showLinkDiv() {
  $('.clickableDiv').show();
}
$('#AddressNow1').focus(function(){
  $('.clickableDiv1').show();
});
$('#AddressNow2').focus(function(){
  $('.clickableDiv2').show();
});
$('input:radio[name="cars"]').change(
 function(){
      if ($(this).is(':checked') && $(this).val() != '') {
          $(window).scrollTop(0);
          var car = $('input[name=cars]:checked').val();
          $('.firstForm').hide();
          $('.secondForm').show();
          $.cookie('qcf_carValue', car, { expires: 30})
          $('.progress-line').css('width','7%');
      }
  });
$('input:radio[name="budget"]').change(
  function(){
    $(window).scrollTop(0);
      if ($(this).is(':checked') && $(this).val() != '') {
          var budget = $('input[name=budget]:checked').val();
          if(budget=='1'){
              $.cookie('monthlyMax', 150, { expires: 30});
              $.cookie('qcf_budgetValue', 1, { expires: 30});
          }
          else if(budget=='2'){
              $.cookie('monthlyMin', 150, { expires: 30});
              $.cookie('monthlyMax', 250, { expires: 30});
              $.cookie('qcf_budgetValue', 2, { expires: 30});
          }
          else if(budget=='3'){
              $.cookie('monthlyMin', 251, { expires: 30});
              $.cookie('monthlyMax', 350, { expires: 30});
              $.cookie('qcf_budgetValue', 3, { expires: 30});
          }
          else if(budget=='4'){
              $.cookie('monthlyMin', 351, { expires: 30});
              $.cookie('monthlyMax', 450, { expires: 30});
              $.cookie('qcf_budgetValue', 4, { expires: 30});
          }
          else if(budget=='5'){
              $.cookie('monthlyMin', 451, { expires: 30});

              $.cookie('monthlyMax', 550, { expires: 30});
              $.cookie('qcf_budgetValue', 5, { expires: 30});
          }
          else if(budget=='6'){

              $.cookie('monthlyMin', 'over 550', { expires: 30});
              $.cookie('qcf_budgetValue', 6, { expires: 30});
          }
          $('.progress-line').css('width','14%');
          $('.secondForm').hide();
          $('.thirdForm').show();
      }
  });

$('input:radio[name="licence"]').change(
  function(){
      if ($(this).is(':checked') && $(this).val() != '') {
        $(window).scrollTop(0);
          var licence = $('input[name=licence]:checked').val();
          $('.thirdForm').hide();
          $('.fourthForm').show();
          $.cookie('qcf_licenceType', licence, { expires: 30});
          $('.progress-line').css('width','21%');
      }
  });
  $('input:radio[name="marital"]').change(
  function(){
      if ($(this).is(':checked') && $(this).val() != '') {
        $(window).scrollTop(0);
          var licence = $('input[name=marital]:checked').val();
          $('.fourthForm').hide();
          $('.fifthForm').show();
          $.cookie('qcf_maritalStatus', licence, { expires: 30});
          $('.progress-line').css('width','33%');
      }
  });
$('input:radio[name="qcf_passport"]').change(
  function(){
      if ($(this).is(':checked') && $(this).val() != '') {
        $(window).scrollTop(0);
          var licence = $('input[name=qcf_passport]:checked').val();
          $('.fifthForm').hide();
          $('.sixthForm').show();
          $.cookie('qcf_passport', licence, { expires: 30});
          $('.progress-line').css('width','40%');
          $('.progress-bullet2').addClass('active');
      }
  });
$('input:radio[name="qcf_employment"]').change(
  function(){
    $(window).scrollTop(0);
      if ($(this).is(':checked') && $(this).val() != '') {
          var licence = $('input[name=qcf_employment]:checked').val();
          $.cookie('qcf_employment', licence, { expires: 30});
          if(licence=='Full-Time Employment'){
              $('.seventhForm').hide();
              $('.seventhOneForm').show();
              $('.progress-line').css('width','49%');
          }
          else if(licence=='Part-Time Employment'){
              $('.seventhForm').hide();
              $('.seventhOneForm').show();
              $('.progress-line').css('width','49%');
          }
          else if(licence=='Self-Employment'){
              $('.seventhForm').hide();
              $('.seventhOneForm').show();
              $('.progress-line').css('width','49%');
          }
          else if(licence=='Armed Forces'){
              $('.seventhForm').hide();
              $('.eightthForm').show();
              $('.progress-line').css('width','49%');
          }
          else if(licence=='Temporary/Contract'){
              $('.seventhForm').hide();
              $('.eightthForm').show();
              $('.progress-line').css('width','49%');
          }
          else{
              $('.seventhForm').hide();
              $('.eightthForm').show();
              $('.progress-line').css('width','73%');
              $('.progress-bullet3').addClass('active');
          }
      }
  });
$('input:radio[name="address"]').change(
  function(){
      if ($(this).is(':checked') && $(this).val() != '') {
        $(window).scrollTop(0);
          var address = $('input[name=address]:checked').val();
          $.cookie('qcf_addressDetail1', address, { expires: 30});
          $('.progress-line').css('width','93%');
          $('.tenthForm').hide();
          $('.eleventhForm').show();
      }
  });

$('input:radio[name="prefixTitle"]').change(
  function(){
      if ($(this).is(':checked') && $(this).val() != '') {
        $(window).scrollTop(0);
          var prefixTitle = $('input[name=prefixTitle]:checked').val();
          $.cookie('qcf_prefixTitle', prefixTitle, { expires: 30});
          $('.progress-line').css('width','95%');
          $('.twelvethForm').hide();
          $('.gettingName').show();
      }
  });

  $('#twelvethForm').click(function(){
    $(window).scrollTop(0);
          var prefixTitle = $('input[name=prefixTitle]:checked').val();
          $.cookie('qcf_prefixTitle', prefixTitle, { expires: 30});
          $('.progress-line').css('width','95%');
          $('.twelvethForm').hide();
          $('.gettingName').show();
  });

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
      $(window).scrollTop(0);
      var car = $('input[name=cars]:checked').val();
      if(!car){
          swal("Error!", "Please select one option!", "error");
      }
      else{
          $('.firstForm').hide();
          $('.secondForm').show();
          $.cookie('qcf_carValue', car, { expires: 30})
          $('.progress-line').css('width','7%');
      }
}

$('#secondForm').click(function(){
$(window).scrollTop(0);
  var budget = $('input[name=budget]:checked').val();
  if(!budget){
      swal("Error!", "Please select one option!", "error");
  }
  else{
      if(budget=='1'){
          $.cookie('monthlyMax', 150, { expires: 30});
          $.cookie('qcf_budgetValue', 1, { expires: 30});
      }
      else if(budget=='2'){
          $.cookie('monthlyMin', 150, { expires: 30});
          $.cookie('monthlyMax', 250, { expires: 30});
          $.cookie('qcf_budgetValue', 2, { expires: 30});
      }
      else if(budget=='3'){
          $.cookie('monthlyMin', 251, { expires: 30});
          $.cookie('monthlyMax', 350, { expires: 30});
          $.cookie('qcf_budgetValue', 3, { expires: 30});
      }
      else if(budget=='4'){
          $.cookie('monthlyMin', 351, { expires: 30});
          $.cookie('monthlyMax', 450, { expires: 30});
          $.cookie('qcf_budgetValue', 4, { expires: 30});
      }
      else if(budget=='5'){
          $.cookie('monthlyMin', 451, { expires: 30});
          $.cookie('monthlyMax', 550, { expires: 30});
          $.cookie('qcf_budgetValue', 5, { expires: 30});
      }
      else if(budget=='6'){
          $.cookie('monthlyMin', 'over 550', { expires: 30});
          $.cookie('qcf_budgetValue', 6, { expires: 30});
      }
      $('.progress-line').css('width','14%');
      $('.secondForm').hide();
      $('.borrowAmount').show();
  }

})

$('#thirdForm').click(function(){
$(window).scrollTop(0);
  var licence = $('input[name=licence]:checked').val();
  if(!licence){
      swal("Error!", "Please select one option!", "error");
  }
  else{
      $('.thirdForm').hide();
      $('.fourthForm').show();
      $.cookie('qcf_licenceType', licence, { expires: 30});
      $('.progress-line').css('width','21%');
  }
})
$('#fourthForm').click(function(){
$(window).scrollTop(0);
  var licence = $('input[name=marital]:checked').val();
  if(!licence){
      swal("Error!", "Please select one option!", "error");
  }
  else{
      $('.fourthForm').hide();
      $('.fifthForm').show();
      $.cookie('qcf_maritalStatus', licence, { expires: 30});
      $('.progress-line').css('width','28%');
  }
})
$('#fifthForm').click(function(){
$(window).scrollTop(0);
  var licence = $('input[name=qcf_passport]:checked').val();
  if(!licence){
      swal("Error!", "Please select one option!", "error");
  }
  else{
      $('.fifthForm').hide();
      $('.sixthForm').show();
      $.cookie('qcf_passport', licence, { expires: 30});
      $('.progress-line').css('width','40%');
      $('.progress-bullet2').addClass('active');
  }
})

function sixthForm() {
$(window).scrollTop(0);
  var qcf_dob = $('#qcf_dob').val();
  function getAge(dateString) {
      dateString = dateString.split('/');
      var today = new Date();
      var yr = dateString[2];
      var mon = dateString[2];
      var dt = dateString[0];
      var age = today.getFullYear() - yr;
      var m = today.getMonth() - mon;
      fullDob = dt+"/"+mon+"/"+yr;
      if (m < 0 || (m === 0 && today.getDate() < dt)) {
          age--;
      }
      return age;
  }
  if(!Modernizr.inputtypes.date) {
      var newDateValue = qcf_dob.split('/');
      var d = new Date();
      var Year = d.getFullYear();
      var getAgeValue =  getAge(qcf_dob);
      if(getAgeValue>=18 && getAgeValue<=99){
          $.cookie('qcf_dob', fullDate, { expires: 30});
          $('.progress-line').css('width','45%');
          $('.sixthForm').hide();
          $('.seventhForm').show();
          setTimeout(function() {
              $('#loadingForm').hide();
              $('#lookupForm').show();
          }, 1500);
      }
      else{
          swal("Error!", "You must be in between 18-99 to be eligible!", "error");
      }
  }
  else{
      if(qcf_dob!=''){
          qcf_dob = qcf_dob.split('/');
          var year = qcf_dob[2];
          var month = qcf_dob[1];
          var day = qcf_dob[0];
          var fullDate = day+"/"+month+"/"+year;
          var showDob = year+"/"+month+"/"+day;
          if(year>1999 || year<1918){
              swal("Error!", "You must be in between 18-99 to be eligible!", "error");
          }
          else{
              $.cookie('qcf_dob', fullDate, { expires: 30});
              $('.progress-line').css('width','45%');
              $('.sixthForm').hide();
              $('.seventhForm').show();
          }
      }
      else{
          swal("Error!", "You must be in between 18-99 to be eligible!", "error");
      }
  }
}



$('#seventhForm').click(function() {
$(window).scrollTop(0);
  var licence = $('input[name=qcf_employment]:checked').val();
  if(!licence){
    swal("Error!", "Please select one option!", "error");
  }
  else{
      $.cookie('qcf_employment', licence, { expires: 30});
      if(licence=='Full-Time Employment'){
          $('.seventhForm').hide();
          $('.seventhOneForm').show();
          $('.progress-line').css('width','49%');
      }
      else if(licence=='Part-Time Employment'){
          $('.seventhForm').hide();
          $('.seventhOneForm').show();
          $('.progress-line').css('width','49%');
      }
      else if(licence=='Self-Employment'){
          $('.seventhForm').hide();
          $('.seventhOneForm').show();
          $('.progress-line').css('width','49%');
      }
      else if(licence=='Armed Forces'){
          $('.seventhForm').hide();
          $('.eightthForm').show();
          $('.progress-line').css('width','49%');
      }
      else if(licence=='Temporary/Contract'){
          $('.seventhForm').hide();
          $('.eightthForm').show();
          $('.progress-line').css('width','49%');
      }
      else{
          $('.seventhForm').hide();
          $('.eightthForm').show();
          $('.progress-line').css('width','73%');
          $('.progress-bullet3').addClass('active');
      }
  }
});
$('#seventhOneForm').click(function(){
$(window).scrollTop(0);
  var status = 'false';
  var status1 = 'false';
  var cname = $('#qcf_companyName').val();
  var jtitle = $('#jobTitle').val();
  var regex=/^[a-zA-Z -]*$/;
  if(cname=='' || !cname.match(regex)){
      swal("Error!", "Data should not be empty, and only a-z/A-Z is allowed!", "error");
      status='false';
  }
  else{
      status='true';
  }
  if(jtitle=='' || !jtitle.match(regex)){
      status1='false';
      swal("Error!", "Data should not be empty, and only a-z/A-Z is allowed!", "error");
  }
  else{
      status1='true';
  }
  if(status=='true' && status1=='true'){
      $('.seventhOneForm').hide();
      $('.seventhTwoForm').show();
      $.cookie('qcf_companyName', cname, { expires: 30});
      $.cookie('jobTitle', jtitle, { expires: 30});
      $('.progress-line').css('width','66%');
      $('.progress-bullet3').addClass('active');
  }
  else{
      console.log('Values are not present in both fields');
  }
});

$('#seventhOneForm1').click(function(){
$(window).scrollTop(0);
  var status = 'false';
  var status1 = 'false';
  var cname = $('#qcf_companyName1').val();
  var jtitle = $('#jobTitle1').val();
  var regex=/^[a-zA-Z -]*$/;
  if(cname=='' || !cname.match(regex)){
      status='false';
      swal("Error!", "Data should not be empty, and only a-z/A-Z is allowed!", "error");
  }
  else{
      status='true';
  }
  if(jtitle=='' || !jtitle.match(regex)){
      status1='false';
      swal("Error!", "Data should not be empty, and only a-z/A-Z is allowed!", "error");
  }
  else{
      status1='true';
  }
  if(status=='true' && status1=='true'){
      $('.seventhOneForm1').hide();
      $('.seventhTwoForm1').show();
      $.cookie('qcf_companyName1', cname, { expires: 30});
      $.cookie('jobTitle1', jtitle, { expires: 30});
      $('.progress-line').css('width','66%');
      $('.progress-bullet3').addClass('active');
  }
  else{
      console.log('Values are not present in both fields');
  }
});

$('#seventhOneForm2').click(function(){
$(window).scrollTop(0);
  var status = 'false';
  var status1 = 'false';
  var cname = $('#qcf_companyName2').val();
  var jtitle = $('#jobTitle2').val();
  var regex=/^[a-zA-Z -]*$/;
  if(cname=='' || !cname.match(regex)){
      swal("Error!", "Data should not be empty, and only a-z/A-Z is allowed!", "error");
      status='false';
  }
  else{
      status='true';
  }
  if(jtitle=='' || !jtitle.match(regex)){
      swal("Error!", "Data should not be empty, and only a-z/A-Z is allowed!", "error");
      status1='false';
  }
  else{
      status1='true';
  }
  if(status=='true' && status1=='true'){
      $('.seventhOneForm2').hide();
      $('.seventhTwoForm2').show();
      $.cookie('qcf_companyName2', cname, { expires: 30});
      $.cookie('jobTitle2', jtitle, { expires: 30});
      $('.progress-line').css('width','66%');
      $('.progress-bullet3').addClass('active');
  }
  else{
      console.log('Values are not present in both fields');
  }
});

$('#seventhTwoForm').click(function(){
$(window).scrollTop(0);
  var emonths = $('#employmentMonths').val();
  var eyear = $('#employmentYears').val();
 if(emonths==''){
      emonths=0;
  }
  if(eyear==''){
      eyear=0;
  }
  if(eyear<=0 && emonths<=0){
      swal("Error!", "Must be valid data!", "error");
  }
  else{
      if(eyear>11){
          swal("Error!", "Employment Years cannot be more than 11!", "error");
      }
      else {
          if(emonths>11){
              swal("Error!", "Employment Months cannot be more than 11!", "error");
          }
          else{
              $('.seventhTwoForm').hide();
              $('.eightthForm').show();
              $.cookie('qcf_employmentMonths', emonths, { expires: 30});
              $.cookie('qcf_employmentYears', eyear, { expires: 30});
              $('.progress-line').css('width','73%');
          }
      }
  }
});

$('#seventhTwoForm1').click(function(){
$(window).scrollTop(0);
  var emonths = $('#employmentMonths1').val();
  var eyear = $('#employmentYears1').val();
  if(emonths==''){
       emonths=0;
   }
   if(eyear==''){
       eyear=0;
   }
  var intoMonths =  parseInt(eyear) * 12;
  var totalMonths = parseInt(intoMonths) + parseInt(emonths);
  totalEmploymentMonths = parseInt(totalEmploymentMonths) + parseInt(totalMonths);
  if(eyear<=0 && emonths<=0){
      swal("Error!", "Must be valid data!", "error");
  }
  else{
      if(eyear>11){
            swal("Error!", "Employment Years cannot be more than 11!", "error");
      }
      else {
          if(emonths>11){
              swal("Error!", "Employment Months cannot be more than 11!", "error");
          }
          else{
                $('.seventhTwoForm1').hide();
                $('.eightthForm1').show();
                $.cookie('qcf_employmentMonths', emonths, { expires: 30});
                $.cookie('qcf_employmentYears', eyear, { expires: 30});
                $('.progress-line').css('width','73%');
            }
        }
      }
      });

$('#seventhTwoForm2').click(function(){
$(window).scrollTop(0);
  var emonths = $('#employmentMonths2').val();
  var eyear = $('#employmentYears2').val();
  if(emonths==''){
       emonths=0;
   }
   if(eyear==''){
       eyear=0;
   }
  var intoMonths =  parseInt(eyear) * 12;
  var totalMonths = parseInt(intoMonths) + parseInt(emonths);
  totalEmploymentMonths = parseInt(totalMonths) + parseInt(totalEmploymentMonths);
  if(eyear<=0 && emonths<=0){
      swal("Error!", "Must be valid data!", "error");
  }
  else{
      if(eyear>11){
            swal("Error!", "Employment Years cannot be more than 11!", "error");
      }
      else {
          if(emonths>11){
              swal("Error!", "Employment Months cannot be more than 11!", "error");
          }
          else{
            $('.seventhTwoForm2').hide();
            $('.eightthForm2').show();
            $.cookie('qcf_employmentMonths2', emonths, { expires: 30});
            $.cookie('qcf_employmentYears2', eyear, { expires: 30});
              }

          }
      }
});

$('#eightthForm').click(function(){
$(window).scrollTop(0);
  var licence = $('#monthlyIncome').val();
  var monthlyIncome = $.cookie('qcf_monthlyIncome');
  var emonths = $.cookie('qcf_employmentMonths');
  var eyear = $.cookie('qcf_employmentYears');
  if($.cookie('qcf_employment')=='Retired' || $.cookie('qcf_employment')=='Benefits'){
    eyear = 3;
  }
  var intoMonths =  parseInt(eyear) * 12;
  var totalMonths = parseInt(intoMonths) + parseInt(emonths);
  totalEmploymentMonths = totalMonths;
  var regex=/^[0-9]+$/;
  if(licence=='' || !licence.match(regex)){
      swal("Error!", "Income can only have the positive numeric vlaue!", "error");
  }
  else{
        monthsL = 36 - totalEmploymentMonths;
        $.cookie('qcf_monthlyIncome', licence, { expires: 30});
        if(totalEmploymentMonths<36){
            $('#alertSection1').slideDown(500);
            $('#monthsLeft1').html(monthsL);
            $('.progress1').css('width','70%');
            $.cookie('qcf_monthlyIncome', licence, { expires: 30});
            $('.eightthForm').hide();
            $('.seventhOneForm1').show();
        }
        else{
            $('#alertSection1').hide();
            $('.eightthForm').hide();
            $('.ninethForm').show();
            $.cookie('qcf_monthlyIncome', licence, { expires: 30});
            $('.progress-line').css('width','70%');
        }
      }
});

$('#eightthForm1').click(function(){
$(window).scrollTop(0);
  var licence = $('#monthlyIncome1').val();
  var regex=/^[0-9]+$/;
      if(licence=='' || !licence.match(regex)){
          swal("Error!", "Income can only have the positive numeric vlaue!", "error");
      }
      else{
          var monthsL = 36 - totalEmploymentMonths;
          $.cookie('qcf_monthlyIncome', licence, { expires: 30});
          if(totalEmploymentMonths<36){
              $('#alertSection1').slideDown(500);
              $('#monthsLeft1').html(monthsL);
              $('.progress1').css('width','70%');
              $.cookie('qcf_monthlyIncome', licence, { expires: 30});
              $('.eightthForm1').hide();
              $('.seventhOneForm2').show();
          }
          else{
              $('#alertSection1').hide();
              $('.eightthForm1').hide();
              $('.ninethForm').show();
              $.cookie('qcf_monthlyIncome', licence, { expires: 30});
              $('.progress-line').css('width','70%');
          }
      }
});

$('#eightthForm2').click(function(){
$(window).scrollTop(0);
  var licence = $('#monthlyIncome2').val();
  var regex=/^[0-9]+$/;
  if(licence=='' || !licence.match(regex)){
      swal("Error!", "Income can only have the positive numeric vlaue!", "error");
  }
  else{
    $('.progress-line').css('width','73%');
    $.cookie('qcf_monthlyIncome2', licence, { expires: 30});
    $('#alertSection1').hide();
    $('.eightthForm2').hide();
    $('.ninethForm').show();

    }

});

// $('#borrowAmounts').click(function(){
// $(window).scrollTop(0);
//   var licence = $('#borrowAmount').val();
//   var regex=/^[0-9]+$/;
//   if(licence=='' || !licence.match(regex)){
//       swal("Error!", "Amount can only have the positive numeric vlaue!", "error");
//   }
//   else{
//     $('.progress-line').css('width','17%');
//     $('.borrowAmount').hide();
//     $('.thirdForm').show();
//       }
//
// });


// NineThForm
$('#ninethForms').click(function(){
$(window).scrollTop(0);
  var buildingNum = $('#buildingNumber').val();
  var buildingName = $('#buildingName').val();
  var county = $('#county').val();
  var street = $('#street').val();
  var street1 = $('#secondStreet').val();
  var town = $('#town').val();
  var country = $('#country').val();
  var flag ='false';
  var pstCde = $('#postcode').val();
  if(pstCde!=''){
      $.cookie('qcf_buildingNumber', buildingNum, { expires: 30});
      $.cookie('qcf_county', county, { expires: 30});
      $.cookie('qcf_buildingName', buildingName, { expires: 30});
      $.cookie('qcf_streetAddress', street, { expires: 30});
      $.cookie('qcf_secondStreet', street1, { expires: 30});
      $.cookie('qcf_townAddress', town, { expires: 30});
      $.cookie('qcf_countryAddress', country, { expires: 30});
      $.cookie('qcf_vehiclePostcode', pstCde, { expires: 30});
      $('#cityName').html(town);
          $('.ninethForm').hide();
          $('.tenthForm').show();
          $('.progress-line').css('width','85%');
  }
  else{
      swal("Error!", "Address data cannot be empty!", "error");
  }
});
$('#postcode').keypress(function(){
$('#ninethForms').hide();
$('#AddressLookup1').show();
})
$('#postcode').click(function(){
$('#ninethForms').hide();
$('#AddressLookup1').show();
})

$('#AddressLookup1').click(function(){
$(window).scrollTop(0);
  var buildingNum = $('#buildingNumber').val();
  var buildingName = $('#buildingName').val();
  var county = $('#county').val();
  var street = $('#street').val();
  var street1 = $('#secondStreet').val();
  var town = $('#town').val();
  var country = $('#country').val();
  var flag ='false';
  var pstCde = $('#postcode').val();
  if(pstCde=='' || buildingNum=='' || buildingName=='' || street=='' || town==''){
      swal("Error!", "Postcode, building, street, town data is required!", "error");
  }
  else{
      $.cookie('qcf_buildingNumber', buildingNum, { expires: 30});
      $.cookie('qcf_county', county, { expires: 30});
      $.cookie('qcf_buildingName', buildingName, { expires: 30});
      $.cookie('qcf_streetAddress', street, { expires: 30});
      $.cookie('qcf_secondStreet', street1, { expires: 30});
      $.cookie('qcf_townAddress', town, { expires: 30});
      $.cookie('qcf_countryAddress', country, { expires: 30});
      $.cookie('qcf_vehiclePostcode', pstCde, { expires: 30});
      $('#cityName').html(town);
          $('.ninethForm').hide();
          $('.tenthForm').show();
          $('.progress-line').css('width','85%');
  }
});


  /* -----------------Address Lookup 1------------------- */

$('#ninethForms1').click(function(){
$(window).scrollTop(0);
var buildingNumP = $('#buildingNumber').val();
var buildingNameP = $('#buildingName').val();
var countyP = $('#county').val();
var streetP = $('#street').val();
var street1P = $('#secondStreet').val();
var townP = $('#town').val();
var countryP = $('#country').val();
var flagP ='false';
var pstCdeP = $('#postcode').val();

var buildingNum = $('#buildingNumber1').val();
var buildingName = $('#buildingName1').val();
var county = $('#county1').val();
var street = $('#street1').val();
var street1 = $('#secondStreet1').val();
var town = $('#town1').val();
var country = $('#country1').val();
var flag ='false';
var pstCde = $('#postcode1').val();
if(pstCde!=''){
  $.cookie('qcf_buildingNumber1', buildingNum, { expires: 30});
  $.cookie('qcf_county1', county, { expires: 30});
  $.cookie('qcf_buildingName1', buildingName, { expires: 30});
  $.cookie('qcf_streetAddress1', street, { expires: 30});
  $.cookie('qcf_secondStreet1', street1, { expires: 30});
  $.cookie('qcf_townAddress1', town, { expires: 30});
  $.cookie('qcf_countryAddress1', country, { expires: 30});
  $.cookie('qcf_vehiclePostcode1', pstCde, { expires: 30});
  $('#cityName').html(town);
  if(buildingNum==''){
    buildingNum = 'NA';
  }
  if(buildingNumP==''){
    buildingNum = 'NA';
  }
  if(buildingName==''){
    buildingName = 'NA';
  }
  if(buildingNameP==''){
    buildingNameP = 'NA';
  }
  if(county==''){
    county = 'NA';
  }
  if(countyP==''){
    countyP = 'NA';
  }
  if(street==''){
    street = 'NA';
  }
  if(streetP==''){
    streetP = 'NA';
  }
  if(street1==''){
    street1 = 'NA';
  }
  if(street1P==''){
    street1P = 'NA';
  }
  if(town==''){
    town = 'NA';
  }
  if(townP==''){
    townP = 'NA';
  }
  var checkDuplicate = buildingNum.replace(' ','') == buildingNumP.replace(' ','') && buildingName == buildingNameP && county == countyP && street1 == street1P && town == townP && pstCde == pstCdeP;
  if(!checkDuplicate){
  setTimeout(function(){
      $('.ninethForm1').hide();
      $('.eleventhForm1').show();
      $('.progress-line').css('width','85%');
  }, 100);
}else{
  swal("Error!", "Duplicate address is not allowed!", "error");
}
}
else{
  swal("Error!", "Address data cannot be empty!", "error");
}
});

$('#postcode1').click(function(){
$('#ninethForms1').hide();
$('#AddressLookup2').show();
})
$('#postcode1').keypress(function(){
$('#ninethForms1').hide();
$('#AddressLookup2').show();
})

$('#AddressLookup2').click(function(){
$(window).scrollTop(0);
var buildingNumP = $('#buildingNumber').val();
var buildingNameP = $('#buildingName').val();
var countyP = $('#county').val();
var streetP = $('#street').val();
var street1P = $('#secondStreet').val();
var townP = $('#town').val();
var countryP = $('#country').val();
var flagP ='false';
var pstCdeP = $('#postcode').val();

var buildingNum = $('#buildingNumber1').val();
var buildingName = $('#buildingName1').val();
var county = $('#county1').val();
var street = $('#street1').val();
var street1 = $('#secondStreet1').val();
var town = $('#town1').val();
var country = $('#country1').val();
var flag ='false';
var pstCde = $('#postcode1').val();
if(pstCde=='' || buildingNum=='' || buildingName=='' || street=='' || town==''){
swal("Error!", "Postcode, building, street, town data is required!", "error");
}
else{
$.cookie('qcf_buildingNumber1', buildingNum, { expires: 30});
$.cookie('qcf_county1', county, { expires: 30});
$.cookie('qcf_buildingName1', buildingName, { expires: 30});
$.cookie('qcf_streetAddress1', street, { expires: 30});
$.cookie('qcf_secondStreet1', street1, { expires: 30});
$.cookie('qcf_townAddress1', town, { expires: 30});
$.cookie('qcf_countryAddress1', country, { expires: 30});
$.cookie('qcf_vehiclePostcode1', pstCde, { expires: 30});
$('#cityName').html(town);
if(buildingNum==''){
  buildingNum = 'NA';
}
if(buildingNumP==''){
  buildingNum = 'NA';
}
if(buildingName==''){
  buildingName = 'NA';
}
if(buildingNameP==''){
  buildingNameP = 'NA';
}
if(county==''){
  county = 'NA';
}
if(countyP==''){
  countyP = 'NA';
}
if(street==''){
  street = 'NA';
}
if(streetP==''){
  streetP = 'NA';
}
if(street1==''){
  street1 = 'NA';
}
if(street1P==''){
  street1P = 'NA';
}
if(town==''){
  town = 'NA';
}
if(townP==''){
  townP = 'NA';
}
var checkDuplicate = buildingNum.replace(' ','') == buildingNumP.replace(' ','') && buildingName == buildingNameP && county == countyP && street1 == street1P && town == townP && pstCde == pstCdeP;
if(!checkDuplicate){
setTimeout(function(){
    $('.ninethForm1').hide();
    $('.eleventhForm1').show();
    $('.progress-line').css('width','85%');
}, 100);
}else{
swal("Error!", "Duplicate address is not allowed!", "error");
}
}
});

/* ------------Address Lookup 2 -------------- */
$('#ninethForms2').click(function(){
$(window).scrollTop(0);
var buildingNumP = $('#buildingNumber1').val();
var buildingNameP = $('#buildingName1').val();
var countyP = $('#county1').val();
var streetP = $('#street1').val();
var street1P = $('#secondStreet1').val();
var townP = $('#town1').val();
var countryP = $('#country1').val();
var flag ='false';
var pstCdeP = $('#postcode1').val();
  var buildingNum = $('#buildingNumber2').val();
  var buildingName = $('#buildingName2').val();
  var county = $('#county2').val();
  var street = $('#street2').val();
  var street1 = $('#secondStreet2').val();
  var town = $('#town2').val();
  var country = $('#country2').val();
  var flag ='false';
  var pstCde = $('#postcode2').val();

  if(pstCde!=''){
      $.cookie('qcf_buildingNumber2', buildingNum, { expires: 30});
      $.cookie('qcf_county2', county, { expires: 30});
      $.cookie('qcf_buildingName2', buildingName, { expires: 30});
      $.cookie('qcf_streetAddress2', street, { expires: 30});
      $.cookie('qcf_secondStreet2', street1, { expires: 30});
      $.cookie('qcf_townAddress2', town, { expires: 30});
      $.cookie('qcf_countryAddress2', country, { expires: 30});
      $.cookie('qcf_vehiclePostcode2', pstCde, { expires: 30});
      if(buildingNum==''){
        buildingNum = 'NA';
      }
      if(buildingNumP==''){
        buildingNum = 'NA';
      }
      if(buildingName==''){
        buildingName = 'NA';
      }
      if(buildingNameP==''){
        buildingNameP = 'NA';
      }
      if(county==''){
        county = 'NA';
      }
      if(countyP==''){
        countyP = 'NA';
      }
      if(street==''){
        street = 'NA';
      }
      if(streetP==''){
        streetP = 'NA';
      }
      if(street1==''){
        street1 = 'NA';
      }
      if(street1P==''){
        street1P = 'NA';
      }
      if(town==''){
        town = 'NA';
      }
      if(townP==''){
        townP = 'NA';
      }
      var checkDuplicate = buildingNum.replace(' ','') == buildingNumP.replace(' ','') && buildingName == buildingNameP && county == countyP && street1 == street1P && town == townP && pstCde == pstCdeP;
        if(!checkDuplicate){
          $('.ninethForm2').hide();
          $('.eleventhForm2').show();
          $('.progress-line').css('width','85%');
        }else{
            swal("Error!", "Duplicate address is not allowed!", "error");
        }
  }
  else{
      swal("Error!", "Address data cannot be empty!", "error");
  }
});

$('#postcode2').click(function(){
$('#ninethForms2').hide();
$('#AddressLookup3').show();
})
$('#postcode2').keypress(function(){
$('#ninethForms2').hide();
$('#AddressLookup3').show();
})

$('#AddressLookup3').click(function(){
$(window).scrollTop(0);
var buildingNumP = $('#buildingNumber1').val();
var buildingNameP = $('#buildingName1').val();
var countyP = $('#county1').val();
var streetP = $('#street1').val();
var street1P = $('#secondStreet1').val();
var townP = $('#town1').val();
var countryP = $('#country1').val();
var flag ='false';
var pstCdeP = $('#postcode1').val();
  var buildingNum = $('#buildingNumber2').val();
  var buildingName = $('#buildingName2').val();
  var county = $('#county2').val();
  var street = $('#street2').val();
  var street1 = $('#secondStreet2').val();
  var town = $('#town2').val();
  var country = $('#country2').val();
  var flag ='false';
  var pstCde = $('#postcode2').val();
  if(pstCde=='' || buildingNum=='' || buildingName=='' || street=='' || town==''){
      swal("Error!", "Postcode, building, street, town data is required!", "error");
  }else{
      $.cookie('qcf_buildingNumber2', buildingNum, { expires: 30});
      $.cookie('qcf_county2', county, { expires: 30});
      $.cookie('qcf_buildingName2', buildingName, { expires: 30});
      $.cookie('qcf_streetAddress2', street, { expires: 30});
      $.cookie('qcf_secondStreet2', street1, { expires: 30});
      $.cookie('qcf_townAddress2', town, { expires: 30});
      $.cookie('qcf_countryAddress2', country, { expires: 30});
      $.cookie('qcf_vehiclePostcode2', pstCde, { expires: 30});
      if(buildingNum==''){
        buildingNum = 'NA';
      }
      if(buildingNumP==''){
        buildingNum = 'NA';
      }
      if(buildingName==''){
        buildingName = 'NA';
      }
      if(buildingNameP==''){
        buildingNameP = 'NA';
      }
      if(county==''){
        county = 'NA';
      }
      if(countyP==''){
        countyP = 'NA';
      }
      if(street==''){
        street = 'NA';
      }
      if(streetP==''){
        streetP = 'NA';
      }
      if(street1==''){
        street1 = 'NA';
      }
      if(street1P==''){
        street1P = 'NA';
      }
      if(town==''){
        town = 'NA';
      }
      if(townP==''){
        townP = 'NA';
      }
      var checkDuplicate = buildingNum.replace(' ','') == buildingNumP.replace(' ','') && buildingName == buildingNameP && county == countyP && street1 == street1P && town == townP && pstCde == pstCdeP;
        if(!checkDuplicate){
          $('.ninethForm2').hide();
          $('.eleventhForm2').show();
          $('.progress-line').css('width','85%');
        }else{
            swal("Error!", "Duplicate address is not allowed!", "error");
        }
  }
});

/* -----------------tenthForm----------------- */
$('input:radio[name="qcf_vehicleResidential"]').change(
function(){
$(window).scrollTop(0);
  if ($(this).is(':checked') && $(this).val() != '') {
      var qcf_vehicleResidential = $('input[name=qcf_vehicleResidential]:checked').val();
      $.cookie('qcf_vehicleResidential', qcf_vehicleResidential, { expires: 30});
      $('.progress-line').css('width','90%');
      $('.tenthForm').hide();
      $('.eleventhForm').show();

  }
});

$('#tenthForm').click(function(){
$(window).scrollTop(0);
  var qcf_vehicleResidential = $('input[name=qcf_vehicleResidential]:checked').val();
  if(!qcf_vehicleResidential){
    swal("Error!", "Please select one value!", "error");
  }
  else{
      $('.progress-line').css('width','90%');
      $.cookie('qcf_vehicleResidential', qcf_vehicleResidential, { expires: 30});
      $('.tenthForm').hide();
      $('.eleventhForm').show();
  }
});
/* ----------------- Step vehicleResidential1 ----------------- */

$('input:radio[name="vehicleResidential1"]').change(
function(){
$(window).scrollTop(0);
  if ($(this).is(':checked') && $(this).val() != '') {
      var qcf_vehicleResidential = $('input[name=qcf_vehicleResidential1]:checked').val();
      $.cookie('qcf_vehicleResidential1', qcf_vehicleResidential, { expires: 30});
      $('.progress-line').css('width','90%');
      $('.residentialStatus1').hide();
      $('.currentAddressDetail1').show();
  }
});
$('#residentialStatus1').click(function(){
$(window).scrollTop(0);
  var qcf_vehicleResidential = $('input[name=qcf_vehicleResidential1]:checked').val();
  if(!qcf_vehicleResidential){
      $('#tenthFormError').show();
      setTimeout(function() {
          $('#tenthFormError').hide();
      }, 5000);
  }
  else{
      $('.progress-line').css('width','90%');
      $.cookie('qcf_vehicleResidential1', qcf_vehicleResidential, { expires: 30});
      $('.residentialStatus1').hide();
      $('.currentAddressDetail1').show();
  }
});
/* ----------------- Step vehicleResidential2 ----------------- */
$('input:radio[name="vehicleResidential2"]').change(
function(){
$(window).scrollTop(0);
  if ($(this).is(':checked') && $(this).val() != '') {
      var qcf_vehicleResidential = $('input[name=qcf_vehicleResidential2]:checked').val();
      $.cookie('qcf_vehicleResidential2', qcf_vehicleResidential, { expires: 30});

      $('.progress-line').css('width','90%');
      $('.residentialStatus2').hide();
      $('.currentAddressDetail2').show();
  }
});
$('#residentialStatus2').click(function(){
$(window).scrollTop(0);
  var qcf_vehicleResidential = $('input[name=qcf_vehicleResidential2]:checked').val();
  if(!qcf_vehicleResidential){
      $('#tenthFormError').show();
      setTimeout(function() {
          $('#tenthFormError').hide();
      }, 5000);
  }
  else{
      $('.progress-line').css('width','90%');
      $.cookie('qcf_vehicleResidential2', qcf_vehicleResidential, { expires: 30});
      $('.residentialStatus2').hide();
      $('.currentAddressDetail2').show();
  }
});

$('#eleventhForm').click(function(){
$(window).scrollTop(0);
  var years = $('#addressYears').val();
  var months = $('#addressMonths').val();
  var flag ='false';
  if(months==''){
      months = 0;
  }
  if(years==''){
      years = 0;
  }
  var totalMonths = '';
  totalMonths = years*12;
  totalMonths = parseInt(totalMonths) + parseInt(months);
  totalAddressMonths = totalMonths;
  if(years<=0 && months <= 0){
      flag='false';
      swal("Error!", "Must be valid data!", "error");
  }
  else{
      if(years>11){
          swal("Error!", "Address years cannot be more than 11!", "error");
      }
      else {
          if(months>11){
              swal("Error!", "Address Months cannot be more than 11!", "error");
          }
          else{
            if(totalAddressMonths<36){
                $('.eleventhForm').hide();
                $('.ninethForm1').show();
                $('#alertSection').slideDown(500);
                var monthsL = 36 - parseInt(totalAddressMonths);
                $('#monthsLeft').html(monthsL);
            }
            else{
                  $('.progress-line').css('width','92%');
                  $.cookie('qcf_currentAddressYears', years, { expires: 30});
                  $.cookie('qcf_currentAddressMonths', months, { expires: 30});
                  $('.eleventhForm').hide();
                  $('.twelvethForm').show();
                  $('#alertSection').hide();
                  $.cookie('qcf_totalMonths', 0, { expires: 30});
            }
          }
      }

  }
});

$('#eleventhForm1').click(function(){
$(window).scrollTop(0);
$('.twelvethForm').hide();
var years = $('#addressYears1').val();
var months = $('#addressMonths1').val();
var flag ='false';
if(months==''){
      months = 0;
  }
  if(years==''){
      years = 0;
  }
var totalMonths = 0;
totalMonths = years*12;
totalMonths = parseInt(totalMonths) + parseInt(months);
totalAddressMonths = parseInt(totalMonths) + parseInt(totalAddressMonths);

if(years<=0 && months <= 0){
  flag='false';
  swal("Error!", "Must be valid data!", "error");
}
else{
  if(years>11){
          swal("Error!", "Address years cannot be more than 11!", "error");
      }
      else {
          if(months>11){
              swal("Error!", "Address Months cannot be more than 11!", "error");
          }
          else{
              if(totalAddressMonths<36){
                  $('.eleventhForm1').hide();
                  $('.ninethForm2').show();
                  $('#alertSection').slideDown(500);
                  var monthsL = 36 - parseInt(totalAddressMonths);
                  $('#monthsLeft').html(monthsL);
              }
              else{
                  $('.progress-line').css('width','85%');
                  $.cookie('qcf_currentAddressYears1', years, { expires: 30});
                  $.cookie('qcf_currentAddressMonths1', months, { expires: 30});
                  $('.eleventhForm1').hide();
                  $('.twelvethForm').show();
                  $('#alertSection').hide();
                  $.cookie('qcf_totalMonths', 0, { expires: 30});
              }
          }

}
}
});



$('#eleventhForm2').click(function(){
$(window).scrollTop(0);
$('.twelvethForm').hide();
var years = $('#addressYears2').val();
var months = $('#addressMonths2').val();

if(years<=0 && months<=0){
  flag='false';
  swal("Error!", "Must be valid data!", "error");
}
else{
  if(years>11){
          swal("Error!", "Address years cannot be more than 11!", "error");
      }
      else {
          if(months>11){
              swal("Error!", "Address Months cannot be more than 11!", "error");
          }
          else{
              $('.progress-line').css('width','85%');
              $.cookie('qcf_currentAddressYears', years, { expires: 30});
              $.cookie('qcf_currentAddressMonths', months, { expires: 30});
              $('.eleventhForm2').hide();
              $('#alertSection').hide();
              $('.twelvethForm').show();
              $.cookie('qcf_totalMonths', 0, { expires: 30});
            }
      }
}
});


//////////////////// Step currentAddressDetail1 /////////////////
$('#currentAddressDetail1').click(function(){
$(window).scrollTop(0);
  var years = $('#currentAddressYears1').val();
  var months = $('#currentAddressMonths1').val();
  var flag ='false';
  if(months==''){
     months = 0;
 }
  var totalMonths = '';
  totalMonths = years*12;
  totalMonths = parseInt(totalMonths) + parseInt(months);
  var buildingNumber = $.cookie('qcf_buildingNumber1');
  var buildingName = $.cookie('qcf_buildingName1');
  var county = $.cookie('qcf_county1');
  var street = $.cookie('qcf_streetAddress1');
  var secondStreet = $.cookie('qfc_secondStreet1');
  var town = $.cookie('qcf_townAddress1');
  var country = $.cookie('qcf_countryAddress1');
  var postcode = $.cookie('qcf_vehiclePostcode1');
  var residential = $.cookie('qcf_vehicleResidential1');
  $.cookie('qcf_totalMonths', totalMonths, { expires: 30});
  var data =  {
      buildingNumber:buildingNumber,
      buildingName:buildingName,
      street:street,
      secondStreet:secondStreet,
      town:town,
      county:county,
      postcode:postcode,
      residential:residential,
      years:years,
      months:months,
      totalMonths:totalMonths
  };
  if((years=='' || years<=0) && (months=='' || months <= 0)){
      flag='false';
  }
  else{
      if(years>99){
          swal("Error!", "Address years cannot be more than 99!", "error");
      }
      else {
          if(months>11){
              swal("Error!", "Address Months cannot be more than 11!", "error");
          }
          else{
              flag='true';
      var ajaxAddress = "{{ route('saveAddressData') }}";
      if(totalMonths<36){
          $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              type:"POST",
              url: ajaxAddress,
              data:data,
              success: function(response){
                  if(response<36){
                      flag = 'false';
                      $('.currentAddressDetail1').hide( "drop", { direction: "left" }, "slow" );
                      $('.addressLookup2').show( "drop", { direction: "right" }, "slow" );
                      $('#alertSection').slideDown(500);
                      var monthsL = 36 - parseInt(response);
                      $('#monthsLeft').html(monthsL);
                  }
                  else{
                      if(flag=='true'){
                          $('.progress-line').css('width','85%');
                          $.cookie('qcf_currentAddressYears1', years, { expires: 30});
                          $.cookie('qcf_currentAddressMonths1', months, { expires: 30});
                          $('.currentAddressDetail1').hide( "drop", { direction: "left" }, "slow" );
                          $('.twelvethForm').show( "drop", { direction: "right" }, "slow" );
                          $('#alertSection').hide();
                          $.cookie('totalMonths', 0, { expires: 30});
                      }
                     else{
                          $('#alertSection').hide();
                          $('.addressY').css('border','1px solid red');
                          $('.addressLabelY').css('border','1px solid red');
                          $('.addressM').css('border','1px solid red');
                          $('.addressLabelM').css('border','1px solid red');
                          $('#addressYearsError').show();
                          setTimeout(function() {
                              $('#addressYearsError').hide();
                          }, 5000);
                      }
                  }
              }
          });
      }
      else{
          if(flag=='true'){
              $('.progress-line').css('width','85%');
              $.cookie('qcf_currentAddressYears1', years, { expires: 30});
              $.cookie('qcf_currentAddressMonths1', months, { expires: 30});
              $('.currentAddressDetail1').hide();
              $('.twelvethForm').show();
              $('#alertSection').hide();
              $.cookie('qcf_totalMonths', 0, { expires: 30});
          }
          else{
              $('.addressY').css('border','1px solid red');
              $('.addressLabelY').css('border','1px solid red');
              $('.addressM').css('border','1px solid red');
              $('.addressLabelM').css('border','1px solid red');
              $('#addressYearsError').show();
              setTimeout(function() {
                  $('#addressYearsError').hide();
              }, 5000);
          }
      }
          }
      }

  }
});

/* Check Name */

$('#gettingName').click(function(){
  $(window).scrollTop(0);
  var fname = $('#firstName').val();
  var sname = $('#surName').val();
  var regex=/^[a-zA-Z -]*$/;
  if(fname=='' || !fname.match(regex)){
      swal("Error!", "First name should not be empty, and only a-z/A-Z is allowed!", "error");
      flag='false';
  }
  else{
      flag='true'
  }
  if(sname=='' || !sname.match(regex)){
      swal("Error!", "Last name should not be empty, and only a-z/A-Z is allowed!", "error");
      flag = 'false';
  }
  else{
      flag='true';
  }
  if(flag=='true'){
      $.cookie('qcf_firstName', fname, { expires: 30});
      $.cookie('qcf_surName', sname, { expires: 30});
      $('.progress-line').css('width','95%');
      // $('.progress-bullet4').addClass('active');
      $('.gettingName').hide();
      $('.thirteenthForm').show();
      // $('.BankVerification').show();
  }
});

// Verify Bank Account Number


$('#verifyBank').click(function(){
  $(window).scrollTop(0);
  var accountNumber = $('#accountNumber').val();
  var sortCode = $('#sortCode').val();
  if(accountNumber=='' || sortCode==''){
      swal("Error!", "Account Number and Sort Code Required!", "error");
  }else{
    var data = {
      accountNumber:accountNumber,
      sortCode:sortCode
    }
    var url = "{{route('verifyBank')}}";
    $.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
    type:"POST",
    url:url,
    data:data,
    success: function(response){
      if(response.IsCorrect=='True'){
        $('.progress-line').css('width','97%');
        $('.progress-bullet4').addClass('active');
        $('.BankVerification').hide();
        $('.thirteenthForm').show();
      }else{
          swal("Error!", "Account Number or Sort Code not Correct!", "error");
      }
    }
  })
  }
});

// Verify Bank Account Number

// Disable enter on form
  $("#msform").bind("keypress", function(e) {
      if (e.keyCode == 13) {
          return false;
      }
  });

$('#msform').on('submit', function (e) {
$(window).scrollTop(0);
  var agree = $("[id$='checkbox3'][type='checkbox']:checked");
  var flag= false;
  var mobiles = false;
  e.preventDefault();
  var mobile = $('#mobileNumber').val();
  var email = $('#emailAddress').val();
  var mobStr = mobile.toString();
  mobStr = mobStr.length;
   $('#submitButton').prop('disabled', true);

  if(email.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){
      flag = true;
      $('#emailAddress').css('border','1px solid #ccc');
  }
  else{
      
      swal("Invalid Email!", "Should be a valid email address!", "error");
       $('#submitButton').prop('disabled', false);
  }
  if(agree.length>0){
  if(mobStr==11){
    // console.log("Number is 11");
      // $.getJSON("https://services.postcodeanywhere.co.uk/PhoneNumberValidation/Interactive/Validate/v2.20/json3.ws?callback=?",
      // {
      //     Key: "EW45-KG86-JY94-FM52",
      //     Phone: mobile,
      //     Country: "GB"
      // },
      // function (data) {
      //     // Test for an error
      //     if (data.Items.length == 1 && typeof(data.Items[0].Error) != "undefined") {
      //           swal("Invalid Phone Number!", data.Items[0].Description, "error");
      //            $('#submitButton').prop('disabled', false);
      //     }
          // else {
              // Check if there were any items found
              // if (data.Items.length == 0){
              //   swal("Invalid Phone Number!", "Must be a valid phone number!", "error");
              //    $('#submitButton').prop('disabled', false);
              // }
              // else {
                if(flag== true){
                    $('#submitButton').prop('disabled', true);
                    $.cookie('qcf_mobileNumber', mobile, { expires: 30});
                    $.cookie('qcf_emailAddress', email, { expires: 30});
                    var form=$("#msform");
                    var forms=$("#msform").serialize();
                    var utm_source = localStorage.getItem('utm_source');
                    var utm_medium = localStorage.getItem('utm_medium');
                    var utm_campaign = localStorage.getItem('utm_campaign');
                    var utm_term = localStorage.getItem('utm_term');
                    var utm_content = localStorage.getItem('utm_content');
                    var affiliate = localStorage.getItem('aff');
                    var gclid = localStorage.getItem('gclid');
                    var source = localStorage.getItem('source');
                    // console.log(forms);
                    var splited_serialized = forms.split('&');
                    var formData = [];
                    $.each( splited_serialized, function(index, key) {

                        var input = key.substr(0, key.indexOf('='));
                        var value = key.substr( key.indexOf('=') + 1 );
                    formData.push(value);

                    });

                    var vehicleType = $("input[name=cars]:checked").val();
                    var budget = $('input[name=budget]:checked').val();
                    var licence = $('input[name=licence]:checked').val();
                    var marital = $("input[name=marital]:checked").val();
                    var passport = $("input[name=qcf_passport]:checked").val();
                    var passport1 = $("input[name=qcf_passport]:checked").val();
                    if(passport=='yes'){
                      passport = 'True';
                    }else{
                      passport = 'False';
                    }
                    var dob = $("input[name=qcf_dob]").val();
                    var employmentStatus = $('input[name=qcf_employment]:checked').val();
                    if(employmentStatus=='Armed Forces'){
                      employmentStatus = "Armed Services";
                    }
                    if(employmentStatus=='Homemaker/Carer'){
                      employmentStatus = "Homemaker";
                    }
                    if(employmentStatus=='Self-Employment'){
                      employmentStatus = "Self-Employed";
                    }

                    var companyName = $("input[name=qcf_companyName]").val();
                    var jobTitle = $("input[name=jobTitle]").val();
                    var companyName1 = $("input[name=qcf_companyName1]").val();
                    var jobTitle1 = $("input[name=jobTitle1]").val();
                    var companyName2 = $("input[name=qcf_companyName2]").val();
                    var jobTitle2 = $("input[name=jobTitle2]").val();
                    var employmentYears = $("input[name=employmentYears]").val();
                    var employmentMonths = $("input[name=employmentMonths]").val();
                    var employmentYears1 = $("input[name=employmentYears1]").val();
                    var employmentMonths1 = $("input[name=employmentMonths1]").val();
                    var employmentYears2 = $("input[name=employmentYears2]").val();
                    var employmentMonths2 = $("input[name=employmentMonths2]").val();
                    var monthlyIncome = $("input[name=monthlyIncome]").val();
                    var monthlyIncome1 = $("input[name=monthlyIncome1]").val();
                    var monthlyIncome2 = $("input[name=monthlyIncome2]").val();
                    var AddressNow = $("input[name=nameGoesHere]").val();
                    var buildingName = $("input[name=buildingName]").val();
                    var buildingNumber = $("input[name=buildingNumber]").val();
                    var street = $("input[name=txtLine]").val();
                    var secondStreet = $("input[name=secondStreet]").val();
                    var town = $("input[name=txtTown]").val();
                    var county = $("input[name=county]").val();
                    var postcode = $("input[name=txtPostcode]").val();

                    var AddressNow1 = $("input[name=nameGoesHere]").val();

                    var buildingName1 = $("input[name=buildingName1]").val();
                    var buildingNumber1 = $("input[name=buildingNumber1]").val();
                    var street1 = $("input[name=txtLine1]").val();
                    var secondStreet1 = $("input[name=secondStreet1]").val();
                    var town1 = $("input[name=txtTown1]").val();
                    var county1 = $("input[name=county1]").val();
                    var postcode1 = $("input[name=txtPostcode1]").val();

                    var AddressNow2 = $("input[name=nameGoesHere]").val();

                    var buildingName2 = $("input[name=buildingName2]").val();
                    var buildingNumber2 = $("input[name=buildingNumber2]").val();
                    var street2 = $("input[name=txtLine2]").val();
                    var secondStreet2 = $("input[name=secondStreet2]").val();
                    var town2 = $("input[name=txtTown2]").val();
                    var county2 = $("input[name=county2]").val();
                    var postcode2 = $("input[name=txtPostcode2]").val();

                    var borrowAmount = $('input[name=borrowAmount]').val();
                    if(borrowAmount.indexOf(',')>-1){
                      borrowAmount = borrowAmount.replace(",", "");
                    }
                    var residentialStatus = $("input[name=qcf_vehicleResidential]:checked").val();
                    var currentAddressYears = $("input[name=qcf_currentAddressYears]").val();
                    var currentAddressMonths = $("input[name=qcf_currentAddressMonths]").val();
                    var currentAddressYears1 = $("input[name=qcf_currentAddressYears1]").val();
                    var currentAddressMonths1 = $("input[name=qcf_currentAddressMonths1]").val();
                    var currentAddressYears2 = $("input[name=qcf_currentAddressYears2]").val();
                    var currentAddressMonths2 = $("input[name=qcf_currentAddressMonths2]").val();
                    if(currentAddressYears1==''){
                      currentAddressYears1 = 0
                    }
                    if(currentAddressYears2==''){
                      currentAddressYears2 = 0
                    }
                    if(currentAddressMonths1==''){
                      currentAddressMonths1 = 0
                    }
                    if(currentAddressMonths2==''){
                      currentAddressMonths2 = 0
                    }

                    if(employmentYears==''){
                      employmentYears = 0
                    }
                    if(employmentMonths==''){
                      employmentMonths = 0
                    }
                    if(employmentYears1==''){
                      employmentYears1 = 0
                    }
                    if(employmentYears2==''){
                      employmentYears2 = 0
                    }
                    if(employmentMonths1==''){
                      employmentMonths1 = 0
                    }
                    if(employmentMonths2==''){
                      employmentMonths2 = 0
                    }

                    if(residentialStatus=='Tenant-Private'){
                      residentialStatus = 'Tenant - Private';
                    }
                    if(residentialStatus=='Tenant-Housing'){
                      residentialStatus = 'Tenant - Housing';
                    }
                    if(residentialStatus=='Tenant-Council'){
                      residentialStatus = 'Tenant - Council';
                    }
                    var total1 = parseInt(currentAddressYears1) + parseInt(currentAddressMonths1);
                    var total2 = parseInt(currentAddressYears2) + parseInt(currentAddressMonths2);
                    var totalEmp1 = parseInt(employmentYears1) + parseInt(employmentMonths1);
                    var totalEmp2 = parseInt(employmentYears2) + parseInt(employmentMonths2);

                    var prefixTitle = $("input[name=prefixTitle]:checked").val();
                    var firstName = $("input[name=firstName]").val();
                    var lastName = $("input[name=surName]").val();
                    var mobileNumber = $("input[name=mobileNumber]").val();
                    var emailAddress = $("input[name=emailAddress]").val();
                    var emailOptions = $("input[name=email]").val();
                    var smsOptions = $("input[name=sms]").val();


                    //var marketingOptions = $("input[name=nameGoesHere]").val();
                    var yrsToMonths = employmentYears * 12;
                    if(employmentMonths==''){
                        employmentMonths = 0;
                    }
                    var tMonths = parseInt(yrsToMonths) + parseInt(employmentMonths);
                    var dob1 = dob.split("/");
                    var days = dob1[0];
                    var mons = dob1[1];
                    var years = dob1[2];
                    var dateOfBirth = years+"-"+mons+"-"+days;
                    var EmpObj = [];
                    var AddObj = [];
                    if(postcode!=''){
                      AddObj =  [
                          {
                             "Building": buildingNumber+' '+buildingName,
                             "Street": street,
                             "County": county,
                             "Postcode": postcode,
                             "TimeAtAddressMonths": currentAddressMonths,
                             "TimeAtAddressYears": currentAddressYears,
                             "Town": town,
                             "ResidentialStatus": residentialStatus
                         }
                      ]
                    }
                    if(total1>0){
                      AddObj =  [
                         {
                          "Building": buildingNumber+' '+buildingName,
                          "Street": street,
                          "County": county,
                          "Postcode": postcode,
                          "TimeAtAddressMonths": currentAddressMonths,
                          "TimeAtAddressYears": currentAddressYears,
                          "Town": town,
                          "ResidentialStatus": residentialStatus
                          },
                          {
                              "Building": buildingNumber1+' '+buildingName1,
                              "Street": street1,
                              "County": county1,
                              "Postcode": postcode1,
                              "TimeAtAddressMonths": currentAddressMonths1,
                              "TimeAtAddressYears": currentAddressYears1,
                              "Town": town1,
                              "ResidentialStatus": residentialStatus
                          }
                        ]
                    }
                    if(total2>0){
                      AddObj = [
                        {
                          "Building": buildingNumber+' '+buildingName,
                          "Street": street,
                          "County": county,
                          "Postcode": postcode,
                          "TimeAtAddressMonths": currentAddressMonths,
                          "TimeAtAddressYears": currentAddressYears,
                          "Town": town,
                          "ResidentialStatus": residentialStatus
                          },
                          {
                              "Building": buildingNumber1+' '+buildingName1,
                              "Street": street1,
                              "County": county1,
                              "Postcode": postcode1,
                              "TimeAtAddressMonths": currentAddressMonths1,
                              "TimeAtAddressYears": currentAddressYears1,
                              "Town": town1,
                              "ResidentialStatus": residentialStatus
                          },
                          {
                              "Building": buildingNumber2+' '+buildingName2,
                              "Street": street2,
                              "County": county2,
                              "Postcode": postcode2,
                              "TimeAtAddressMonths": currentAddressMonths2,
                              "TimeAtAddressYears": currentAddressYears2,
                              "Town": town2,
                              "ResidentialStatus": residentialStatus
                          }
                        ]
                    }

                    if(monthlyIncome1==''){
                      if(employmentStatus=="Benefits"){
                        jobTitle = "Benefits";
                        companyName = "Benefits";
                        employmentYears = 3;
                        employmentMonths = 0;
                      }
                      if(employmentStatus=="Retired"){
                        jobTitle = "Retired";
                        companyName = "Retired";
                        employmentYears = 3;
                        employmentMonths = 0;
                      }
                      EmpObj = [
                        {
                          "Company": companyName,
                          "Building": "",
                          "Street": "",
                          "Town": "",
                          "County": "",
                          "Postcode": "",
                          "EmploymentStatus": employmentStatus,
                          "JobTitle": jobTitle,
                          "MonthlyIncome": monthlyIncome,
                          "TimeAtEmployerMonths": employmentMonths,
                          "TimeAtEmployerYears": employmentYears
                          }
                        ]
                    }
                    if(totalEmp1>0){
                      if(employmentStatus=="Benefits"){
                        jobTitle = "Benefits";
                        companyName = "Benefits";
                      }
                      if(employmentStatus=="Retired"){
                        jobTitle = "Retired";
                        companyName = "Retired";
                      }

                      EmpObj = [
                      {
                          "Company": companyName,
                          "Building": "",
                          "Street": "",
                          "Town": "",
                          "County": "",
                          "Postcode": "",
                          "EmploymentStatus": employmentStatus,
                          "JobTitle": jobTitle,
                          "MonthlyIncome": monthlyIncome,
                          "TimeAtEmployerMonths": employmentMonths,
                          "TimeAtEmployerYears": employmentYears
                          },
                          {
                              "Company": companyName1,
                              "Building": "",
                              "Street": "",
                              "Town": "",
                              "County": "",
                              "Postcode": "",
                              "EmploymentStatus": employmentStatus,
                              "JobTitle": jobTitle1,
                              "MonthlyIncome": monthlyIncome1,
                              "TimeAtEmployerMonths": employmentMonths1,
                              "TimeAtEmployerYears": employmentYears1
                          }
                        ]
                    }
                      if(totalEmp2>0){
                        if(employmentStatus=="Benefits"){
                          jobTitle = "Benefits";
                          companyName = "Benefits";
                        }
                        if(employmentStatus=="Retired"){
                          jobTitle = "Retired";
                          companyName = "Retired";
                        }

                      EmpObj = [
                        {
                          "Company": companyName,
                          "Building": "",
                          "Street": "",
                          "Town": "",
                          "County": "",
                          "Postcode": "",
                          "EmploymentStatus": employmentStatus,
                          "JobTitle": jobTitle,
                          "MonthlyIncome": monthlyIncome,
                          "TimeAtEmployerMonths": employmentMonths,
                          "TimeAtEmployerYears": employmentYears
                          },
                          {
                              "Company": companyName1,
                              "Building": "",
                              "Street": "",
                              "Town": "",
                              "County": "",
                              "Postcode": "",
                              "EmploymentStatus": employmentStatus,
                              "JobTitle": jobTitle1,
                              "MonthlyIncome": monthlyIncome1,
                              "TimeAtEmployerMonths": employmentMonths1,
                              "TimeAtEmployerYears": employmentYears1
                          },
                          {
                              "Company": companyName2,
                              "Building": "",
                              "Street": "",
                              "Town": "",
                              "County": "",
                              "Postcode": "",
                              "EmploymentStatus": employmentStatus,
                              "JobTitle": jobTitle2,
                              "MonthlyIncome": monthlyIncome2,
                              "TimeAtEmployerMonths": employmentMonths2,
                              "TimeAtEmployerYears": employmentYears2
                          }
                        ]
                    }

                    var apiData= {
                            "VehicleType": vehicleType,
                            "AmountToBorrow": borrowAmount,
                            "LoanTerm": 48,
                            "SourceReference":utm_source,
                            "CampaignCode1":gclid,
                            "CampaignCode2":utm_medium,
                            "CampaignCode3":utm_term,
                            "CampaignCode4":utm_content,
                            "CampaignCode5":affiliate,
                            "Applicants": [
                            {
                                "DateOfBirth": dateOfBirth,
                                "DrivingLicenseType": licence,
                                "Email": emailAddress,
                                "Forename": firstName,
                                "Surname": lastName,
                                "Mobile": mobileNumber,
                                "Title": prefixTitle,
                                "MaritalStatus": marital,
                                "Landline": mobileNumber,
                                "ValidUkPassport": passport,
                                "NumberOfDependants": 1,
                                "OtherIncome": 0,
                                "MortgageBalance": "Null",
                                "HouseValuation": "Null",
                                "Addresses":AddObj,
                                "Employments":EmpObj,
                                "Notes": [
                                " "
                                   ]
                                }
                            ]
                        };
                        // console.log(apiData);
                        // console.log(JSON.stringify(apiData));
                        // apiData = JSON.stringify(apiData);
                        var newAPIFlag = false;
                        var formdata = form.serializeArray();
                        formdata.push({name:"utmSource",value:utm_source});
                        formdata.push({name:"utmCampaign",value:utm_campaign});
                        formdata.push({name:"utmMedium",value:utm_medium});
                        formdata.push({name:"utmTerm",value:utm_term});
                        formdata.push({name:"utmContent",value:utm_content});
                        var datas1= {};
                        $(formdata ).each(function(index, obj){
                            datas1[obj.name] = obj.value;
                        });
                    $('#lastModal').modal('show');
                    var formSerialize = form.serialize();
                      formSerialize+'&=utmSource' + utm_source+'&=utmCamPaign' + utm_campaign+'&=utmMedium' + utm_medium+'&=utmTerm' + utm_term+'&=utmContent' + utm_content+'&affiliate='+affiliate+'&gclid='+gclid;
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                        type:"POST",
                        //url:"{{route('saveApplication')}}",
		                    url:"/data.php",
                        data:formdata,
                        success: function(response){
                            localStorage.clear();
                           console.log(response);
            							 var RedirectURL = response;
            							 window.location.href = RedirectURL;

                            var res = response.split('#');
                            var newOrExist = res[0];
                            var leadID = res[1];
                            var sourceId = res[2];
                            var sendToMemArea = res[3];
                            var sendToAutoConvert = res[4];
                            var autoConvertApi = res[5];
                            if(autoConvertApi == 'no'){
                              autoConvertApi = "c93f7ea3-b7c3-478c-a3e7-ceeba3446958";
                            }
                            $('#LID').val(leadID);
                            if(sourceId!=0){
                              // window.location.href="dashboard/"+sourceId;
                              // console.log(sourceId);
                              if(newOrExist==1){
                                  emailExist = false;
                                  formSuccess = true;
                                    LID = $('#LID').val();
                                    var proxy ="https://cors-anywhere.herokuapp.com/";
                                    var uri ="https://api.autoconvert.co.uk/application/submit";
                                    if(sendToAutoConvert=='yes'){
                                      $.ajax({
                                          type:"POST",
                                          url:proxy+""+uri,
                                          data:apiData,
                                          dataType: "JSON",
                                          beforeSend: function (jqXHR) {
                                              jqXHR.setRequestHeader('X-ApiKey', autoConvertApi);
                                          },
                                         success: function(response){
                                                if(response.Accepted==true){
                                                  $ajax({
                                                    headers: {
                                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                        },
                                                        type:"POST",
                                                        url:"{{route('updateReference')}}",
                                                          // url:"/data.php",
                                                    data:{leadID:LID,reference:response.Reference},
                                                    success: function(response)
                                                    {
                                                      if(response==1){


                                                                                                                                                 // New API To Send Leads Start//
                                                                                                                                                   var newSources = utm_source;
                                                                                                                                                   var newAPIFlag = false;
                                                                                                                                                   if(newSources==''){
                                                                                                                                                     newSources = "www.quickcarfinance.com";
                                                                                                                                                   }
                                                                                                                                                   var dbb = dateOfBirth.split('-');
                                                                                                                                                   var dds = dbb[2];
                                                                                                                                                   var mms = dbb[1];
                                                                                                                                                   var yys = dbb[0];
                                                                                                                                                   var dbb = dds+"/"+mms+"/"+yys;
                                                                                                                                                   var NewAPI = "https://cors-anywhere.herokuapp.com/https://quickcarfinance.leadbyte.co.uk/api/submit.php?returnjson=yes&campid=QUICK-CAR-FINANCE&sid=1&email="+emailAddress+"&title="+prefixTitle+"&firstname="+firstName+"&lastname="+lastName+"&dob="+dbb+"&building="+buildingNumber+" "+buildingName+"&street1="+street+"&towncity="+town+"&county="+county+"&postcode="+postcode+"&phone1="+mobileNumber+"&phone2="+mobileNumber+"&company="+companyName+"&jobtitle="+jobTitle+"&source="+newSources+"&contactemail="+emailAddress+"&contactphone="+mobileNumber+"&vehicletype=Car&smsconsent="+smsOptions+"&emailconsent="+emailOptions+"&applicant.drivinglicensetype="+licence+"&applicant.maritalstatus="+marital+"&applicant.validukpassport="+passport1+"&loanamount="+borrowAmount+"&loanterm=48&address.building="+buildingNumber+" "+buildingName+"&address.street="+street+"&address.county="+county+"&address.postcode="+postcode+"&address.timeataddressmonths="+currentAddressMonths+"&address.timeataddressyears="+currentAddressYears+"&address.town="+town+"&address.residentialstatus="+residentialStatus+"&1st_previous__address.building="+buildingNumber1+" "+buildingName1+"&1st_previous__address.street="+street1+"&1st_previous__address.county="+county1+"&1st_previous__address.postcode="+postcode1+"&campaigncode1="+utm_campaign+"&1st_previous__address.timeataddressmonths="+currentAddressMonths1+"&1st_previous__address.timeataddressyears="+currentAddressYears1+"&1st_previous__address.town="+town1+"&1st_previous__address.residentialstatus="+residentialStatus+"&2nd_previous__address.building="+buildingNumber2+" "+buildingName2+"&2nd__previous__address.street="+street2+"&2nd__previous__address.county="+county2+"&2nd__previous__address.postcode="+postcode2+"&2nd__previous__address.timeataddressmonths="+currentAddressMonths2+"&campaigncode2="+utm_medium+"&2nd_previous__address.timeataddressyears="+currentAddressYears2+"&2nd_previous__address.town="+town2+"&2nd_previous__address.residentialstatus="+residentialStatus+"&employment.company="+companyName+"&employment.employmentstatus="+employmentStatus+"&employment.jobtitle="+jobTitle+"&employment.monthlyincome="+monthlyIncome+"&campaigncode3="+utm_term+"&employment.timeatemployermonths="+employmentMonths+"&employment.timeatemployeryears="+employmentYears+"&1st_previous_employment.company="+companyName1+"&1st_previous_employment.employmentstatus="+employmentStatus+"&1st_previous_employment.jobtitle="+jobTitle1+"&1st_previous_employment.monthlyincome="+monthlyIncome1+"&1st_previous_employment.timeatemployermonths="+employmentMonths1+"&campaigncode4="+utm_content+"&1st_previous_employment.timeatemployeryears="+employmentYears1+"&2nd_previous_employment.company="+companyName2+"&2nd_previous_employment.employmentstatus="+employmentStatus+"&2nd_previous__employment.jobtitle="+jobTitle2+"&2nd_previous_employment.monthlyincome="+monthlyIncome2+"&2nd_previous_employment.timeatemployermonths="+employmentMonths2+"&2nd_previous_employment.timeatemployeryears="+employmentYears2+"&sourcereference="+utm_source;
                                                                                                                                                   $.ajax({
                                                                                                                                                       type:"POST",
                                                                                                                                                       url:NewAPI,
                                                                                                                                                       success: function(res){
                                                                                                                                                         res = JSON.parse(res);
                                                                                                                                                         if(res.code==1){
                                                                                                                                                           localStorage.clear();
                                                                                                                                                           newAPIFlag = true;
                                                                                                                                                           if(sendToMemArea=='yes'){
                                                                                                                                                             var userSessionURL = "set-user-session/"+LID;
                                                                                                                                                             $.ajax({
                                                                                                                                                                 type:"GET",
                                                                                                                                                                 url:userSessionURL,
                                                                                                                                                                 success: function(response){
                                                                                                                                                                     if(response=='success'){
                                                                                                                                                                       setTimeout(function(){
                                                                                                                                                                         $('#lastModal').modal('hide');
                                                                                                                                                                         $('.afterSubmitting').show();
                                                                                                                                                                         $('.contentDiv').hide();
                                                                                                                                                                      }, 1000);
                                                                                                                                                                      setTimeout(function(){
                                                                                                                                                                        window.location.href="{{ url('dashboard') }}"
                                                                                                                                                                     }, 1000);
                                                                                                                                                                     }
                                                                                                                                                                 }
                                                                                                                                                                 });
                                                                                                                                                           }
                                                                                                                                                           else{
                                                                                                                                                              window.location.href="dashboard/"+sourceId;
                                                                                                                                                           }
                                                                                                                                                         }
                                                                                                                                                       }
                                                                                                                                                     });
                                                                                                                                                   // New API To Send Leads End//
                                                                                                                                                  deleteAllCookies();
                                                        }

                                                      }
                                                    })
                                               }
                                               else{
                                                 $('#submitButton').prop('disabled', false);
                                                 apiSuccess = false;
                                                   $('#formError').show();
                                                   setTimeout(function() {
                                                       $('#lastModal').hide();
                                                   }, 1000);
                                               }
                                            }
                                        });
                                    }else{
                                      if(sendToMemArea=='yes'){
                                        var userSessionURL = "set-user-session/"+LID;
                                           $.ajax({
                                               type:"GET",
                                               url:userSessionURL,
                                               success: function(response){
                                                   if(response=='success'){
                                                     setTimeout(function(){
                                                       $('#lastModal').modal('hide');
                                                       $('.afterSubmitting').show();
                                                       $('.contentDiv').hide();
                                                    }, 1000);
                                                    setTimeout(function(){
                                                      window.location.href="{{ url('dashboard') }}"
                                                   }, 1000);
                                                    localStorage.clear();
                                                   }
                                               }
                                               });
                                      }else{
                                        window.location.href="dashboard/"+sourceId;
                                      }
                                    }

                                }
                                else if(newOrExist=='2'){
                                  formSuccess = true;
                                   emailExist = true;
                                   var apiSuccess = false;
                                    LID = $('#LID').val();

                                    var proxy ="https://cors-anywhere.herokuapp.com/";
                                    var uri ="https://api.autoconvert.co.uk/application/submit";
                                    if(sendToAutoConvert=='yes'){
                                      $.ajax({
                                          type:"POST",
                                          url:proxy+""+uri,
                                          data:apiData,
                                          dataType: "JSON",
                                          beforeSend: function (jqXHR) {
                                              jqXHR.setRequestHeader('X-ApiKey', autoConvertApi);
                                          },
                                         success: function(response){
                                                if(response.Accepted==true){

                                             // New API To Send Leads Start//
                                             var newSources = utm_source;
                                             var newAPIFlag = false;
                                             if(newSources==''){
                                               newSources = "www.quickcarfinance.com";
                                             }
                                             var dbb = dateOfBirth.split('-');
                                             var dds = dbb[2];
                                             var mms = dbb[1];
                                             var yys = dbb[0];
                                             var dbb = dds+"/"+mms+"/"+yys;
                                             var NewAPI = "https://cors-anywhere.herokuapp.com/https://quickcarfinance.leadbyte.co.uk/api/submit.php?returnjson=yes&campid=QUICK-CAR-FINANCE&sid=1&email="+emailAddress+"&title="+prefixTitle+"&firstname="+firstName+"&lastname="+lastName+"&dob="+dbb+"&building="+buildingNumber+" "+buildingName+"&street1="+street+"&towncity="+town+"&county="+county+"&postcode="+postcode+"&phone1="+mobileNumber+"&phone2="+mobileNumber+"&company="+companyName+"&jobtitle="+jobTitle+"&source="+newSources+"&contactemail="+emailAddress+"&contactphone="+mobileNumber+"&vehicletype=Car&smsconsent="+smsOptions+"&emailconsent="+emailOptions+"&applicant.drivinglicensetype="+licence+"&applicant.maritalstatus="+marital+"&applicant.validukpassport="+passport1+"&loanamount="+borrowAmount+"&loanterm=48&address.building="+buildingNumber+" "+buildingName+"&address.street="+street+"&address.county="+county+"&address.postcode="+postcode+"&address.timeataddressmonths="+currentAddressMonths+"&address.timeataddressyears="+currentAddressYears+"&address.town="+town+"&address.residentialstatus="+residentialStatus+"&1st_previous__address.building="+buildingNumber1+" "+buildingName1+"&1st_previous__address.street="+street1+"&1st_previous__address.county="+county1+"&1st_previous__address.postcode="+postcode1+"&campaigncode1="+utm_campaign+"&1st_previous__address.timeataddressmonths="+currentAddressMonths1+"&1st_previous__address.timeataddressyears="+currentAddressYears1+"&1st_previous__address.town="+town1+"&1st_previous__address.residentialstatus="+residentialStatus+"&2nd_previous__address.building="+buildingNumber2+" "+buildingName2+"&2nd__previous__address.street="+street2+"&2nd__previous__address.county="+county2+"&2nd__previous__address.postcode="+postcode2+"&2nd__previous__address.timeataddressmonths="+currentAddressMonths2+"&campaigncode2="+utm_medium+"&2nd_previous__address.timeataddressyears="+currentAddressYears2+"&2nd_previous__address.town="+town2+"&2nd_previous__address.residentialstatus="+residentialStatus+"&employment.company="+companyName+"&employment.employmentstatus="+employmentStatus+"&employment.jobtitle="+jobTitle+"&employment.monthlyincome="+monthlyIncome+"&campaigncode3="+utm_term+"&employment.timeatemployermonths="+employmentMonths+"&employment.timeatemployeryears="+employmentYears+"&1st_previous_employment.company="+companyName1+"&1st_previous_employment.employmentstatus="+employmentStatus+"&1st_previous_employment.jobtitle="+jobTitle1+"&1st_previous_employment.monthlyincome="+monthlyIncome1+"&1st_previous_employment.timeatemployermonths="+employmentMonths1+"&campaigncode4="+utm_content+"&1st_previous_employment.timeatemployeryears="+employmentYears1+"&2nd_previous_employment.company="+companyName2+"&2nd_previous_employment.employmentstatus="+employmentStatus+"&2nd_previous__employment.jobtitle="+jobTitle2+"&2nd_previous_employment.monthlyincome="+monthlyIncome2+"&2nd_previous_employment.timeatemployermonths="+employmentMonths2+"&2nd_previous_employment.timeatemployeryears="+employmentYears2+"&sourcereference="+utm_source;
                                             $.ajax({
                                                 type:"POST",
                                                 url:NewAPI,
                                                 success: function(res){
                                                   res = JSON.parse(res);
                                                   if(res.code==1){
                                                     localStorage.clear();
                                                     newAPIFlag = true;
                                                     if(sendToMemArea=='yes'){
                                                       var userSessionURL = "set-user-session/"+LID;
                                                       $.ajax({
                                                           type:"GET",
                                                           url:userSessionURL,
                                                           success: function(response){
                                                               if(response=='success'){
                                                                 setTimeout(function(){
                                                                   $('#lastModal').modal('hide');
                                                                   $('.afterSubmitting').show();
                                                                   $('.contentDiv').hide();
                                                                }, 1000);
                                                                setTimeout(function(){
                                                                  window.location.href="{{ url('dashboard') }}"
                                                               }, 1000);
                                                               }
                                                           }
                                                           });
                                                     }
                                                     else{
                                                        window.location.href="dashboard/"+sourceId;
                                                     }
                                                   }
                                                 }
                                               });
                                             // New API To Send Leads End//
                                            deleteAllCookies();
                                               }
                                               else{
                                                 $('#submitButton').prop('disabled', false);
                                                 apiSuccess = false;
                                                   $('#formError').show();
                                                   setTimeout(function() {
                                                       $('#lastModal').hide();
                                                   }, 1000);
                                               }
                                            }
                                        });
                                    }else{
                                      if(sendToMemArea=='yes'){
                                        var userSessionURL = "set-user-session/"+LID;
                                           $.ajax({
                                               type:"GET",
                                               url:userSessionURL,
                                               success: function(response){
                                                   if(response=='success'){
                                                     setTimeout(function(){
                                                       $('#lastModal').modal('hide');
                                                       $('.afterSubmitting').show();
                                                       $('.contentDiv').hide();
                                                    }, 1000);
                                                    setTimeout(function(){
                                                      window.location.href="{{ url('dashboard') }}"
                                                   }, 1000);
                                                    localStorage.clear();
                                                   }
                                               }
                                               });
                                      }else{
                                        localStorage.clear();
                                        window.location.href="thank-you/"+sourceId;
                                      }
                                    }

                                      if(formSuccess == true && apiSuccess == true && emailExist==true && newAPIFlag==true){
                                             $('#lastModal').modal('hide');
                                             $('.afterSubmittingEmail').show();
                                             $('.contentDiv').hide();
                                             var sendEmail = 'send-existing-email/'+LID;
                                             $.ajax({
                                                 type:"GET",
                                                 url:sendEmail,
                                                 success: function(response){
                                                   if(response==1){
                                                     // setTimeout(function(){
                                                     //     window.location.href = 'memberArea.php?lid='+LID+'emailExist='+true;
                                                     // }, 6000);
                                                   }
                                                 }
                                             });
                                           }
                                      }
                                else{
                                  $('#submitButton').prop('disabled', false);
                                  $('#formError').show();
                                  $('#lastModal').modal('hide');
                                  formSuccess = false;
                                }
                            }else{
                            if(newOrExist==1){
                                emailExist = false;
                                formSuccess = true;
                                  LID = $('#LID').val();
                                  var proxy ="https://cors-anywhere.herokuapp.com/";
                                  var uri ="https://api.autoconvert.co.uk/application/submit";
                                    $.ajax({
                                        type:"POST",
                                        url:proxy+""+uri,
                                        data:apiData,
                                        dataType: "JSON",
                                        beforeSend: function (jqXHR) {
                                            jqXHR.setRequestHeader('X-ApiKey', autoConvertApi);
                                        },
                                       success: function(response){
                                              if(response.Accepted==true){
                                                setTimeout(function(){
                                              $('#lastModal').modal('hide');
                                              $('.afterSubmitting').show();
                                              $('.contentDiv').hide();
                                           }, 1000);
                                           // New API To Send Leads Start//
                                           var newSources = utm_source;
                                           var newAPIFlag = false;
                                           if(newSources==''){
                                             newSources = "www.quickcarfinance.com";
                                           }
                                           var dbb = dateOfBirth.split('-');
                                           var dds = dbb[2];
                                           var mms = dbb[1];
                                           var yys = dbb[0];
                                           var dbb = dds+"/"+mms+"/"+yys;
                                           var NewAPI = "https://cors-anywhere.herokuapp.com/https://quickcarfinance.leadbyte.co.uk/api/submit.php?returnjson=yes&campid=QUICK-CAR-FINANCE&sid=1&email="+emailAddress+"&title="+prefixTitle+"&firstname="+firstName+"&lastname="+lastName+"&dob="+dbb+"&building="+buildingNumber+" "+buildingName+"&street1="+street+"&towncity="+town+"&county="+county+"&postcode="+postcode+"&phone1="+mobileNumber+"&phone2="+mobileNumber+"&company="+companyName+"&jobtitle="+jobTitle+"&source="+newSources+"&contactemail="+emailAddress+"&contactphone="+mobileNumber+"&vehicletype=Car&smsconsent="+smsOptions+"&emailconsent="+emailOptions+"&applicant.drivinglicensetype="+licence+"&applicant.maritalstatus="+marital+"&applicant.validukpassport="+passport1+"&loanamount="+borrowAmount+"&loanterm=48&address.building="+buildingNumber+" "+buildingName+"&address.street="+street+"&address.county="+county+"&address.postcode="+postcode+"&address.timeataddressmonths="+currentAddressMonths+"&address.timeataddressyears="+currentAddressYears+"&address.town="+town+"&address.residentialstatus="+residentialStatus+"&1st_previous__address.building="+buildingNumber1+" "+buildingName1+"&1st_previous__address.street="+street1+"&1st_previous__address.county="+county1+"&1st_previous__address.postcode="+postcode1+"&campaigncode1="+utm_campaign+"&1st_previous__address.timeataddressmonths="+currentAddressMonths1+"&1st_previous__address.timeataddressyears="+currentAddressYears1+"&1st_previous__address.town="+town1+"&1st_previous__address.residentialstatus="+residentialStatus+"&2nd_previous__address.building="+buildingNumber2+" "+buildingName2+"&2nd__previous__address.street="+street2+"&2nd__previous__address.county="+county2+"&2nd__previous__address.postcode="+postcode2+"&2nd__previous__address.timeataddressmonths="+currentAddressMonths2+"&campaigncode2="+utm_medium+"&2nd_previous__address.timeataddressyears="+currentAddressYears2+"&2nd_previous__address.town="+town2+"&2nd_previous__address.residentialstatus="+residentialStatus+"&employment.company="+companyName+"&employment.employmentstatus="+employmentStatus+"&employment.jobtitle="+jobTitle+"&employment.monthlyincome="+monthlyIncome+"&campaigncode3="+utm_term+"&employment.timeatemployermonths="+employmentMonths+"&employment.timeatemployeryears="+employmentYears+"&1st_previous_employment.company="+companyName1+"&1st_previous_employment.employmentstatus="+employmentStatus+"&1st_previous_employment.jobtitle="+jobTitle1+"&1st_previous_employment.monthlyincome="+monthlyIncome1+"&1st_previous_employment.timeatemployermonths="+employmentMonths1+"&campaigncode4="+utm_content+"&1st_previous_employment.timeatemployeryears="+employmentYears1+"&2nd_previous_employment.company="+companyName2+"&2nd_previous_employment.employmentstatus="+employmentStatus+"&2nd_previous__employment.jobtitle="+jobTitle2+"&2nd_previous_employment.monthlyincome="+monthlyIncome2+"&2nd_previous_employment.timeatemployermonths="+employmentMonths2+"&2nd_previous_employment.timeatemployeryears="+employmentYears2+"&sourcereference="+utm_source;
                                           $.ajax({
                                               type:"POST",
                                               url:NewAPI,
                                               success: function(res){
                                                 res = JSON.parse(res);
                                                 if(res.code==1){
                                                   localStorage.clear();
                                                   newAPIFlag = true;
                                                   var userSessionURL = "set-user-session/"+LID;
                                                   // setTimeout(function(){
                                                       $.ajax({
                                                           type:"GET",
                                                           url:userSessionURL,
                                                           success: function(response){
                                                               if(response=='success'){
                                                                   window.location.href="{{ url('dashboard') }}"
                                                               }
                                                           }
                                                           });

                                                   // }, 7000);
                                                 }
                                               }
                                             });
                                           // New API To Send Leads End//
                                          deleteAllCookies();
                                             }
                                             else{
                                               $('#submitButton').prop('disabled', false);
                                               apiSuccess = false;
                                                 $('#formError').show();
                                                 setTimeout(function() {
                                                     $('#lastModal').hide();
                                                 }, 1000);
                                             }
                                          }
                                      });
                              }
                              else if(newOrExist=='2'){
                                formSuccess = true;
                                 emailExist = true;
                                 var apiSuccess = false;
                                  LID = $('#LID').val();

                                  var proxy ="https://cors-anywhere.herokuapp.com/";
                                  var uri ="https://api.autoconvert.co.uk/application/submit";

                                  $.ajax({
                                      type:"POST",
                                      url:proxy+""+uri,
                                      data:apiData,
                                      dataType: "JSON",
                                      beforeSend: function (jqXHR) {
                                          jqXHR.setRequestHeader('X-ApiKey', autoConvertApi);
                                      },
                                     success: function(response){
                                        if(response.Accepted==true){
                                                setTimeout(function(){
                                                    $('#lastModal').modal('hide');
                                                    $('.afterSubmittingEmail').show();
                                                    $('.contentDiv').hide();
                                                }, 1000);

                                                var userSessionURL = "send-existing-email/"+LID;
                                                setTimeout(function(){
                                                    $.ajax({
                                                        type:"GET",
                                                        url:userSessionURL,
                                                        success: function(response){
                                                          // New API To Send Leads Start//
                                                          var newSources = utm_source;
                                                          if(newSources==''){
                                                            newSources = "www.quickcarfinance.com";
                                                          }
                                                          var dbb = dateOfBirth.split('-');
                                                          var dds = dbb[2];
                                                          var mms = dbb[1];
                                                          var yys = dbb[0];
                                                          var dbb = dds+"/"+mms+"/"+yys;
                                                          var NewAPI = "https://cors-anywhere.herokuapp.com/https://quickcarfinance.leadbyte.co.uk/api/submit.php?returnjson=yes&campid=QUICK-CAR-FINANCE&sid=1&email="+emailAddress+"&title="+prefixTitle+"&firstname="+firstName+"&lastname="+lastName+"&dob="+dbb+"&building="+buildingNumber+" "+buildingName+"&street1="+street+"&towncity="+town+"&county="+county+"&postcode="+postcode+"&phone1="+mobileNumber+"&phone2="+mobileNumber+"&company="+companyName+"&jobtitle="+jobTitle+"&source="+newSources+"&contactemail="+emailAddress+"&contactphone="+mobileNumber+"&vehicletype=Car&smsconsent="+smsOptions+"&emailconsent="+emailOptions+"&applicant.drivinglicensetype="+licence+"&applicant.maritalstatus="+marital+"&applicant.validukpassport="+passport1+"&loanamount="+borrowAmount+"&loanterm=48&address.building="+buildingNumber+" "+buildingName+"&address.street="+street+"&address.county="+county+"&address.postcode="+postcode+"&address.timeataddressmonths="+currentAddressMonths+"&address.timeataddressyears="+currentAddressYears+"&address.town="+town+"&address.residentialstatus="+residentialStatus+"&1st_previous__address.building="+buildingNumber1+" "+buildingName1+"&1st_previous__address.street="+street1+"&1st_previous__address.county="+county1+"&1st_previous__address.postcode="+postcode1+"&campaigncode1="+utm_campaign+"&1st_previous__address.timeataddressmonths="+currentAddressMonths1+"&1st_previous__address.timeataddressyears="+currentAddressYears1+"&1st_previous__address.town="+town1+"&1st_previous__address.residentialstatus="+residentialStatus+"&2nd_previous__address.building="+buildingNumber2+" "+buildingName2+"&2nd__previous__address.street="+street2+"&2nd__previous__address.county="+county2+"&2nd__previous__address.postcode="+postcode2+"&2nd__previous__address.timeataddressmonths="+currentAddressMonths2+"&campaigncode2="+utm_medium+"&2nd_previous__address.timeataddressyears="+currentAddressYears2+"&2nd_previous__address.town="+town2+"&2nd_previous__address.residentialstatus="+residentialStatus+"&employment.company="+companyName+"&employment.employmentstatus="+employmentStatus+"&employment.jobtitle="+jobTitle+"&employment.monthlyincome="+monthlyIncome+"&campaigncode3="+utm_term+"&employment.timeatemployermonths="+employmentMonths+"&employment.timeatemployeryears="+employmentYears+"&1st_previous_employment.company="+companyName1+"&1st_previous_employment.employmentstatus="+employmentStatus+"&1st_previous_employment.jobtitle="+jobTitle1+"&1st_previous_employment.monthlyincome="+monthlyIncome1+"&1st_previous_employment.timeatemployermonths="+employmentMonths1+"&campaigncode4="+utm_content+"&1st_previous_employment.timeatemployeryears="+employmentYears1+"&2nd_previous_employment.company="+companyName2+"&2nd_previous_employment.employmentstatus="+employmentStatus+"&2nd_previous__employment.jobtitle="+jobTitle2+"&2nd_previous_employment.monthlyincome="+monthlyIncome2+"&2nd_previous_employment.timeatemployermonths="+employmentMonths2+"&2nd_previous_employment.timeatemployeryears="+employmentYears2+"&sourcereference="+utm_source;
                                                          $.ajax({
                                                              type:"POST",
                                                              url:NewAPI,
                                                              success: function(res){
                                                                res = JSON.parse(res);
                                                                // console.log(res);
                                                                // console.log(res.code);
                                                                if(res.code==1){
                                                                  // console.log("code is here");
                                                                  newAPIFlag = true;
                                                                  var userSessionURL = "set-user-session/"+LID;
                                                                  // setTimeout(function(){
                                                                      $.ajax({
                                                                          type:"GET",
                                                                          url:userSessionURL,
                                                                          success: function(response){
                                                                            if(response=='success'){
                                                                                                                                                                                  localStorage.clear();
                                                                                window.location.href="{{ url('dashboard') }}"
                                                                            }
                                                                          }
                                                                          });

                                                                  // }, 7000);
                                                                }
                                                              }
                                                            });
                                                          // New API To Send Leads End//
                                                        }

                                                    });
                                                }, 1000);
                                                deleteAllCookies();
                                            }
                                            else{
                                            $('#submitButton').prop('disabled', false);
                                            apiSuccess = false;
                                            $('#formError').show();
                                            setTimeout(function() {
                                                $('#formError').hide();
                                            }, 1000);
                                            }
                                        }
                                    });

                                    if(formSuccess == true && apiSuccess == true && emailExist==true && newAPIFlag==true){
                                           $('#lastModal').modal('hide');
                                           $('.afterSubmittingEmail').show();
                                           $('.contentDiv').hide();
                                           var sendEmail = 'send-existing-email/'+LID;
                                           $.ajax({
                                               type:"GET",
                                               url:sendEmail,
                                               success: function(response){
                                                 if(response==1){
                                                   // setTimeout(function(){
                                                   //     window.location.href = 'memberArea.php?lid='+LID+'emailExist='+true;
                                                   // }, 6000);
                                                 }
                                               }
                                           });
                                         }
                                         localStorage.clear();
                                    }
                              else{
                                $('#submitButton').prop('disabled', false);
                                $('#formError').show();
                                $('#lastModal').modal('hide');
                                formSuccess = false;
                              }
                            }
                            localStorage.clear();
                          }
                      });
                  }
                  else{
                      $('#submitButton').prop('disabled', false);
                  }
                }else{
                    swal("Invalid Phone Number!", "Must be a valid phone number!", "error");
                    $('#submitButton').prop('disabled', false);
                }

              // }
          // }
      // });
  }else{
    swal("Error!", "Please indicate that you have read and agree to the Terms and Conditions!", "error");
    $('#submitButton').prop('disabled', false);
  }

});

function checkFirstAddress(n){
    localStorage.setItem('identifier',n);
}
addressNow.listen('load', function(control) {
  control.listen("populate", function (address) {
    var formNumber = localStorage.getItem('identifier');
    var postal = $('#postcode').val();
    var postal1 = $('#postcode1').val();
    var postal2 = $('#postcode2').val();
      var st =   address.Street;
      var street1  = address.SecondaryStreet;
      var buildingNumber  = address.BuildingNumber;
      var buildingName  = address.BuildingName;
      var county  = address.Province;
      var tn =   address.City;
      var cy =   address.CountryName;
      var pc =   address.PostalCode;
      var str='';
      if(st==''){
        str = buildingName;
      }
      else{
        str = st;
      }
      $('.addressText').html(buildingName+' '+buildingNumber+''+str+', '+ tn+ ', '+ cy+ ', '+ pc);
      if(formNumber==1){
        // $('#street').val(st);
        // $('#AddressNow').val(address.Company);
        // $('#buildingNumber').val(buildingNumber);
        $('#secondStreet').val(street1);
        // $('#county').val(county);
        // $('#postcode').val(pc);
        $('.addressDown').slideDown(500);
        $('.checkedCircle').show();
        localStorage.setItem('buildingName',buildingName);
        localStorage.setItem('buildingNumber',buildingNumber);
        localStorage.setItem('secondStreet',street1);
        localStorage.setItem('county',county);
        localStorage.setItem('street',st);
        localStorage.setItem('postcode',pc);
        localStorage.setItem('town',tn);
      }
      if(formNumber==2){
        $('#street1').val(st);
        $('#AddressNow1').val(address.Company);
        $('#buildingNumber1').val(buildingNumber+' '+buildingName);
        $('#secondStreet1').val(street1);
        $('#county1').val(county);
        $('#postcode1').val(pc);
        $('#town1').val(tn);
        $('.addressDown1').slideDown(500);
        $('.checkedCircle1').show();

        $('#street').val(localStorage.getItem('street'));
        $('#buildingName').val(localStorage.getItem('buildingName'));
        $('#buildingNumber').val(localStorage.getItem('buildingNumber'));
        $('#secondStreet').val(localStorage.getItem('secondStreet'));
        $('#county').val(localStorage.getItem('county'));
        $('#postcode').val(localStorage.getItem('postcode'));
        $('#town').val(localStorage.getItem('town'));

      }
      if(formNumber==3){
        $('#street2').val(st);
        $('#AddressNow2').val(address.Company);
        $('#buildingNumber2').val(buildingNumber+' '+buildingName);
        $('#secondStreet2').val(street1);
        $('#county2').val(county);
        $('#postcode2').val(pc);
        $('#town2').val(tn);
        $('.addressDown2').slideDown(500);
        $('.checkedCircle2').show();

        $('#street').val(localStorage.getItem('street'));
        $('#buildingName').val(localStorage.getItem('buildingName'));
        $('#buildingNumber').val(localStorage.getItem('buildingNumber'));
        $('#secondStreet').val(localStorage.getItem('secondStreet'));
        $('#county').val(localStorage.getItem('county'));
        $('#postcode').val(localStorage.getItem('postcode'));
        $('#town').val(localStorage.getItem('town'));
      }
  });
});


$('#showTextFields1').click(function(){
  $('#addressFields1').show();
  $('#PostCodeDiv1').show();
  $('#labelHome1').hide();
  $('#AddressNow1').hide();
  $('.checkedCircle').hide();
  $('.addressDown1').hide();
  $('.checkedCircle').hide();
});
$('#showTextFields2').click(function(){
  $('#addressFields2').show();
  $('#PostCodeDiv2').show();
  $('#labelHome2').hide();
  $('#AddressNow2').hide();
  $('.checkedCircle').hide();
  $('.addressDown2').hide();
  $('.checkedCircle').hide();
});
function showTextFields() {
  $('#addressFields').show();
  $('#PostCodeDiv').show();
  $('#labelHome').hide();
  $('.clickableDiv').hide();
  $('.checkedCircle').hide();
  $('#AddressNow').hide();
  $('.addressDown').hide();
}

$('body').click(function(evt){
  if(!$(evt.target).is('.clickableDiv') && !$(evt.target).is('#AddressNow')) {
      $('.clickableDiv').hide();
  }
  if(!$(evt.target).is('.clickableDiv1') && !$(evt.target).is('#AddressNow1')) {
      $('.clickableDiv1').hide();
  }
  if(!$(evt.target).is('.clickableDiv2') && !$(evt.target).is('#AddressNow2')) {
      $('.clickableDiv2').hide();
  }

});

function validateNumberAndForwardSlash(event) {
  var key = window.event ? event.keyCode : event.which;
  if (event.keyCode == 46 || event.keyCode == 8) {
      $('.addressDown').hide();
      $('.checkedCircle').hide();
      $('#AddressNow').val('');
      $('#AddressNow1').val('');
      $('#AddressNow2').val('');
      return true;
  } else {

      return true;
  }
}
function validateNumberAndForwardSlash1(event) {
  var key = window.event ? event.keyCode : event.which;
  if (event.keyCode == 46 || event.keyCode == 8) {
      $('.addressDown1').hide();
      $('.checkedCircle1').hide();
      $('#AddressNow1').val('');
      return true;
  } else {
      return true;
  }
}
function validateNumberAndForwardSlash2(event) {
  var key = window.event ? event.keyCode : event.which;
  if (event.keyCode == 46 || event.keyCode == 8) {
      $('.addressDown2').hide();
      $('.checkedCircle2').hide();
      $('#AddressNow2').val('');
      return true;
  } else {
      return true;
  }
}

$(".borrowAmountSlider").asRange({
    step: 250,
    range: false,
    value:7500,
    min: 500,
    max: 75000,
    format: function(value) {
          // return '£ ' + $.number(value);
        // console.log(value);
        $('#borrowAmount').val($.number(value));
    },
    onChange: function(value) {
      var borrAmt = $('#borrowAmount').val($.number(value));
    }
});

$('#borrowAmount').keyup(function(){
  var borrAmt = $('#borrowAmount').val();
  borrAmt = borrAmt.replace(",", "");
  var per = parseInt(borrAmt)*100/75000;
  if(borrAmt>=75000){
      per = 100;
      $('#borrowAmount').val($.number(75000));
      borrAmt = 75000;
  }
  $('.rangeInput>.asRange>.asRange-selected').css('width',per+"%");
  $('.rangeInput>.asRange>.asRange-pointer').css('left',per+'%');
  $('.borrowAmountSlider').val(borrAmt);
  $('#borrowAmount').val($.number(borrAmt));
});
$('#borrowIncrease').click(function(){
  var borrAmt = $('#borrowAmount').val();
  borrAmt = borrAmt.replace(",", "");
  if(borrAmt<75000){
    borrAmt = parseInt(borrAmt) + 250;
    var w = $('.rangeInput>.asRange>.asRange-selected').width() / $('.rangeInput>.asRange>.asRange-selected').parent().width() * 100;
    w = parseFloat(w) + 0.33557;
    $('.rangeInput>.asRange>.asRange-selected').css('width', w + "%");
    var l = $('.rangeInput>.asRange>.asRange-pointer').prop("style")["left"];
    l = l.replace('%', '');
    l = parseFloat(l) + 0.33557;
    $('.rangeInput>.asRange>.asRange-pointer').css('left', l + '%');
    $('.borrowAmountSlider').val(borrAmt);
    $('#borrowAmount').val($.number(borrAmt));
  }
});
$('#borrowDecrease').click(function(){
  var borrAmt = $('#borrowAmount').val();
  borrAmt = borrAmt.replace(",", "");
  if(borrAmt>500){
    borrAmt = parseInt(borrAmt) - 250;
    var w = $('.rangeInput>.asRange>.asRange-selected').width() / $('.rangeInput>.asRange>.asRange-selected').parent().width() * 100;
    w = parseFloat(w) - 0.33557;
    $('.rangeInput>.asRange>.asRange-selected').css('width', w + "%");
    var l = $('.rangeInput>.asRange>.asRange-pointer').prop("style")["left"];
    l = l.replace('%', '');
    l = parseFloat(l) - 0.33557;
    $('.rangeInput>.asRange>.asRange-pointer').css('left', l + '%');
    $('.borrowAmountSlider').val(borrAmt);
    $('#borrowAmount').val($.number(borrAmt));
  }
});
if(localStorage.getItem('vid')!=''){
  $('#VID').val(localStorage.getItem('vid'));
}

</script>
