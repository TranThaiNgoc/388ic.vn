@extends('admin.layout.index')
@section('title', 'Tin tức')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin tức
                    <small>Thêm</small>
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
            <div class="col-lg-10" style="padding-bottom:120px">
                <form action="" method="POST" enctype="multipart/form-data">
                	@csrf
                    <h1>Bài viết tiếng Việt</h1>
                    <div class="form-group">
                    	<label>Tên bài viết</label>
                    	<input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Nhập tên bài viết">
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="form-group">
                    	<label>Tóm tắt bài viết</label>
                    	<textarea class="form-control editor" name="summary" id="editor" placeholder="Nhập tóm tắt bài viết" rows="4">{{ old('summary') }}</textarea>
                        <span class="text-danger">{{ $errors->first('summary') }}</span>
                    </div>
                    <div class="form-group">
                    	<label>Nội dung bài viết</label>
                    	<textarea class="form-control editor" name="content" id="editor1" placeholder="Nhập nội dung bài viết" rows="10">{{ old('content') }}</textarea>
                        <span class="text-danger">{{ $errors->first('content') }}</span>
                    </div>
                    <h1>Bài viết tiếng Anh</h1>
                    <div class="form-group">
                        <label>Article name</label>
                        <input type="text" name="name_en" value="{{ old('name_en') }}" class="form-control" placeholder="Article name">
                        <span class="text-danger">{{ $errors->first('name_en') }}</span>
                    </div>
                    <div class="form-group">
                        <label>Summary of the article</label>
                        <textarea class="form-control editor" name="summary_en" id="editor2" placeholder="Summary of the article" rows="4">{{ old('summary_en') }}</textarea>
                        <span class="text-danger">{{ $errors->first('summary_en') }}</span>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control editor" name="content_en" id="editor3" placeholder="Content" rows="10">{{ old('content_en') }}</textarea>
                        <span class="text-danger">{{ $errors->first('content_en') }}</span>
                    </div>
                    <div class="form-group">
                    	<label>hình ảnh bài viết</label>
                    	<input type="file" name="image">
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                    </div>
                    <div class="form-group">
                    	<label style="display: block;">Trạng thái bài viết</label>
                    	<label class="radio-inline"><input type="radio" name="status" value="0" checked>Kích hoạt</label>
                    	<label class="radio-inline"><input type="radio" name="status" value="1">Không kích hoạt</label>

                    </div>
					<button type="submit" class="btn btn-primary">Thêm bài viết</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@stop