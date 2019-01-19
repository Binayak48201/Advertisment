<section class="section latest-deals-area ptb-30">

    <header class="panel ptb-15 prl-20 pos-r mb-30">
        <h3 class="section-title font-18">Latest Deals</h3>
        <a href="/latest_deals" class="btn btn-o btn-xs pos-a right-10 pos-tb-center">View All</a>
    </header>

    <div class="row row-masnory row-tb-20">

        @foreach($advs as $adv)
        {{-- {{dd($adv)}} --}}
        <div class="col-sm-6 col-lg-4">
            <div class="deal-single panel">
                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" 
                data-bg-img="/storage/cover_images/{{$adv->adv_img}}">

                @if($adv->discount != NULL)
                <div class="label-discount left-20 top-15">{{$adv->discount}}%</div>
                @endif

                <div class="time-left bottom-15 right-20 font-md-14">

                    @if($adv->count_down != NULL)
                    <span>
                        <i class="ico fa fa-clock-o mr-10"></i>
                        <span class="t-uppercase" data-countdown="{{$adv->count_down}}"></span>
                    </span>
                    @endif

                </div>
                           {{--  <div class="deal-store-logo">
                                <img src="front/images/brands/brand_01.jpg" alt="">
                            </div> --}}
                        </figure>
                        <div class="bg-white pt-20 pl-20 pr-15">

                            <div class="pr-md-10">
                                <span class="rating-reviews">
                                    <i class="glyphicon glyphicon-eye-open"></i>
                                    <span class="rating-count">{{$adv->visits}}</span> Views 
                                </span>
                            </div>

                     {{--    <button type="button" class="btn link-title btn-link productCard">
                     </button> --}}

                     <h5>{{strip_tags($adv->title)}}</h5>


                     <ul class="deal-meta list-inline mb-10 color-mid">

                        <li>
                            <i class="ico fa fa-map-marker mr-10"></i>
                            {{$adv->place}}
                        </li>
                        <li>
                            <i class="ico fa fa-shopping-basket mr-10"></i>
                            120 Bought
                        </li>
                    </ul>

                    <p class="text-muted mb-20">
                       {{substr($adv->body, 0,50)}}

                   </p>

               </div>

               <div class="deal-price pos-r mb-15">

                <h2 class="price ptb-5 text-center">

                    <span class="price-sale">
                     @if($adv->discount != NULL)
                     Rs.{{$adv->str_price}}
                     @endif
                 </span>

                 <span style="color:#2ed87b;">
                    @if($adv->discount != NULL)
                    Rs.{{$adv->price}}
                    @endif
                </span>
            </h2>
        </div>
        <div class="row">
            <div class="col-sm-12">   
                <button class="btn btn-primary btn-lg btn-block btn btn-o" style="color: #fff;" onClick="clickme(this)" 
                data-id="{{$adv->id}}">
                {!!$adv->direct!!}
                <span class="glyphicon glyphicon-new-window" style="position: absolute;
                padding: 13px 0px 0px 69px;"></span>
            </button>
        </div>
    </div>
</div>
</div>
@endforeach
</div>
@if($advs->hasMorePages())
<header class="panel prl-20 pos-r">
    <div class="float-right" >{{ $advs->links() }}</div>
</header>
@endif

</section>