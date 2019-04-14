@php
    $calculator = DB::table('calculator')->first();
@endphp

<div class="new-index-footer">

    <div class="footer-subscribe-section">
        <div class="container">
            <div class="row d-flex-center no-margin">
                <div class="col-sm-12 col-xs-11 no-padding">

                    <div class="footer-subscribe-inner">
                        <div class="row d-flex-center no-margin">

                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 no-padding">
                                <div class="footer-subscribe-left">
                                    <div class="footer-subscribe-title">
                                        <p>Subscribe Newsletter</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 no-padding">
                                <div class="footer-subscribe-right">
                                    <div class="footer-subscribe-right-inner">
                                        <input type="text" class="footer-subscribe-text-box" placeholder="Enter your email address"/>
                                        <input type="submit" class="footer-subscribe-btn" value="SUBSCRIBE"/>
                                    </div>
                                    <div class="float"></div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="footer-subscribe-outer">
                        <hr/>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row no-margin">

            <div class="col-sm-12 linksDiv no-padding">
                <div class="col-sm-3 no-padding">
                    <h5>LOOKING FOR FINANCE?</h5>
                    <ul>
                        <li><a href="{{route('homePage')}}">Car Finance</a></li>
                        <li><a href="{{route('landingBike')}}">Bike Finance</a></li>
                        <li><a href="{{route('landingVan')}}">Van Finance</a></li>
                        <li><a href="{{route('landingMotor')}}">Motorhome Finance</a></li>
                        <li><a href="{{route('landingCaravan')}}">Caravan Finance</a></li>
                        {{--  <li><a href="{{url('find-car')}}">C1</a></li>
                        <li><a href="{{url('new-car-offers')}}">C2</a></li> --}}
                    </ul>
                </div>
                <div class="col-sm-3 no-padding">
                    <h5>QUICK LINKS</h5>
                    <ul>
                        {{-- <li><a href="{{url('products')}}">Products</a></li> --}}
                        <li><a href="{{route('car-finance-explained')}}">Car Finance Explained</a></li>
                        <li><a href="{{url('#set-your-budget')}}">Set your budget</a></li>
                        <li><a href="{{url('apply-now')}}">Apply now</a></li>
                        <li><a href="{{route('financeCalculator')}}">Car Finance Calculator</a></li>
                        {{--   <li><a href="{{url('find-car')}}">C1</a></li>
                        <li><a href="{{url('new-car-offers')}}">C2</a></li>  --}}
                    </ul>
                </div>
                <div class="col-sm-3 no-padding">
                    <h5>LEGAL</h5>
                    <ul>

                        <li><a href="{{url('terms-and-conditions')}}" target="_blank">Terms and conditions</a></li>
                        <li><a href="{{url('privacy-policy')}}" target="_blank">Privacy policy</a></li>
                        <li><a href="{{url('cookie-policy')}}" target="_blank">Cookies</a></li>

                    </ul>
                </div>
                <div class="col-sm-3 no-padding">
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

            <div class="col-xs-12 no-padding">
                <div class="footer-text">
                    <p>Quick Car Finance is a trading name of Automotive Online Limited, a credit broker.
                        <br>
                        Automotive Online is authorised and regulated by the Financial Conduct Authority under reference number: 764855. Registered office: Unit 1, The Sidings, Victoria Avenue Industrial Estate, Swanage, England, BH19 1AU. Registered in England. Company registration no. 07968386.. Data Protection Registration Number ZA458903.</p>
                    <p>All finance is subject to status and income. Written quotations on request. Automotive Online can introduce you to a limited number of finance providers, based upon your credit rating and will receive commission for such introductions.
                        † We do not charge a fee for arranging the finance, however some of our lenders may charge a fee.
                        This site uses cookies so that we can provide you with the best user experience.  By continuing to use the site you are consenting for cookies to be used. Further information on cookies and how you can disable them is available on our cookie policy.</p>
                </div>
            </div>
        </div>
        <hr>
        <!--p class="footerBottomText">Company No: 07968386</p-->
        <p class="footerBottomText1">&copy; Quick Car Finance. All Rights Reserved</p>
    </div>
