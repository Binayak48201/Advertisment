<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="offerexpressnepal, advertisement nepal">
    <meta name="twitter:site" content="@Binayak4820 && @AnuragTamrakar4">
    <title>{{ config('app.name', 'Offer Express Nepal') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('front/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <link href="{{asset('front/vendors/linearicons/css/linearicons.css')}}" rel="stylesheet">

    <link href="{{asset('front/vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/vendors/owl-carousel/owl.theme.min.css')}}" rel="stylesheet">

    <link href="{{asset('front/vendors/flexslider/flexslider.css')}}" rel="stylesheet">

    <link href="{{asset('front/css/base.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet">
     <style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }
</style>
</head>
<body id="body" class="wide-layout preloader-active">
<div id="app">
    <div id="pageWrapper" class="page-wrapper">

        @include('layouts.header')

        @include('extra.slider')

            @yield('content')
    
        @include('layouts.footer')

    </div>
</div>
    <script src="{{asset('front/js/jquery-1.12.3.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/vendors/modernizr/modernizr-2.6.2.min.js')}}"></script>
    
    <!-- Owl Carousel -->
    <script src="{{asset('front/vendors/owl-carousel/owl.carousel.min.js')}}"></script>

    <!-- FlexSlider -->
    <script src="{{asset('front/vendors/flexslider/jquery.flexslider-min.js')}}"></script>

    <!-- Coutdown -->
    <script src="{{asset('front/vendors/countdown/jquery.countdown.js')}}"></script>
    <script src="{{asset('front/js/main.js')}}"></script>
</body>

</html>

