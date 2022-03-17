@extends('user.main')

@section('content')
	<!-- start banner Area -->
	<section class="banner-area relative" id="home">	
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row search-page-top d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-12">
					<h1 class="text-white">
						Search Results				
					</h1>
					<p class="text-white link-nav">
						<a href="/user">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="search.html"> Job details page</a>
					</p>	
					@include('user.timkiem.search')
					<p class="text-white">{{$jobs->count()}} Results found for <span>"{{$searchs}}"</span></p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->	
	
	<!-- Start post Area -->
	<section class="post-area section-gap">
		<div class="container">
			<div class="row justify-content-center d-flex">
				<div class="col-lg-8 post-list">
					@if ($jobs->count()>0)
							
					
						@foreach ($jobs as $job)
							<div class="single-post d-flex flex-row">
								<div class="thumb">
									<img style="padding-right: 20px" src="/template/img/post.png" alt="">
								</div>
								<div class="details">
									<div class="title d-flex flex-row justify-content-between">
										<div class="titles">
											<a href="/user/job/detail/{{ $job->id }}"><h4>{{$job->tencongviec}}</h4></a>
											<h6>{{$job->tencongty}}</h6>
										</div>
										{{-- <ul class="btns">
											<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
											<li><a href="#">Apply</a></li>
										</ul> --}}
									</div>
									<h5>Kinh nghiem: {{$job->kinhnghiem}}</h5>
									<h5>Hình thức làm việc: {{$job->hinhthuclamviec}}</h5>
									<p class="address"><span class="lnr lnr-map"></span> {{$job->diadiemlamviec}}</p>
									<p class="address"><span class="lnr lnr-database"></span> {{$job->mucluong}}</p>
								</div>
							</div>

						@endforeach
						{{$jobs->links()}}
					@else
						<h2>Không tìm thấy công việc</h2> 	
					@endif
				</div>
				@include('user.postArea')
			</div>
		</div>	
	</section>
	<!-- End post Area -->

	<!-- Start callto-action Area -->
	<section class="callto-action-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content col-lg-9">
					<div class="title text-center">
						<h1 class="mb-10 text-white">Join us today without any hesitation</h1>
						<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
						<a class="primary-btn" href="#">I am a Candidate</a>
						<a class="primary-btn" href="#">Request Free Demo</a>
					</div>
				</div>
			</div>	
		</div>	
	</section>
	<!-- End calto-action Area -->	
@endsection