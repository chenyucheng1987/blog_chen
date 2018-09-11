<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>@yield('title')</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
  <link rel="apple-touch-icon-precomposed" href="{{ asset('img/home/i/app-icon72x72@2x.png')}}">
  <meta name="msapplication-TileImage" content="{{ asset('img/home/i/app-icon72x72@2x.png')}}">
  <meta name="msapplication-TileColor" content="#0e90d2">
  <link rel="stylesheet" href="{{ asset('/css/home/amazeui.min.css')}}">
  <link rel="stylesheet" href="{{ asset('/css/home/app.css')}}">
</head>

<body id="blog">
    @include('layouts.home.header')
    @yield('content')
    @include('layouts.home.footer')
  <!--[if (gte IE 9)|!(IE)]><!-->
  <script src="{{ asset('/js/home/jquery.min.js')}}"></script>
  <!--<![endif]-->
  <!--[if lte IE 8 ]>
  <script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
  <script src="assets/js/amazeui.ie8polyfill.min.js"></script>
  <![endif]-->
  <script src="{{ asset('/js/home/amazeui.min.js')}}"></script>
	@yield('javascript')
</body>
</html>