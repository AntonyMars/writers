@extends('layouts.writers')

@section('content')


	<!-- Page top section start -->
	<div class="page-top-area set-bg" data-setbg="img/headers-bg/1.jpg">
		<div class="breadcrumb-area">
			<a href="#">Home</a> / <span>About us</span>
		</div>
	</div>
	<!-- Page top section end -->


	<!-- Intro section start -->
	<section class="intro-section sp-pad spad">
		<div class="container-fluid p-0">
			<div class="row">
				<div class="col-xl-4 intro-text">
					<span class="sp-sub-title">Amazing studio</span>
					<h3 class="sp-title">We are so Creative</h3>
					<p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada feugiat. Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id.</p>
					<a href="#" class="site-btn">Read More</a>
				</div>
				<div class="col-xl-7 offset-xl-1">
					<figure class="intro-img mt-5 mt-xl-0">
						<img src="img/intro.jpg" alt="">
					</figure>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Progress section start -->
	<div class="progress-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-3 col-md-6 cp-item">
					<div class="circle-progress" data-cpid="id-1" data-cpvalue="75" data-cpcolor="#787878" data-cptitle="Inspiration"></div>
				</div>
				<div class="col-xl-3 col-md-6 cp-item">
					<div class="circle-progress" data-cpid="id-2" data-cpvalue="59" data-cpcolor="#787878" data-cptitle="Peace"></div>
				</div>
				<div class="col-xl-3 col-md-6 cp-item">
					<div class="circle-progress" data-cpid="id-3" data-cpvalue="100" data-cpcolor="#787878" data-cptitle="hard work"></div>
				</div>
				<div class="col-xl-3 col-md-6 cp-item">
					<div class="circle-progress" data-cpid="id-4" data-cpvalue="83" data-cpcolor="#787878" data-cptitle="LOve"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Progress section end -->


	<!-- Review section start -->
	<section class="review-section spad sp-pad set-bg" data-setbg="img/review-bg.jpg">
		<div class="container-fluid p-0 review-warp">
			<div class="row">
				<div class="col-xl-4">
					<span class="sp-sub-title">Amazing studio</span>
					<h3 class="sp-title">Clients testimonials</h3>
				</div>
				<div class="col-xl-7 offset-xl-1">
					<div class="review-slider owl-carousel">
						<div class="rs-item">
							<div class="qute">“</div>
							<p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada feugiat. Praesent malesuada congue magna at finibus. In hac habi tasse platea dictumst. Curabitur rhoncus auctor eleifend. Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada feugiat. Praesent malesuada congue magna at finibus. In hac habi tasse platea dictumst. </p>
							<figure class="client-pic">
								<img src="img/client.jpg" alt="#">
							</figure>
							<h4>James Smith, Client</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Review section end -->


	<!-- Work nav section start -->
	<section class="worknav-section sp-pad">
		<div class="container-fluid p-0">
			<div class="row">
				<div class="col-6">
					<div class="worknav wn-prev">
						<a href="#" class="wn-thumb set-bg" data-setbg="img/recent-thumb/1.jpg"></a>
						<div class="wn-info">
							<span>Previous work</span>
							<h3>Wedding Photography</h3>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="worknav wn-next">
						<a href="#" class="wn-thumb set-bg" data-setbg="img/recent-thumb/2.jpg"></a>
						<div class="wn-info">
							<span>Letest work</span>
							<h3>Living by the sea</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Work nav section end -->


@endsection
