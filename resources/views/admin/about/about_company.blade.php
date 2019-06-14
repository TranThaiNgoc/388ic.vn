@extends('admin.layout.index')
@section('title','Giới thiệu hình chung')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Giới thiệu chung
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
                    <h2>Giới thiệu chung tiếng Việt</h2>
                    <div class="form-group">
                        <textarea class="form-control" id="editor" name="content" placeholder="Nhập nội dung giới thiệu chung" rows="10">{{ isset($about_company->content) ? $about_company->content : '' }}</textarea>
                        <span class="text-danger">{{ $errors->first('content') }}</span>
                    </div>
                    <h2>Giới thiệu chung tiếng Anh</h2>
                    <div class="form-group">
                        <textarea class="form-control" id="editor1" name="content_en" placeholder="Nhập nội dung giới thiệu chung" rows="10">{{ isset($about_company->content_en) ? $about_company->content_en : '' }}</textarea>
                        <span class="text-danger">{{ $errors->first('content_en') }}</span>
                    </div>
                    <div class="form-group">
                    	<label>Hỉnh ảnh</label>
                    	<input type="file" name="image">
                    	<img width="40%" src="{{ $about_company->image}}">
                    	<span class="text-danger">{{ $errors->first('image') }}</span>
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