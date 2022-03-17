@extends('admin.main')

@section('content')
<!-- /.card -->

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách nhà tuyển dụng</h3>
    </div>
    <!-- /.card-header -->
    {{-- Search --}}
    <section style="margin-top: 20px" class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="/admin/quanlyntd/search" method="GET">
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
                    <th>Tên người đại diện </th>
                    <th>Email</th>
                    <th>SDT</th>
                    <th>Tên công ty</th>
                    <th>Địa điểm làm việc</th>
                    <th>Ngày tạo</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listnhatuyendung as $key => $nhatuyendung)
                    <tr>
                        <td> {{ $key+1 }} </td>
                        <td> {{ $nhatuyendung-> name }}</td>
                        <td> {{ $nhatuyendung-> email }}</td>
                        <td> {{ $nhatuyendung-> sdt }}</td>
                        <td> {{ $nhatuyendung-> tencongty }}</td>
                        <td> {{ $nhatuyendung-> diadiemlamviec }}</td>
                        <td> {{ $nhatuyendung-> created_at }}</td>
                        <td class="project-actions text-right">
                            <a style="text-align: center;" class="btn btn-primary btn-sm" href="/admin/{{$nhatuyendung->id}}/listbaidang">Chi tiết</a>
                            <a class="btn btn-danger btn-sm" href="/admin/{{$nhatuyendung->id}}/deleteNTD">Xoá </a>
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
                {{$listnhatuyendung->links()}}
             
                </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection