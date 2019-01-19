                    <section class="section latest-news-area blog-area blog-grid blog-3-col ptb-30">
                        <header class="panel ptb-15 prl-20 pos-r mb-30">
                            <h3 class="section-title font-18">Latest News</h3>
                            <a href="/news" class="btn btn-o btn-xs pos-a right-10 pos-tb-center">More News</a>
                        </header>

                        <div class="row row-tb-20">
                            @foreach($news as $new)
                            <!-- Blog Post -->
                            <div class="blog-post col-xs-12 col-sm-6 col-md-4">
                                <article class="entry panel">
                                    <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="/storage/news_images/{{$new->news_img}}">
                                        <div class="entry-date" style="width: 120px;">
                                            <h5 style="background: #2ed87b;color: #fff;">
                                                {{$new->created_at->diffForHumans()}}
                                            </h5>
                                        </div>
                                    </figure>
                                    <div class="entry-wrapper pt-20 pb-10 prl-20">
                                        <header class="entry-header">
                                            <h4 class="entry-title mb-10 mb-md-15 font-xs-16 font-sm-18 font-md-16 font-lg-16">
                                                <a href="/news/{{$new->id}}">{{$new->title}}</a>
                                            </h4>
                                            <div class="entry-meta mb-10">
                                                <ul class="tag-info list-inline">
                                                    <li>
                                                        <i class="icon fa fa-user"></i> 
                                                        By :{{$new->aurthors}}
                                                    </li>
                                                    <li>
                                                        <i class="icon fa fa-eye"></i> 
                                                        {{$new->visit}} Viewed
                                                    </li>
                                                    <li>
                                                        <i class="icon fa fa-star"></i> 
                                                        {{$new->minimum}} &nbsp;min read
                                                    </li>
                                                </ul>
                                            </div>
                                        </header>
                                        <div class="entry-content">
                                            <p class="entry-summary">{!!$new->body!!}</p>
                                        </div>
                                        <footer class="entry-footer text-right">
                                            <a href="/news/{{$new->id}}" class="more-link btn btn-link">Continue reading 
                                                <i class="icon fa fa-long-arrow-right"></i>
                                            </a>
                                        </footer>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                            <header class="panel prl-20 pos-r">
                                <div class="float-right" >{{ $news->links() }}</div>
                            </header>
                        </div>
                    </section>