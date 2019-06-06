@extends('layouts.app1')
@section('title', 'Công ty Cổ phần Đầu tư và Xây lắp 388 - 388IC')
@section('content')
<section class="slide-main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-main" style="overflow: hidden">
                    <div class=" slide-items">
                        <img src="{{ $configuration->banner }}"
                        alt="388ic.com">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-3">
    <div class="container">
        <div class="d-flex flex-wrap title-descript">
            <div class="flex-grow-1">
                <h3 class="text-uppercase">Dự án tiêu biểu</h3>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-md-12">
                <div class="swiper-container swiper-product">
                    <div class="swiper-wrapper">
                            @foreach(@$project as $value)
                            <div class="swiper-slide card card-hover">
                                <div class="card-top">
                                    <a href="{{ route('project',['slug'=>$value->slug]) }}"><img
                                    src="{{ $value->image1 }}"
                                    alt=""></a>
                                </div>
                                <div class="card-body">
                                    <div class="products-title">
                                        <a href="{{ route('project',['slug'=>$value->slug]) }}">{{ $value->name }}</a>
                                    </div>
                                    <div class="products-content">
                                        <span>{!! \Illuminate\Support\Str::words($value->content, 12,'....') !!} </span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            </section>
                            <section class="py-3">
                                <div class="container">
                                    <div class="d-flex flex-wrap bg-news">
                                        <div class="col-md-12 py-3">
                                            <div class="row title-descript px-3">
                                                <h3 class="text-leftd-md-inline-block col">TIN MỚI NHẤT</h3>
                                            </div>
                                        </div>
                                        @foreach(@$news as $value)
                                        <div class="col-md-6 mb-3">
                                            <div class="article-news">
                                                <a href="{{ route('news',['slug'=>$value->slug]) }}" class="d-block">
                                                    <img class="img-product-st"
                                                    src="{{ $value->image }}"
                                                    alt="{{ $value->name }}">
                                                </a>
                                                <a href="{{ route('news',['slug'=>$value->slug]) }}">{{ $value->name }}</a>
                                            </div>
                                        </div>
                                        @php
                                            break;
                                        @endphp
                                        @endforeach
                                        @php
                                        $n=0;
                                        @endphp
                                        @foreach(@$news as $value)
                                        @if($n++>0)
                                        <div class="col-md-3 mb-3">
                                            <div class="article-thumb">
                                                <div class="card-top-news">
                                                    <a href="{{ route('news',['slug'=>$value->slug]) }}">
                                                        <img src="{{ $value->image }}"
                                                        alt="{{ $value->name }}">
                                                    </a>
                                                </div>
                                                <div class="card-body-news">
                                                    <a href="{{ route('news',['slug'=>$value->slug]) }}">
                                                        <i class="fa fa-file-image-o" aria-hidden="true"></i>
                                                        {{ $value->name }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </section>
                            <section>
                                <div class="container">
                                    <div class="row py-3">
                                        <div class="col-md-8">
                                            <div class="d-flex flex-wrap title-descript mb-3">
                                                <div class="flex-grow-1">
                                                    <h3 class="text-uppercase">Tuyển Dụng</h3>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                @foreach(@$job as $value)
                                                <div class="recruit col-md-6 mb-3">
                                                    <div class="row">
                                                        <div class="col-md-4 col-5">
                                                            <a href="{{ route('job',['slug'=>$value->slug]) }}" class="d-block">
                                                                <img src="{{ $value->image }}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-8 pl-0 col-7">
                                                            <a href="{{ route('job',['slug'=>$value->slug]) }}" class="recruit-title">
                                                                {{ $value->title }}
                                                            </a>
                                                            <div class="recruit-content">
                                                                <label>
                                                                    <i class="fa fa-money" aria-hidden="true"></i>
                                                                    @foreach(config('master_admin.mucluong') as $k => $v)
                                                                    {{ ($k==$value->money) ? $v : '' }}
                                                                    @endforeach
                                                                </label>
                                                                <label>
                                                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                                    {{ date('d-m-Y', strtotime($value->created_at)) }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="operate">
                                                <div class="title-right">
                                                    <h4>HỢP TÁC CÙNG 388</h4>
                                                </div>
                                                <div class="py-2 px-3">
                                                    <span>Nhấp chuột vào link liên kết để liên hệ với 388</span>
                                                </div>
                                                <div class="d-flex py-2">
                                                    <a href="#" class="btn-sm font-weight-bold text-center btn-info w-50 mx-2 text-white">Facebook</a>
                                                    <a href="#" class="btn-sm font-weight-bold text-center btn-info w-50 mx-2 text-white">Zalo</a>
                                                </div>
                                                <div class="d-flex py-2 text-right align-items-center">
                                                    <div class="flex-grow-1 pr-3">
                                                        <h5>0909 090 922</h5>
                                                        <span>HOTLINE</span>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-warning d-inline-block text-center align-items-center">
                                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
@stop