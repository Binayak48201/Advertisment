@extends('layouts.main_body')

    @section('content') 
<main id="mainContent" class="main-content">
            <!-- Page Container -->
            <div class="page-container ptb-60">
                <div class="container">
                    <section class="stores-area stores-area-v1">
                        <h3 class="mb-40 t-uppercase">View deals by stores</h3>
                        <div class="row row-rl-15 row-tb-15 t-center">
                            @foreach($brands as $brand)
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                    <a href="store_single_01.html" class="panel is-block">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <div class="store-logo">
                                                 <img src="/storage/brand_images/{{$brand->brand_img}}" alt="">
                                            </div>
                                        </div>
                                        <a href="/show_brand/{{$brand->id}}">
                                            <h6 class="store-name ptb-10">
                                                <a href="/show_brand/{{$brand->id}}">
                                                    {{$brand->brand_name}}
                                                </a>
                                            </h6>
                                        </a>
                                    </a>
                                </div>
                             @endforeach   
                        </div>
                        @if($brands->links() != '')
                        <div class="page-pagination text-center mt-30 p-10 panel">
                            {{$brands->links()}}
                        </div>
                        @endif
                    </section>
                </div>
            </div>
            <!-- End Page Container -->


        </main>
            @endsection