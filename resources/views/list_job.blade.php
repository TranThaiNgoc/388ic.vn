@extends('layouts.app1')
@section('title', 'Danh sách tuyển dụng')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-3 home-title">
                <div class="d-md-inline-block text-md-left text-center text-primary title-content">
                    <div class="be-text-large d-md-inline-block d-block">
                        <ul class="nolist be-breadcrumb text-uppercase d-inline-flex">
                            <li><a href="{{ url('/') }}">Trang chủ</a></li>
                            <li><span>Tin tuyển dụng</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="recruit">
    <div class="container">
        <div class="row">
            <div class="col-12 py-3">
                <h1 class="header-title text-md-left text-uppercase">Tuyển Dụng</h1>
                <hr>
            </div>
            <div class="col-12 news-content">
                <div class="row">
                    <div class="col-md-9">
                        <ul class="nolist">
                        	@foreach(@$job as $value)
                            <li class="recruit-items__hover mb-3">
                                <div class="row align-items-center">
                                    <div class="col-md-4 col-4">
                                        <a href="{{ route('job',['slug'=>$value->slug]) }}"><img src="{{ $value->image }}" alt="{{ $value->title }}"></a>
                                    </div>
                                    <div class="col-md-8 col-8">
                                        <div class="recruit-title">
                                            <a href="{{ route('job',['slug'=>$value->slug]) }}">{{ $value->title }}</a>
                                        </div>
                                        <div class="recruit-content">
                                            <label>
                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                @foreach(config('master_admin.mucluong') as $k => $v)
												{{ ($value->money == $k) ? $v : '' }}
                                                @endforeach
                                            </label>
                                            <label>
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                {{ date('d-m-Y', strtotime($value->created_at)) }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <div class="col-md-12 py-3">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    {{ $job->links() }}
                                </ul>
                            </nav>
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