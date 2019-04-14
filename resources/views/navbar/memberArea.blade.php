<style>
    .tel-ryt a {
    color: #fff;
}
.pull-right.tel-ryt {
    font-size: 23px;
    /* color: #fff; */
    font-weight: bolder;
    padding: 0 50px;
}
.menu-bar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #1c2834;
}

.menu-bar li {
    float: left;
}
.menu-bar li a i{padding: 0 5px;}
.menu-bar li a {
    display: block;
    color: #62778c;
    text-align: center;
    padding: 14px 0px;
    text-decoration: none;
    border-right: 1px solid #17232f;
}

.menu-bar li a:hover:not(.active) {
    background-color: #213140;
    color: #31c8dd;
}

.menu-bar .active {
    background-color: #213140;
    color: #31c8dd;
}
.menu-bar > ul > li {
    font-size: 15px;
    font-family: 'Raleway ExtraBold', sans-serif;
    color: #415c77;
    width: 16.66%;
}
</style>
<!--Header Starts-->

<header class="member-area-updated-header">
    <div class="header-top-menu-member">
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
              <span class="phone-number">
                <a class="member-nav" href="{{url('dashboard')}}" style="color: #b1b1b1;"> <i class="fa fa-user navbar-fa"></i> Members's Area</a>
               <a class="member-phone" style="color: white;font-family: Roboto SlabBold, sans-serif !important; font-size: 16px;font-weight: 700;" href="tel:01202 286500">  <i class="fa fa-phone"></i>  01202 286500</a>
              </span>
            </div>
        </div>
    </div>
</div>
</div>
     <!--Navbar Starts-->
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
                <a class="navbar-brand" href="{{url('/dashboard')}}"> <img class="indexLogo" src="{{asset('public/images/landing/quick_car_logo.png')}}" alt=""></a>
            </div>
            <div class="col-xs-8 col-md-8">
                <ul class="nav navbar-nav pull-right navsukh">
                    <li><button class="btn-primary btn-lg pull-right apply-btn" onclick="event.preventDefault();document.getElementById('logout-form').submit();">LOGOUT </button></li>
                </ul>
            </div>
        </div>
    </nav>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
    <!--Start Mobile Menu-->
    <div id="mob-nav-wrapper" class="hidden-lg hidden-xl mob-nav-wrapper">
        <div class="mmenu-banner">
            <a href="/">
                <img style="margin-left:20px;margin-top:20px;width:132px;" src="{{asset('public/images/landing/quick_car_logo.png')}}">
            </a>
            <div class="apply-container" style='right: 15px;'>
                <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-primary btn-sm call-to-action-btn apply-btn-mobile apply-btn2" >LOGOUT</a>
            </div>
        </div>
        <input type="checkbox" id="mmenu" name="mmenu" class="mmenu-checkbox">
        <div class="mmenu-container" style='display:none'>
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
            <label class="mmenu-toggle" style="height:1px;width:1px;background:none;"  for="mmenu"><span>Toggle</span></label>
            <ul class="mobile-mmenu">

                <li>
                    <a class="member-nav" href="{{url('login')}}"> <i class="fa fa-user navbar-fa"></i> Members's Area</a>
                </li>
                <li>
                   <a  href="tel:01202 286500"> <i class="fa fa-phone"></i>  01202 286500</a>
                </li>

                <li class="li-mobile-cta-phone">
                    <!--<div class="mobile-cta-phone">
                        <a href="tel:01202 286500" class="btn call-to-action-btn menu-btn-mobile" style="text-align: center;border: none;background-image: none;margin-left: 0px;/*margin-right: 10px;*/background-color: #203757;color: #fff;padding-top: 6px;"><img src="" style="margin-right:10px;margin-top:-2px;"> 01202 286500</a>
                    </div>-->
                    <!--<div class="mobile-cta-apply">
                        <a href="#" class="btn call-to-action-btn menu-btn-mobile" style="text-align: center;border: none;background-image: none;margin-left: 0px;background-color: #db0a5b;color: #fff;padding-top: 6px;">LOGOUT</a>
                    </div>-->
                </li>


            </ul>
        </div>
    </div>
    <!--Ends Mobile Menu-->
    <!--Navbar Ends-->
