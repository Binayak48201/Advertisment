 <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->
        <header id="mainHeader" class="main-header">

            <!-- Header Header -->
            <div class="header-header bg-white">
                <div class="container">
                    <div class="row row-rl-0 row-tb-20 row-md-cell">
                        <div class="brand col-md-3 t-xs-center t-md-left valign-middle">
                            <a href="/" class="logo">
                                <img src="{{asset('front/images/logo.png')}}" alt="" width="250">
                            </a>
                        </div>
                        <div class="header-search col-md-9">
                            <div class="row row-tb-10 ">
                                <div class="col-sm-8">
                                    <form class="search-form" method="get" action="/latest_deals">
                                        <div class="input-group">
                                            <input type="text" name="s" class="form-control input-lg search-input" placeholder="Enter Keywork Here ..." value="{{isset($s) ? $s : ''}}" required="required">
                                            <div class="input-group-btn">
                                                <div class="input-group">
                                                    <div class="input-group-btn">
                                                        <button type="submit" class="btn btn-lg btn-search btn-block" style="background-image: linear-gradient(180deg,#f44881,#ec454f);">
                                                            <i class="fa fa-search font-16"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-4 t-xs-center t-md-right" style="display: flex;">
                                    
                                    <div class="spinner">
                                      <div class="double-bounce1"></div>
                                      <div class="double-bounce2"></div>
                                    </div>
                                       <div class="spinner">
                                      <div class="double-bounce1"></div>
                                      <div class="double-bounce2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Header -->

            <!-- Header Menu -->
            <div class="header-menu purple">
                <div class="container"> 
                    <nav class="nav-bar">
                        <div class="nav-header">
                            <span class="nav-toggle" data-toggle="#header-navbar">
                                <i></i>
                                <i></i>
                                <i></i>
                            </span>
                        </div>
                        <div id="header-navbar" class="nav-collapse">
                            <ul class="nav-menu">
                                <li class="{{ Request::is('/') ? 'active' : '' }}">
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="coupons_grid.html">Category</a>
                                    <ul style="display: none;">
                                        @foreach (App\Channel::all() as $channel)
                                            <li>
                                                <a href="/{{ $channel->slug }}">{{ $channel->name }}</a>
                                            </li>
                                        @endforeach    
                                    </ul>
                                </li>
                                <li>
                                    <a href="coupons_grid.html">Brands</a>
                                    <ul style="display: none;">
                                        @foreach (App\Brand::all() as $brand)
                                            <li>
                                                <a href="/show_brand/{{ $brand->id }}">{{ $brand->brand_name }}</a>
                                            </li>
                                        @endforeach    
                                    </ul>
                                </li>
                                <li class="{{ Request::is('news') ? 'active' : '' }}">
                                    <a href="/news">News</a>
                                </li>
                                <li class="{{ Request::is('about_us') ? 'active' : '' }}">
                                    <a href="/about_us">About Us</a>
                                </li>
                                 <li class="{{ Request::is('contact') ? 'active' : '' }}">
                                    <a href="/contact">Contact Us</a>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- End Header Menu -->

        </header>
        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->