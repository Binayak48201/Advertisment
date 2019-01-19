<div class="col-sm-12 col-lg-6">
    <div class="deal-single panel">
        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" 
            data-bg-img="/storage/cover_images/{{$brand->adv_img}}">
                 @if($brand->discount !=NULL)
                    <div class="label-discount left-20 top-15">
                        {{$brand->discount}}%
                    </div>
                 @endif
                <div class="time-left bottom-15 right-20 font-md-14">
                    <span>
                        <i class="ico fa fa-clock-o mr-10"></i>
                        <span class="t-uppercase" data-countdown="2019/09/01 01:30:00">{{$brand->count_down}}</span>
                    </span>
                </div>
                <div class="deal-store-logo">
                    <img src="assets/images/brands/brand_01.jpg" alt="">
                </div>
        </figure>
        
       <div class="bg-white pt-20 pl-20 pr-15">
            <div class="pr-md-10">

                <span class="rating-reviews">
                    <i class="glyphicon glyphicon-eye-open"></i>
                    <span class="rating-count">{{$brand->visits}}</span> Views 
                </span>
            </div>
        </div>

        <div class="bg-white pt-20 pl-20 pr-15">
            <div class="pr-md-10">
                <h3 class="deal-title mb-10">
                    <a href="deal_single.html">{!!$brand->title!!}</a>
                </h3>
                <ul class="deal-meta list-inline mb-10 color-mid">
                    <li><i class="ico fa fa-map-marker mr-10"></i>{{$brand->place}}</li>
                    <li><i class="ico fa fa-shopping-basket mr-10"></i>120 Bought</li>
                </ul>
                <p class="text-muted mb-20">
                    {{substr($brand->body, 0,50)}}
                </p>
            </div>
            <div class="deal-price pos-r mb-15">

                                        <h2 class="price ptb-5 text-center">
                                            <span class="price-sale">
                                        @if($brand->str_price  != NULL)
                                                Rs.{{$brand->str_price}}
                                            @endif
                                            </span>
                                            <span style="color:#2ed87b;">
                                                @if($brand->price !=NULL)
                                                Rs.{{$brand->price}}
                                        @endif  
                                            </span>

                                        </h2>

                                    </div>
            <div class="row">
            <div class="col-sm-12">   
                <button class="btn btn-primary btn-lg btn-block btn btn-o" style="color: #fff;" onClick="clickme(this)" 
                data-id="{{$brand->id}}">
                {!!$brand->direct!!}
                <span class="glyphicon glyphicon-new-window" style="position: absolute;
                padding: 13px 0px 0px 69px;"></span>
            </button>
        </div>
    </div>
        </div>
    </div>
</div>