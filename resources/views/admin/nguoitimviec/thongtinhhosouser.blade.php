@extends('admin.main')

@section('content')
<!-- /.card -->

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thông tin người tìm việc</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <td class="project-actions text-right">
        <a class="btn btn-danger btn-sm" href="/admin/quanlyntv">Trở về</a>
    </td>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>STT hồ sơ</th>
                    <th>Tên hồ sơ</th>
                    <th>Hình ảnh</th>
                    <th>Họ và tên</th>
                    <th>SDT</th>
                    <th>Email</th>
                    <th>Ngày sinh</th>
                    <th>Địa chỉ</th>
                    <th>giới thiệu</th>
                    <th>Kỹ năng</th>
                    <th>Học vấn</th>
                    <th>Kinh nghiệm</th>
                    <th>Hoạt động</th>
                    <th>Ngày tạo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listhoso as $key => $lisths)
                    <tr>
                        <td> {{ $key+1 }}</td>
                        <td> {{ $lisths-> tenhoso}}</td>
                        <td> {{ $lisths-> imghoso }}</td>
                        <td> {{ $lisths-> hoten }}</td>
                        <td> {{ $lisths-> sdt}}</td>
                        <td> {{ $lisths-> email}}</td>
                        <td> {{ $lisths-> ngaysinh}}</td>
                        <td> {{ $lisths-> diachi}}</td>
                        <td> {{ $lisths-> gioithieu}}</td>
                        <td> {{ $lisths-> kynang}}</td>
                        <td> {{ $lisths-> hocvan}}</td>
                        <td> {{ $lisths-> kinhnghiem}}</td>
                        <td> {{ $lisths-> hoatdong}}</td>
                        <td> {{ $lisths-> created_at}}</td>
                    </tr>
                @endforeach
             
                </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection