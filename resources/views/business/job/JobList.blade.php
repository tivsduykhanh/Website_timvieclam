@extends('business.main')

@section('content')


<!-- start banner Area -->
			@include('business.banner')
			<!-- End banner Area -->	
			
			<!-- Start post Area -->
			<section class="post-area section-gap">
				<div class="container">
					<div class="row justify-content-center d-flex">
                        <!--Start of JobList-->
						<div class="col-lg-8 post-list">
							<div style="margin-bottom: 30px">
								<a  class="btn btn-primary" href="/business/job/add">
									<!--Don't edit this part if not necessary-->
									<svg width="16" height="16" fill="currentColor" class="bi bi-clipboard-plus" viewBox="0 0 16 16">
										<path fill-rule="evenodd" d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
										<path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
										<path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
									</svg>
									<!--Don't edit this part if not necessary-->
									<i>Thêm bài đăng</i>
								</a>
							</div>
							@foreach($listjob as $key => $job)
								<div class="single-post d-flex flex-row">
									<div class="thumb">
										<img src="img/post.png" alt="">
										<ul class="tags">
											<li>
												@foreach($listnganh as $key => $nganh)
													@if($job->loainganh_id == $nganh->id)
														<a href="#">{{$nganh->tennganh}}</a>
													@endif
												@endforeach
											</li>
										</ul>
									</div>
									<div class="details">
										<!-- <div class="serial">{{ $key+1 }}</div> -->
										<div class="title d-flex flex-row justify-content-between">
											<div class="titles">
												<a href="single.html"><h4>{{ $job->tencongviec }}</h4></a>
												<h6>{{ $job->mucluong}}</h6>					
											</div>
										</div>
										<div class="jobdetail">{{ $job->mota }}</div>
										<div class="percentage">
											<a href="/business/job/{{ $job->id }}/detail" class="genric-btn info radius medium">Chi tiết bài đăng</a>
											<a href="/business/job/{{ $job->id }}/edit" class="genric-btn success radius medium">Sửa bài đăng</a>
											<a href="/business/job/{{ $job->id }}/delete" style="margin-left: 10px" class="genric-btn danger radius medium">Xoá bài đăng</a>
										</div>
									</div>
								</div>
							@endforeach
							
							


						</div>
                        <!--End of JobList-->

						<!--Right side-->
						
					</div>
				</div>	
			</section>
			<!-- End post Area -->

			<!-- Start callto-action Area -->
			{{-- <section class="callto-action-area section-gap">
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
			</section> --}}
			<!-- End calto-action Area -->		
    
            @endsection