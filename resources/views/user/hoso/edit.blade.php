@extends('user.main')

{{-- @section('content') --}}
<!-- start banner Area -->
@include('user.banner')
<!-- End banner Area -->



<!-- Start Align Area -->
<div class="whole-wrap">
    <div class="container">

        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <h2 class="mb-30">Sửa CV</h2>
                    <?php //Hiển thị thông báo thành công
                    ?>
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <strong>{{ Session::get('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                    @endif

                    <?php //Hiển thị thông báo lỗi
                    ?>
                    @if (Session::has('error'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <strong>{{ Session::get('error') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                    @endif

                    <form action="/user/hoso/update" method="POST">
                        @csrf
                        <input type="hidden" id="id" name="id" value="{!! $getHoSoById[0]->id !!}" />
                        <div class="mt-10">
                            {{-- <input type="file" id="upload" required class="single-input">
                                <div id="image_show"></div>
                                <input type="hidden" name="file" id="file" > --}}
                            <h4 class="mt-30 mb-10">Hình hồ sơ</h4>
                            <input type="text" name="imghoso" id="imghoso" value="{{ $getHoSoById[0]->imghoso }}"
                                placeholder="Hình ảnh" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Hình ảnh'" class="single-input" required>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Tên hồ sơ</h4>
                            <input type="text" name="tenhoso" id="tenhoso" value="{{ $getHoSoById[0]->tenhoso }}"
                                placeholder="Tên hồ sơ" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Tên hồ sơ'" class="single-input" required>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Họ và tên</h4>
                            <input type="text" name="hoten" id="hoten" value="{{ $getHoSoById[0]->hoten }}"
                                placeholder="Họ và tên" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Họ và tên'" class="single-input" required>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Số điện thoại</h4>
                            <input type="text" name="sdt" id="sdt" value="{{ $getHoSoById[0]->sdt }}"
                                placeholder="Số điện thoại" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Số điện thoại'" class="single-input" required>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Email</h4>
                            <input type="email" name="email" id="email" value="{{ $getHoSoById[0]->email }}"
                                placeholder="Email address" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Email address'" required class="single-input" required>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Ngày sinh</h4>
                            <input type="date" name="ngaysinh" id="ngaysinh" value="{{ $getHoSoById[0]->ngaysinh }}"
                                placeholder="Ngày sinh" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Ngày sinh'" class="single-input" required>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Địa chỉ</h4>
                            <input type="text" name="diachi" id="diachi" value="{{ $getHoSoById[0]->diachi }}"
                                placeholder="Địa chỉ" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Địa chỉ'" class="single-input" required>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Giới thiệu</h4>
                            <textarea name="gioithieu" id="gioithieu" value=""
                                class="single-textarea" placeholder="Giới thiệu bản thân"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Giới thiệu bản thân'"
                                >{{ $getHoSoById[0]->gioithieu }}</textarea>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Kỹ năng</h4>
                            <textarea name="kynang" id="kynang" value="" class="single-textarea"
                                placeholder="Kỹ năng" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Kỹ năng'">{{ $getHoSoById[0]->kynang }}</textarea>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Học vấn</h4>
                            <textarea name="hocvan" id="hocvan" value="" class="single-textarea"
                                placeholder="học vấn" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'học vấn'">{{ $getHoSoById[0]->hocvan }}</textarea>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">kinh nghiệm</h4>
                            <textarea name="kinhnghiem" id="kinhnghiem" value=""
                                class="single-textarea" placeholder="Kinh nghiệm" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Kinh nghiệm'">{{ $getHoSoById[0]->kinhnghiem }}</textarea>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Hoạt động</h4>
                            <textarea name="hoatdong" id="hoatdong" value=""
                                class="single-textarea" placeholder="Hoạt động" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Hoạt động'">{{ $getHoSoById[0]->hoatdong }}</textarea>
                        </div>

                        <div class="button-group-area mt-40">
                            <button type="submit" class="genric-btn success radius">Sửa CV</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Align Area -->
{{-- @endsection --}}
