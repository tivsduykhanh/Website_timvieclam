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
                    @foreach($list_apply as $key => $apply)
                        @foreach($listjob as $key => $job)
                            @foreach($list_hoso as $key => $hoso)
                                @if($job->nhatuyendung_id == $user)
                                    @if($hoso->id == $apply->hoso_id && $job->id == $apply->job_id)
                                        <div class="single-post d-flex flex-row">
                                            <div class="thumb">
                                                <img style="padding-right: 20px" src="/template/img/post.png" alt="">
                                            </div>
                                            <div class="details">
                                                <div class="title d-flex flex-row justify-content-between">
                                                    <div class="titles">
                                                        <a href="/user/hoso/detailcv/{{ $hoso->id }}">
                                                            <h4>{{ $hoso->hoten }}</h4>
                                                        </a>
                                                        <h6>{{ $job->tencongviec }}</h6>
                                                    </div>
                                                </div>
                                                <h5>Số điện thoại: {{ $hoso->sdt }}</h5>
                                                <h5>Email: {{ $hoso->email }}</h5>
                                                <a href="/business/applied/delete/{{$apply->id}}" class="genric-btn danger radius">Loại bỏ CV</a>
                                                {{-- <p class="address"><span class="lnr lnr-map"></span> {{ $job->diadiemlamviec }}
                                                </p>
                                                <p class="address"><span class="lnr lnr-database"></span> {{ $job->mucluong }}</p> --}}
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            @endforeach    
                        @endforeach
                    @endforeach
                    {{-- <div class="single-post d-flex flex-row">
                        <div class="thumb">
                            <img src="/template/img/post.png" alt="">
                            <ul class="tags">
                                <li>
                                    <a href="#">Art</a>
                                </li>
                                <li>
                                    <a href="#">Media</a>
                                </li>
                                <li>
                                    <a href="#">Design</a>
                                </li>
                            </ul>
                        </div>
                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="single.html">
                                        <h4>Creative Art Designer</h4>
                                    </a>
                                    <h6>Premium Labels Limited</h6>
                                </div>
                                <ul class="btns">
                                    <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                    <li><a href="#">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt
                                ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka
                            </p>
                            <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                        </div>
                    </div> --}}

                </div>
                {{-- <div class="col-lg-4 sidebar">

                    <div class="single-slidebar">
                        <h4>Jobs by Location</h4>
                        <ul class="cat-list">
                            <li><a class="justify-content-between d-flex" href="#">
                                    <p>New York</p><span>37</span>
                                </a></li>
                            <li><a class="justify-content-between d-flex" href="#">
                                    <p>Park Montana</p><span>57</span>
                                </a></li>
                            <li><a class="justify-content-between d-flex" href="#">
                                    <p>Atlanta</p><span>33</span>
                                </a></li>
                            <li><a class="justify-content-between d-flex" href="#">
                                    <p>Arizona</p><span>36</span>
                                </a></li>
                            <li><a class="justify-content-between d-flex" href="#">
                                    <p>Florida</p><span>47</span>
                                </a></li>
                            <li><a class="justify-content-between d-flex" href="#">
                                    <p>Rocky Beach</p><span>27</span>
                                </a></li>
                            <li><a class="justify-content-between d-flex" href="#">
                                    <p>Chicago</p><span>17</span>
                                </a></li>
                        </ul>
                    </div>

                    <div class="single-slidebar">
                        <h4>Top rated job posts</h4>
                        <div class="active-relatedjob-carusel">
                            <div class="single-rated">
                                <img class="img-fluid" src="img/r1.jpg" alt="">
                                <h4>Creative Art Designer</h4>
                                <h6>Premium Labels Limited</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc
                                    ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Full time</h5>
                                <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi
                                    Dhaka</p>
                                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                                <a href="#" class="btns text-uppercase">Apply job</a>
                            </div>
                            <div class="single-rated">
                                <img class="img-fluid" src="img/r1.jpg" alt="">
                                <h4>Creative Art Designer</h4>
                                <h6>Premium Labels Limited</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc
                                    ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Full time</h5>
                                <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi
                                    Dhaka</p>
                                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                                <a href="#" class="btns text-uppercase">Apply job</a>
                            </div>
                            <div class="single-rated">
                                <img class="img-fluid" src="img/r1.jpg" alt="">
                                <h4>Creative Art Designer</h4>
                                <h6>Premium Labels Limited</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc
                                    ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Full time</h5>
                                <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi
                                    Dhaka</p>
                                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                                <a href="#" class="btns text-uppercase">Apply job</a>
                            </div>
                        </div>
                    </div>

                    <div class="single-slidebar">
                        <h4>Jobs by Category</h4>
                        <ul class="cat-list">
                            <li><a class="justify-content-between d-flex" href="#">
                                    <p>Technology</p><span>37</span>
                                </a></li>
                            <li><a class="justify-content-between d-flex" href="#">
                                    <p>Media & News</p><span>57</span>
                                </a></li>
                            <li><a class="justify-content-between d-flex" href="#">
                                    <p>Goverment</p><span>33</span>
                                </a></li>
                            <li><a class="justify-content-between d-flex" href="#">
                                    <p>Medical</p><span>36</span>
                                </a></li>
                            <li><a class="justify-content-between d-flex" href="#">
                                    <p>Restaurants</p><span>47</span>
                                </a></li>
                            <li><a class="justify-content-between d-flex" href="#">
                                    <p>Developer</p><span>27</span>
                                </a></li>
                            <li><a class="justify-content-between d-flex" href="#">
                                    <p>Accounting</p><span>17</span>
                                </a></li>
                        </ul>
                    </div>

                    <div class="single-slidebar">
                        <h4>Carrer Advice Blog</h4>
                        <div class="blog-list">
                            <div class="single-blog " style="background:#000 url(img/blog1.jpg);">
                                <a href="#">
                                    <h4>Home Audio Recording <br>
                                        For Everyone</h4>
                                </a>
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
                                <a href="#">
                                    <h4>Home Audio Recording <br>
                                        For Everyone</h4>
                                </a>
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
                                <a href="#">
                                    <h4>Home Audio Recording <br>
                                        For Everyone</h4>
                                </a>
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

    <!-- Start callto-action Area -->
    {{-- <section class="callto-action-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-9">
                    <div class="title text-center">
                        <h1 class="mb-10 text-white">Join us today without any hesitation</h1>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation.</p>
                        <a class="primary-btn" href="#">I am a Candidate</a>
                        <a class="primary-btn" href="#">Request Free Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End calto-action Area -->
@endsection
