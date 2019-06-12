@extends('admin.layout.index')
@section('title','Ban giám đốc')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <h1 class="page-header">Danh sách tổ chức
                </h1>
            </div>
            <div class="col-lg-2 add_manager" style="margin-top: 54px;">
                <a href="{{route('admin.manager.add')}}"><button type="button" class="btn btn-primary">Thêm thành viên</button></a>
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
                        <th>Tên thành viên</th>
                        <th>Vị trí</th>
                        <th>Thứ tự</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($manager as $value)
                    <tr class="odd gradeX" align="center">
                    	<td>{{ $value->name }}</td>
                        <td>{{ $value->location }}</td>
                        <td>{{ $value->ordernum }}</td>
                        <td class="center"><i class="fas fa-edit"></i><a href="{{ route('admin.manager_edit', ['id'=>$value->id])}}"> Sửa</a></td>
                        <td class="center"><i class="fas fa-trash-alt"></i> <a href="{{ route('admin.manager_delete', ['id'=>$value->id])}}" onclick="return confirm('Bạn muốn xóa thành viên này ?')">Xóa</a></td>
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