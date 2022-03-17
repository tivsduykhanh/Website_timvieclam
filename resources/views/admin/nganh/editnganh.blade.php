@extends('admin.main')

@section('content')
<div class="whole-wrap">
    <div class="container">

        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <h3 class="mb-30">Nhập ngành muốn sửa</h3>
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

                    <form action="/admin/updatenganh" method="post">
                    @csrf
                        <div class="mt-10">
                        <input type="hidden" id="id" name="id" value="{!! $listnganh[0]->id !!}" />
                            <input type="text" name="tennganh" id="tennganh" value="{{ $listnganh[0]->tennganh }}"
                                placeholder="Tên ngành" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Tên ngành'" class="single-input" required>
                        </div>
                        <div class="button-group-area mt-40">
                            <br>
                            <button class="btn btn-danger btn-sm" type="submit">Sửa Ngành</button> 
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Align Area -->
@endsection