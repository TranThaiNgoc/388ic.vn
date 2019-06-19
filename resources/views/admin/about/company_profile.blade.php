@extends('admin.layout.index')
@section('title','Hồ sơ năng lực')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thể loại
                    <small>Thêm</small>
                </h1>
            </div>
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                {{$err}}<br>
                @endforeach
            </div>
            @endif
            <!--hien thi thanh cong-->
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            @if(session('thongbaoloi'))
                <div class="alert alert-danger">
                    {{session('thongbaoloi')}}
                </div>
            @endif
            <!-- /.col-lg-12 -->
            <div class="col-lg-9" style="padding-bottom:120px">
                <form action="" method="POST" enctype="multipart/form-data">
                	@csrf
                    <div class="form-group">
                        <label>Đường dẫn hồ sơ năng lực tiếng Việt</label>
                        <input type="text" class="form-control" name="link" value="{{ isset($company_profile->link) ? $company_profile->link : old('link') }}" placeholder="Nhập tên thể loại">
                    </div>
                    <div class="form-group">
                        <label>Đường dẫn hồ sơ năng lực tiếng Anh</label>
                        <input type="text" class="form-control" name="link_en" value="{{ isset($company_profile->link_en) ? $company_profile->link_en : old('link_en') }}" placeholder="Nhập tên thể loại">
                    </div>
					<button type="submit" class="btn btn-primary">Cập nhật</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@stop