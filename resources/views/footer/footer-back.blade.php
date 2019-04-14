@php
    $calculator = DB::table('calculator')->first();
@endphp
<div class="container-fluid no-padding socialDiv">
    <div class="container">
            <div class="col-sm-12 col-xs-12 socialOuterDiv no-padding" >
              <div class="row">
                <div class="col-sm-6 col-xs-12 footerLogoDiv">
                    <img class="img-responsive" src="{{asset('public/images/vehicle/social_media.png')}}" alt="">
                </div>
                <div class="col-sm-6 col-xs-12 socialRight">
                    <div class="col-sm-5 desktopDiv">&nbsp</div>
                    <a href="#" class="fa fa-facebook socialIcon"></a>
                    <a href="#" class="fa fa-twitter socialIcon"></a>
                    <a href="#" class="fa fa-instagram socialIcon"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
      <!--div class="footer-text">
            <p>Find, Fund Deliver is a trading name of Automotive online Ltd which is authorised and regulated by
                the Financial Conduct Authority. FRN 764855. All finance is subject to status and income. Written quotation
                on request. We act as a credit broker, not a lender. We work with a number of carefully selected credit
                providers who may be able to offer you finance for your purchase. We are only able to offer finance products
                from these providers.</p>
        </div-->
       <div class="col-sm-12 linksDiv">
            <div class="col-sm-4">
                <h5>QUICK LINKS</h5>
               <ul>
                   <!--li><a href="findCar.php">Find a car</a></li>
                    <li><a href="#">Fund a car</a></li>
                    <li><a href="#">Complaints procedure</a></li>
                    <li><a href="#">RAC approved</a></li-->
                    <li><a href="{{url('products')}}">Products</a></li>
                    <li><a href="{{url('#set-your-budget')}}">Set your budget</a></li>
                    <li><a href="{{url('apply-now')}}">Apply now</a></li>
                    <li><a href="{{url('car-finance-calculator')}}">Car Finance Calculator</a></li>
                </ul>
            </div>
            <!-- <div class="col-sm-3">
                <h5>COMPANY</h5>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Customer care</a></li>
                </ul>
            </div> -->
            <div class="col-sm-4">
                <h5>LEGAL</h5>
             <ul>
                    <!-- <li><a href="#">Complaints procedure</a></li> -->
                    <li><a href="{{url('terms-and-conditions')}}" target="_blank">Terms and conditions</a></li>
                    <li><a href="{{url('privacy-policy')}}" target="_blank">Privacy policy</a></li>
                    <li><a href="{{url('cookie-policy')}}" target="_blank">Cookies</a></li>
                    <!--<li><a href="{{url('treating-customers-fairly')}}" target="_blank">Treating customers fairly</a></li>-->
                </ul>
            </div>
            <div class="col-sm-4">
                <h5>CONTACT US</h5>
                <ul>
                    <li>Quick Car Finance</li>
                    <li>315-317 Wallisdown Road,</li>
                    <li>Bournemouth, Dorset BH12 5BT</li>
                    <li><i class="fa fa-phone footer-fa"></i> 01202 286500</li>
                    <li><i class="fa fa-envelope footer-fa"></i> info@quickcarfinance.com</li>
                </ul>
            </div>
        </div>
    </div>
    <input id="LID" type="hidden">
    <hr>
        <!--p class="footerBottomText">Company No: 07968386</p-->
        <p class="footerBottomText1">&copy; Quick Car Finance. All Rights Reserved</p>

</div>
<!-- <script>
  window.fcWidget.init({
    token: "fb2c6249-cde5-46f2-ae80-92db9a863252",
    host: "https://wchat.freshchat.com"
  });
</script> -->
</body>
</html>
<script src="{{asset('public/js/jscookie.js')}}" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script type="text/javascript">

function convertCase(str) {
  var lower = String(str).toLowerCase();
  return lower.replace(/(^| )(\w)/g, function(x) {
    return x.toUpperCase();
  });
}


$(document).ready(function() {
var calcInterest = '';
var totalAmt = '';
var totalInst='';
var perMonth = '';

$(".range-example-5").asRange({
    step: 250,
    range: false,
   value:2500,
    min: <?php echo $calculator->min_amount;  ?>,
    max: <?php echo $calculator->max_amount; ?>,
    format: function(value) {
        return '£ ' + $.number(value);
    },
    onChange: function(value) {
        var interestRate = $('.interestRate').val();
        var time = $('.borrowYears').val();
        var totalRep = '';
        $('.range-example-5').val(value);
        $('.borrowAmt').val($.number(value));
        calcInterest = parseInt(value) * interestRate;
        calcInterest = parseInt(calcInterest)/100;
        totalInst = parseInt(time)*12;
        totalAmt = parseInt(value) + parseInt(calcInterest);
        perMonth = parseInt(totalAmt)/totalInst;
        totalRep = (value * interestRate)/100;
        // var costOfCredit = totalAmt - totalRep;
        $('.totalAmount').html('£'+$.number(totalAmt,2));
        $('.installments').html('£'+$.number(perMonth,2));
        $('.costOfCredit').html('£'+$.number(totalRep,2));
        $('.totalAmount').val($.number(totalAmt,2));
        $('.installments').val($.number(perMonth,2));
        $('.costOfCredit').val($.number(totalRep,2));
        var w = $('.bottomSlider>.asRange>.asRange-selected').prop("style")["width"];
        // console.log(w);
        w= w.replace('%', '');
        $('.rangeInput>.asRange>.asRange-selected').css('width',w+"%");
        var l = $('.bottomSlider>.asRange>.asRange-pointer').prop("style")["left"];
        l = l.replace('%', '');
        $('.rangeInput>.asRange>.asRange-pointer').css('left',l+"%");
        $('.rangeInput>.asRange>.asRange-pointer>.asRange-tip').html('£'+$.number(value));
    }
});
$(".range-example-7").asRange({
    step: 250,
    range: false,
    value:2500,
    min: <?php echo $calculator->min_amount;  ?>,
    max: <?php echo $calculator->max_amount;  ?>,
    format: function(value) {
        return '£ ' + $.number(value);
    },
    onChange: function(value) {
      var interestRate = $('.interestRate').val();
      var time = $('.borrowYears').val();
      var totalRep = '';
        $('.range-example-5').val(value);
        $('.range-example-7').val(value);
        $('.borrowAmt').val($.number(value));
        calcInterest = parseInt(value) * interestRate;
        calcInterest = parseInt(calcInterest)/100;
        totalInst = parseInt(time)*12;
        totalAmt = parseInt(value) + parseInt(calcInterest);
        perMonth = parseInt(totalAmt)/totalInst;
        $('.totalAmount').html('£'+$.number(totalAmt,2));
        $('.installments').html('£'+$.number(perMonth,2));
        var w = $('.rangeInput>.asRange>.asRange-selected').width() / $('.rangeInput>.asRange>.asRange-selected').parent().width() * 100;
        $('.bottomSlider>.asRange>.asRange-selected').css('width',w+"%");
        var l = $('.rangeInput>.asRange>.asRange-pointer').prop("style")["left"];
        l = l.replace('%', '');
        $('.bottomSlider>.asRange>.asRange-pointer').css('left',l+"%");
        $('.bottomSlider>.asRange>.asRange-pointer>.asRange-tip').html('£'+$.number(value));
        $('.totalAmount').html('£'+$.number(totalAmt,2));
        $('.installments').html('£'+$.number(perMonth,2));
        $('.costOfCredit').html('£' + $.number(calcInterest, 2));
        $('.totalAmount').val($.number(totalAmt,2));
        $('.installments').val($.number(perMonth,2));
        $('.costOfCredit').val($.number(calcInterest, 2));
    }
});
});

