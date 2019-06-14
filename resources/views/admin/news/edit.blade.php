@extends('admin.layout.index')
@section('title', 'Tin tức')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa tin tức
                    <small>{{ $news->name }}</small>
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
            <div class="col-lg-10" style="padding-bottom:120px">
                <form action="" method="POST" enctype="multipart/form-data">
                	@csrf
                    <h1>Bài viết tiếng Việt</h1>
                    <div class="form-group">
                    	<label>Tên bài viết</label>
                    	<input type="text" name="name" value="{{ $news->name }}" class="form-control" placeholder="Nhập tên bài viết">
                    </div>
                    <div class="form-group">
                    	<label>Tóm tắt bài viết</label>
                    	<textarea class="form-control editor" name="summary" id="editor" placeholder="Nhập tóm tắt bài viết" rows="4">{{ $news->summary }}</textarea>
                    </div>
                    <div class="form-group">
                    	<label>Nội dung bài viết</label>
                    	<textarea class="form-control editor" name="content" id="editor1" placeholder="Nhập nội dung bài viết" rows="10">{{ $news->content }}</textarea>
                    </div>
                    <h1>Bài viết tiếng Anh</h1>
                    <div class="form-group">
                        <label>Article name</label>
                        <input type="text" name="name_en" value="{{ $news->name_en }}" class="form-control" placeholder="Article name">
                        <span class="text-danger">{{ $errors->first('name_en') }}</span>
                    </div>
                    <div class="form-group">
                        <label>Summary of the article</label>
                        <textarea class="form-control editor" name="summary_en" id="editor2" placeholder="Summary of the article" rows="4">{{ $news->summary_en }}</textarea>
                        <span class="text-danger">{{ $errors->first('summary_en') }}</span>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control editor" name="content_en" id="editor3" placeholder="Content" rows="10">{{ $news->content_en }}</textarea>
                        <span class="text-danger">{{ $errors->first('content_en') }}</span>
                    </div>
                    <div class="form-group">
                    	<label style="width: 100%">hình ảnh bài viết</label>
                    	<img width="30%" src="{{ $news->image }}">
                    	<input type="file" name="image">
                    </div>
                    <div class="form-group">
                    	<label style="display: block;">Trạng thái bài viết</label>
                    	@if($news->status == 0)
	                    	<label class="radio-inline"><input type="radio" name="status" value="0" checked>Kích hoạt</label>
	                    	<label class="radio-inline"><input type="radio" name="status" value="1">Không kích hoạt</label>
                    	@else
							<label class="radio-inline"><input type="radio" name="status" value="0">Kích hoạt</label>
	                    	<label class="radio-inline"><input type="radio" name="status" value="1" checked>Không kích hoạt</label>
                    	@endif

                    </div>
					<button type="submit" class="btn btn-primary">Sửa bài viết</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@stop