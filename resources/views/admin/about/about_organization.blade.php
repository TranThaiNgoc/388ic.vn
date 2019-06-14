@extends('admin.layout.index')
@section('title','Sơ đồ tổ chức')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="page-header">Sơ đồ tổ chức tiếng Việt
                </h1>
            </div>
            <div class="col-lg-6">
                <h1 class="page-header">Sơ đồ tổ chức tiếng Anh
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
            <div class="col-lg-12" style="padding-bottom:120px">
                <form action="" method="POST" enctype="multipart/form-data">
                	@csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Sơ đồ tổ chức</label>
                                <input type="file" name="image_organization">
                                <img width="40%" src="{{ isset($about_organization->image_organization) ? $about_organization->image_organization : '' }}">
                                <span class="text-danger">{{ $errors->first('image_site_organization') }}</span>
                            </div>
                            <div class="form-group">
                                <label>Sơ đồ tổ chức thi công</label>
                                <input type="file" name="image_site_organization">
                                <img width="40%" src="{{ isset($about_organization->image_site_organization) ? $about_organization->image_site_organization : '' }}">
                                <span class="text-danger">{{ $errors->first('image_site_organization') }}</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Organizational chart</label>
                                <input type="file" name="image_organization_en">
                                <img width="40%" src="{{ isset($about_organization->image_organization_en) ? $about_organization->image_organization_en : '' }}">
                                <span class="text-danger">{{ $errors->first('image_organization_en') }}</span>
                            </div>
                            <div class="form-group">
                                <label>Construction diagram</label>
                                <input type="file" name="image_site_organization_en">
                                <img width="40%" src="{{ isset($about_organization->image_site_organization_en) ? $about_organization->image_site_organization_en : '' }}">
                                <span class="text-danger">{{ $errors->first('image_site_organization_en') }}</span>
                            </div>
                        </div>
                    </div>
					<button type="submit" class="btn btn-primary">Cập nhật</button>
                <form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@stop