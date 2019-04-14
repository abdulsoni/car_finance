<div class="container-fluid nav1-bg hidden-sm hidden-xs">
    <div class="innerContainer">
        <div class="col-sm-2 logo-style ">
        </div>
        <div class="desktopShow col-sm-2" style="border-right:none">
        </div>
        <div class="desktopShow col-sm-1" style="border-right:none">
        </div>
        <div class="desktopShow col-sm-1" style="border-right:none ">
            <!-- <img class="imgMiddle" src="images/vehicle/trust.png"> -->
        </div>
        <div class="desktopShow col-sm-2" style=" padding-top: 10px;">
          <!--center>
            <div class="secureIcon">
               <img src="images/landing/lockPng.png" alt="">
                 <div class="">
                   <h3>SECURE</h3>
                   <p>SSL ENCRYPTION</p>
                 </div>
            </div>
          </center-->
        </div>
        <div class="col-md-4" style="border:none;text-align: center ">
          <div class="mobileStyle pull-right ">
            @if(Auth::check())
                <ul class="dropdown memberDropdown" style="margin-top:7px;">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-user"></i>
                        {{ Auth::user()->name }}
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{url('member-area')}}">Member Area</a></li>
                        <li><a class="logout-btn" href="{{url('logout')}}">Logout</a></li>
                    </ul>
                </ul>
            @else
              <span class="phone-number">
                <a class="member-nav" href="{{url('login')}}" style="color: #b1b1b1; display:none"> <i class="fa fa-user navbar-fa"></i> Members's Area</a>
                <i class="fa fa-phone"></i><a style="color: white;font-family: Roboto SlabBold, sans-serif !important; font-size: 16px;font-weight: 700;" href="tel:01202 286500">  01202 286500</a>
              </span>
            @endif
          </div>
        </div>
    </div>
</div>
<!-- <div class="container-fluid navbarDiv"> -->
<style media="screen">
  .custom-logo{
    width:9.5em !important;
  }
</style>
<nav class="navbar-inverse bg-top-bar hidden-xs">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" onclick="window.location.href='{{url('apply-now')}}'">APPLY NOW</button></li>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" href="javascript:void(0)">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <div class="col-xs-4 col-md-4">
        <a class="navbar-brand" href="{{url('/')}}">
           @if (Request::path() == 'motorbike-finance-for-bad-credit-loans-uk')
           <img class="custom-logo" src="{{asset('public/images/landing/logo-bike-finance.png')}}" alt="">
           @elseif(Request::path() == 'van-finance-calculator-loans-uk')
           <img class="custom-logo" src="{{asset('public/images/landing/logo-van-finance.png')}}" alt="">
           @elseif(Request::path() == 'caravan-finance-calculator-loans-bad-credit-uk')
           <img class="custom-logo" src="{{asset('public/images/landing/logo-caravan.png')}}" alt="">
           @elseif(Request::path() == 'motorhome-finance-calculator-loans-uk')
           <img class="custom-logo" src="{{asset('public/images/landing/logo-motorhome-finance.png')}}" alt="">
           @else
           <img class="indexLogo" src="{{asset('public/images/landing/quick_car_logo.png')}}" alt="">
           @endif
        </a>
    </div>
    <div class="col-xs-8 col-md-8">
      <ul class="nav navbar-nav pull-right navsukh">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{route('car-finance-explained')}}"> Car Finance Explained</a></li>
        <!--<li><a href="{{url('your-options#set-your-budget')}}"> Your Options</a></li>-->
        <li><a href="{{url('/#set-your-budget')}}"> Set your budget</a></li>
        <li><button class="btn-primary btn-lg pull-right apply-btn" onclick="window.location.href='{{url('apply-now')}}'">APPLY NOW </button></li>
        <!-- <li><a href="#">How It Works</a></li>
        <li><a href="#">Contact us</a></li> -->
      </ul>
    </div>
  </div>
