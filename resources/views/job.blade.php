@extends('main')

@section('content')
    <!-- start banner Area -->
    @include('banner')
    <!-- End banner Area -->

    <!-- Start post Area -->
    <section class="post-area section-gap">
        <div class="container">
            <div class="row justify-content-center d-flex">
                <div class="col-lg-8 post-list">

                    @foreach($jobs as $key => $job)
                        <div class="single-post d-flex flex-row">
                            <div class="thumb">
                                <img style="padding-right: 20px" src="/template/img/post.png" alt="">
                            </div>
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        <a href="/job/detail/{{ $job->id }}">
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
                    {{$jobs->links()}}

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
                @include('postArea')
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
