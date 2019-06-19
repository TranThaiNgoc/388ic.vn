@extends('admin.layout.index')
@section('title','Sửa tên Album')
@section('content')
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sửa tên Album
					<small>{!! $album->name !!}</small>
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
				<form action="" method="POST">
					@csrf
					<div class="form-group">
						<label>Tên Album tiếng Việt</label>
						<input type="text" name="name" value="{{ $album->name }}" class="form-control">
					</div>
					<div class="form-group">
						<label>Tên Album tiếng Anh</label>
						<input type="text" name="name_en" value="{{ $album->name_en }}" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">Sửa tên Album</button>
				<form>
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>

@stop