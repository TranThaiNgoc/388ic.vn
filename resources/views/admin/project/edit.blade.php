@extends('admin.layout.index')
@section('title','Sửa dự án')
@section('content')
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sửa dự án
					<small>{!! $project->name !!}</small>
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
			<!-- /.col-lg-12 -->
			<div class="col-lg-7" style="padding-bottom:120px">
				<form action="" method="POST" enctype="multipart/form-data">
                	@csrf
                    <h1>Dự án tiếng Việt</h1>
                    <div class="form-group">
                        <label>Tên Dự án</label>
                        <input type="text" class="form-control" name="name" value="{{ $project['name'] }}" placeholder="Nhập tên Dự án">
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="form-group">
                        <label>Nội dung dự án</label>
                        <textarea class="form-control editor" name="content" id="editor" cols="4">{!! $project['content'] !!}</textarea>
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    <h1>Dự án tiếng Anh</h1>
                    <div class="form-group">
                        <label>Name project</label>
                        <input type="text" class="form-control" value="{{ $project['name_en'] }}" name="name_en" placeholder="Nhập tên Dự án">
                        <span class="text-danger">{{ $errors->first('name_en') }}</span>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control editor" name="content_en" id="editor1" cols="4">{{ $project['content_en'] }}</textarea>
                        <span class="text-danger">{{ $errors->first('content_en') }}</span>
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>Hình 1</label>
                                    <input type="file" name="image1">
                                    <img width="150px" src="{{ $project['image1'] }}">
                                    <span class="text-danger">{{ $errors->first('image1') }}</span>
                                </div>
                                <div class="col-lg-6">
                                    <label>Hình 2</label>
                                    <input type="file" name="image2">
                                    <img width="150px" src="{{ isset($project['image2']) ? $project['image2'] : '' }}">
                                    <span class="text-danger">{{ $errors->first('image2') }}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>Hình 3</label>
                                    <input type="file" name="image3">
                                    <img width="150px" src="{{ isset($project['image3']) ? $project['image3'] : '' }}">
                                    <span class="text-danger">{{ $errors->first('image3') }}</span>
                                </div>
                                <div class="col-lg-6">
                                    <label>Hình 4</label>
                                    <input type="file" name="image4">
                                    <img width="150px" src="{{ isset($project['image4']) ? $project['image4'] : '' }}">
                                    <span class="text-danger">{{ $errors->first('image4') }}</span>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tình trạng dự án</label>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                <select class="form-control" name="status">
                                                    @foreach(config('master_admin.tiendo') as $key => $value)
                                                    <option value="{{ $key }}" {{ ($key == $project['status'] ? 'selected' : '') }}>{{ $value }}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<button type="submit" class="btn btn-primary">Sửa Dự án</button>
                <form>
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>

@stop