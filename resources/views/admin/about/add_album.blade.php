@extends('admin.layout.index')
@section('title','Thêm tên album')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tên album
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
                        <label>Tên album tiếng Việt</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nhập tên album">
                    </div>
                    <div class="form-group">
                        <label>Tên album tiếng Anh</label>
                        <input type="text" class="form-control" name="name_en" value="{{ old('name') }}" placeholder="Nhập tên album">
                    </div>
					<button type="submit" class="btn btn-primary">Thêm album</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection