@php
    use App\Http\Controllers\Common\Common;
@endphp
@extends('admin.layout.index')
@section('title','Danh sách tên Album')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách Album
                </h1>
            </div>
            @if(count($errors) > 0)
            <div class="alert alert-danger">
			@foreach($errors->all() as $err)
				{{$err}}<br>
			@endforeach
			</div>
            @endif
            @if(session('thongbao'))
			<div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th width="7%">ID</th>
                        <th width="20%">Tên Album</th>
                        <th width="7%">Sửa</th>
                        <th width="7%">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach(@$album as $value)
                    <tr class="odd gradeX" align="center">
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td class="center"><a href="{{ route('admin.edit_album', ['id'=>$value->id])}}"><i class="fas fa-edit"></i></a></td>
                        <td class="center"> <a href="{{ route('admin.delete_album', ['id'=>$value->id])}}" onclick="return confirm('Bạn muốn xóa Album này ?')"><i class="fas fa-trash-alt"></i></a></td>
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