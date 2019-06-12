@extends('admin.layout.index')
@section('title','Sơ đồ tổ chức')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sơ đồ tổ chức
                </h1>
            </div>
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
                    	<label>Sơ đồ tổ chức</label>
                    	<input type="file" name="image_organization">
                    	<img width="40%" src="{{ isset($about_organization->image_organization) ? $about_organization->image_organization : '' }}">
                    	<span class="text-danger">{{ $errors->first('image_site_organization') }}</span>
                    </div>
                    <div class="form-group">
                    	<label>Sơ đồ tổ chức trang website</label>
                    	<input type="file" name="image_site_organization">
                    	<img width="40%" src="{{ isset($about_organization->image_site_organization) ? $about_organization->image_site_organization : '' }}">
                    	<span class="text-danger">{{ $errors->first('image_site_organization') }}</span>
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