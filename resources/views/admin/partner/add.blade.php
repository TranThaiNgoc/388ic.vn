@extends('admin.layout.index')
@section('title','Thêm logo đối tác')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Logo đối tác
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
            <div class="col-lg-9" style="padding-bottom:120px">
                <form action="" method="POST" enctype="multipart/form-data">
                	@csrf
                    <div class="form-group">
                        <label>Tên đối tác</label>
                        <input type="text" name="name" class="form-control" placeholder="Nhập tên đối tác">
                    </div>
                    <div class="form-group">
                    	<label>Hình ảnh</label>
                    	<input type="file" name="image">
                    	<span class="text-danger">{{ $errors->first('image') }}</span>
                    </div>
					<button type="submit" class="btn btn-primary">Thêm logo</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@stop