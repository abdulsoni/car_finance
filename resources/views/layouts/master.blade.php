<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
@yield('seo-content')
{{--     @if (Request::path() == 'apply-now' || Request::path() == 'apply-now-iframe' || Request::is('thank-you/*') || Request::is('dashboard/*') ||Request::path() == 'apply-now-test' || Request::path() == 'dashboard' )--}}
{{--      @include('header.applyNowHeader')--}}
{{--     @elseif(Auth::check())--}}
{{--      @include('header.membersAreaHeader')--}}
{{--     @else--}}
@include('header.indexHeader')
{{--      @endif--}}
      <style media="screen">
      .loader {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999999 !important;
        background: url('{{asset("public/preloader.gif")}}') 50% 50% no-repeat rgb(249,249,249);
        }
      </style>
</head>
<body>
  <div class="loader"></div>
  @if(Auth::check() && Request::path() != 'apply-now')
    @include('navbar.memberArea')
  @else
    @if (Request::path() == 'apply-now' || Request::path() == 'apply-now-test' ||  Request::path() == 'dashboard')
      @include('navbar.applyNowNavbar')
      @elseif(Request::is('thank-you/*'))
      @include('navbar.navbarThankYou')
      @elseif(Request::is('dashboard/*'))
      @include('navbar.applyNowNavbar')
      @else
      @include('navbar.navbar')
    @endif
  @endif
@yield('content')
  @include('footer.footer')
</body>
</html>
