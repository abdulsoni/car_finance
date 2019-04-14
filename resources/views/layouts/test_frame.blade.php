<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @yield('seo-content')
{{--    @include('header.indexHeader')--}}

    <link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('public/js/jquery.min.js') }}" ></script>
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
        @include('navbar.applyNowNavbar-white')
    @elseif(Request::is('thank-you/*'))
        @include('navbar.navbarThankYou-white')
    @elseif(Request::is('dashboard/*'))
        @include('navbar.applyNowNavbar-white')
    @else
        @include('navbar.navbar-white')
    @endif
@endif
@yield('content')
@include('footer.footer_test')
{{--@if (Request::path() == 'apply-now')--}}
{{--    @include('footer.applyNowFooter')--}}
{{--@elseif(!Request::is('thank-you/*'))--}}
{{--    @include('footer.footerNew')--}}
{{--@endif--}}
</body>
</html>
