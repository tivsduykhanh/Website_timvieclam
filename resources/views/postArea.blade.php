<div class="col-lg-4 sidebar">
	<div class="single-slidebar">
			<h4>Jobs by Location</h4>
			<ul class="cat-list">
					@foreach ($tinhthanhs as $tinhthanh)
							<li><a name="timtinhthanh" class="justify-content-between d-flex" href="/search">
											<p value="1">{{ $tinhthanh->tentinhthanh }}</p><span></span>
									</a></li>
					@endforeach
			</ul>
	</div>

	<div class="single-slidebar">
			<h4>Jobs by Category</h4>
			<ul class="cat-list">
					@foreach ($loainganhs as $loainganh)
							<li><a class="justify-content-between d-flex" href="/search">
											<p>{{ $loainganh->tennganh }}</p><span></span>
									</a></li>
					@endforeach
			</ul>
	</div>

	<div class="single-slidebar">
			<h4>Top new job posts</h4>
			<div class="active-relatedjob-carusel">
					@foreach ($jobs as $key => $job)
							<div class="single-rated">
									<img class="img-fluid" src="/template/img/r1.jpg" alt="">
									<a href="/job/detail/{{ $job->id }}">
											<h4>{{ $job->tencongviec }}</h4>
									</a>
									<h6>{{ $job->tencongty }}</h6>
									<p>
											{{ $job->mota }}
									</p>
									<h5>Hình thức làm việc: {{ $job->hinhthuclamviec }}</h5>
									<p class="address"><span class="lnr lnr-map"></span>
											{{ $job->diadiemlamviec }}</p>
									<p class="address"><span class="lnr lnr-database"></span> {{ $job->mucluong }}
									</p>
									{{-- <a href="#" class="btns text-uppercase">Apply job</a> --}}
							</div>
					@endforeach
			</div>
	</div>
</div>