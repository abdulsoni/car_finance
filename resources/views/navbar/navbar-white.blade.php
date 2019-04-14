<div class="new-index-header">

    <div class="container">

        <!-- <div class="container-fluid navbarDiv"> -->

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
                    <a class="navbar-brand" href="{{url('/')}}"> <img class="indexLogo" src="{{asset('public/images/qcf-logo-whitebg.png')}}" alt=""></a>
                </div>
                <div class="col-xs-8 col-md-8">
                    <ul class="nav navbar-nav pull-right navsukh">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('your-options')}}"> Your Options</a></li>
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
                    <img style="margin-left:20px;margin-top:20px;width:132px;" src="{{asset('public/images/qcf-logo-whitebg.png')}}">
                </a>
                <div class="apply-container apply-container-mobile">
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
                        <a href="{{url('your-options')}}">Your Options <i class="fa fa-angle-right pull-right icon-font-25" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#set-your-budget">Set Your Budget <i class="fa fa-angle-right pull-right icon-font-25" aria-hidden="true"></i></a>
                    </li>

                    <li class="li-mobile-cta-phone">
                        <div class="mobile-cta-apply">
                            <a href="{{url('apply-now')}}" class="btn call-to-action-btn menu-btn-mobile" style="text-align: center;border: none;background-image: none;margin-left: 0px;background-color: #db0a5b;color: #fff;padding-top: 6px;">Apply now</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--Ends Mobile Menu-->


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
        <!--Ends here Menu Scroll Code-->

    </div>

</div>
