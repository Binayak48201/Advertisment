                    <div class="section deals-header-area ptb-30">
                        <div class="row row-tb-20">
                            <div class="col-xs-12 col-md-4 col-lg-3" style="max-height: 500px;overflow-y: scroll;">
                                <aside>
                                    <ul class="nav-coupon-category panel">
                                        @foreach (App\Channel::all() as $channel)
                                          <li>
                                            <h6 style="font-size: .875rem;color: #22292f;font-weight: 700;">
                                              <a href="/{{ $channel->slug }}">
                                                <i class="fa fa-angle-double-right"></i>
                                                {{ $channel->name }}
                                                </a>
                                            </h6>
                                          </li>
                                        @endforeach
                                    </ul>
                                </aside>
                            </div>
                            
                            <div class="col-xs-12 col-md-8 col-lg-9">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                  <!-- Indicators -->
                                  <ol class="carousel-indicators">
                                    @foreach( $slides as $slide )
                                      <li data-target="#myCarousel" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                                    @endforeach  
                                  </ol>

                                  <!-- Wrapper for slides -->
                                  <div class="carousel-inner">
                                    @foreach( $slides as $slide )
                                      <div class="item {{ $loop->first ? 'active' : '' }}">
                                        <img class="second-slide" src="/storage/slider_images/{{$slide->slider_img}}" alt="Second slide">
                                        <div class="carousel-caption">
                                          <h2>{{$slide->title}}</h2>
                                          <p>{!!$slide->body!!}</p>
                                        </div>
                                      </div>
                                    @endforeach
                                   
                                  </div>
                                  <!-- Left and right controls -->
                                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>
                            </div>
                        </div>
                    </div>