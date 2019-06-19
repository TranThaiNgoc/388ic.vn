@extends('admin.layout.index')
@section('title','Sửa thành viên Công ty')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">thành viên
                    <small>Sửa</small>
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
                        <label>Tên thành viên</label>
                        <input type="text" class="form-control" name="name" value="{{ $manager->name }}" placeholder="Nhập tên thể loại">
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" name="image">
                        <img width="40%" src="{{ $manager->image }}">
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                    </div>
                    <div class="form-group">
                        <label>Vị trí tiếng Việt</label>
                        <input type="text" value="{{ $manager->location }}" name="location" class="form-control" placeholder="Nhập vị trí thành viên">
                        <span class="text-danger">{{ $errors->first('location') }}</span>
                    </div>
                    <div class="form-group">
                        <label>Vị trí tiếng Anh</label>
                        <input type="text" value="{{ $manager->location_en }}" name="location_en" class="form-control" placeholder="Nhập vị trí thành viên">
                        <span class="text-danger">{{ $errors->first('location_en') }}</span>
                    </div>
                    <div class="form-group">
                        <label>Thứ tự</label>
                        <input type="number" value="{{ $manager->ordernum }}" name="ordernum" class="form-control" placeholder="Nhập thứ tự">
                        <span class="text-danger">{{ $errors->first('ordernum') }}</span>
                    </div>
                    <button type="submit" class="btn btn-primary">Sửa thành viên</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@stop