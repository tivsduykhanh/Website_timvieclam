@extends('user.main')

@section('content')
    <!-- start banner Area -->
    @include('user.banner')
    <!-- End banner Area -->
    <!-- Start Align Area -->
    <div class="whole-wrap">
        <div class="container">

            <div class="section-top-border">
                <h2 class="mb-30">Chọn CV bạn muốn apply</h2>
                <div class="progress-table-wrap">
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="serial">#</div>
                            <div class="country">Thông tin</div>
                            <div class="visit">Tên hồ sơ</div>
                            <div class="percentage">Thao tác</div>
                        </div>

                        @foreach($listhoso as $key => $hoso)
                        <div class="table-row">
                            <div class="serial">{{ $key+1 }}</div>
                            <div class="country">{{ $hoso->imghoso }}</div>
                            <div class="visit">{{ $hoso->tenhoso }}</div>
                            <div class="percentage">
                                <a href="/user/hoso/detail/{{ $hoso->id }}" class="genric-btn info radius medium">Chi tiết CV</a>
																<a href="#" class="genric-btn success radius medium">Apply</a>
                                {{-- <a href="/user/hoso/edit/{{ $hoso->id }}" style="margin-left: 10px" class="genric-btn success radius medium">Sửa CV</a>
                                <a href="/user/hoso/delete/{{ $hoso->id }}" style="margin-left: 10px" class="genric-btn danger radius medium">Xoá CV</a> --}}
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="table-row">
                            <div class="serial">02</div>
                            <div class="country"> <img src="img/elements/f2.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-2" role="progressbar" style="width: 30%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Align Area -->
@endsection
