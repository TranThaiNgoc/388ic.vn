@extends('layouts.app1')
@section('title', 'Sơ đồ tổ chức')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-3 home-title">
                <div class="d-md-inline-block text-md-left text-center text-primary title-content">
                    <div class="be-text-large d-md-inline-block d-block">
                        <ul class="nolist be-breadcrumb text-uppercase d-inline-flex">
                            <li><a href="{{ url('/') }}">Trang chủ</a></li>
                            <li><span>Sơ đồ tổ chức</span></li>
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
                    Sơ đồ tổ chức
                </h1>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-md-9 py-3 py-md-0">
                        <ul class="nolist flex-nowrap nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active tabs-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                                aria-selected="true">Sơ đồ tổ chức</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link tabs-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                                aria-selected="false">Sơ đồ tổ chức trang web</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <img src="{{ isset($about_organization->image_organization) ? $about_organization->image_organization : '' }}">
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <img src="{{ isset($about_organization->image_site_organization) ? $about_organization->image_site_organization : '' }}">
                            </div>
                        </div>
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