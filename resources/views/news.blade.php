@extends('layouts.app1')
@section('title', 'Tin tức')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-3 home-title">
                <div class="d-md-inline-block text-md-left text-center text-primary title-content">
                    <div class="be-text-large d-md-inline-block d-block">
                        <ul class="nolist be-breadcrumb text-uppercase d-inline-block">
                            <li><a href="{{ url('/') }}">@lang('home.home_menu')</a></li>
                            <li><a href="{{ route('list_news') }}">@lang('home.news_menu')</a></li>
                            @if(Session::get('locale') == "vi")
                            <li><span>{{ $news->name }}</span></li>
                            @else
                            <li><span>{{ $news->name_en }}</span></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="newpost">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    @if(Session::get('locale') == "vi")
                    <article class="col-md-9">
                        <div class="row">
                            <div class="col-12 py-3">
                                <h1 class="title-post">{{ $news->name }}</h1>
                            </div>
                            <div class="col-12 post-date text-secondary">
                                <p class="la-text-normal">
                                    <i aria-hidden="true" class="fa fa-calendar"></i>
                                    <span>{{ date('d-m-Y H:m:s', strtotime($news->created_at)) }}</span>
                                </p>
                            </div>
                            <div class="col-12 post-title-small">
                                <h2>{!! $news->summary !!}</h2>
                                <p>{!! $news->content !!}</b>
                            </div>
                        </div>
                    </article>
                    @elseif(Session::get('locale') == "en")
                    <article class="col-md-9">
                        <div class="row">
                            <div class="col-12 py-3">
                                <h1 class="title-post">{{ $news->name_en }}</h1>
                            </div>
                            <div class="col-12 post-date text-secondary">
                                <p class="la-text-normal">
                                    <i aria-hidden="true" class="fa fa-calendar"></i>
                                    <span>{{ date('d-m-Y H:m:s', strtotime($news->created_at)) }}</span>
                                </p>
                            </div>
                            <div class="col-12 post-title-small">
                                <h2>{!! $news->summary_en !!}</h2>
                                <p>{!! $news->content_en !!}</b>
                            </div>
                        </div>
                    </article>
                    @endif
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
</section>
@stop