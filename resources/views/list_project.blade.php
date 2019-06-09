@php
    use App\Http\Controllers\Common\Common;
@endphp
@extends('layouts.app1')
@section('title', 'Danh sách dự án')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-3 home-title">
                <div class="d-md-inline-block text-md-left text-center text-primary title-content">
                    <div class="be-text-large d-md-inline-block d-block">
                        <ul class="nolist be-breadcrumb text-uppercase d-inline-block">
                            <li><a href="{{ url('/') }}">Trang chủ</a></li>
                            <li><span>Dự án</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="products">
    <div class="container">
        <div class="row">
            <div class="col-12 py-3">
                <h1 class="header-title text-md-left text-uppercase">Tất cả dự án</h1>
                <hr>
            </div>
            <div class="col-12 product-content">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            @foreach(@$project as $value)
                            <div class="col-md-4 mb-3">
                                <div class="card card-hover">
                                    <div class="card-top">
                                        <a href="{{ route('project', ['slug'=>$value->slug]) }}"><img
                                                src="{{ $value->image1 }}"
                                                alt="{{ $value->name }}" class="products-img"></a>
                                    </div>
                                    <div class="card-body">
                                        <div class="products-title">
                                            <a href="{{ route('project', ['slug'=>$value->slug]) }}">{{ $value->name }}</a>
                                        </div>
                                        <div class="products-content">
                                            <span>{!! Common::_substr(strip_tags($value->content), 60) !!}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-md-12 py-3">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    {{ $project->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="title-right">
                            <h4>Theo tiến độ</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nolist product-years">
                                    <li><a href="{{ route('search_project','dathicong') }}">Đã thi công</a></li>
                                    <li><a href="{{ route('search_project','dangthicong') }}">Đang thi công</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop