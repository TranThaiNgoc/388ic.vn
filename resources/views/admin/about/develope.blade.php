@extends('admin.layout.index')
@section('title','Chiến lượt phát triển')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Chiến lượt phát triển
                    <small>Cập nhật</small>
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
                    <div class="row">
                    <h2>Tiếng Việt</h2>
                        <div class="form-group">
                            <label>Chiến lược phát triển</label>
                            <input type="text" class="form-control" name="name" value="{{ isset($develope->name) ? $develope->name : '' }}" placeholder="Nhập tên thể loại">
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea class="form-control" name="content" id="editor">{{ isset($develope->content) ? $develope->content : '' }}</textarea>
                            <span class="text-danger">{{ $errors->first('content') }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <h2>Tiếng Anh</h2>
                        <div class="form-group">
                            <label>Development strategy</label>
                            <input type="text" class="form-control" name="name_en" value="{{ isset($develope->name_en) ? $develope->name_en : '' }}" placeholder="Nhập tên thể loại">
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea class="form-control" name="content_en" id="editor1">{{ isset($develope->content_en) ? $develope->content_en : '' }}</textarea>
                            <span class="text-danger">{{ $errors->first('content') }}</span>
                        </div>
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