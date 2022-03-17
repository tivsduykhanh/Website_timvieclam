@extends('business.main')

{{-- @section('content') --}}
<!-- start banner Area -->
@include('business.banner')
<!-- End banner Area -->

<!-- Start Align Area -->
<div class="whole-wrap">
    <div class="container">
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <h3 class="mb-30">Chỉnh sửa bài đăng</h3>
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

                    <form action="/business/job/update" method="POST">
                        @csrf
                        <input type="hidden" id="id" name="id" value="{!! $jobEdit[0]->id !!}" />
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Tên công việc</h4>
                            <input type="text" name="tencongviec" id="tencongviec" value="{{ $jobEdit[0]->tencongviec }}"
                                placeholder="Tên công việc" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Tên công việc'" class="single-input" required>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Tên công ty</h4>
                            <input type="text" name="tencongty" id="tencongty" value="{{ $jobEdit[0]->tencongty }}"
                                placeholder="Tên công ty" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Tên công ty'" class="single-input" required>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Mức lương</h4>
                            <input type="text" name="mucluong" id="mucluong" value="{{ $jobEdit[0]->mucluong }}"
                                placeholder="Mức lương" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Mức lương'" class="single-input" required>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Kinh nghiệm</h4>
                            <textarea name="kinhnghiem" id="kinhnghiem" class="single-textarea" placeholder="Kinh nghiệm"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kinh nghiệm'"
                                >{{ $jobEdit[0]->kinhnghiem }}</textarea>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Yêu cầu bằng cấp</h4>
                            <textarea name="yeucaubangcap" id="yeucaubangcap" class="single-textarea" placeholder="Yêu cầu bằng cấp"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Yêu cầu bằng cấp'"
                                >{{ $jobEdit[0]->yeucaubangcap }}</textarea>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Chức vụ</h4>
                            <input type="text" name="chucvu" id="chucvu" value="{{ $jobEdit[0]-> chucvu }}"
                                placeholder="Chức việc" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Chức việc'" class="single-input" required>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Hình thức làm việc</h4>
                            <textarea name="hinhthuclamviec" id="hinhthuclamviec" class="single-textarea" placeholder="Hình thức làm việc"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Hình thức làm việc'"
                                >{{ $jobEdit[0]-> hinhthuclamviec }}</textarea>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Số lượng tuyển</h4>
                            <input type="text" name="soluongtuyen" id="soluongtuyen" value="{{ $jobEdit[0]-> soluongtuyen }}"
                                placeholder="Số lượng tuyển" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Số lượng tuyển'" class="single-input" required>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Địa điểm làm việc</h4>
                            <textarea name="diadiemlamviec" id="diadiemlamviec" class="single-textarea"
                                placeholder="Địa điểm làm việc" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Địa điểm làm việc'">{{ $jobEdit[0]-> diadiemlamviec }}</textarea>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Mô tả công việc</h4>
                            <textarea name="mota" id="mota" class="single-textarea"
                                placeholder="Mô tả" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Mô tả'">{{ $jobEdit[0]->mota }}</textarea>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Yêu cầu công việc</h4>
                            <textarea name="yeucau" id="yeucau"
                                class="single-textarea" placeholder="Yêu cầu" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Yêu cầu'">{{ $jobEdit[0]->yeucau }}</textarea>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Quyền lợi</h4>
                            <textarea name="quyenloi" id="quyenloi"
                                class="single-textarea" placeholder="Quyền lợi" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Quyền lợi'">{{ $jobEdit[0]->quyenloi }}</textarea>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Cách ứng tuyển</h4>
                            <textarea name="cachungtuyen" id="cachungtuyen" 
                                class="single-textarea" placeholder="Cách ứng tuyển" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Cách ứng tuyển'">{{ $jobEdit[0]-> cachungtuyen }}</textarea>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Hạn nộp hồ sơ</h4>
                            <input type="date" name="hannophoso" id="hannophoso" value="{{ $jobEdit[0]-> hannophoso }}"
                                placeholder="Hạn nộp hồ sơ" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Hạn nộp hồ sơ'" class="single-input" required>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Chọn loại ngành</h4>
                            <select name="loainganh_id" id="loainganh_id" class="single-input">
                                @foreach($listnganh as $key => $nganh)
                                    @if($nganh->id == $jobEdit[0]->loainganh_id)
                                        <option value="{{ $nganh->id }}" selected>{{ $nganh->tennganh }}</option>
                                    @else
                                        <option value="{{$nganh->id}}">{{$nganh->tennganh}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-10">
                            <h4 class="mt-30 mb-10">Chọn tỉnh thành</h4>
                            <select name="tinhthanh_id" id="tinhthanh_id" class="single-input">
                                @foreach($listtinhthanh as $key => $tinhthanh)
                                    @if($tinhthanh->id == $jobEdit[0]->tinhthanh_id)
                                        <option value="{{ $tinhthanh->id }}" selected>{{ $tinhthanh->tentinhthanh }}</option>
                                    @else
                                        <option value="{{$tinhthanh->id}}">{{$tinhthanh->tentinhthanh}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="button-group-area mt-40">
                            <button type="submit" class="genric-btn success radius">Hoàn tất</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Align Area -->
{{-- @endsection --}}