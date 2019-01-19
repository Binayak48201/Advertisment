<section class="section latest-coupons-area ptb-30">

    <header class="panel ptb-15 prl-20 pos-r mb-30">
        <h3 class="section-title font-18">Latest Deals</h3>
            <a class="btn btn-o btn-xs pos-a right-10 pos-tb-center">View All</a>
    </header>

    <div class="latest-coupons-slider owl-slider" data-autoplay-hover-pause="true" data-loop="true" data-autoplay="true" data-smart-speed="1000" data-autoplay-timeout="5000" data-margin="30" data-nav-speed="false" data-items="1" data-xxs-items="1" data-xs-items="2" data-sm-items="2" data-md-items="3" data-lg-items="4">

    @foreach($smallslider as $slider)
        <div class="coupon-item">
            <div class="coupon-single panel t-center">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="text-center p-20">
                            <img class="store-logo" src="/storage/smallslider_images/{{$slider->slider_img}}" alt="">
                         </div>
                    <!-- end media -->
                    </div>
                    <!-- end col -->

                    <div class="col-xs-12">
                        <div class="panel-body">
                            <ul class="deal-meta list-inline mb-10">
                                <li class="color-muted">
                                    <h3>{{$slider->title}}</h3>
                                </li>
                            </ul>

                            <h4 class="color-green mb-10 t-uppercase">
                                {{$slider->offprice}}% OFF
                            </h4>

                            <h5 class="deal-title mb-10">
                                <a href="#">{{$slider->body}}</a>
                            </h5>

                            <p class="mb-15 color-muted mb-20 font-12">
                                <i class="lnr lnr-clock mr-10"></i>
                                Expires On {{$slider->count_down}}
                            </p>

                            <div class="row">
                        <div class="col-sm-12">   
                            <button class="btn btn-primary btn-lg btn-block btn btn-o" style="color: #fff;">
                                {!!$slider->visit!!}
                                <span class="glyphicon glyphicon-new-window" style="    position: absolute;
    padding: 13px 0px 0px 69px;"></span>
                            </button>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
</section>
