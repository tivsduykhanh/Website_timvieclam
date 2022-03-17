@extends('admin.main')

@section('content')
<!-- /.card -->

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách bài đăng</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <td class="project-actions text-right">
        <a class="btn btn-danger btn-sm" href="/admin/quanlyntd">Trở về</a>
    </td>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên công việc</th>
                    <th>Tên công ty</th>
                    <th>Mức lương</th>
                    <th>Kinh nghiệm</th>
                    <th>Yêu cầu bằng cấp</th>
                    <th>Chức vụ</th>
                    <th>Hình thức làm việc</th>
                    <th>Số lượng tuyển</th>
                    <th>Địa điểm làm việc</th>
                    <th>Mô tả</th>
                    <th>Yêu cầu</th>
                    <th>Quyền lợi</th>
                    <th>Cách ứng tuyển</th>
                    <th>Hạn nộp hồ sơ</th>
                    <th>Ngành</th>
                    <th>Tỉnh thành</th>
                    <th>Ngày đăng</th>
                    <th>Ngày cập nhật</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listbaidang as $key => $lisths)
                    <tr>
                        <td> {{ $key+1 }}</td>
                        <td> {{ $lisths-> tencongviec}}</td>
                        <td> {{ $lisths-> tencongty }}</td>
                        <td> {{ $lisths-> mucluong }}</td>
                        <td> {{ $lisths-> kinhnghiem}}</td>
                        <td> {{ $lisths-> yeucaubangcap}}</td>
                        <td> {{ $lisths-> chucvu}}</td>
                        <td> {{ $lisths-> hinhthuclamviec}}</td>
                        <td> {{ $lisths-> soluongtuyen}}</td>
                        <td> {{ $lisths-> diadiemlamviec}}</td>
                        <td>
                            <!-- <textarea name="mota" id="mota" rows="5">{{ $lisths-> mota}}</textarea> -->
                            {{ $lisths-> mota}}
                        </td>
                        <td> {{ $lisths-> yeucau}}</td>
                        <td> {{ $lisths-> quyenloi}}</td>
                        <td> {{ $lisths-> cachungtuyen}}</td>
                        <td> {{ $lisths-> hannophoso}}</td>

                        @foreach($listloainganh as $nganh)
                            @if($nganh->id == $lisths->loainganh_id)
                                <td> {{ $nganh->tennganh }}</td>
                            @endif
                        @endforeach
                        @foreach($listtinhthanh as $tinh)
                            @if($tinh->id == $lisths->tinhthanh_id)
                                <td> {{ $tinh->tentinhthanh }}</td>
                            @endif
                        @endforeach

                        <td> {{ $lisths-> created_at}}</td>
                        <td> {{ $lisths-> updated_at}}</td>
                    </tr>
                @endforeach
             
                </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection