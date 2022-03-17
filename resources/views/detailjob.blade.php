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
                                        <h4>{{ $detailjob->tencongviec }}</h4>
                                    </a>
                                    <h6>{{ $detailjob->tencongty }}</h6>
                                </div>
                                {{-- <ul class="btns">
                                    <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                    <li><a href="#">Apply</a></li>
                                </ul> --}}
                            </div>
                            <h5>Kinh nghiệm: {{ $detailjob->kinhnghiem }}</h5>
                            <h5>Hình thức làm việc: {{ $detailjob->hinhthuclamviec }}</h5>
                            <p class="address"><span class="lnr lnr-map"></span> {{ $detailjob->diadiemlamviec }}
                            </p>
                            <p class="address"><span class="lnr lnr-database"></span> {{ $detailjob->mucluong }} </p>
                        </div>
                    </div>
                        <div class="single-post job-experience">
                            <h4 class="single-title">Thông tin tuyển dụng</h4>
                            <ul>
                                <li>
                                    <img src="img/pages/list.jpg" alt="">
                                    <span>Yêu cầu bằng cấp: {{ $detailjob->yeucaubangcap }}</span>
                                </li>
                                <li>
                                    <img src="img/pages/list.jpg" alt="">
                                    <span>Chức vụ: {{ $detailjob->chucvu }}</span>
                                </li>
                                <li>
                                    <img src="img/pages/list.jpg" alt="">
                                    <span>Số lượng tuyển: {{ $detailjob->soluongtuyen }}</span>
                                </li>
                            </ul>
                        </div>
                    <div class="single-post job-details">
                        <h4 class="single-title">Mô tả công việc</h4>
                        <p>
                            {{ $detailjob->mota }}
                        </p>
                    </div>
                    <div class="single-post job-details">
                        <h4 class="single-title">Yêu cầu công việc</h4>
                        <p>
                            {{ $detailjob->yeucau }}
                        </p>
                    </div>
                    <div class="single-post job-details">
                        <h4 class="single-title">Quyền lợi</h4>
                        <p>
                            {{ $detailjob->quyenloi }}
                        </p>
                    </div>
                    <div class="single-post job-experience">
                        <h4 class="single-title">Chi tiết ứng tuyển</h4>
                        <ul>
                            <li>
                                <img src="img/pages/list.jpg" alt="">
                                <span>Cách thức ứng tuyển: {{ $detailjob->cachungtuyen }}</span>
                            </li>
                            <ul class="btns">
                                <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                <li><a href="#">Apply</a></li>
                            </ul>
                            <li>
                                <img src="img/pages/list.jpg" alt="">
                                <span>Hạn nộp hồ sơ: {{ $detailjob->hannophoso }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End post Area -->
@endsection
