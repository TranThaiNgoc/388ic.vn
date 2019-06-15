@extends('layouts.app1')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-3 home-title">
                <div class="d-md-inline-block text-md-left text-center text-primary title-content">
                    <div class="be-text-large d-md-inline-block d-block">
                        <ul class="nolist be-breadcrumb text-uppercase d-inline-flex">
                            <li><a href="{{ url('/') }}">@lang('home.home_menu')</a></li>
                            <li><span>@lang('home.general_introduction')</span></li>
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
                <h1 class="header-title text-md-left text-uppercase text-center text-md-left">@lang('home.company_overview')</h1>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="overflow-auto bg-white">
                                    @if(Session::get('locale') == "vi")
                                    {!! isset($about_company->content) ? $about_company->content : '' !!}
                                    @elseif(Session::get('locale') == "en")
                                    {!! isset($about_company->content_en) ? $about_company->content_en : '' !!}
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4 py-3 py-md-0">
                                <img src="{{ isset($about_company->image) ? $about_company->image : '' }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-block text-center">
                            <h5>@lang('home.new_project')</h5>
                        </div>
                        @if(Session::get('locale') == "vi")
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
                        @elseif(Session::get('locale') == "en")
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
                        @endif
            </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop