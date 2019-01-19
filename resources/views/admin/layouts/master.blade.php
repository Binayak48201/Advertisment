<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="#" sizes="32x32">
    <title>OfferExpressNepal-Admin</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('admin/css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('admin/css/style.min.css')}}" rel="stylesheet">
    
    <script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>
    <style>
        .newstylebutton{
            background: linear-gradient(40deg, rgb(69, 202, 252), rgb(48, 63, 159)) !important;
        }
        .completeds
        {
            text-decoration: line-through;
        }
    </style>
</head>

<body class="grey lighten-3">
    <div id="app">
     <!-- NODE JS GLOBAL COMPNENT -->
         <header>
                <!-- Navbar -->
            <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar" style="background-color: #880e4f!important;">
                <div class="container-fluid" >
                    <a class="navbar-brand waves-effect" href="/admin/dashboard" target="_blank">
                        <strong class="blue-text">Home</strong>
                    </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right -->
                    {{-- <ul class="navbar-nav nav-flex-icons mr-auto"> --}}
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a  class="nav-link waves-effect" href="/admin/dashboard" class="nav-link waves-effect">
                                Dashboard
                            </a>
                        </li>                        
                        <li class="nav-item">
                            <a href="/admin/advertisement" class="nav-link waves-effect">
                                Advertisment
                            </a>
                        </li>                        
                        <li class="nav-item">
                            <a href="/admin/category" class="nav-link waves-effect">
                                Category
                            </a>
                        </li>                        
                        <li class="nav-item">
                            <a href="/admin/view_admin" class="nav-link waves-effect">
                                Members
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/view_brands" class="nav-link waves-effect">
                                Brands
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/support" class="nav-link waves-effect">
                                Contact
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/carousel" class="nav-link waves-effect">
                                Big Slider
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/slider" class="nav-link waves-effect">
                                Small Slider
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/view_news" class="nav-link waves-effect">
                                News
                            </a>
                        </li>
                    </ul>

                    <!-- Right -->  
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            @if(Auth::check())
                                <a class="navbar-brand waves-effect" href="" target="_blank">
                                    <strong class="black-text">{{Auth::user()->name}}</strong>
                                </a>
                            @endif
                        </li>
                                
                        <li class="nav-item">
                            <a href="/admin/logout" class="btn btn-info btn-rounded btn-sm waves-effect waves-light" style="background-color: #ff3547!important;color: #fff!important;">
                                Logout
                                <i class="fa fa-sign-in ml-2"></i>
                            </a>
                       </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->
     @include('admin.layouts.sidebar')

    </header>
    <!--Main Navigation-->

    @yield('content')

    <!--Footer-->
    <footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn">  

        <!--Copyright-->
        <div class="footer-copyright py-3">
            © 2019 Copyright:
            <a href="https://twitter.com/Binayak4820" target="_blank">@Binayak4820</a>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->
        <flash message="{{ session('flash')}}"></flash>
    </div>

    <script src="{{ asset('js/app.js') }}" ></script>
    <!-- SCRIPTS -->
            <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                    console.log( editor );
                } )
                .catch( error => {
                    console.error( error );
                } );
        </script>
    <!-- JQuery -->
    <script type="text/javascript" src="{{asset('admin/js/jquery-3.3.1.min.js')}}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('admin/js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('admin/js/mdb.min.js')}}"></script>
    <!-- Initializations -->
<script>
(function($){

  $(".entry").focusout(function(){
    const b = parseFloat($("#discountrate").val());
    const c = parseFloat($("#stri_numbers").val());
    if (isNaN(b) || isNaN(c)) {
        return false;
    }else{
        let q = (b/100) * c;
        var p = c - q;
    }
    $("#norm_numbers").val(p);
});
})(jQuery);
</script>
</body>

</html>