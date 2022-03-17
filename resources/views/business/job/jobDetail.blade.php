@extends('business.main')

@section('content')

<!-- start banner Area -->
@include('business.banner')
<!-- End banner Area -->
<!-- Start post Area -->
<section class="post-area section-gap">
	<div class="container">
		<div class="row justify-content-center d-flex">
			<div class="col-lg-8 post-list">
				<div class="single-post d-flex flex-row">
					<div class="thumb">
						<img src="img/post.png" alt="">
						{{-- <ul class="tags">
							<li>
								<a href="#">Art</a>
							</li>
							<li>
								<a href="#">Media</a>
							</li>
							<li>
								<a href="#">Design</a>					
							</li>
						</ul> --}}
					</div>
					<div class="details">
						<div class="title d-flex flex-row justify-content-between">
							<div class="titles">
								<a><h4>{{$jobdetail->tencongviec}}</h4></a>
								<h6>{{$jobdetail->tencongty}}</h6>					
							</div>
							{{-- <ul class="btns">
								<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
								<li><a href="#">Apply</a></li>
							</ul> --}}
						</div>
						<h5>Kinh nghiệm: {{ $jobdetail->kinhnghiem }}</h5>
						<h5>Hình thức làm việc: {{$jobdetail->hinhthuclamviec}}</h5>
						<p class="address"><span class="lnr lnr-map"></span> {{$jobdetail->diadiemlamviec}}</p>
						<p class="address"><span class="lnr lnr-database"></span> {{$jobdetail->mucluong}}</p>
					</div>
				</div>	
				<div class="single-post job-experience">
					<h4 class="single-title">Thông tin tuyển dụng</h4>
					<ul>
							<li>
									<img src="img/pages/list.jpg" alt="">
									<span>Yêu cầu bằng cấp: {{ $jobdetail->yeucaubangcap }}</span>
							</li>
							<li>
									<img src="img/pages/list.jpg" alt="">
									<span>Chức vụ: {{ $jobdetail->chucvu }}</span>
							</li>
							<li>
									<img src="img/pages/list.jpg" alt="">
									<span>Số lượng tuyển: {{ $jobdetail->soluongtuyen }}</span>
							</li>
					</ul>
			</div>
			<div class="single-post job-details">
					<h4 class="single-title">Mô tả công việc</h4>
					<p>
							{{ $jobdetail->mota }}
					</p>
			</div>
			<div class="single-post job-details">
					<h4 class="single-title">Yêu cầu công việc</h4>
					<p>
							{{ $jobdetail->yeucau }}
					</p>
			</div>
			<div class="single-post job-details">
					<h4 class="single-title">Quyền lợi</h4>
					<p>
							{{ $jobdetail->quyenloi }}
					</p>
			</div>
			<div class="single-post job-experience">
					<h4 class="single-title">Chi tiết ứng tuyển</h4>
					<ul>
							<li>
									<img src="img/pages/list.jpg" alt="">
									<span>Cách thức ứng tuyển: {{ $jobdetail->cachungtuyen }}</span>
							</li>
							<ul class="btns">
									<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
									<li><a href="#">Apply</a></li>
							</ul>
							<li>
									<span>Hạn nộp hồ sơ: {{ $jobdetail->hannophoso }}</span>
							</li>
							<li>
								<span>Ngày đăng bài: {{ $jobdetail->created_at }}</span>
						</li>
					</ul>
			</div>													
			</div>
			{{-- <div class="col-lg-4 sidebar">
				<div class="single-slidebar">
					<h4>Jobs by Location</h4>
					<ul class="cat-list">
						<li><a class="justify-content-between d-flex" href="category.html"><p>New York</p><span>37</span></a></li>
						<li><a class="justify-content-between d-flex" href="category.html"><p>Park Montana</p><span>57</span></a></li>
						<li><a class="justify-content-between d-flex" href="category.html"><p>Atlanta</p><span>33</span></a></li>
						<li><a class="justify-content-between d-flex" href="category.html"><p>Arizona</p><span>36</span></a></li>
						<li><a class="justify-content-between d-flex" href="category.html"><p>Florida</p><span>47</span></a></li>
						<li><a class="justify-content-between d-flex" href="category.html"><p>Rocky Beach</p><span>27</span></a></li>
						<li><a class="justify-content-between d-flex" href="category.html"><p>Chicago</p><span>17</span></a></li>
					</ul>
				</div>

				<div class="single-slidebar">
					<h4>Top rated job posts</h4>
					<div class="active-relatedjob-carusel">
						<div class="single-rated">
							<img class="img-fluid" src="img/r1.jpg" alt="">
							<a href="single.html"><h4>Creative Art Designer</h4></a>
							<h6>Premium Labels Limited</h6>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
							</p>
							<h5>Job Nature: Full time</h5>
							<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
							<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
							<a href="#" class="btns text-uppercase">Apply job</a>
						</div>
						<div class="single-rated">
							<img class="img-fluid" src="img/r1.jpg" alt="">
							<a href="single.html"><h4>Creative Art Designer</h4></a>
							<h6>Premium Labels Limited</h6>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
							</p>
							<h5>Job Nature: Full time</h5>
							<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
							<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
							<a href="#" class="btns text-uppercase">Apply job</a>
						</div>
						<div class="single-rated">
							<img class="img-fluid" src="img/r1.jpg" alt="">
							<a href="single.html"><h4>Creative Art Designer</h4></a>
							<h6>Premium Labels Limited</h6>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
							</p>
							<h5>Job Nature: Full time</h5>
							<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
							<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
							<a href="#" class="btns text-uppercase">Apply job</a>
						</div>																		
					</div>
				</div>							

				<div class="single-slidebar">
					<h4>Jobs by Category</h4>
					<ul class="cat-list">
						<li><a class="justify-content-between d-flex" href="category.html"><p>Technology</p><span>37</span></a></li>
						<li><a class="justify-content-between d-flex" href="category.html"><p>Media & News</p><span>57</span></a></li>
						<li><a class="justify-content-between d-flex" href="category.html"><p>Goverment</p><span>33</span></a></li>
						<li><a class="justify-content-between d-flex" href="category.html"><p>Medical</p><span>36</span></a></li>
						<li><a class="justify-content-between d-flex" href="category.html"><p>Restaurants</p><span>47</span></a></li>
						<li><a class="justify-content-between d-flex" href="category.html"><p>Developer</p><span>27</span></a></li>
						<li><a class="justify-content-between d-flex" href="category.html"><p>Accounting</p><span>17</span></a></li>
					</ul>
				</div>

				<div class="single-slidebar">
					<h4>Carrer Advice Blog</h4>
					<div class="blog-list">
						<div class="single-blog " style="background:#000 url(img/blog1.jpg);">
							<a href="single.html"><h4>Home Audio Recording <br>
							For Everyone</h4></a>
							<div class="meta justify-content-between d-flex">
								<p>
									02 Hours ago
								</p>
								<p>
									<span class="lnr lnr-heart"></span>
									06
										<span class="lnr lnr-bubble"></span>
									02
								</p>
							</div>
						</div>
						<div class="single-blog " style="background:#000 url(img/blog2.jpg);">
							<a href="single.html"><h4>Home Audio Recording <br>
							For Everyone</h4></a>
							<div class="meta justify-content-between d-flex">
								<p>
									02 Hours ago
								</p>
								<p>
									<span class="lnr lnr-heart"></span>
									06
										<span class="lnr lnr-bubble"></span>
									02
								</p>
							</div>
						</div>
						<div class="single-blog " style="background:#000 url(img/blog1.jpg);">
							<a href="single.html"><h4>Home Audio Recording <br>
							For Everyone</h4></a>
							<div class="meta justify-content-between d-flex">
								<p>
									02 Hours ago
								</p>
								<p>
									<span class="lnr lnr-heart"></span>
									06
										<span class="lnr lnr-bubble"></span>
									02
								</p>
							</div>
						</div>																		
					</div>
				</div>							

			</div> --}}
		</div>
	</div>	
</section>
			<!-- End post Area -->

@endsection