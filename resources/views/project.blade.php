@extends('layouts.app1')
@section('title', 'Dự án')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-3 home-title">
                <div class="d-md-inline-block text-md-left text-center text-primary title-content">
                    <div class="be-text-large d-md-inline-block d-block">
                        <ul class="nolist be-breadcrumb text-uppercase d-inline-flex">
                            <li><a href="{{ url('/') }}">Trang chủ</a></li>
                            <li><a href="{{ route('list_project') }}">Dự án</a></li>
                            <li><span>{{ $project->name }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="d-flex flex-wrap title-descript pt-3 mb-3">
                    <div class="flex-grow-1">
                        <h1 class="text-uppercase" style="font-size: 16pt;">{{ $project->name }}</h1>
                    </div>
                </div>
                <div class="slide">
                    <div class="d-flex flex-column h-100">
                        <div id="slider_product_detail" class="swiper-container gallery-top">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ $project->image1 }}" alt="{{ $project->name }}">
                                </div>
                                @if(!is_null($project->image2))
                                <div class="swiper-slide">
                                    <img src="{{ $project->image2 }}" alt="{{ $project->name }}">
                                </div>
                                @endif
                                @if(!is_null($project->image2))
                                <div class="swiper-slide">
                                    <img src="{{ $project->image3 }}" alt="{{ $project->name }}">
                                </div>
                                @endif
                                @if(!is_null($project->image2))
                                <div class="swiper-slide">
                                    <img src="{{ $project->image4 }}" alt="{{ $project->name }}">
                                </div>
                                @endif
                            </div>
                            <div class="swiper-button-next swiper-button-white"></div>
                            <div class="swiper-button-prev swiper-button-white"></div>
                        </div>
                        <div id="slider_product_thumb" class="swiper-container gallery-thumbs small">
                            <div class="swiper-wrapper justify-content-center">
                                <div class="swiper-slide">
                                    <img src="{{ $project->image1 }}" alt="{{ $project->name }}">
                                </div>
                                @if(!is_null($project->image2))
                                <div class="swiper-slide">
                                    <img src="{{ $project->image2 }}" alt="{{ $project->name }}">
                                </div>
                                @endif
                                @if(!is_null($project->image2))
                                <div class="swiper-slide">
                                    <img src="{{ $project->image3 }}" alt="{{ $project->name }}">
                                </div>
                                @endif
                                @if(!is_null($project->image2))
                                <div class="swiper-slide">
                                    <img src="{{ $project->image4 }}" alt="{{ $project->name }}">
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap title-descript pt-3 mb-3">
                    <div class="flex-grow-1">
                        <h3 class="text-uppercase" style="font-size: 13pt;">Chi tiết dự án</h3>
                    </div>
                </div>
                <div class="content-products">
                    <p>{!! $project->content !!}</p>
                </div>
                <div class="d-flex flex-wrap title-descript pt-3 mb-3">
                    <div class="flex-grow-1">
                        <h3 class="text-uppercase" style="font-size: 13pt;">Dự án liên quan</h3>
                    </div>
                </div>
                <div class="row">
                    @foreach(@$project_lq as $value)
                    <div class="col-md-4 col-12">
                        <div class="card border mb-2 card-hover-primary">
                            <div class="card-another-top">
                                <a href="{{ route('project', ['slug' => $value->slug]) }}" class="w-100">
                                    <img class="product-image w-100 p-2"
                                        src="{{ $value->image1 }}" alt="{{ $value->name }}">
                                </a>
                            </div>
                            <div class="card-another-body text-center">
                                <a href="{{ route('project', ['slug' => $value->slug]) }}" class="text-uppercase p-2 d-block">{{ $value->name }}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
</section>
@stop