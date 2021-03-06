@extends('admin.layout.index')
@section('title','Dự án')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dự án
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
                    <h1>Dự án tiếng Việt</h1>
                    <div class="form-group">
                        <label>Tên Dự án</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nhập tên Dự án">
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="form-group">
                        <label>Nội dung dự án</label>
                        <textarea class="form-control editor" name="content" id="editor" cols="4">{{ old('content') }}</textarea>
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    <h1>Dự án tiếng Anh</h1>
                    <div class="form-group">
                        <label>Name project</label>
                        <input type="text" class="form-control" name="name_en" value="{{ old('name_en') }}" placeholder="Nhập tên Dự án">
                        <span class="text-danger">{{ $errors->first('name_en') }}</span>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control editor" name="content_en" id="editor1" cols="4">{{ old('content_en') }}</textarea>
                        <span class="text-danger">{{ $errors->first('content_en') }}</span>
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>Hình 1(Hình đại diện)</label>
                                    <input type="file" name="image1">
                                    <span class="text-danger">{{ $errors->first('image1') }}</span>
                                </div>
                                <div class="col-lg-6">
                                    <label>Hình 2</label>
                                    <input type="file" name="image2">
                                    <span class="text-danger">{{ $errors->first('image2') }}</span>
                                </div>
                                <div class="col-lg-6">
                                    <label>Hình 3</label>
                                    <input type="file" name="image3">
                                    <span class="text-danger">{{ $errors->first('image3') }}</span>
                                </div>
                                <div class="col-lg-6">
                                    <label>Hình 4</label>
                                    <input type="file" name="image4">
                                    <span class="text-danger">{{ $errors->first('image4') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="form-group">
                            <label>Tình trạng dự án</label>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4">
                                    <select class="form-control" name="status">
                                        @foreach(config('master_admin.tiendo') as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>
					<button type="submit" class="btn btn-primary">Thêm Dự án</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@stop