</header>
<!--Header Ends-->
<!-- <nav class="navbar-inverse bg-top-bar hidden-xs">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle navbar-btn-1" data-toggle="collapse" onclick="window.location.href='apply-now'">APPLY NOW</button></li>
    <button type="button" class="navbar-toggle navbar-btn-2" data-toggle="collapse" data-target="#myNavbar" href="javascript:void(0)">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <div class="col-xs-4 col-md-4">
        <a class="navbar-brand" href="{{url('dashboard')}}"> <img class="indexLogo" src="{{asset('public/images/landing/quick_car_logo.png')}}" alt=""></a>
    </div>
    <div class="col-xs-8 col-md-8">

      <div class="pull-right tel-ryt">
      <a href="tel:01202 286500"><i class="fa fa-phone navbar-fa"></i> 01202 286500</a>
    </div>
  </div>
</div>

</nav>
<div class="menu-bar hidden-xs hidden-xl">
    <ul>
      <li><a class="{{ request()->is('dashboard') ? 'active' : '' }}" href="{{ url('dashboard') }}"><i class="fa fa-file-text-o"></i> Summary</a></li>
      <li><a class="{{ request()->is('find-cars') ? 'active' : '' }}" href="{{ url('find-cars') }}"><i class="fa fa-search"></i> Search</a></li>
      <li><a class="{{ request()->is('saved-cars') ? 'active' : '' }}" href="{{ url('saved-cars') }}"><i class="fa fa-heart-o"></i> Your Car</a></li>
      <li><a class="{{ request()->is('upload-documents') ? 'active' : '' }}" href="{{ url('upload-documents') }}"><i class="fa fa-briefcase"></i> PaperWork</a></li>
      <li><a href="{{ url('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> {{ __('Logout') }}</a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf </form></li>
    </ul>
    <div class="col-md-12 pre-approved-section" style="background: #38ad78;">
        <h3 align="center" style="color: #fff; text-align: center;"><img src="{{asset('public/images/tick-icons.png')}}"> Pre-Approved</h3>
    </div>
</div> -->
<!--Start Mobile Menu-->
<!-- <div id="mob-nav-wrapper" class="hidden-lg hidden-xl mob-nav-wrapper">
    <div class="mmenu-banner">
        <a href="{{url('dashboard')}}">
            <img style="margin-left:20px;margin-top:20px;width:132px;" src="{{asset('public/images/landing/quick_car_logo.png')}}">
        </a>
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
           <li><a class="active" href="{{ url('dashboard') }}"><i class="fa fa-file-text-o"></i> Summary</a></li>
            <li><a href="{{ url('find-cars') }}"><i class="fa fa-search"></i> Search</a></li>
            <li><a href="{{ url('saved-cars') }}"><i class="fa fa-heart-o"></i> Your Car</a></li>
            <li><a href="{{ url('upload-documents') }}"><i class="fa fa-briefcase"></i> PaperWork</a></li>
            <li><a href="{{ url('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> {{ __('Logout') }}</a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf </form></li>

        </ul>
    </div>
</div> -->
<!--Ends Mobile Menu-->

<!-- cookies Div Start-->
<!-- <div class="container-fluid no-padding cookiesDiv">

<i>We Use <a href="{{url('cookie-policy')}}" target="_blank" style="color:#FFF;text-decoration:underline">cookies</a> to provide you with a great user experience. <a onclick="setCookieDiv()" href="#" title="Accept Cookies" style="color: #fff;">X</a></i>
</div> -->
<!-- cookies Div End-->

<!-- <div class="progress"></div>

<div class="progress1"></div>

<div class="container-fluid no-padding" id="alertSection">

    <h3 style="">

        We require another <span id="monthsLeft"></span> months of address history.

    </h3>

</div> -->
<!--Starts here Menu Scroll JS Code-->
<script>
  $(function() {
  $(".cheesburger").click(function() {
    $('.mmenu.mm').toggleClass("intro");
  });
});

$('.menu-bar ul a').on( 'click', function () {
    $( '.menu-bar ul' ).find( 'li.active' ).removeClass( 'active' );
    $( this ).parent( 'li' ).addClass( 'active' );
});
</script>
<!--Ends here Menu Scroll Code-->
