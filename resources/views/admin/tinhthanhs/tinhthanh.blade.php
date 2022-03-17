@extends('admin.main')

@section('content')
<!-- /.card -->

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thông tin các ngành</h3>
    </div>
    <!-- /.card-header -->
    {{-- Search --}}
    <section style="margin-top: 20px" class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="/admin/tinhthanh/search" method="GET">
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
    <td class="project-actions text-right">
        <a class="btn btn-danger btn-sm" href="/admin/themtinhthanh">Thêm Tỉnh thành</a> 
    </td>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>STT hồ sơ</th>
                    <th>Tên tỉnh thành</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listtt as $key => $listn)
                    <tr>
                        <td> {{ $key+1 }}</td>
                        <td> {{ $listn-> tentinhthanh}}</td>
                        <td class="project-actions text-right">
                            <a class="btn btn-danger btn-sm" href="/admin/edit/{{$listn->id}}">Sửa</a>
                            <a class="btn btn-danger btn-sm" href="/admin/xoatinhthanh/{{$listn->id}}">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                {{$listtt->links()}}
                </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection