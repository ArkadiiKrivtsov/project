<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/images/icon/favicon.png') }}" type="image/x-icon">

    <!-- Web Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Pacifico%7CSource+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;amp;subset=latin-ext,vietnamese" rel="stylesheet">

    <!-- Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/animate/animated.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/owl.carousel.min/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/direction/css/noJS.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/prettyphoto-master/css/prettyPhoto.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/slick-sider/slick.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/countdown-timer/css/demo.css') }}">

    <!-- Template CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/home.css') }}">
  
  <style>
      td, th{
          border:1px solid black;
      }
  </style>

  </head>

  <body class="home main-home">
    @include('layout.header')
      
        <div id="content">
            @yield('content')
        </div>
    
    @include('layout.footer')
      
    </body>
</html>