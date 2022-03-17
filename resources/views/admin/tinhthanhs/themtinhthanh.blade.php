@extends('admin.main')

@section('content')
<div class="whole-wrap">
    <div class="container">

        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <h3 class="mb-30">Nhập tỉnh thành muốn thêm</h3>
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

                    <form action="/admin/them" method="POST">
                    @csrf
                        <div class="mt-10">
                            <input type="text" name="tentinhthanh" id="tentinhthanh" value="{{ old('tentinhthanh') }}"
                                placeholder="Tên tỉnh thành" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Tên tỉnh thành'" class="single-input" required>
                        </div>
                        <div class="button-group-area mt-40">
                            <br>
                            <button type="submit" class="btn btn-danger btn-sm">Thêm Tỉnh thành</button> 
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Align Area -->
@endsection