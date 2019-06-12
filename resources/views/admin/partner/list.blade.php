@extends('admin.layout.index')
@section('title','Logo đối tác')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <h1 class="page-header">Danh sách logo đối tác
                </h1>
                @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
            </div>
            <div class="col-lg-2 add_manager" style="margin-top: 54px;">
                <a href="{{route('admin.add_partner')}}"><button type="button" class="btn btn-primary">Thêm logo</button></a>
            </div>
            
            @if(session('thongbaoloi'))
            <div class="alert alert-danger">
                {{session('thongbaoloi')}}
            </div>
            @endif
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>logo</th>
                        <th>thời gian</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach(@$partner as $value)
                    <tr class="odd gradeX" align="center">
                    	<td>{{ $value->id }}</td>
                        <td><img width="25%" src="{{ $value->image }}"></td>
                        <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                        <td class="center"><i class="fas fa-trash-alt"></i> <a href="{{ route('admin.delete_parnter', ['id'=>$value->id])}}" onclick="return confirm('Bạn muốn xóa logo đối tác này ?')">Xóa</a></td>
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