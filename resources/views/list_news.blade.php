@php
    use App\Http\Controllers\Common\Common;
@endphp
@extends('layouts.app1')
@section('title', 'Danh sách bài viết')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-3 home-title">
                <div class="d-md-inline-block text-md-left text-center text-primary title-content">
                    <div class="be-text-large d-md-inline-block d-block">
                        <ul class="nolist be-breadcrumb text-uppercase d-inline-block">
                            <li><a href="{{ url('/') }}">@lang('home.home_menu')</a></li>
                            <li><span>@lang('home.news_menu')</span></li>
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
                <h1 class="header-title text-md-left text-uppercase">@lang('home.news_menu')</h1>
                <hr>
            </div>
            <div class="col-12 news-content">
                <div class="row">
                    @if(Session::get('locale') == "vi")
                    <div class="col-md-9">
                        <ul class="nolist">
                            @foreach(@$news as $value)
                            <li class="recruit-items__hover mb-3">
                                <div class="row align-items-center">
                                    <div class="col-md-4 col-4">
                                    <a href="{{ route('news',['slug' => $value->slug]) }}"><img src="{{ $value->image }}" alt="{{ $value->name }}"></a>
                                </div>
                                <div class="col-md-8 col-8">
                                    <div class="post-title">
                                        <a href="{{ route('news',['slug' => $value->slug]) }}">{{ $value->name }}</a>
                                    </div>
                                    <div class="post-content d-none d-md-block">
                                        <p>{!! Common::_substr(strip_tags($value->summary), 300) !!}</p>
                                    </div>
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
                    @elseif(Session::get('locale') == "en")
                    <div class="col-md-9">
                        <ul class="nolist">
                            @foreach(@$news as $value)
                            <li class="recruit-items__hover mb-3">
                                <div class="row align-items-center">
                                    <div class="col-md-4 col-4">
                                    <a href="{{ route('news',['slug' => $value->slug]) }}"><img src="{{ $value->image }}" alt="{{ $value->name_en }}"></a>
                                </div>
                                <div class="col-md-8 col-8">
                                    <div class="post-title">
                                        <a href="{{ route('news',['slug' => $value->slug]) }}">{{ $value->name_en }}</a>
                                    </div>
                                    <div class="post-content d-none d-md-block">
                                        <p>{!! Common::_substr(strip_tags($value->summary_en), 300) !!}</p>
                                    </div>
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
    </div>
</section>
@stop