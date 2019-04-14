<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
    @include('header.iframe-header')
    {{--@yield('seo-content')
      @include('header.iframe-header')
    @include('header.indexHeader')
    @include('footer.footerNew')--}}
</head>
<body>
@yield('content')
</body>
</html>
