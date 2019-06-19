@extends('admin.layout.index')
@section('title','Hình ảnh hoạt động')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7">
                <h1 class="page-header">Danh sách tổ chức
                </h1>
            </div>
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-lg-4 add_manager" style="margin-top: 54px;">
                        <a href="{{route('admin.add_image_about')}}" class="btn btn-primary d-block w-100">Thêm hình ảnh</a>
                    </div>
                    <div class="col-lg-4 add_manager" style="margin-top: 54px;">
                        <a href="{{route('admin.add_album')}}" class="btn btn-primary d-block w-100">Thêm tên album</a>
                    </div>
                    <div class="col-lg-4 add_manager" style="margin-top: 54px;">
                        <a href="{{route('admin.list_album')}}" class="btn btn-primary d-block w-100">Danh sách tên album</a>
                    </div>
                </div>
            </div>
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
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th width="20%">ID</th>
                        <th width="20%">Album</th>
                        <th width="40%">Hình ảnh</th>
                        <th width="20%">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($image_about as $value)
                    <tr class="odd gradeX" align="center">
                    	<td>{{ $value->id }}</td>
                        @foreach(@$album as $v)
                            @if($v->id == $value->id_album)
                                <td>{{ $v->name }}</td>
                            @endif
                        @endforeach
                        <td><img width="10%" src="{{ $value->image }}"></td>
                        <td class="center"><i class="fas fa-trash-alt"></i> <a href="{{ route('admin.delete_image_about', ['id'=>$value->id])}}" onclick="return confirm('Bạn muốn xóa hình ảnh này ?')">Xóa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@stop