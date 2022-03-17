@extends('admin.main')

@section('content')
<!-- /.card -->

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách liên hệ</h3>
    </div>
    <!-- /.card-header -->
    {{-- Search lien he --}}
    <section style="margin-top: 20px" class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="/admin/listlh/search" method="GET">
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
    {{-- end search lien he --}}
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ và tên người liên hệ</th>
                    <th>Email</th>
                    <th>Chủ đề</th>
                    <th>Nội dung</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listlh as $key => $llh)
                    <tr>
                        <td> {{ $key+1 }} </td>
                        <td> {{ $llh-> tennglh }} </td>
                        <td> {{ $llh-> emaillh }} </td>
                        <td> {{ $llh-> chudelh }} </td>
                        <td> <textarea class="form-control" rows="5" disabled>{{ $llh-> noidunglh }}</textarea> </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-danger btn-sm" href="/admin/xoalh/{{$llh->id}}">Xoá</a>
                        </td>
                    </tr>
                @endforeach
                {{$listlh->links()}}
                </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection