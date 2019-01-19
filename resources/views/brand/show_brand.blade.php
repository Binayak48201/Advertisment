@extends('layouts.main_body')

@section('content') 
    <main id="mainContent" class="main-content">
            <!-- Page Container -->
            <div class="page-container ptb-60">
                <div class="container">
                    <div class="row row-rl-10 row-tb-20">
                        <div class="page-sidebar col-sm-4 col-md-3">
                            <aside class="store-header-area panel t-center">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <figure class="pt-10 pl-10">
                                            <img src="/storage/brand_images/{{$brand->brand_img}}" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="store-about ptb-30 prl-10">
                                            <h3 class="mb-10">{{$brand->brand_name}}</h3>
                                            <p class="mb-15">{{strip_tags($brand->body)}}</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="store-splitter-left">
                                            <header class="left-splitter-header prl-10 ptb-20 bg-lighter">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <h2>282</h2>
                                                        <p>Deals</p>
                                                    </div>
                                                </div>
                                            </header>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="page-content col-sm-8 col-md-9">

                            <!-- Store Tabs Area -->
                            <div class="section store-tabs-area">
                                <div class="tabs tabs-v1">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs panel" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#deals" aria-controls="deals" role="tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-comment mr-10"></i>Deals</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane ptb-20 active" id="deals">
                                            <section class="section deals-area">
                                                <div class="row row-masnory row-tb-20">
                                                        @foreach($brands as $brand)
                                                            @include('brand.filtered_brand')
                                                        @endforeach
                                                </div>
                                                @if($brands->hasMorePages())
                                                <div class="page-pagination text-center mt-30 p-10 panel">

                                                   

                                                    {{$brands->links()}}


                                                   

                                                </div>

                                                @endif
                                            </section>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection