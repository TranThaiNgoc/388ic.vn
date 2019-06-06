@extends('layouts.app1')
@section('title', 'Danh sách bài viết')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-3 home-title">
                <div class="d-md-inline-block text-md-left text-center text-primary title-content">
                    <div class="be-text-large d-md-inline-block d-block">
                        <ul class="nolist be-breadcrumb text-uppercase d-inline-flex">
                            <li><a href="{{ url('/') }}">Trang chủ</a></li>
                            <li><span>Tin Tức</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="news">
    <div class="container">
        <div class="row">
            <div class="col-12 py-3">
                <h1 class="header-title text-md-left text-uppercase">Tin tức mới</h1>
                <hr>
            </div>
            <div class="col-12 news-content">
                <div class="row">
                    <div class="col-md-9">
                        <ul class="nolist">
                            @foreach(@$news as $value)
                            <li class="row align-items-center py-3">
                                <div class="col-md-4 col-4">
                                    <a href="{{ route('news',['slug' => $value->slug]) }}"><img src="{{ $value->image }}" alt="{{ $value->name }}"></a>
                                </div>
                                <div class="col-md-8 col-8">
                                    <div class="post-title">
                                        <a href="#">{{ $value->name }}</a>
                                    </div>
                                    <div class="post-content d-none d-md-block">
                                        <p>{!! \Illuminate\Support\Str::words($value->summary, 12,'....') !!}</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <div class="col-md-12 py-3">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    {{ $news->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-block text-center">
                            <h5>Dự Án Mới Nhất</h5>
                        </div>
                        <div class="row">
                            @foreach(@$project as $value)
                            <div class="col-md-12 col-12">
                                <div class="card border mb-2 card-hover-primary">
                                    <div class="card-another-top">
                                        <a href="#" class="w-100">
                                            <img class="product-image w-100 p-2" src="{{ $value->image1 }}" alt="{{ $value->name }}">
                                        </a>
                                    </div>
                                    <div class="card-another-body text-center">
                                        <a href="#" class="text-uppercase p-2 d-block">{{ $value->name }}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
@stop