@extends('user.main')

@section('content')
    <!-- start banner Area -->
    @include('user.banner')
    <!-- End banner Area -->

    <!-- Start post Area -->
    <section class="post-area section-gap">
        <div class="container">
            <div class="row justify-content-center d-flex">
                <div class="col-lg-8 post-list">
                    <div class="single-post d-flex flex-row">
                        <div class="thumb">
                            <img style="padding-right: 20px" src="/template/img/post.png" alt="">
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
                                    <a href="#">
                                        <h4>{{ $detailcv->tenhoso }}</h4>
                                    </a>
                                    <h6>{{ $detailcv->gioithieu }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="single-post job-experience">
                            <h4 class="single-title">Thông tin cá nhân</h4>
                            <ul>
                                <li>
                                    <img src="/template/img/pages/list.jpg" alt=""> 
                                    <span>Số điện thoại: {{ $detailcv->sdt }}</span>
                                </li>
                                <li>
                                    <img src="/template/img/pages/list.jpg" alt="">
                                    <span>Email: {{ $detailcv->email }}</span>
                                </li>
                                <li>
                                    <img src="/template/img/pages/list.jpg" alt="">
                                    <span>Ngày sinh: {{ $detailcv->ngaysinh }}</span>
                                </li>
                                <li>
                                    <img src="/template/img/pages/list.jpg" alt="">
                                    <span>Địa chỉ: {{ $detailcv->diachi }}</span>
                                </li>
                            </ul>
                        </div>
                    <div class="single-post job-details">
                        <h4 class="single-title">Kỹ năng</h4>
                        <p>
                            {{ $detailcv->kynang }}
                        </p>
                    </div>
                    <div class="single-post job-details">
                        <h4 class="single-title">Học vấn</h4>
                        <p>
                            {{ $detailcv->hocvan }}
                        </p>
                    </div>
                    <div class="single-post job-details">
                        <h4 class="single-title">Kinh nghiệm</h4>
                        <p>
                            {{ $detailcv->kinhnghiem }}
                        </p>
                    </div>
                    <div class="single-post job-details">
                        <h4 class="single-title">Hoạt động xã hội</h4>
                        <p>
                                {{ $detailcv->hoatdong }}
                        </p>
                    </div>
                    {{-- <a href="/user/hoso" class="genric-btn primary radius e-large">Trở về</a> --}}

                </div>
                
            </div>
        </div>
    </section>
    <!-- End post Area -->
@endsection
