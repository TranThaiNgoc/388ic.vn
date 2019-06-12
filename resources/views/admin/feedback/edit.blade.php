@extends('admin.layout.index')
@section('title','Thông tin phản hồi')
@section('content')
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thông tin phản hồi
					<small>{!! $feedback->name !!}</small>
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
						<label>Tên</label>
						<input type="text" name="name" value="{{ $feedback->name }}" value="{{ $feedback->name }}" class="form-control" disabled="">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" value="{{ $feedback->email }}" disabled="">
					</div>
					<div class="form-group">
						<label>Số điện thoại</label>
						<input type="number" name="phone" class="form-control" value="{{ $feedback->phone }}" disabled="">
					</div>
					<div class="form-group">
						<label>Nội dung</label>
						<textarea class="form-control"  rows="10" disabled="">{{ $feedback->content }}</textarea>
					</div>
					<div class="form-group">
						<label  style="display: block;">Trạng thái phản hồi</label>
						<label class="radio-inline"><input type="radio" {{ $feedback->status == 0 ? 'checked' : '' }} name="status" value="0">Đã phản hồi</label>
						<label class="radio-inline"><input type="radio" {{ $feedback->status == 1 ? 'checked' : '' }} name="status" value="1">Chưa phản hồi</label>
					</div>
					<button type="submit" class="btn btn-primary">Sửa thể loại</button>
				<form>
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>

@stop