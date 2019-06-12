@extends('layouts.app1')
@section('title', 'Chiến lược phát triển')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-3 home-title">
                <div class="d-md-inline-block text-md-left text-center text-primary title-content">
                    <div class="be-text-large d-md-inline-block d-block">
                        <ul class="nolist be-breadcrumb text-uppercase d-inline-flex">
                            <li><a href="{{ url('/') }}">Trang chủ</a></li>
                            <li><span>Chiến lược phát triển</span></li>
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
            <div class="col-12 py-3">
                <h1 class="header-title text-md-left text-uppercase text-center text-md-left">
                    {{ isset($develope->name) ? $develope->name : '' }}
                </h1>
                <hr>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-md-9 py-3 py-md-0">
                        {!! isset($develope->content) ? $develope->content : '' !!}
                    </div>
                    <div class="col-md-3">
                        <div class="d-block text-center">
                            <h5>Dự Án Liên Quan</h5>
                        </div>
                        <div class="row">
                        	@foreach(@$project as $value)
                            <div class="col-md-12 col-12">
                                <div class="card border mb-2 card-hover-primary">
                                    <div class="card-another-top">
                                        <a href="{{ route('project',['slug'=>$value->slug]) }}" class="w-100">
                                            <img class="product-image w-100 p-2" src="{{ $value->image1 }}" alt="{{ $value->name }}">
                                        </a>
                                    </div>
                                    <div class="card-another-body text-center">
                                        <a href="{{ route('project',['slug'=>$value->slug]) }}" class="text-uppercase p-2 d-block">{{ $value->name }}</a>
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