</div>

{{-- 27-03-19 /////////////////////////////////// --}}

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}

<script src="{{ asset('public/js/jquery.min.js') }}"></script>
<script src="{{asset('public/js/jquery-asRange.js')}}" ></script>
<script src="{{asset('public/js/jquery.number.js')}}" ></script>
<script src="{{asset('public/js/jquery.lazy.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('public/js/jquery.reflection.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/jquery.cloud9carousel.js')}}"></script>
<script type="text/javascript">
    $(function() {
        $('.lazy').Lazy();
    });
</script>
{{-- <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(event) {
         console.log('hii');
    });
</script> --}}


<!--Start No Scrolling mobile menu-->
<script>
function lockScroll() {

if ($('body').hasClass('lock-scroll')) {
    $('body').removeClass('lock-scroll');
}
else {
    $('body').addClass('lock-scroll');
}
}
</script>
<!--End No Scrolling mobile menu-->

<!-- TrustBox script -->
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
<!-- End TrustBox script -->
<!-- OneTrust Cookies Consent Notice start -->
<!-- <script src="https://cdn.cookielaw.org/consent/950c2dad-c12f-4054-88c2-5e6d25c05e8b.js" type="text/javascript" charset="UTF-8"></script> -->
<script type="text/javascript">
function OptanonWrapper() { }
</script>
<!-- OneTrust Cookies Consent Notice end -->
{{-- 27-03-19 /////////////////////////////////// --}}

<script type="text/javascript" src="{{asset('public/js/custom-select.js')}}"></script>
<script src="{{asset('public/js/jscookie.js')}}" type="text/javascript" async></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js" async></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" async></script>
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
    value:<?php echo $calculator->default_amount;?>,
    min: <?php echo $calculator->min_amount;  ?>,
    max: <?php echo $calculator->max_amount; ?>,
    format: function(value) {
        return '£ ' + $.number(value);
    },
    onChange: function(value) {
        var fee = 100;
        var interestRate = $('.interestRate').val();
        var time = $('.borrowYears').val();
        var totalRep = '';
        var intRateActual = time * interestRate;
        $('.range-example-5').val(value);
        $('.borrowAmt').val($.number(value));
        calcInterest = parseInt(value) * intRateActual;
        calcInterest = parseInt(calcInterest)/100;
        totalInst = parseInt(time)*12;
        var totalInterest = parseFloat(fee) + parseFloat(calcInterest);
        totalAmt = parseInt(value) + parseInt(totalInterest);
        perMonth = parseInt(totalAmt)/totalInst;
        totalRep = (value * interestRate)/100;
        $('.totalAmount').html('£'+$.number(totalAmt,2));
        $('.installments').html('£'+$.number(perMonth,2));
        $('.costOfCredit').html('£'+$.number(totalInterest,2));
        $('.totalAmount').val($.number(totalAmt,2));
        $('.installments').val($.number(perMonth,2));
        $('.costOfCredit').val($.number(totalInterest,2));
        var w = $('.bottomSlider>.asRange>.asRange-selected').prop("style")["width"];
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
    value:<?php echo $calculator->default_amount;  ?>,
    min: <?php echo $calculator->min_amount;  ?>,
    max: <?php echo $calculator->max_amount; ?>,
    format: function(value) {
        return '£ ' + $.number(value);
    },
    onChange: function(value) {
      var fee = 100;
      var interestRate = $('.interestRate').val();
      var time = $('.borrowYears').val();
      var totalRep = '';
      var intRateActual = interestRate * time;
        $('.range-example-5').val(value);
        $('.range-example-7').val(value);
        $('.borrowAmt').val($.number(value));
        calcInterest = parseInt(value) * intRateActual;
        calcInterest = parseInt(calcInterest)/100;
        totalInst = parseInt(time)*12;
        var totalInterest = parseFloat(calcInterest) + parseInt(fee);
        totalAmt = parseInt(value) + parseInt(totalInterest);
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
        $('.costOfCredit').html('£' + $.number(totalInterest, 2));
        $('.totalAmount').val($.number(totalAmt,2));
        $('.installments').val($.number(perMonth,2));
        $('.costOfCredit').val($.number(totalInterest, 2));
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
function setRate(r,apr,name) {
var calcInterest = '';
var totalAmt = '';
var totalInst='';
var perMonth = '';
var fee = 100;
var borrowAmount = $('.borrowAmt').val();
borrowAmount = borrowAmount.replace(',','');
var time = $('.borrowYears').val();
var totalRate = time * r;
calcInterest = parseInt(borrowAmount) * parseFloat(totalRate);
calcInterest = parseFloat(calcInterest)/100;
totalInst = parseInt(time)*12;
var totalRep = parseInt(fee) + parseFloat(calcInterest);
totalAmt = parseFloat(totalRep) + parseFloat(borrowAmount);
perMonth = parseFloat(totalAmt)/totalInst;
$('.totalAmount').html('£'+$.number(totalAmt,2));
$('.installments').html('£'+$.number(perMonth,2));
$('.totalAmount').val($.number(totalAmt,2));
$('.installments').val($.number(perMonth,2));
$('.interestRate').val(r);
$('.interestRate').html(apr+'%');
// var totalRep = totalAmt - borrowAmt;
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
var fee = 100;
var amt = $('.borrowAmt').val();
var interestRate = $('.interestRate').val();
actAmt = amt.replace(/([~!@#$%^&*()_+=`{}\[\]\|\\:;'<>,.\/? ])+/g, '').replace(/^(-)+|(-)+$/g, '');
// actAmt = actAmt.slice(1);
if (actAmt > <?php echo $calculator->min_amount; ?>) {
    addedAmt = parseInt(actAmt);
    addedAmt = addedAmt - 250;
    $('#borrowAmount').val(addedAmt);
    $('.borrowAmt').val($.number(addedAmt));
    var w = $('.rangeInput>.asRange>.asRange-selected').width() / $('.rangeInput>.asRange>.asRange-selected').parent().width() * 100;
    w = w - 0.33557;
    $('.rangeInput>.asRange>.asRange-selected').css('width', w + "%");
    $('.bottomSlider>.asRange>.asRange-selected').css('width', w + "%");

    var l = $('.rangeInput>.asRange>.asRange-pointer').prop("style")["left"];
    l = l.replace('%', '');
    l = l - 0.33557;
    $('.rangeInput>.asRange>.asRange-pointer').css('left', l + '%');
    $('.bottomSlider>.asRange>.asRange-pointer').css('left', l + '%');
    $('.bottomSlider>.asRange>.asRange-pointer>.asRange-tip').html('£' +  $.number(addedAmt));
    var time = $('.borrowYears').val();
    var intRateActual = time * interestRate;
    calcInterest = parseFloat(addedAmt) * intRateActual;
    calcInterest = parseFloat(calcInterest)/100;
    totalInst = parseFloat(time)*12;
    var totalInterest = parseFloat(calcInterest) + parseInt(fee);
    totalAmt = parseFloat(addedAmt) + parseFloat(totalInterest);
    perMonth = parseFloat(totalAmt)/totalInst;

    $('.totalAmount').html('£' + $.number(totalAmt, 2));
    $('.installments').html('£' + $.number(perMonth, 2));
    $('.costOfCredit').html('£' + $.number(totalInterest, 2));
    $('.totalAmount').val($.number(totalAmt, 2));
    $('.installments').val($.number(perMonth, 2));
    $('.costOfCredit').val($.number(totalInterest, 2));
}
}
function decreaseAmountMobile() {
var fee = 100;
var amt = $('.borrowAmt').val();
var interestRate = $('.interestRate').val();
actAmt = amt.replace(/([~!@#$%^&*()_+=`{}\[\]\|\\:;'<>,.\/? ])+/g, '').replace(/^(-)+|(-)+$/g, '');

if (actAmt > <?php echo $calculator->min_amount; ?>) {
    addedAmt = parseInt(actAmt);
    addedAmt = addedAmt - 250;
    $('#borrowAmount').val(addedAmt);
    $('.borrowAmt').val($.number(addedAmt));
    var findVal = actAmt/250;
    w = parseFloat(findVal)* parseFloat(0.3356);

    w = w - 0.33557;
    $('.rangeInput>.asRange>.asRange-selected').css('width', w + "%");
    $('.bottomSlider>.asRange>.asRange-selected').css('width', w + "%");

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
    var fee = 100;
    var amt = $('.borrowAmt').val();
    var interestRate = $('.interestRate').val();
    var w = '';
    actAmt = amt.replace(/([~!@#$%^&*()_+=`{}\[\]\|\\:;'<>,.\/? ])+/g, '').replace(/^(-)+|(-)+$/g,'');
    var maxAMT = parseInt(<?php echo $calculator->max_amount; ?>);
    if(actAmt<=maxAMT){
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

        w = parseFloat(w) + 0.33557;
        $('.bottomSlider>.asRange>.asRange-selected').css('width',w+"%");
        $('.rangeInput>.asRange>.asRange-selected').css('width',w+"%");

        var l = $('.rangeInput>.asRange>.asRange-pointer').prop("style")["left"];
        l = l.replace('%','');
        l = parseFloat(l)  + 0.33557;
        $('.rangeInput>.asRange>.asRange-pointer').css('left',l+'%');
        $('.bottomSlider>.asRange>.asRange-pointer').css('left',l+'%');
        $('.bottomSlider>.asRange>.asRange-pointer>.asRange-tip').html('£'+ $.number(addedAmt));
        var time = $('.borrowYears').val();
        var intRateActual = time * interestRate;
        calcInterest = parseFloat(addedAmt) * intRateActual;
        calcInterest = parseFloat(calcInterest)/100;
        totalInst = parseFloat(time)*12;
        var totalInterest = parseFloat(calcInterest) + parseInt(fee);
        totalAmt = parseFloat(addedAmt) + parseFloat(totalInterest);
        perMonth = parseFloat(totalAmt)/totalInst;

        $('.totalAmount').html('£'+$.number(totalAmt,2));
        $('.installments').html('£'+$.number(perMonth,2));
        $('.costOfCredit').html('£' + $.number(totalInterest, 2));
        $('.totalAmount').val($.number(totalAmt,2));
        $('.installments').val($.number(perMonth,2));
        $('.costOfCredit').val($.number(totalInterest, 2));
}
}
function decreaseYears(){
var amt = $('.borrowYears').val();
amt = amt-1;
var fee = 100;
var interestRate = $('.interestRate').val();
var borrowAmount = $('.borrowAmt').val();
borrowAmount = borrowAmount.replace(/([~!@#$%^&*()_+=`{}\[\]\|\\:;'<>,.\/? ])+/g, '').replace(/^(-)+|(-)+$/g,'');
if(amt>0){
    $('.borrowYears').val(amt);
    var intRateActual = amt * interestRate;

    $('.range-example-6').val(amt);
    calcInterest = parseFloat(borrowAmount) * intRateActual;
    calcInterest = parseFloat(calcInterest)/100;
    var totalInterest = parseFloat(calcInterest) + parseInt(fee);
    totalInst = parseFloat(amt)*12;
    totalAmt = parseFloat(borrowAmount) + parseFloat(totalInterest);
    perMonth = parseFloat(totalAmt)/totalInst;
    $('.totalAmount').html('£'+$.number(totalAmt,2));
    $('.installments').html('£'+$.number(perMonth,2));
    $('.costOfCredit').html('£' + $.number(totalInterest, 2));
    $('.totalMonths').html(totalInst);
    $('.totalAmount').val(+$.number(totalAmt,2));
    $('.installments').val(+$.number(perMonth,2));
    $('.costOfCredit').val($.number(totalInterest, 2));
    $('.totalMonths').val(totalInst);
}
}
function increaseYears(){
var amt = $('.borrowYears').val();
amt = parseInt(amt)+1;
var fee = 100;
if(amt<=5){
  // borrowAmt*(rate)/100+100;
    $('.borrowYears').val(amt);
    var interestRate = $('.interestRate').val();
    var borrowAmount = $('.borrowAmt').val();
    borrowAmount = borrowAmount.replace(/([~!@#$%^&*()_+=`{}\[\]\|\\:;'<>,.\/? ])+/g, '').replace(/^(-)+|(-)+$/g,'');
    $('.range-example-6').val(amt);
    var intRateActual = amt * interestRate;
    calcInterest = parseFloat(borrowAmount) * intRateActual;
    calcInterest = parseFloat(calcInterest)/100;
    totalInst = parseFloat(amt)*12;
    var totalInterest = parseFloat(calcInterest) + parseInt(fee);
    totalAmt = parseFloat(borrowAmount) + parseFloat(totalInterest);
    perMonth = parseFloat(totalAmt)/totalInst;
    $('.totalAmount').html('£'+$.number(totalAmt,2));
    $('.installments').html('£'+$.number(perMonth,2));
    $('.costOfCredit').html('£' + $.number(totalInterest, 2));
    $('.totalAmount').val($.number(totalAmt,2));
    $('.installments').val($.number(perMonth,2));
    $('.costOfCredit').val($.number(totalInterest, 2));
    $('.totalMonths').html(totalInst);
}
}
$(".borrowAmt").keydown(function (e) {
if (/\d+|,+|[/b]+|-+/i.test(e.key) ){

} else {

    return false;
}
});
function changeValues(s){
var vals = $.number(s);
var fee = 100;
$('.borrowAmt').val(vals);
var values = vals.replace(/([~!@#$%^&*()_+=`{}\[\]\|\\:;'<>,.\/? ])+/g, '').replace(/^(-)+|(-)+$/g, '');
var per = parseInt(values)*100/<?php echo $calculator->max_amount;  ?>;
if(values>=<?php echo $calculator->max_amount;  ?>){
    per = 100;
    $('.borrowAmt').val($.number('<?php echo $calculator->max_amount; ?>'));
    values = <?php echo $calculator->max_amount;  ?>;
}

var interestRate = $('.interestRate').val();
var time = $('.borrowYears').val();
var intRateActual = interestRate * time;
$('.range-example-5').val(values);
$('.range-example-7').val(values);
$('.borrowAmt').val($.number(values));
$('#borrowAmount').val(values);
calcInterest = parseInt(values) * intRateActual;
calcInterest = parseInt(calcInterest)/100;
totalInst = parseInt(time)*12;
var totalInterest = parseFloat(calcInterest) + parseInt(fee);
totalAmt = parseFloat(values) + parseFloat(totalInterest);
perMonth = parseInt(totalAmt)/totalInst;
$('.totalAmount').html('£'+$.number(totalAmt,2));
$('.costOfCredit').html('£'+$.number(totalInterest,2));
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
$('.setHeight').css('margin-bottom','0');
}
else{
$('.setHeight').css('margin-bottom','0px');

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
<script src="{{ asset('public/js/bootstrap.min.js') }}" async></script>
<script src="{{asset('public/js/bootPag.js')}}" type="text/javascript" async></script>
<script src="{{asset('public/js/jquery.toc.js')}}" async></script>
<script src="{{asset('public/js/prism.js')}}" async></script>
<script src="{{asset('public/js/jscookie.js')}}" type="text/javascript"></script>
<script>
    function openNav() {
    document.getElementById("mySidenav").style.width = "90%";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
$('#employmentMonths').change(function(){
});
$(document).ready(function(){
  var pattern = /[?&]vid=/;
  var URL = location.search;

  if(pattern.test(URL))
  {
      var vid=location.search;
      vid = vid.split("=");
      vid = vid[1];
      localStorage.setItem('vid',vid);
  }
  var UrlParams = window.location.href;
  var params = {};
  var params = [];
    if (UrlParams.indexOf('?') > -1)
    {
      var splitted = UrlParams.split('?');
      var prmarr = splitted[1].split("&");
      for ( var i = 0; i < prmarr.length; i++) {
          var tmparr = prmarr[i].split("=");
          params[tmparr[0]] = tmparr[1];
          if(tmparr[0].toLowerCase()=="source"){
            tmparr[0]=="utm_source";
          }
          localStorage.setItem(tmparr[0].toLowerCase(),tmparr[1].toLowerCase());
      }
    }
    var time=<?php echo $calculator->default_year;  ?>;;
    var fee = 100;
    var amount = <?php echo $calculator->default_amount;  ?>;
    var rate = $('.interestRate').val();
    var rateActual = time * rate;
    var calcInterest = amount * rateActual / 100;
    var totalInstall = time * 12;
    var totalInterest = parseFloat(calcInterest) + parseFloat(fee);
    totalLoanAmt = parseFloat(amount) + parseFloat(totalInterest);
    var perMonth = totalLoanAmt/totalInstall;
    $('#hiddenAmt').val(totalLoanAmt);
    $('#showRepayment').html('£'+$.number(totalLoanAmt,2));
    $('.totalAmount').html('£'+$.number(totalLoanAmt,2));
    $('#hiddenCost').val(totalInterest);
    $('#showCostOfCredit').html('£'+$.number(totalInterest,2));
    $('.costOfCredit').html('£'+$.number(totalInterest,2));
    $('#hiddenCost').html('£'+$.number(totalInterest,2));
    $('#hiddenRate').val(rate);
    $('#hiddenInstallments').val(perMonth);
    $('.installments').html('£'+$.number(perMonth,2));
    $('#showPerMonth').html('£'+$.number(perMonth,2));

  /* Load CSS and Script Files Start*/
  if(document.createStyleSheet) {
    document.createStyleSheet("{{asset('public/css/bootstrap.min.css')}}");
    document.createStyleSheet("{{asset('public/css/index.css')}}");
    document.createStyleSheet("{{asset('public/css/main.css')}}");
    document.createStyleSheet("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
  }
  else {
     var bootstrapStyle="@import url({{asset('public/css/bootstrap.min.css')}});",bootstrap=document.createElement("link");bootstrap.rel="stylesheet",bootstrap.href="data:text/css,"+escape(bootstrapStyle),document.getElementsByTagName("head")[0].appendChild(bootstrap);var indexStyle="@import url({{asset('public/css/index.css')}});",index=document.createElement("link");index.rel="stylesheet",index.href="data:text/css,"+escape(indexStyle),document.getElementsByTagName("head")[0].appendChild(index);var mainStyle="@import url({{asset('public/css/main.css')}});",main=document.createElement("link");main.rel="stylesheet",main.href="data:text/css,"+escape(mainStyle),document.getElementsByTagName("head")[0].appendChild(main);var faStyle="@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');",fa=document.createElement("link");fa.rel="stylesheet",fa.href="data:text/css,"+escape(faStyle),document.getElementsByTagName("head")[0].appendChild(fa);var jQueryUiStyle="@import url('https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css');",jQueryUi=document.createElement("link");jQueryUi.rel="stylesheet",jQueryUi.href="data:text/css,"+escape(jQueryUiStyle),document.getElementsByTagName("head")[0].appendChild(jQueryUi);var fontStyle="@import url({{asset('public/fonts/fonts.css')}});",fonts=document.createElement("link");fonts.rel="stylesheet",fonts.href="data:text/css,"+escape(fontStyle),document.getElementsByTagName("head")[0].appendChild(fonts);var mobileMenuStyle="@import url({{asset('public/css/mobile-menu.css')}});",mobileMenu=document.createElement("link");mobileMenu.rel="stylesheet",mobileMenu.href="data:text/css,"+escape(mobileMenuStyle),document.getElementsByTagName("head")[0].appendChild(mobileMenu);var s=document.createElement("script");s.setAttribute("src","https://cdn.cookielaw.org/consent/950c2dad-c12f-4054-88c2-5e6d25c05e8b.js"),s.setAttribute("type","text/javascript"),s.setAttribute("charset","UTF-8"),document.head.appendChild(s);
  }
  /* Load CSS and Script Files End */

});
/* Preloader hide */
  window.onload = function(e){
    $('.loader').fadeOut();
  }
/* Preloader hide */
</script>


</body>
</html>
