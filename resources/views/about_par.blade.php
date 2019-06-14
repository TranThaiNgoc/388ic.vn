@extends('layouts.app1')
@section('title', 'Tầm nhìn sứ mệnh')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-3 home-title">
                <div class="d-md-inline-block text-md-left text-center text-primary title-content">
                    <div class="be-text-large d-md-inline-block d-block">
                        <ul class="nolist be-breadcrumb text-uppercase d-inline-flex">
                            <li><a href="{{ url('/') }}">@lang('home.home_menu')</a></li>
                            <li><span>@lang('home.vision_mission')</span></li>
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
                    @if(Session::get('locale') == "vi")
                    {{ isset($par->name) ? $par->name : '' }}
                    @elseif(Session::get('locale') == "vi")
                    {{ isset($par->name_en) ? $par->name_en : '' }}
                    @endif
                </h1>
                <hr>
            </div>
            <div class="col-12">
                @if(Session::get('locale') == "vi")
                <div class="row">
                    <div class="col-md-9 py-3 py-md-0">
                        {!! isset($par->content) ? $par->content : '' !!}
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
                @elseif(Session::get('locale') == "en")
                <div class="row">
                    <div class="col-md-9 py-3 py-md-0">
                        {!! isset($par->content_en) ? $par->content_en : '' !!}
                    </div>
                    <div class="col-md-3">
                        <div class="d-block text-center">
                            <h5>@lang('home.new_project')</h5>
                        </div>
                        <div class="row">
                            @foreach(@$project as $value)
                            <div class="col-md-12 col-12">
                                <div class="card border mb-2 card-hover-primary">
                                    <div class="card-another-top">
                                        <a href="{{ route('project',['slug'=>$value->slug]) }}" class="w-100">
                                            <img class="product-image w-100 p-2" src="{{ $value->image1 }}" alt="{{ $value->name_en }}">
                                        </a>
                                    </div>
                                    <div class="card-another-body text-center">
                                        <a href="{{ route('project',['slug'=>$value->slug]) }}" class="text-uppercase p-2 d-block">{{ $value->name_en }}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

@stop