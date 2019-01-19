<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="offerexpressnepal, advertisement nepal">
    <meta name="twitter:site" content="@Binayak4820 && @AnuragTamrakar4">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <link href="{{asset('front/css/custom.css')}}" rel="stylesheet">
     <style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }
    a:hover{
      color: #e96969;
    }
    .spinner {
    width: 40px;
    height: 40px;
    position: relative;
}

.double-bounce1, .double-bounce2 {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background-color: #333;
  opacity: 0.6;
  position: absolute;
  top: 0;
  left: 0;
  
  -webkit-animation: sk-bounce 2.0s infinite ease-in-out;
  animation: sk-bounce 2.0s infinite ease-in-out;
}

.double-bounce2 {
  -webkit-animation-delay: -1.0s;
  animation-delay: -1.0s;
}
/*stere*/
@media (min-width: 992px)
.steps__inner {
    -js-display: flex;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: distribute;
    justify-content: space-around;
}

@-webkit-keyframes sk-bounce {
  0%, 100% { -webkit-transform: scale(0.0) }
  50% { -webkit-transform: scale(1.0) }
}

@keyframes sk-bounce {
  0%, 100% { 
    transform: scale(0.0);
    -webkit-transform: scale(0.0);
  } 50% { 
    transform: scale(1.0);
    -webkit-transform: scale(1.0);
  }
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
    <flash message="{{ session('flash')}}"></flash>
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


<script>
  /*(function($){
    $('.productCard').click(function(){
      alert('test');
    });
  })(jQuery);
  */
  function clickme(el) {
    var id = el.getAttribute('data-id');
    $.get('/advertisement/increaseView/'+id, function(data, status) {
      // console.log(data);
      return 0;
    });
  }
</script>
</body>
</html>