$(document).ready(function() {
var calcInterest = '';
var totalAmt = '';
var totalInst='';
var perMonth = '';
$(".range-example-6").asRange({
    step: 1,
    range: false,
    min: <?php echo $calculator->min_years;  ?>,
    max: <?php echo $calculator->max_years;  ?>,
    onChange: function(value) {
        var interestRate = $('#interestRate').val();
        var borrowAmount = $('#borrowAmount').val();
        $('.range-example-6').val(value);
        $('#borrowYears').val(value);
        calcInterest = parseFloat(borrowAmount) * interestRate;
        calcInterest = parseFloat(calcInterest)/100;
        totalInst = parseFloat(value)*12;
        totalAmt = parseFloat(borrowAmount) + parseFloat(calcInterest);
        perMonth = parseFloat(totalAmt)/totalInst;
        $('.totalAmount').html('£'+$.number(totalAmt,2));
        $('.installments').html('£'+$.number(perMonth,2));
        // console.log("interest Rate: "+interestRate+ ":: borrow amount: "+borrowAmount+ " :: Total Interest: "+calcInterest+ ":: No of months: "+totalInst+ " :: Total Amount: " +totalAmt);
    }
});
$('.excellent').addClass('creditButtonFocused');
var cookie = localStorage.getItem('enabledCooike');
if(cookie=='enable'){
    $('.cookiesDiv').hide();
}
else{
    $('.cookiesDiv').show();
}
});
function setRate(r,name) {
var calcInterest = '';
var totalAmt = '';
var totalInst='';
var perMonth = '';
var borrowAmount = $('.borrowAmt').val();
borrowAmount = borrowAmount.replace(',','');
var time = $('.borrowYears').val();
calcInterest = parseInt(borrowAmount) * parseFloat(r);
calcInterest = parseFloat(calcInterest)/100;
totalInst = parseInt(time)*12;
totalAmt = parseFloat(borrowAmount) + parseFloat(calcInterest);
perMonth = parseFloat(totalAmt)/totalInst;
$('.totalAmount').html('£'+$.number(totalAmt,2));
$('.installments').html('£'+$.number(perMonth,2));
$('.totalAmount').val($.number(totalAmt,2));
$('.installments').val($.number(perMonth,2));
$('.interestRate').val(r);
$('.interestRate').html(r+'%');
var totalRep = (borrowAmount * r)/100;
$('.costOfCredit').html('£'+$.number(totalRep,2));
$('.costOfCredit').val($.number(totalRep,2));
if(name=='bad'){
    $('.bad').addClass('creditButtonFocused');
    $('.fair').removeClass('creditButtonFocused');
    $('.good').removeClass('creditButtonFocused');
    $('.excellent').removeClass('creditButtonFocused');
}
else if(name=='fair'){
    $('.fair').addClass('creditButtonFocused');
    $('.bad').removeClass('creditButtonFocused');
    $('.good').removeClass('creditButtonFocused');
    $('.excellent').removeClass('creditButtonFocused');
}
else if(name=='good'){
    $('.good').addClass('creditButtonFocused');
    $('.bad').removeClass('creditButtonFocused');
    $('.fair').removeClass('creditButtonFocused');
    $('.excellent').removeClass('creditButtonFocused');
}
else if(name=='excellent'){
    $('.excellent').addClass('creditButtonFocused');
    $('.bad').removeClass('creditButtonFocused');
    $('.fair').removeClass('creditButtonFocused');
    $('.good').removeClass('creditButtonFocused');
}
}
function setCookieDiv() {
localStorage.setItem('enabledCooike','enable');
$('.cookiesDiv').hide();
}
function showSignIn() {
$('#signupForm').hide();
$('#signinForm').show();
$('#register').hide();
$('#register1').show();
$('#signin').show();
$('#signin1').hide();
$('.progLineLeft').css('background-color','#33c6dd');
$('.progLineRight').css('background-color','#FFF');
}
function showSignUp() {
$('#signupForm').show();
$('#signinForm').hide();
$('#register').show();
$('#register1').hide();
$('#signin').hide();
$('#signin1').show();
$('.progLineLeft').css('background-color','#FFF');
$('.progLineRight').css('background-color','#33c6dd');
}
function gotoLoanCalci(){
    window.location.href="#set-your-budget";
}
function decreaseAmount() {
// debugger
var amt = $('.borrowAmt').val();
var interestRate = $('.interestRate').val();
actAmt = amt.replace(/([~!@#$%^&*()_+=`{}\[\]\|\\:;'<>,.\/? ])+/g, '').replace(/^(-)+|(-)+$/g, '');
// actAmt = actAmt.slice(1);
if (actAmt > 500) {
    addedAmt = parseInt(actAmt);
    addedAmt = addedAmt - 250;
    $('#borrowAmount').val(addedAmt);
    $('.borrowAmt').val($.number(addedAmt));
    var w = $('.rangeInput>.asRange>.asRange-selected').width() / $('.rangeInput>.asRange>.asRange-selected').parent().width() * 100;
    w = w - 0.33557;
    $('.rangeInput>.asRange>.asRange-selected').css('width', w + "%");
    $('.bottomSlider>.asRange>.asRange-selected').css('width', w + "%");
    // var l = $('.rangeInput>.asRange>.asRange-pointer').css('left') / $('.rangeInput>.asRange>.asRange-pointer').parent().css('left') * 100;
    var l = $('.rangeInput>.asRange>.asRange-pointer').prop("style")["left"];
    l = l.replace('%', '');
    l = l - 0.33557;
    $('.rangeInput>.asRange>.asRange-pointer').css('left', l + '%');
    $('.bottomSlider>.asRange>.asRange-pointer').css('left', l + '%');
    $('.bottomSlider>.asRange>.asRange-pointer>.asRange-tip').html('£' +  $.number(addedAmt));
    var time = $('.borrowYears').val();
    calcInterest = parseInt(addedAmt) * interestRate;
    calcInterest = parseInt(calcInterest) / 100;
    var totalInst = parseInt(time) * 12;
    var totalAmt = parseInt(addedAmt) + parseInt(calcInterest);
    var perMonth = parseInt(totalAmt)/totalInst;
    $('.totalAmount').html('£' + $.number(totalAmt, 2));
    $('.installments').html('£' + $.number(perMonth, 2));
    $('.costOfCredit').html('£' + $.number(calcInterest, 2));
    $('.totalAmount').val($.number(totalAmt, 2));
    $('.installments').val($.number(perMonth, 2));
    $('.costOfCredit').val($.number(calcInterest, 2));
}
}
function decreaseAmountMobile() {
// debugger
var amt = $('.borrowAmt').val();
var interestRate = $('.interestRate').val();
actAmt = amt.replace(/([~!@#$%^&*()_+=`{}\[\]\|\\:;'<>,.\/? ])+/g, '').replace(/^(-)+|(-)+$/g, '');
// actAmt = actAmt.slice(1);
if (actAmt > 500) {
    addedAmt = parseInt(actAmt);
    addedAmt = addedAmt - 250;
    $('#borrowAmount').val(addedAmt);
    $('.borrowAmt').val($.number(addedAmt));
    var findVal = actAmt/250;
    w = parseFloat(findVal)* parseFloat(0.3356);
   // var w = $('.rangeInput>.asRange>.asRange-selected').width() / $('.rangeInput>.asRange>.asRange-selected').parent().width() * 100;
    w = w - 0.33557;
    $('.rangeInput>.asRange>.asRange-selected').css('width', w + "%");
    $('.bottomSlider>.asRange>.asRange-selected').css('width', w + "%");
   // var l = $('.rangeInput>.asRange>.asRange-pointer').css('left') / $('.rangeInput>.asRange>.asRange-pointer').parent().css('left') * 100;
    // var l = $('.rangeInput>.asRange>.asRange-pointer').prop("style")["left"];
    // l = l.replace('%', '');
    // l = l - 0.33557;
    l =w;
    $('.rangeInput>.asRange>.asRange-pointer').css('left', l + '%');
    $('.bottomSlider>.asRange>.asRange-pointer').css('left', l + '%');
    $('.bottomSlider>.asRange>.asRange-pointer>.asRange-tip').html('£' +  $.number(addedAmt));
    var time = $('.borrowYears').val();
    calcInterest = parseInt(addedAmt) * interestRate;
    calcInterest = parseInt(calcInterest) / 100;
    var totalInst = parseInt(time) * 12;
    var totalAmt = parseInt(addedAmt) + parseInt(calcInterest);
    var perMonth = parseInt(totalAmt)/totalInst;
    $('.totalAmount').html('£' + $.number(totalAmt, 2));
    $('.installments').html('£' + $.number(perMonth, 2));
    $('.costOfCredit').html('£' + $.number(calcInterest, 2));
    $('.totalAmount').val($.number(totalAmt, 2));
    $('.installments').val($.number(perMonth, 2));
    $('.costOfCredit').val($.number(calcInterest, 2));
}
}
function increaseAmount(){
    var amt = $('.borrowAmt').val();
    var interestRate = $('.interestRate').val();
    var w = '';
    actAmt = amt.replace(/([~!@#$%^&*()_+=`{}\[\]\|\\:;'<>,.\/? ])+/g, '').replace(/^(-)+|(-)+$/g,'');
    // actAmt = actAmt.slice(1);
    // console.log(actAmt)
    if(actAmt<=<?php echo $calculator->max_amount;  ?>){
        addedAmt = parseInt(actAmt);
        addedAmt = parseInt(addedAmt) + 250;
        $('.borrowAmt').val($.number(addedAmt));
        $('#borrowAmount').val(addedAmt);
        if($(window).width()<768){
          var w = $('.rangeInput>.asRange>.asRange-selected').css('width');
        }
        else{
        var w = $('.rangeInput>.asRange>.asRange-selected').width() / $('.rangeInput>.asRange>.asRange-selected').parent().width() * 100;
        }
        // w = w.replace('%','');
        // console.log(w);
        w = parseFloat(w) + 0.33557;
        $('.bottomSlider>.asRange>.asRange-selected').css('width',w+"%");
        $('.rangeInput>.asRange>.asRange-selected').css('width',w+"%");
        // var l = $('.rangeInput>.asRange>.asRange-pointer').css('left') / $('.rangeInput>.asRange>.asRange-pointer').parent().css('left') * 100;
        var l = $('.rangeInput>.asRange>.asRange-pointer').prop("style")["left"];
        l = l.replace('%','');
        l = parseFloat(l)  + 0.33557;
        $('.rangeInput>.asRange>.asRange-pointer').css('left',l+'%');
        $('.bottomSlider>.asRange>.asRange-pointer').css('left',l+'%');
        $('.bottomSlider>.asRange>.asRange-pointer>.asRange-tip').html('£'+ $.number(addedAmt));
        var time = $('.borrowYears').val();
        calcInterest = parseInt(addedAmt) * interestRate;
        calcInterest = parseInt(calcInterest)/100;
        totalInst = parseInt(time)*12;
        totalAmt = parseInt(addedAmt) + parseInt(calcInterest);
        perMonth = parseInt(totalAmt)/totalInst;
        $('.totalAmount').html('£'+$.number(totalAmt,2));
        $('.installments').html('£'+$.number(perMonth,2));
        $('.costOfCredit').html('£' + $.number(calcInterest, 2));
        $('.totalAmount').val($.number(totalAmt,2));
        $('.installments').val($.number(perMonth,2));
        $('.costOfCredit').val($.number(calcInterest, 2));
}
}
function decreaseYears(){
var amt = $('.borrowYears').val();
amt = amt-1;
var interestRate = $('.interestRate').val();
var borrowAmount = $('.borrowAmt').val();
borrowAmount = borrowAmount.replace(/([~!@#$%^&*()_+=`{}\[\]\|\\:;'<>,.\/? ])+/g, '').replace(/^(-)+|(-)+$/g,'');
if(amt>0){
    $('.borrowYears').val(amt);
    // console.log(borrowAmount);
    $('.range-example-6').val(amt);
    calcInterest = parseFloat(borrowAmount) * interestRate;
    calcInterest = parseFloat(calcInterest)/100;
    totalInst = parseFloat(amt)*12;
    totalAmt = parseFloat(borrowAmount) + parseFloat(calcInterest);
    perMonth = parseFloat(totalAmt)/totalInst;
    $('.totalAmount').html('£'+$.number(totalAmt,2));
    $('.installments').html('£'+$.number(perMonth,2));
    $('.costOfCredit').html('£' + $.number(calcInterest, 2));
    $('.totalMonths').html(totalInst);
    $('.totalAmount').val(+$.number(totalAmt,2));
    $('.installments').val(+$.number(perMonth,2));
    $('.costOfCredit').val($.number(calcInterest, 2));
    $('.totalMonths').val(totalInst);
   // var w = $('.yearsSlider>.asRange>.asRange-selected').prop("style")["width"];
    // w = w.replace('%', '');
    // w = w - 25;
    // $('.yearsSlider>.asRange>.asRange-selected').css('width',w+"%");
    // var l = $('.yearsSlider>.asRange>.asRange-pointer').prop("style")["left"];
    // l = l.replace('%', '');
    // l = l - 25;
    // $('.yearsSlider>.asRange>.asRange-pointer').css('left',l+"%");
    // $('.yearsSlider>.asRange>.asRange-pointer>.asRange-tip').html('£'+$.number(amt));
}
}
function increaseYears(){
var amt = $('.borrowYears').val();
amt = parseInt(amt)+1;
if(amt<=5){
    $('.borrowYears').val(amt);
    var interestRate = $('.interestRate').val();
    var borrowAmount = $('.borrowAmt').val();
    borrowAmount = borrowAmount.replace(/([~!@#$%^&*()_+=`{}\[\]\|\\:;'<>,.\/? ])+/g, '').replace(/^(-)+|(-)+$/g,'');
    $('.range-example-6').val(amt);
    calcInterest = parseFloat(borrowAmount) * interestRate;
    calcInterest = parseFloat(calcInterest)/100;
    totalInst = parseFloat(amt)*12;
    totalAmt = parseFloat(borrowAmount) + parseFloat(calcInterest);
    perMonth = parseFloat(totalAmt)/totalInst;
    $('.totalAmount').html('£'+$.number(totalAmt,2));
    $('.installments').html('£'+$.number(perMonth,2));
    $('.costOfCredit').html('£' + $.number(calcInterest, 2));
    $('.totalAmount').val($.number(totalAmt,2));
    $('.installments').val($.number(perMonth,2));
    $('.costOfCredit').val($.number(calcInterest, 2));
    $('.totalMonths').html(totalInst);
   // var w = $('.yearsSlider>.asRange>.asRange-selected').prop("style")["width"];
    // w = w.replace('%', '');
    // w = parseFloat(w) + 25;
    // $('.yearsSlider>.asRange>.asRange-selected').css('width',w+"%");
    // var l = $('.yearsSlider>.asRange>.asRange-pointer').prop("style")["left"];
    // l = l.replace('%', '');
    // l = parseFloat(l) + 25;
    // $('.yearsSlider>.asRange>.asRange-pointer').css('left',l+"%");
    // $('.yearsSlider>.asRange>.asRange-pointer>.asRange-tip').html('£'+$.number(amt));
}
}
$(".borrowAmt").keydown(function (e) {
if (/\d+|,+|[/b]+|-+/i.test(e.key) ){

   // console.log("character accepted: " + e.key)
} else {
    // console.log("illegal character detected: "+ e.key)
    return false;
}
});
function changeValues(s){
var vals = $.number(s);
$('.borrowAmt').val(vals);increase
var values = vals.replace(/([~!@#$%^&*()_+=`{}\[\]\|\\:;'<>,.\/? ])+/g, '').replace(/^(-)+|(-)+$/g, '');
var per = parseInt(values)*100/<?php echo $calculator->max_amount;  ?>;
if(values>=<?php echo $calculator->max_amount;  ?>){
    per = 100;
    $('.borrowAmt').val($.number('<?php echo $calculator->max_amount; ?>'));
    values = <?php echo $calculator->max_amount;  ?>;
    // return fale;
}

var interestRate = $('.interestRate').val();
var time = $('.borrowYears').val();
// console.log(time);
$('.range-example-5').val(values);
$('.range-example-7').val(values);
$('.borrowAmt').val($.number(values));
$('#borrowAmount').val(values);
calcInterest = parseInt(values) * interestRate;
calcInterest = parseInt(calcInterest)/100;
totalInst = parseInt(time)*12;
totalAmt = parseInt(values) + parseInt(calcInterest);
perMonth = parseInt(totalAmt)/totalInst;
$('.totalAmount').html('£'+$.number(totalAmt,2));
$('.installments').html('£'+$.number(perMonth,2));
$('.rangeInput>.asRange>.asRange-selected').css('width',per+"%");
$('.bottomSlider>.asRange>.asRange-selected').css('width',per+'%');
$('.rangeInput>.asRange>.asRange-pointer').css('left',per+'%');
$('.bottomSlider>.asRange>.asRange-pointer').css('left',per+'%');
$('.bottomSlider>.asRange>.asRange-pointer>.asRange-tip').html('£'+$.number(values));
}
function openNav() {
document.getElementById("mySidenav").style.width = "90%";
}
function closeNav() {
document.getElementById("mySidenav").style.width = "0";
}
</script>
<script type="text/javascript">
$(window).resize(function() {
if($( window ).width()<1020 && $( window ).width()>753){
$('.labl>div>h3').css('font-size','16px');
}
else{
$('.labl>div>h3').css('font-size','24px');
}
if($( window ).width()<1200 && $( window ).width()>780){
// $('.navbar-right').hide();
// $('.navbar-toggle').show();
$('.setHeight').css('margin-bottom','0');
}
else{
$('.setHeight').css('margin-bottom','0px');
// $('.navbar-right').show();
//   $('.navbar-toggle').hide();
}
});
$(window).resize(function() {
if($( window ).width()<1200 && $( window ).width()>780){
$('.setHeight').css('margin-bottom','0');
}
else{
$('.setHeight').css('margin-bottom','0px');
}
if($( window ).width()<1024){
$('.mainDivCalc').hide();
$('.deskTP').css('margin-left','-41px');
}
else{
$('.mainDivCalc').show();
$('.deskTP').css('margin-left','0px');
}

if($( window ).width()<990 && $( window ).width()>759){
$('.featuresDiv>div>div').css('padding','10px');
$('.featuresDiv>div>div>h4').css('font-size','14px');
$('.featuresDiv>div>div>p').css('font-size','12px');
}
else{
$('.featuresDiv>div>div').css('padding','20px');
$('.featuresDiv>div>div>h4').css('font-size','18px');
$('.featuresDiv>div>div>p').css('font-size','14px');
}
});

</script>

<!-- Footer Area Script Start -->
{{--  <script src="{{asset('public/js/jquery.easing.min.js')}}" type="text/javascript"></script>  --}}

<script src="{{asset('public/js/jscookie.js')}}" type="text/javascript"></script>

<script>
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
                $('#firstFormError').show();
                setTimeout(function() {
                    $('#firstFormError').fadeOut('fast');
                }, 5000);
            }
            else{
                $('.firstForm').hide();
                $('.secondForm').show();
                $.cookie('qcf_carValue', car, { expires: 30})
                $('.progress-line').css('width','7%');
            }
    }

    function secondForm() {
      $(window).scrollTop(0);
        var budget = $('input[name=budget]:checked').val();
        if(!budget){
            $('#secondFormError').show();
            setTimeout(function() {
                $('#secondFormError').fadeOut('fast');
            }, 5000);
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
            $('.thirdForm').show();
        }

    }

    function thirdForm() {
      $(window).scrollTop(0);
        var licence = $('input[name=licence]:checked').val();
        if(!licence){
            $('#thirdFormError').show();
            setTimeout(function() {
                $('#thirdFormError').fadeOut('fast');
            }, 5000);
        }
        else{
            $('.thirdForm').hide();
            $('.fourthForm').show();
            $.cookie('qcf_licenceType', licence, { expires: 30});
            $('.progress-line').css('width','21%');
        }
    }
    function fourthForm() {
      $(window).scrollTop(0);
        var licence = $('input[name=marital]:checked').val();
        if(!licence){
            $('#fourthFormError').show();
            setTimeout(function() {
                $('#fourthFormError').fadeOut('fast');
            }, 5000);
        }
        else{
            $('.fourthForm').hide();
            $('.fifthForm').show();
            $.cookie('qcf_maritalStatus', licence, { expires: 30});
            $('.progress-line').css('width','28%');
        }
    }
    function fifthForm() {
      $(window).scrollTop(0);
        var licence = $('input[name=qcf_passport]:checked').val();
        if(!licence){
            $('#fifthFormError').show();
            setTimeout(function() {
                $('#fifthFormError').fadeOut('fast');
            }, 5000);
        }
        else{
            $('.fifthForm').hide();
            $('.sixthForm').show();
            $.cookie('qcf_passport', licence, { expires: 30});
            $('.progress-line').css('width','40%');
            $('.progress-bullet2').addClass('active');
        }
    }

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
                // $('#sixthFormError').show();
                // $('#qcf_date').css('border','1px solid red');
                // setTimeout(function() {
                //     $('#sixthFormError').hide();
                // }, 5000);
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
                    // $('#sixthFormError').show();
                    // $('#qcf_dob').css('border','1px solid red');
                    // setTimeout(function() {
                    //     $('#sixthFormError').hide();
                    // }, 5000);
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
                // $('#sixthFormError').show();
                // $('#qcf_dob').css('border','1px solid red');

                // setTimeout(function() {
                //     $('#sixthFormError').hide();
                // }, 5000);
                swal("Error!", "You must be in between 18-99 to be eligible!", "error");
            }
        }
    }



    $('#seventhForm').click(function() {
      $(window).scrollTop(0);
        var licence = $('input[name=qcf_employment]:checked').val();
        if(licence==''){
            $('#seventhFormError').show();
            setTimeout(function() {
                $('#seventhFormError').fadeOut('fast');
            }, 5000);
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
            // $('.emp1').css('border','1px solid red');
            // $('#seventhOneFormError1').show();
            // setTimeout(function() {
            //     $('#seventhOneFormError1').fadeOut('fast');
            // }, 5000);
            swal("Error!", "Data should not be empty, and only a-z/A-Z is allowed!", "error");
            status='false';
        }
        else{
            // if(!cname.match(regex))
            // {
            //     alert("Must input string");
            //     return false;
            // }
            status='true';
        }
        if(jtitle=='' || !jtitle.match(regex)){
            // $('.emp2').css('border','1px solid red');
            // $('#seventhOneFormError2').show();
            // setTimeout(function() {
            //     $('#seventhOneFormError2').fadeOut('fast');
            // }, 5000);
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
            // $('.emp1').css('border','1px solid red');
            // $('#seventhOneFormError1').show();
            // setTimeout(function() {
            //     $('#seventhOneFormError1').fadeOut('fast');
            // }, 5000);
            status='false';
            swal("Error!", "Data should not be empty, and only a-z/A-Z is allowed!", "error");
        }
        else{
            status='true';
        }
        if(jtitle=='' || !jtitle.match(regex)){
            // $('.emp2').css('border','1px solid red');
            // $('#seventhOneFormError2').show();
            // setTimeout(function() {
            //     $('#seventhOneFormError2').fadeOut('fast');
            // }, 5000);
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
            // $('.emp1').css('border','1px solid red');
            // $('#seventhOneFormError1').show();
            // setTimeout(function() {
            //     $('#seventhOneFormError1').fadeOut('fast');
            // }, 5000);
            swal("Error!", "Data should not be empty, and only a-z/A-Z is allowed!", "error");
            status='false';
        }
        else{
            status='true';
        }
        if(jtitle=='' || !jtitle.match(regex)){
            // $('.emp2').css('border','1px solid red');
            // $('#seventhOneFormError2').show();
            // setTimeout(function() {
            //     $('#seventhOneFormError2').fadeOut('fast');
            // }, 5000);
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
        if(eyear=='' || eyear<=0 && emonths<=0){
            swal("Error!", "Must be valid data!", "error");
            // $('.empY').css('border','1px solid red');
            // $('.empLabelY').css('border','1px solid red');
            // $('.empM').css('border','1px solid red');
            // $('.empLabelM').css('border','1px solid red');
            // $('#seventhTwoFormError1').show();
            // $('#seventhTwoFormError2').show();
            // setTimeout(function() {
            //     $('#seventhTwoFormError1').fadeOut('fast');
            //     $('#seventhTwoFormError2').fadeOut('fast');
            // }, 5000);
        }
        else{
            if(eyear>99){
                swal("Error!", "Employment years cannot be more than 99!", "error");
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
    })

$('#seventhTwoForm1').click(function(){
  $(window).scrollTop(0);
        var emonths = $('#employmentMonths1').val();
        var eyear = $('#employmentYears1').val();
        var intoMonths =  parseInt(eyear) * 12;
        var totalMonths = parseInt(intoMonths) + parseInt(emonths);
       if(emonths==''){
            emonths=0;
        }
        if(eyear=='' || eyear<=0 && emonths<=0){
            swal("Error!", "Must be valid data!", "error");
            // $('.empY').css('border','1px solid red');
            // $('.empLabelY').css('border','1px solid red');
            // $('.empM').css('border','1px solid red');
            // $('.empLabelM').css('border','1px solid red');
            // $('#seventhTwoFormError1').show();
            // $('#seventhTwoFormError2').show();
            // setTimeout(function() {
            //     $('#seventhTwoFormError1').fadeOut('fast');
            //     $('#seventhTwoFormError2').fadeOut('fast');
            // }, 5000);
        }
        else{
            if(eyear>99){
                swal("Error!", "Employment years cannot be more than 99!", "error");
            }
            else {
                if(emonths>11){
                    swal("Error!", "Employment Months cannot be more than 11!", "error");
                }
                else{
                    
                    if(totalMonths<36){
                    var empURL = "{{ route('save-employement-data') }}";
                    var data = {
                    employmentStatus:$.cookie('qcf_employment'),
                    companyName:$.cookie('qcf_companyName'),
                    jobTitle:$.cookie('jobTitle'),
                    empYears:eyear,
                    empMonths:emonths,
                    totalMonths:totalMonths,
                    monthlyIncome:0
                }
                    $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
                    type:"POST",
                    url:empURL,
                    data:data,
                    success: function(response){
                        var monthsL = 36 - parseInt(response);
                        if(response<36){
                            $('#alertSection1').slideDown(500);
                            $('#monthsLeft1').html(monthsL);
                            $('.progress1').css('width','73%');
                            $.cookie('qcf_employmentMonths1', emonths, { expires: 30});
                            $.cookie('qcf_employmentYears1', eyear, { expires: 30});
                            $('.seventhTwoForm1').hide();
                            $('.seventhOneForm2').show();
                        }
                        else{
                            $('#alertSection1').hide();
                            $('.seventhTwoForm1').hide();
                            $('.ninethForm').show();
                            $.cookie('qcf_employmentMonths1', emonths, { expires: 30});
                            $.cookie('qcf_employmentYears1', eyear, { expires: 30});
                            $('.progress-line').css('width','73%');
                        }

                    }
                });
            }
            else{
                $('.seventhTwoForm1').hide();
                $('.ninethForm').show();
                $.cookie('qcf_employmentMonths1', emonths, { expires: 30});
                $.cookie('qcf_employmentYears1', eyear, { expires: 30});
                $('.progress-line').css('width','73%');
            }
                   
                }
            }

        }
    })

    $('#seventhTwoForm2').click(function(){
      $(window).scrollTop(0);
        var emonths = $('#employmentMonths2').val();
        var eyear = $('#employmentYears2').val();
       if(emonths==''){
            emonths=0;
        }
        if((eyear=='' || eyear<=0 ) && emonths<=0){
            swal("Error!", "Must be valid data!", "error");
            // $('.empY').css('border','1px solid red');
            // $('.empLabelY').css('border','1px solid red');
            // $('.empM').css('border','1px solid red');
            // $('.empLabelM').css('border','1px solid red');
            // $('#seventhTwoFormError1').show();
            // $('#seventhTwoFormError2').show();
            // setTimeout(function() {
            //     $('#seventhTwoFormError1').fadeOut('fast');
            //     $('#seventhTwoFormError2').fadeOut('fast');
            // }, 5000);
        }
        else{
            if(eyear>99){
                swal("Error!", "Employment years cannot be more than 99!", "error");
            }
            else {
                if(emonths>1){
                    swal("Error!", "Employment Months cannot be more than 11!", "error");
                }
                else{

                    $('#seventhTwoForm2').prop('disabled', true);
                    var empURL = "{{ route('save-employement-data') }}";
                    var data = {
                        employmentStatus:$.cookie('qcf_employment2'),
                        companyName:$.cookie('qcf_companyName2'),
                        jobTitle:$.cookie('jobTitle2'),
                        empYears:eyear,
                        empMonths:emonths,
                        totalMonths:totalMonths,
                        monthlyIncome:0
                    }
                        $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type:"POST",
                        url:empURL,
                        data:data,
                        success: function(response){
                            $('#alertSection1').hide();
                            $('.seventhTwoForm2').hide();
                            $('.ninethForm').show();
                            $.cookie('qcf_employmentMonths2', emonths, { expires: 30});
                            $.cookie('qcf_employmentYears2', eyear, { expires: 30});
                            $('.progress-line').css('width','73%');
                        }
                    });

                    }

                }
            }
    })

    $('#eightthForm').click(function(){
      $(window).scrollTop(0);
        var licence = $('#monthlyIncome').val();
        var emonths = $.cookie('qcf_employmentMonths');
        var eyear = $.cookie('qcf_employmentYears');
        var intoMonths =  parseInt(eyear) * 12;
        var totalMonths = parseInt(intoMonths) + parseInt(emonths);
        var regex=/^[0-9]+$/;
        if(licence=='' || !licence.match(regex)){
            // $('.monthlyIncome').css('border','1px solid red');
            // $('#eightthFormError').show();
            // setTimeout(function() {
            //     $('#eightthFormError').fadeOut('fast');
            // }, 5000);
            swal("Error!", "Income can only have the positive numeric vlaue!", "error");
        }
        else{
            $('#eightthForm').prop('disabled', true);
            if(totalMonths<36){
                var empURL = "{{ route('save-employement-data') }}";
                var data = {
                    employmentStatus:$.cookie('qcf_employment'),
                    companyName:$.cookie('qcf_companyName'),
                    jobTitle:$.cookie('jobTitle'),
                    empYears:eyear,
                    empMonths:emonths,
                    totalMonths:totalMonths,
                    monthlyIncome:licence
                }
                    $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
                    type:"POST",
                    url:empURL,
                    data:data,
                    success: function(response){
                        var monthsL = 36 - parseInt(response);
                        if(response<36){
                            $('#alertSection1').slideDown(500);
                            $('#monthsLeft1').html(monthsL);
                            $('.progress1').css('width','80%');
                            $.cookie('qcf_monthlyIncome', licence, { expires: 30});
                            $('.eightthForm').hide();
                            $('.seventhOneForm1').show();
                        }
                        else{
                            $('#alertSection1').hide();
                            $('.eightthForm').hide();
                            $('.ninethForm').show();
                            $.cookie('qcf_monthlyIncome', licence, { expires: 30});
                            $('.progress-line').css('width','80%');
                        }

                    }
                });
            }
            else{
                $('#alertSection1').hide();
                $('.eightthForm').hide();
                $('.ninethForm').show();
                $.cookie('qcf_monthlyIncome', licence, { expires: 30});
                $('.progress-line').css('width','80%');
            }
        }
    });


    $('#eightthForm1').click(function(){
      $(window).scrollTop(0);
        var licence = $('#monthlyIncome1').val();
        var emonths = $.cookie('qcf_employmentMonths1');
        var eyear = $.cookie('qcf_employmentYears1');
        var intoMonths =  parseInt(eyear) * 12;
        var totalMonths = parseInt(intoMonths) + parseInt(emonths);
        var regex=/^[0-9]+$/;
        if(licence=='' || !licence.match(regex)){
            // $('.monthlyIncome').css('border','1px solid red');
            // $('#eightthFormError').show();
            // setTimeout(function() {
            //     $('#eightthFormError').fadeOut('fast');
            // }, 5000);
            swal("Error!", "Income can only have the positive numeric vlaue!", "error");
        }
        else{
          $('#eightthForm1').prop('disabled', true);
            if(totalMonths<36){
                $('#alertSection1').slideDown(500);
                var empURL = "{{ route('save-employement-data') }}";
                var data = {
                    employmentStatus:$.cookie('qcf_employment1'),
                    companyName:$.cookie('qcf_companyName1'),
                    jobTitle:$.cookie('jobTitle1'),
                    empYears:eyear,
                    empMonths:emonths,
                    totalMonths:totalMonths,
                    monthlyIncome:licence
                }
                    $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
                    type:"POST",
                    url:empURL,
                    data:data,
                    success: function(response){
                        var monthsL = 36 - parseInt(response);
                        $('#monthsLeft1').html(monthsL);
                        if(response<36){
                            $('#alertSection1').slideDown(500);
                            //$('.progress1').css('width','80%');
                            $.cookie('qcf_monthlyIncome1', licence, { expires: 30});
                            $('.eightthForm1').hide();
                            $('.seventhOneForm2').show();
                        }
                        else{
                            $('#alertSection1').hide();
                            $('.eightthForm1').hide();
                            $('.ninethForm').show();
                            $.cookie('qcf_monthlyIncome1', licence, { expires: 30});
                            //$('.progress-line').css('width','80%');
                        }

                    }
                });
            }
            else{
                $('#alertSection1').hide();
                $('.eightthForm1').hide();
                $('.ninethForm').show();
                $.cookie('qcf_monthlyIncome1', licence, { expires: 30});
                $('.progress-line').css('width','80%');
            }
        }
    });


    $('#eightthForm2').click(function(){
      $(window).scrollTop(0);
        var licence = $('#monthlyIncome2').val();
        var emonths = $.cookie('qcf_employmentMonths2');
        var eyear = $.cookie('qcf_employmentYears2');
        var intoMonths =  parseInt(eyear) * 12;
        var totalMonths = parseInt(intoMonths) + parseInt(emonths);
        var regex=/^[0-9]+$/;
        if(licence=='' || !licence.match(regex)){
            // $('.monthlyIncome').css('border','1px solid red');
            // $('#eightthFormError').show();
            // setTimeout(function() {
            //     $('#eightthFormError').fadeOut('fast');
            // }, 5000);
            swal("Error!", "Income can only have the positive numeric vlaue!", "error");
        }
        else{
          $('#eightthForm').prop('disabled', true);
            var empURL = "{{ route('save-employement-data') }}";
            var data = {
                employmentStatus:$.cookie('qcf_employment2'),
                companyName:$.cookie('qcf_companyName2'),
                jobTitle:$.cookie('jobTitle2'),
                empYears:eyear,
                empMonths:emonths,
                totalMonths:totalMonths,
                monthlyIncome:licence
            }
                $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                type:"POST",
                url:empURL,
                data:data,
                success: function(response){
                    $('#alertSection1').hide();
                    $('.eightthForm2').hide();
                    $('.ninethForm').show();
                    $.cookie('qcf_monthlyIncome1', licence, { expires: 30});
                    //$('.progress-line').css('width','80%');
                }
            });

            }

    });

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

        if(street!=''){
            flag='true';
        }
        else{
            flag='flag';
        }
        if(town!=''){
            flag='true';
        }
        else{
            flag='flag';
        }
        if(pstCde==''){

        }

        if(flag=='true'){

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
            // $('#addressNowError').show();
            // $('#AddressNow').css('border','1px solid red');
            // setTimeout(function() {
            //     $('#addressNowError').hide();
            // }, 5000);
            swal("Error!", "Address data cannot be empty!", "error");
        }
    });


        /* -----------------Address Lookup 1------------------- */

        $('#ninethForms1').click(function(){
          $(window).scrollTop(0);
        var buildingNum = $('#buildingNumber1').val();
        var buildingName = $('#buildingName1').val();
        var county = $('#county1').val();
        var street = $('#street1').val();
        var street1 = $('#secondStreet1').val();
        var town = $('#town1').val();
        var country = $('#country1').val();
        var flag ='false';
        var pstCde = $('#postcode1').val();
        if(street!=''){
            flag='true';
        }
        else{
            flag='flag';
        }
        if(town!=''){
            flag='true';
        }
        else{
            flag='flag';
        }
        if(country!=''){
            flag='true';
        }
        else{
            flag='flag';
        }
        if(pstCde==''){
        }

        if(flag=='true'){
            $.cookie('qcf_buildingNumber1', buildingNum, { expires: 30});
            $.cookie('qcf_county1', county, { expires: 30});
            $.cookie('qcf_buildingName1', buildingName, { expires: 30});
            $.cookie('qcf_streetAddress1', street, { expires: 30});
            $.cookie('qcf_secondStreet1', street1, { expires: 30});
            $.cookie('qcf_townAddress1', town, { expires: 30});
            $.cookie('qcf_countryAddress1', country, { expires: 30});
            $.cookie('qcf_vehiclePostcode1', pstCde, { expires: 30});
            $('#cityName').html(town);
            setTimeout(function(){
                $('.ninethForm1').hide();
                $('.eleventhForm1').show();
                $('.progress-line').css('width','85%');
            }, 100);
        }
        else{
            $('#addressNowError1').show();
            $('#AddressNow1').css('border','1px solid red');
            setTimeout(function() {
                $('#addressNowError1').hide();
            }, 5000);
        }
    });
    /* ------------Address Lookup 2 -------------- */
    $('#ninethForms2').click(function(){
      $(window).scrollTop(0);
        var buildingNum = $('#buildingNumber2').val();
        var buildingName = $('#buildingName2').val();
        var county = $('#county2').val();

        var street = $('#street2').val();
        var street1 = $('#secondStreet2').val();
        var town = $('#town2').val();
        var country = $('#country2').val();
        var flag ='false';
        var pstCde = $('#postcode2').val();
        if(street!=''){
            flag='true';
        }
        else{
            flag='flag';
        }
        if(town!=''){
            flag='true';
        }
        else{
            flag='flag';
        }
        if(country!=''){
            flag='true';
        }
        else{
            flag='flag';
        }
        if(pstCde==''){
        }

        if(flag=='true'){
            $.cookie('qcf_buildingNumber2', buildingNum, { expires: 30});
            $.cookie('qcf_county2', county, { expires: 30});
            $.cookie('qcf_buildingName2', buildingName, { expires: 30});
            $.cookie('qcf_streetAddress2', street, { expires: 30});
            $.cookie('qcf_secondStreet2', street1, { expires: 30});
            $.cookie('qcf_townAddress2', town, { expires: 30});
            $.cookie('qcf_countryAddress2', country, { expires: 30});
            $.cookie('qcf_vehiclePostcode2', pstCde, { expires: 30});

                $('.ninethForm2').hide();
                $('.eleventhForm2').show();
                $('.progress-line').css('width','85%');
        }
        else{
            $('#addressNowError1').show();
            $('#AddressNow1').css('border','1px solid red');
            setTimeout(function() {
                $('#addressNowError1').hide();
            }, 5000);
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
            $('#tenthFormError').show();
            setTimeout(function() {
                $('#tenthFormError').hide();
            }, 5000);
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
        var totalMonths = '';
        totalMonths = years*12;
        totalMonths = parseInt(totalMonths) + parseInt(months);
        var buildingNumber = $.cookie('qcf_buildingNumber');
        var buildingName = $.cookie('qcf_buildingName');
        var county = $.cookie('qcf_county');
        var street = $.cookie('qcf_streetAddress');
        var town = $.cookie('qcf_townAddress');
        var country = $.cookie('qcf_countryAddress');
        var postcode = $.cookie('qcf_vehiclePostcode');
        var residential = $.cookie('qcf_vehicleResidential');
        $.cookie('qcf_totalMonths', totalMonths, { expires: 30});
        var tokenValue = $('#tokenValue').val();
        var data =  {
            buildingName:buildingName,
            buildingNumber:buildingNumber,
            street:street,
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
            // $('.addressY').css('border','1px solid red');
            // $('.addressLabelY').css('border','1px solid red');
            // $('.addressM').css('border','1px solid red');
            // $('.addressLabelM').css('border','1px solid red');
            // $('#addressYearsError').show();
            // setTimeout(function() {
            //     $('#addressYearsError').hide();
            // }, 5000);
            swal("Error!", "Must be valid data!", "error");
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
                    $('#eleventhForm').prop('disabled', true);
                    flag='true';
                    var ajaxAddress = "{{ route('saveAddressData') }}";
                    if(totalMonths<36){
                        $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type:"POST",
                            url:ajaxAddress,
                            data:data,
                            success: function(response){
                                    if(response<36){
                                        $('.eleventhForm').hide();
                                        $('.ninethForm1').show();
                                        $('#alertSection').slideDown(500);
                                        var monthsL = 36 - parseInt(response);
                                        $('#monthsLeft').html(monthsL);
                                    }
                                    else{
                                        if(flag=='true'){
                                            $('.progress-line').css('width','92%');
                                            $.cookie('qcf_currentAddressYears', years, { expires: 30});
                                            $.cookie('qcf_currentAddressMonths', months, { expires: 30});
                                            $('.eleventhForm').hide();
                                            $('.twelvethForm').show();
                                            $('#alertSection').hide();
                                            $.cookie('qcf_totalMonths', 0, { expires: 30});
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
                            $('.progress-line').css('width','92%');
                            $.cookie('qcf_currentAddressYears', years, { expires: 30});
                            $.cookie('qcf_currentAddressMonths', months, { expires: 30});
                            $('.eleventhForm').hide();
                            $('.twelvethForm').show();
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

   $('#eleventhForm1').click(function(){
     $(window).scrollTop(0);
    $('.twelvethForm').hide();
    var years = $('#addressYears1').val();
    var months = $('#addressMonths1').val();
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
    var town = $.cookie('qcf_townAddress1');
    var country = $.cookie('qcf_countryAddress1');
    var postcode = $.cookie('qcf_vehiclePostcode1');
    var residential = $.cookie('qcf_vehicleResidential1');
    $.cookie('qcf_totalMonths1', totalMonths, { expires: 30});
    var tokenValue = $('#tokenValue').val();
    var data =  {
        buildingName:buildingName,
        buildingNumber:buildingNumber,
        street:street,
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
        // $('.addressY').css('border','1px solid red');
        // $('.addressLabelY').css('border','1px solid red');
        // $('.addressM').css('border','1px solid red');
        // $('.addressLabelM').css('border','1px solid red');
        // $('#addressYearsError').show();
        // setTimeout(function() {
        //     $('#addressYearsError').hide();
        // }, 5000);
        swal("Error!", "Must be valid data!", "error");
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
                    $('#eleventhForm1').prop('disabled', true);
                    flag='true';
                    var ajaxAddress = "{{ route('saveAddressData') }}";
                    if(totalMonths<36){
                        $('.twelvethForm').hide();
                        $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type:"POST",
                            url:ajaxAddress,
                            data:data,
                            success: function(response){
                                    if(response<36){
                                        $('.eleventhForm1').hide();
                                        $('.ninethForm2').show();
                                        $('#alertSection').slideDown(500);
                                        var monthsL = 36 - parseInt(response);
                                        $('#monthsLeft').html(monthsL);
                                    }
                                    else{
                                        if(flag=='true'){
                                            // console.log("Monts are >36 Inner");
                                            $('.progress-line').css('width','85%');
                                            $.cookie('qcf_currentAddressYears1', years, { expires: 30});
                                            $.cookie('qcf_currentAddressMonths1', months, { expires: 30});
                                            $('.eleventhForm1').hide();
                                            $('.twelvethForm').show();
                                            $('#alertSection').hide();
                                            $.cookie('qcf_totalMonths', 0, { expires: 30});
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
                            $.cookie('qcf_currentAddressYears', years, { expires: 30});
                            $.cookie('qcf_currentAddressMonths', months, { expires: 30});
                            $('.eleventhForm1').hide();
                            $('.twelvethForm').show();
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



$('#eleventhForm2').click(function(){
  $(window).scrollTop(0);
    $('.twelvethForm').hide();
    var years = $('#addressYears2').val();
    var months = $('#addressMonths2').val();
    var flag ='false';
    if(months==''){
        months = 0;
    }
    var totalMonths = '';
    totalMonths = years*12;
    totalMonths = parseInt(totalMonths) + parseInt(months);
    var buildingNumber = $.cookie('qcf_buildingNumber2');
    var buildingName = $.cookie('qcf_buildingName2');
    var county = $.cookie('qcf_county2');
    var street = $.cookie('qcf_streetAddress2');
    var town = $.cookie('qcf_townAddress2');
    var country = $.cookie('qcf_countryAddress2');
    var postcode = $.cookie('qcf_vehiclePostcode2');
    var residential = $.cookie('qcf_vehicleResidential2');
    $.cookie('qcf_totalMonths2', totalMonths, { expires: 30});
    var tokenValue = $('#tokenValue').val();
    var data =  {
        buildingName:buildingName,
        buildingNumber:buildingNumber,
        street:street,
        town:town,
        county:county,
        postcode:postcode,
        residential:residential,
        years:years,
        months:months,
        totalMonths:totalMonths
    };
    // data = JSON.stringify(data);
    //console.log(data);
    if((years=='' || years<=0) && (months=='' || months <= 0)){
        flag='false';
        // $('.addressY').css('border','1px solid red');
        // $('.addressLabelY').css('border','1px solid red');
        // $('.addressM').css('border','1px solid red');
        // $('.addressLabelM').css('border','1px solid red');
        // $('#addressYearsError').show();
        // setTimeout(function() {
        //     $('#addressYearsError').hide();
        // }, 5000);
        swal("Error!", "Must be valid data!", "error");
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
                    $('#eleventhForm2').prop('disabled', true);
                    flag='true';
                    var ajaxAddress = "{{ route('saveAddressData') }}";
                    if(totalMonths<36){
                        $('.twelvethForm').hide();
                        $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type:"POST",
                            url:ajaxAddress,
                            data:data,
                            success: function(response){
                            if(flag=='true'){
                                $('.progress-line').css('width','85%');
                                $.cookie('qcf_currentAddressYears', years, { expires: 30});
                                $.cookie('qcf_currentAddressMonths', months, { expires: 30});
                                $('.eleventhForm2').hide();
                                $('#alertSection').hide();
                                $('.twelvethForm').show();
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
                });
                    }
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
        var town = $.cookie('qcf_townAddress1');
        var country = $.cookie('qcf_countryAddress1');
        var postcode = $.cookie('qcf_vehiclePostcode1');
        var residential = $.cookie('qcf_vehicleResidential1');
        $.cookie('qcf_totalMonths', totalMonths, { expires: 30});
        var data =  {
            buildingNumber:buildingNumber,
            buildingName:buildingName,
            street:street,
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
    /* function twelvethForm(){
        var flag ='false';
        var prefixTitle = $('input[name=prefixTitle]:checked').val();
       if(!prefixTitle){
            flag='false';
            $('#twelvethRadioError').show();
            setTimeout(function() {
                $('#twelvethRadioError').fadeOut('fast');
            }, 5000);
        }
        else{
            flag='true';
        }
       if(flag=='true'){
            $.cookie('qcf_prefixTitle', prefixTitle, { expires: 30});
            $('.progress-line').css('width','95%');
            $('.twelvethForm').hide();
            $('.gettingName').show();
        }
    } */
    $('#gettingName').click(function(){
        $(window).scrollTop(0);
        var fname = $('#firstName').val();
        var sname = $('#surName').val();
        var regex=/^[a-zA-Z -]*$/;
        if(fname=='' || !fname.match(regex)){
            // $('#fnameError').show();
            // setTimeout(function() {
            //     $('#fnameError').fadeOut('fast');
            // }, 5000);
            // $('#firstName').css('border','1px solid red');
            swal("Error!", "First name should not be empty, and only a-z/A-Z is allowed!", "error");
            flag='false';
        }
        else{
            flag='true'
        }
        if(sname=='' || !sname.match(regex)){
            // flag='false';
            // $('#surName').css('border','1px solid red');
            // $('#snameError').show();
            // setTimeout(function() {
            //     $('#snameError').fadeOut('fast');
            // }, 5000);
            swal("Error!", "Last name should not be empty, and only a-z/A-Z is allowed!", "error");
            flag = 'false';
        }
        else{
            flag='true';
        }
        if(flag=='true'){
            $.cookie('qcf_firstName', fname, { expires: 30});
            $.cookie('qcf_surName', sname, { expires: 30});
            $('.progress-line').css('width','97%');
            $('.progress-bullet4').addClass('active');
            $('.gettingName').hide();
            $('.thirteenthForm').show();
        }
    });

    // Disable enter on form 
        $("#msform").bind("keypress", function(e) {
            if (e.keyCode == 13) {
                return false;
            }
        });

    $('#msform').on('submit', function (e) {
      $(window).scrollTop(0);

        var flag= false;
        var mobile = false;
        e.preventDefault();
        var mobile = $('#mobileNumber').val();
        var email = $('#emailAddress').val();
        var mobStr = mobile.toString();
        mobStr = mobStr.length;
        // if(mobile.indexOf(0)==0 && mobile.length==11){
        if(mobStr==11){
            mobile= true;
            // $('#mobileNumber').css('border','1px solid #ccc');
        }
        else{
            // $('#mobileNumber').css('border','1px solid red');
            swal("Invalid Phone Number!", "Must be a valid phone number!", "error");
            mobile = false;
        }
        if(email.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){
            flag = true;
            $('#emailAddress').css('border','1px solid #ccc');
        }
        else{
            flag = false;
            // $('#emailAddress').css('border','1px solid red');
            swal("Invalid Email!", "Should be a valid email address!", "error");
        }
        if(flag== true && mobile==true){
              $('#submitButton').prop('disabled', true);
            $.cookie('qcf_mobileNumber', mobile, { expires: 30});
            $.cookie('qcf_emailAddress', email, { expires: 30});
            var form=$("#msform");
            var forms=$("#msform").serialize();
            // console.log(forms);
            var splited_serialized = forms.split('&');
            var formData = [];
            $.each( splited_serialized, function(index, key) {

                var input = key.substr(0, key.indexOf('='));
                var value = key.substr( key.indexOf('=') + 1 );
            formData.push(value);

            });

            var vehicleType = $("input[name=cars]").val();
            var vehicleType = "car";
            var budget = $("input[name=budget]").val();
            var licence = $("input[name=licence]").val();
            var marital = $("input[name=marital]").val();
            var passport = $("input[name=qcf_passport]").val();
            var dob = $("input[name=qcf_dob]").val();
            var employmentStatus = $("input[name=qcf_employment]").val();
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
            //var AddressNow = $("input[name=nameGoesHere]").val();];
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
            var residentialStatus = $("input[name=qcf_vehicleResidential]").val();
            var currentAddressYears = $("input[name=qcf_currentAddressYears]").val();
            var currentAddressMonths = $("input[name=qcf_currentAddressMonths]").val();
            var currentAddressYears1 = $("input[name=qcf_currentAddressYears1]").val();
            var currentAddressMonths1 = $("input[name=qcf_currentAddressMonths1]").val();
            var currentAddressYears2 = $("input[name=qcf_currentAddressYears2]").val();
            var currentAddressMonths2 = $("input[name=qcf_currentAddressMonths2]").val();
            var prefixTitle = $("input[name=prefixTitle]").val();
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
            var EmpObj = null;
            var AddObj = null;
            if(postcode!=''){
               AddObj =  {
                    "Building": buildingNumber+" "+buildingName,
                    "Street": street,
                    "County": county,
                    "Postcode": postcode,
                    "TimeAtAddressMonths": currentAddressMonths,
                    "TimeAtAddressYears": currentAddressYears,
                    "Town": town,
                    "ResidentialStatus": residentialStatus
                }
            }
            if(postcode1!=''){
                AddObj = {
                    "Building": buildingNumber+" "+buildingName,
                    "Street": street,
                    "County": county,
                    "Postcode": postcode,
                    "TimeAtAddressMonths": currentAddressMonths,
                    "TimeAtAddressYears": currentAddressYears,
                    "Town": town,
                    "ResidentialStatus": residentialStatus
                    },
                    {
                        "Building": buildingNumber1+" "+buildingName1,
                        "Street": street1,
                        "County": county1,
                        "Postcode": postcode1,
                        "TimeAtAddressMonths": currentAddressMonths1,
                        "TimeAtAddressYears": currentAddressYears1,
                        "Town": town1
                    }
            }
            if(postcode2!=''){
                  AddObj = {
                      "Building": buildingNumber+" "+buildingName,
                      "Street": street,
                      "County": county,
                      "Postcode": postcode,
                      "TimeAtAddressMonths": currentAddressMonths,
                      "TimeAtAddressYears": currentAddressYears,
                      "Town": town,
                      "ResidentialStatus": residentialStatus
                      },
                      {
                          "Building": buildingNumber1+" "+buildingName1,
                          "Street": street1,
                          "County": county1,
                          "Postcode": postcode1,
                          "TimeAtAddressMonths": currentAddressMonths1,
                          "TimeAtAddressYears": currentAddressYears1,
                          "Town": town1
                      },
                      {
                          "Building": buildingNumber2+" "+buildingName2,
                          "Street": street2,
                          "County": county2,
                          "Postcode": postcode2,
                          "TimeAtAddressMonths": currentAddressMonths2,
                          "TimeAtAddressYears": currentAddressYears2,
                          "Town": town2
                      }
            }

            if(tMonths>=36){
                EmpObj = {
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
            }
            if(monthlyIncome1!='' || monthlyIncome1!=0){
                EmpObj ={
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
                        "EmploymentStatus": "Null",
                        "JobTitle": jobTitle1,
                        "MonthlyIncome": monthlyIncome1,
                        "TimeAtEmployerMonths": employmentMonths1,
                        "TimeAtEmployerYears": employmentYears1
                    }
            }
            if(monthlyIncome2!='' || monthlyIncome2!=0){
                EmpObj = {
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
                        "EmploymentStatus": "Null",
                        "JobTitle": jobTitle1,
                        "MonthlyIncome": monthlyIncome1,
                        "TimeAtEmployerMonths": employmentMonths1,
                        "TimeAtEmployerYears": employmentYears1
                    },
                    {
                        "Company": companyName2,
                        "Building": "Null",
                        "Street": "Null",
                        "Town": "Null",
                        "County": "Null",
                        "Postcode": "Null",
                        "EmploymentStatus": "Null",
                        "JobTitle": jobTitle2,
                        "MonthlyIncome": monthlyIncome2,
                        "TimeAtEmployerMonths": employmentMonths2,
                        "TimeAtEmployerYears": employmentYears2
                    }
            }

            var apiData= {
                    "VehicleType": "Car",
                    "AmountToBorrow": 12,
                    "LoanTerm": 12,
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
                        "Landline": "Null",
                        "ValidUkPassport": passport,
                        "NumberOfDependants": 1,
                        "OtherIncome": 0,
                        "MortgageBalance": "Null",
                        "HouseValuation": "Null",
                        "Addresses": [
                                AddObj
                        ],
                        "Employments": [
                                EmpObj
                        ],
                        "Notes": [
                        " "
                           ]
                        }
                    ]
                };
            $('#lastModal').modal('show');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                type:"POST",
                url:"{{route('saveApplication')}}",
                data:form.serialize(),
                success: function(response){
                    var res = response.split('#');
                    $('#LID').val(res[1]);
                    if(res[0]==1){
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
                                    jqXHR.setRequestHeader('X-ApiKey', 'c93f7ea3-b7c3-478c-a3e7-ceeba3446958');
                                },
                               success: function(response){
                                      if(response.Accepted==true){
                                        setTimeout(function(){
                                      $('#lastModal').modal('hide');
                                      $('.afterSubmitting').show();
                                      $('.contentDiv').hide();
                                   }, 3000);
                                  var userSessionURL = "set-user-session/"+LID;
                                  setTimeout(function(){
                                      $.ajax({
                                          type:"GET",
                                          url:userSessionURL,
                                          success: function(response){
                                              if(response=='success'){
                                                  window.location.href="{{ url('dashboard') }}"
                                              }
                                          }
                                          });

                                  }, 7000);
                                  deleteAllCookies();
                                     }
                                     else{
                                       $('#submitButton').prop('disabled', false);
                                       apiSuccess = false;
                                         $('#formError').show();
                                         setTimeout(function() {
                                             $('#lastModal').hide();
                                         }, 5000);
                                     }
                                  }
                              });
                      }
                      else if(res[0]=='2'){
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
                                  jqXHR.setRequestHeader('X-ApiKey', 'c93f7ea3-b7c3-478c-a3e7-ceeba3446958');
                              },
                             success: function(response){
                                if(response.Accepted==true){
                                        setTimeout(function(){
                                            $('#lastModal').modal('hide');
                                            $('.afterSubmittingEmail').show();
                                            $('.contentDiv').hide();


                                        }, 3000);

                                        var userSessionURL = "send-existing-email/"+LID;
                                        setTimeout(function(){
                                            $.ajax({
                                                type:"GET",
                                                url:userSessionURL,
                                                success: function(response){
                                                    if(response=='success'){
                                                        window.location.href="{{ url('dashboard') }}"
                                                    }
                                                }

                                            });
                                        }, 7000);
                                        deleteAllCookies();
                                    }
                                    else{
                                    $('#submitButton').prop('disabled', false);
                                    apiSuccess = false;
                                    $('#formError').show();
                                    setTimeout(function() {
                                        $('#formError').hide();
                                    }, 5000);
                                    }
                                }
                            });
                            if(formSuccess == true && apiSuccess == true && emailExist==true){
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
                        swal("Good job!", "You clicked the button!", "error");
                        setTimeout(function() {
                            $('#formError').hide();
                        }, 5000);
                        formSuccess = false;
                      }

                  }

              });

          }

          else{
              $('#submitButton').prop('disabled', false);
          }
      });


    addressNow.listen('load', function(control) {
        control.listen("populate", function (address) {
            var st =   address.Line1;
            var street1  = address.SecondaryStreet;
            var buildingNumber  = address.BuildingNumber;
            var county  = address.Province;
            $('#street').val(st);
            $('#street1').val(st);
            $('#street2').val(st);
            $('#AddressNow').val(address.Company);
            $('#AddressNow1').val(address.Company);
            $('#AddressNow2').val(address.Company);

            $('#buildingNumber').val(buildingNumber);
            $('#buildingNumber1').val(buildingNumber);
            $('#buildingNumber2').val(buildingNumber);

            $('#secondStreet').val(street1);
            $('#secondStreet1').val(street1);
            $('#secondStreet2').val(street1);

            $('#county').val(county);
            $('#county1').val(county);
            $('#county2').val(county);

            var tn =   address.City;
            var cy =   address.CountryName;
            var pc =   address.PostalCode;
            $('.addressText').html(st+', '+ tn+ ', '+ cy+ ', '+ pc);
            $('.addressDown').slideDown(500);
            $('.checkedCircle').show();
            $('.addressDown1').slideDown(500);
            $('.checkedCircle1').show();
            $('.addressDown2').slideDown(500);
            $('.checkedCircle2').show();

        });
    });

    // if (Modernizr.touch && Modernizr.inputtypes.date) {
    //
    //     document.getElementById('vehicleDob').type = 'date';
    //
    // } else {
    //     $('#vehicleDob').datepicker();
    // }
    $('#showTextFields1').click(function(){
        $('#addressFields1').show();
        $('#PostCodeDiv1').show();
        $('#labelHome1').hide();
        $('#AddressNow1').hide();
        $('.checkedCircle').hide();
        $('.addressDown').hide();
        $('.checkedCircle').hide();
    });
    $('#showTextFields2').click(function(){
        $('#addressFields2').show();
        $('#PostCodeDiv2').show();
        $('#labelHome2').hide();
        $('#AddressNow2').hide();
        $('.checkedCircle').hide();
        $('.addressDown').hide();
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

    function openNav() {
    document.getElementById("mySidenav").style.width = "90%";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
$('#employmentMonths').change(function(){

})
</script>
