@php
    use App\Http\Controllers\Common\Common;
@endphp
@extends('admin.layout.index')
@section('title','Danh sách chứng chỉ')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <h1 class="page-header">Danh sách chứng chỉ
                </h1>
            </div>
            <div class="col-lg-2 add_manager" style="margin-top: 54px;">
                <a href="{{route('admin.add_certificate')}}"><button type="button" class="btn btn-primary">Thêm chứng chỉ</button></a>
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
                        <th width="20%">Tên chứng chỉ</th>
                        <th width="39%">Nội dung</th>
                        <th width="7%">Sửa</th>
                        <th width="7%">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach(@$certificate as $value)
                    <tr class="odd gradeX" align="center">
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{!! Common::_substr(strip_tags($value->content),75) !!}</td>
                        <td class="center"><a href="{{ route('admin.edit_certificate', ['id'=>$value->id])}}"><i class="fas fa-edit"></i></a></td>
                        <td class="center"> <a href="{{ route('admin.delete_certificate', ['id'=>$value->id])}}" onclick="return confirm('Bạn muốn xóa chứng chỉ này ?')"><i class="fas fa-trash-alt"></i></a></td>
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