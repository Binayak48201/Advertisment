@extends('layouts.main_body')

@section('content') 

<main id="mainContent" class="main-content">
	<div class="page-container ptb-10">
		<div class="container">
			<section class="section deals-area ptb-30">

				<!-- Page Control -->
				<header class="page-control panel ptb-15 prl-20 pos-r mb-30">

					<!-- List Control View -->
					<ul class="list-control-view list-inline">
						<li>
							<a href="/latest_deals"><i class="fa fa-bars"></i></a>
						</li>
					</ul>
					<div class="right-10 pos-tb-center">
						<ul class="list-control-view list-inline">
							<li>
								<h5>Sort By:</h5>
							</li>
							<li>
								<h6>
									<a href="/latest_deals">Latest Deals</a>
								</h6>
							</li>
							<li>
								<h6>
									<a href="/latest_deals?filter=popular&sort=asc">Price:low to high</a>
								</h6>
							</li>
							<li>
								<h6>
									<a href="/latest_deals?filter=popular&sort=desc">Price:high to low</a>
								</h6>
							</li>
							<li>
								<h6>
									<a href="/latest_deals?filter=view&sort=desc">Most Viewed</a>
								</h6>
							</li>
						</ul>
					</div>
				</header>
				<!-- End Page Control -->
				<div class="row row-masnory row-tb-20">
					@forelse($advertisments as $adv)

					<div class="col-sm-6 col-lg-4">
						<div class="deal-single panel">
							<figure class="deal-thumbnail embed-responsive embed-responsive-16by9" 
							data-bg-img="/storage/cover_images/{{$adv->adv_img}}">
							@if($adv->discount != NULL)
							<div class="label-discount left-20 top-15">
								{{$adv->discount}}%
							</div>
							@endif
							<div class="time-left bottom-15 right-20 font-md-14">
								<span>
									<i class="ico fa fa-clock-o mr-10"></i>
									<span class="t-uppercase" data-countdown="{{$adv->count_down}}"></span>
								</span>
							</div>
							<div class="deal-store-logo">
								<img src="front/images/brands/brand_01.jpg" alt="">
							</div>
						</figure>
						<div class="bg-white pt-20 pl-20 pr-15">

							<div class="pr-md-10">

								<span class="rating-reviews">
									<i class="glyphicon glyphicon-eye-open"></i>
									<span class="rating-count">{{$adv->visits}}</span> Views 
								</span>
							</div>

							{{-- AUTOMATIC LINK --}}
							{!!$adv->title!!}

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
									@if($adv->str_price  != NULL)
									Rs.{{$adv->str_price}}
									@endif
								</span>
								<span style="color:#2ed87b;">
									@if($adv->price !=NULL)
									Rs.{{$adv->price}}
									@endif	
								</span>

							</h2>

						</div>
						<div class="row">
							<div class="col-sm-12">   
								<button class="btn btn-primary btn-lg btn-block btn btn-o" style="color: #fff;" onClick="clickme(this)" 
								data-id="{{$adv->id}}>
								{!!$adv->direct!!}
								<span class="glyphicon glyphicon-new-window" 
								style="position: absolute;
								padding: 13px 0px 0px 69px;"></span>
							</button>
						</div>
					</div>

				</div>
			</div>

			@empty
			<h4 class="text-center">There are no revelent results at this time.</h4>
			@endforelse

		</div>
		
		<!-- Page Pagination -->
		@if($advertisments->links() == NULL)
		<div class="page-pagination text-center mt-30 p-10 panel">

			<!-- Page Pagination -->

			{{$advertisments->links()}}


			<!-- End Page Pagination -->

		</div>
		<!-- End Page Pagination -->
		@endif

	</section>

</div>
</div>


</main>

@endsection
