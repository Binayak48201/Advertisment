                    <div class="section deals-header-area ptb-30">
                      <div class="row row-tb-20">
                        <div class="col-xs-12 col-md-4 col-lg-3 media1" style="max-height: 500px;overflow-y: scroll;">
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
                          <div class="header-deals-slider owl-slider" data-loop="true" data-autoplay="true" data-autoplay-timeout="2000" data-smart-speed="1000" data-nav-speed="false" data-nav="true" data-xxs-items="1" data-xxs-nav="true" data-xs-items="1" data-xs-nav="true" data-sm-items="1" data-sm-nav="true" data-md-items="1" data-md-nav="true" data-lg-items="1" data-lg-nav="true">

                           @foreach( $slides as $slide )
                           <div class="deal-single panel item">
                            <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="/storage/slider_images/{{$slide->slider_img}}">
                              {{-- <div class="label-discount top-10 right-10">-30%</div> --}}

                              <div class="deal-about p-20 pos-a bottom-0 left-0">

                                <h3 class="deal-title mb-10 ">
                                  <a href="#" class="color-light color-h-lighter">{{$slide->title}} </a>
                                </h3>
                              </div>
                            </figure>
                          </div>
                          @endforeach    

                        </div>
                      </div>
                    </div>
                  </div>
