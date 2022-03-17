@extends('admin.main')

@section('content')
<!-- /.card -->

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách người tìm việc</h3>
    </div>
    <!-- /.card-header -->
    {{-- Search --}}
    <section style="margin-top: 20px" class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="/admin/quanlyntv/search" method="GET">
                        <div class="input-group">
                            <input name="search" type="search" class="form-control form-control-lg" placeholder="Tìm kiếm">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- End Search --}}
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Ngày tạo</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listnguoitimviec as $key => $nguoitimviec)
                    <tr>
                        <td> {{ $key+1 }} </td>
                        <td> {{ $nguoitimviec-> name }}</td>
                        <td> {{ $nguoitimviec-> email }}</td>
                        <td> {{ $nguoitimviec-> created_at }}</td>
                        <td class="project-actions text-right">
                            <a style="text-align: center;" class="btn btn-primary btn-sm" href="/admin/thongtinhosouser/{{$nguoitimviec->id}}">Chi tiết</a>
                            <a class="btn btn-danger btn-sm" href="/admin/delete/{{$nguoitimviec->id}}">Xoá </a>
                        </td>
                        <!-- <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                Chi tiết
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Xóa
                            </a>
                        </td> -->
                        
                    </tr>
                @endforeach
                {{$listnguoitimviec->links()}}
             
                </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection