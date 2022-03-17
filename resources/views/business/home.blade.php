@extends('business.main')

@section('content')


    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-center">
                <div class="banner-content col-lg-12">
                    <h1 class="text-white">
                        Tìm kiếm việc làm ngay bây giờ
                    </h1>
                    @include('business.timkiem.search')
                    <p class="text-white"> <span>Search by tags:</span> Tecnology, Business, Consulting, IT Company,
                        Design, Development</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start features Area -->
    {{-- <section class="features-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <h4>Searching</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <h4>Applying</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <h4>Security</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <h4>Notifications</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End features Area -->

    <!-- Start popular-post Area -->
    <section class="popular-post-area pt-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="active-popular-post-carusel">
                    @foreach($jobs as $key => $job)
                    <div class="single-popular-post d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="/template/img/p1.png" alt="">
                        </div>
                        <div class="details">
                            <a href="/business/job/detail/{{$job->id}}">
                                <h4>{{ $job->tencongviec }}</h4>
                            </a>
                            <h6>{{ $job->tencongty }}</h6>
                            <p>
                                {{ $job->mota }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End popular-post Area -->

    <!-- Start feature-cat Area -->
    {{-- <section class="feature-cat-area pt-100" id="category">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">Featured Job Categories</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single-fcat">
                        <a href="category.html">
                            <img src="/template/img/o1.png" alt="">
                        </a>
                        <p>Accounting</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single-fcat">
                        <a href="category.html">
                            <img src="/template/img/o2.png" alt="">
                        </a>
                        <p>Development</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single-fcat">
                        <a href="category.html">
                            <img src="/template/img/o3.png" alt="">
                        </a>
                        <p>Technology</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single-fcat">
                        <a href="category.html">
                            <img src="/template/img/o4.png" alt="">
                        </a>
                        <p>Media & News</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single-fcat">
                        <a href="category.html">
                            <img src="/template/img/o5.png" alt="">
                        </a>
                        <p>Medical</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single-fcat">
                        <a href="category.html">
                            <img src="/template/img/o6.png" alt="">
                        </a>
                        <p>Goverment</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End feature-cat Area -->

    <!-- Start post Area -->
    <section class="post-area section-gap">
        <div class="container">
            <div class="row justify-content-center d-flex">
                <div class="col-lg-8 post-list">
                    {{-- <ul class="cat-list">
                        <li><a href="#">Recent</a></li>
                        <li><a href="#">Full Time</a></li>
                        <li><a href="#">Intern</a></li>
                        <li><a href="#">part Time</a></li>
                    </ul> --}}
                    @foreach($jobs as $key => $job)
                        <div class="single-post d-flex flex-row">
                            <div class="thumb">
                                <img style="padding-right: 20px" src="/template/img/post.png" alt="">
                            </div>
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        <a href="/business/job/detail/{{ $job->id }}">
                                            <h4>{{ $job->tencongviec }}</h4>
                                        </a>
                                        <h6>{{ $job->tencongty }}</h6>
                                    </div>
                                    {{-- <ul class="btns">
                                        <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                        <li><a href="#">Apply</a></li>
                                    </ul> --}}
                                </div>
                                <h5>Yêu cầu kinh nghiệm: {{ $job->kinhnghiem }}</h5>
                                <h5>Hình thức làm việc: {{ $job->hinhthuclamviec }}</h5>
                                <p class="address"><span class="lnr lnr-map"></span> {{ $job->diadiemlamviec }}
                                </p>
                                <p class="address"><span class="lnr lnr-database"></span> {{ $job->mucluong }}</p>
                            </div>
                        </div>
                    @endforeach

                    <a class="text-uppercase loadmore-btn mx-auto d-block" href="/business/listjob">Load More job Posts</a>

                </div>
                @include('business.postArea')
            </div>
        </div>
    </section>
    <!-- End post Area -->


    
@endsection
