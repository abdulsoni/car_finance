<html>
<head>
    @include('admin.header.head')
    <title>@yield('title')</title>
    <meta name="meta-description" content="@yield('meta-description')">
    <meta name="meta-keywords" content="@yield('meta-keywords')">
</head>
<body>
@include('admin.sidebar.sidebar')
@yield('content')
@include('admin.footer.footer')
</body>
</html>