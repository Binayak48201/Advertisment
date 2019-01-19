@extends('layouts.main_body')

@section('content') 
<main id="mainContent" class="main-content">
    <!-- Page Container -->
    <div class="page-container ptb-60">
        <div class="container">
            <div class="row row-rl-10 row-tb-20">
                <div class="page-content">

                    <!-- Blog Area -->
                    <div class="blog-area blog-single-post">
                        <div class="row row-tb-20">
                            <!-- Blog Post -->
                            <div class="blog-post col-xs-12">
                                <article class="entry panel">
                                    <header class="entry-header">
                                        <h1 class="entry-title mb-10 mt-10 mb-md-15 flexing"
                                        style="font-weight: 100;
                                        color: #000;">
                                        {{$new->title }}                                   
                                    </h1>
                                    <div class="entry-meta mb-10">
                                        <ul class="tag-info list-inline flexing">
                                            <li><i class="icon fa fa-user"></i> By : {{$new->aurthors}}</li><br>
                                            <li><i class="icon fa fa-star"></i> {{$new->minimum}}&nbsp; minute read 
                                            </li>
                                        </ul>
                                    </div>
                                </header>
                                <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="/storage/news_images/{{$new->news_img}}">
                                    <div class="entry-date" style="width: 165px;">
                                        <h4 style="background: #9575cd;">{{$new->created_at->diffForHumans()}}</h4>
                                    </div>
                                </figure>
                                <div class="entry-wrapper prl-20 prl-md-30 pt-20 pt-md-30 pb-15">
                                    <div class="entry-content postarticles" style="   --x-height-multiplier: 0.375;
                                    --baseline-multiplier: 0.17;
                                    font-family: 'Nunito', sans-serif;
                                    letter-spacing: .01rem;
                                    font-weight: 400;
                                    font-style: normal;
                                    font-size: 21px;
                                    line-height: 1.58;
                                    letter-spacing: -.003em;">
                                    <p class="mb-20" >{!!$new->body!!}</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</main>
@endsection

