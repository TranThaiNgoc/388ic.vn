@extends('admin.layout.index')
@section('title','Lĩnh vực kinh doanh')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Lĩnh vực kinh doanh
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
                    <div class="form-group">
                        <label>Lĩnh vực kinh doanh</label>
                        <input type="text" class="form-control" name="name" value="{{ isset($business->name) ? $business->name : '' }}" placeholder="Nhập tên thể loại">
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="form-group">
                    	<label>Nội dung</label>
                    	<textarea class="form-control" name="content" id="editor">{{ isset($business->content) ? $business->content : '' }}</textarea>
                    	<span class="text-danger">{{ $errors->first('content') }}</span>
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