</nav>
<!--Start Mobile Menu-->
<div id="mob-nav-wrapper" class="hidden-lg hidden-xl mob-nav-wrapper">
    <div class="mmenu-banner">
        <a href="/">
          @if (Request::path() == 'bike-finance')
          <img style="margin-left:20px;margin-top:20px;width:132px;" src="{{asset('public/images/landing/logo-bike-finance.png')}}" alt="">
          @elseif(Request::path() == 'van-finance')
          <img style="margin-left:20px;margin-top:20px;width:132px;" src="{{asset('public/images/landing/logo-van-finance.png')}}" alt="">
          @elseif(Request::path() == 'caravan-finance')
          <img style="margin-left:20px;margin-top:20px;width:132px;" src="{{asset('public/images/landing/logo-caravan.png')}}" alt="">
          @elseif(Request::path() == 'motor-finance')
          <img style="margin-left:20px;margin-top:20px;width:132px;" src="{{asset('public/images/landing/logo-motorhome-finance.png')}}" alt="">
          @else
          <img style="margin-left:20px;margin-top:20px;width:132px;" src="{{asset('public/images/landing/quick_car_logo.png')}}">
          @endif

        </a>
        <div class="apply-container">
            <a href="{{ url('apply-now') }}" class="btn btn-primary btn-sm call-to-action-btn apply-btn-mobile apply-btn2" >Apply</a>
        </div>
    </div>
    <input type="checkbox" id="mmenu" name="mmenu" class="mmenu-checkbox">
    <div class="mmenu-container">
        <div class="clear-fix"></div>
        <input id="toggle" type="checkbox">
        <label class="mmenu-toggle cheesburger" for="mmenu"></label>
        <label class="cheesburger" for="mmenu">
            <div class="top-bun"></div>
            <div class="meat"></div>
            <div class="bottom-bun"></div>
        </label>
    </div>
    <div class="mmenu mm">
        <label class="mmenu-toggle" style="height:1px;width:1px;background:none;" for="mmenu"><span>Toggle</span></label>
        <ul class="mobile-mmenu">
            <li>
                <a href="{{url('/')}}">Home</a>
            </li>
            <li>
                <a href="{{url('car-finance-explained-options-personal-contract-plan-pcp-uk')}}">Car Finance Explained <i class="fa fa-angle-right pull-right icon-font-25" aria-hidden="true"></i></a>
            </li>
            <li>
                <a href="{{url('/')}}#set-your-budget">Set Your Budget <i class="fa fa-angle-right pull-right icon-font-25" aria-hidden="true"></i></a>
            </li>
            <li style="display:none">
                <a href="{{url('login')}}">Login <i class="fa fa-angle-right pull-right icon-font-25" aria-hidden="true"></i></a>
            </li>
            <li class="li-mobile-cta-phone">
                <div class="mobile-cta-phone">
                    <a href="tel:01202 286500" class="btn call-to-action-btn menu-btn-mobile" style="text-align: center;border: none;background-image: none;margin-left: 0px;/*margin-right: 10px;*/background-color: #203757;color: #fff;padding-top: 6px;"><img src="" style="margin-right:10px;margin-top:-2px;"> 01202 286500</a>
                </div>
                <div class="mobile-cta-apply">
                    <a href="{{url('apply-now')}}" class="btn call-to-action-btn menu-btn-mobile" style="text-align: center;border: none;background-image: none;margin-left: 0px;background-color: #db0a5b;color: #fff;padding-top: 6px;">Apply now</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!--Ends Mobile Menu-->
<!-- <div class="container-fluid no-padding cookiesDiv">
  <i>We Use <a href="https://quickcarfinance.co.uk/privacy-policy" target="_blank" style="color:#FFF;text-decoration:underline">cookies</a> to provide you with a great user experience. <a onclick="setCookieDiv()" href="#" title="Accept Cookies" style="color: #fff;">X</a></i>
</div> -->
<div class="progress"></div>
<div class="progress1"></div>
<div class="container-fluid no-padding" id="alertSection">
    <h3 style="">
        We require another <span id="monthsLeft"></span> months of address history.
    </h3>
</div>
<!--Starts here Menu Scroll JS Code-->
<script>
  $(function() {
  $(".cheesburger").click(function() {
    $('.mmenu.mm').toggleClass("intro");
  });
});
</script>
<script type="text/javascript">
    $('logout-btn').click(function(){
        drift.reset();
    });
</script>
<!--Ends here Menu Scroll Code-->
