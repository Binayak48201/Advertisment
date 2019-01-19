@extends('layouts.main_body')

    @section('content') 
		<main id="mainContent" class="main-content">
            <!-- Page Container -->
            <div class="page-container ptb-60">
                <div class="container">
                    <div class="row row-rl-10 row-tb-20">
                        <div class="page-content col-xs-12 col-sm-7 col-md-8">

                            <!-- Blog Area -->
                            <div class="blog-area blog-classic right-sidebar">

                                <div class="row row-tb-20">
								
								@foreach($news as $new)
                                    <!-- Blog Post -->
                                    <div class="blog-post col-xs-12">
                                        <article class="entry panel">
                                            <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="/storage/news_images/{{$new->news_img}}">
                                                <div class="entry-date" style="width: 165px;">
                                                    <h4 style="background: #9575cd;">{{$new->created_at->diffForHumans()}}</h4>
                                                </div>
                                            </figure>
                                            <div class="entry-wrapper prl-20 prl-md-30 pt-20 pt-md-30 pb-15">
                                                <header class="entry-header">
                                                    <h4 class="entry-title mb-10 mb-md-15 t-uppercase">
											<a href="/news/{{$new->id}}">{{$new->title}}</a>
										</h4>
                                                    <div class="entry-meta mb-10">
                                                        <ul class="tag-info list-inline">
                                                            <li><i class="icon fa fa-user"></i> By : {{$new->aurthors}}</li>
                                                            <li><i class="icon fa fa-eye"></i> {{$new->visit}} Viewed</li>
                                                            <li><i class="icon fa fa-star"></i> {{$new->minimum}} &nbsp;min read</li>
                                                        </ul>
                                                    </div>
                                                </header>
                                                <div class="entry-content">
                                                    <p class="entry-summary">{!!substr($new->body,0,350)!!}</p>
                                                </div>
                                                <footer class="entry-footer text-right">
                                                    <a href="/news/{{$new->id}}" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                                </footer>
                                            </div>
                                        </article>
                                    </div>
                                   @endforeach

                                </div>
                                @if($news->links() == NULL)
                                <!-- Blog Pagination -->
                                    <div class="page-pagination text-center mt-30 p-10 panel">
                   						{{$news->links()}}
                                    </div>
                                <!-- End Blog Pagination -->
                                @endif
                            </div>
                            <!-- End Blog Area -->

                        </div>

                        <div class="page-sidebar col-md-4 col-sm-5 col-xs-12">
                            <!-- Blog Sidebar -->
                            <aside class="sidebar blog-sidebar">
                                <div class="row row-tb-10">
                                    <div class="col-xs-12">
										<div class="widget archive-widget panel pt-20 prl-20">
                                            <h3 class="widget-title h-title">Archives</h3>
                                            <div class="widget-content ptb-20">
                                                <ul>
                                                	@foreach($archives as $stats)
                                                    	<li>
                                                            <a href="/news?month={{$stats['month']}}&year={{$stats['year'] }}">
                          										{{$stats['month'] .' ' . $stats['year']}}
                        									</a>
                                                   	 	</li>
                                  					@endforeach   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
  								</div>
							</aside>
						</div>

					</div>
				</div>
			</div>
		</main>
	@endsection

                  