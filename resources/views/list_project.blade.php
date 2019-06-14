@php
    use App\Http\Controllers\Common\Common;
@endphp
@extends('layouts.app1')
@section('title', 'Danh sách dự án')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-3 home-title">
                <div class="d-md-inline-block text-md-left text-center text-primary title-content">
                    <div class="be-text-large d-md-inline-block d-block">
                        <ul class="nolist be-breadcrumb text-uppercase d-inline-block">
                            <li><a href="{{ url('/') }}">@lang('home.home_menu')</a></li>
                            <li><span>@lang('home.project_menu')</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="products">
    <div class="container">
        <div class="row">
            <div class="col-12 py-3">
                <h1 class="header-title text-md-left text-uppercase">@lang('home.all_project')</h1>
                <hr>
            </div>
            <div class="col-12 product-content">
                <div class="row">
                    <div class="col-md-9">
                        @if(Session('locale')=='vi')
                        <div class="row">
                            @foreach(@$project as $value)
                            <div class="col-md-4 mb-3">
                                <div class="card card-hover">
                                    <div class="card-top">
                                        <a href="{{ route('project', ['slug'=>$value->slug]) }}"><img
                                                src="{{ $value->image1 }}"
                                                alt="{{ $value->name }}" class="products-img"></a>
                                    </div>
                                    <div class="card-body">
                                        <div class="products-title">
                                            <a href="{{ route('project', ['slug'=>$value->slug]) }}">{{ $value->name }}</a>
                                        </div>
                                        <div class="products-content">
                                            <span>{!! Common::_substr(strip_tags($value->content), 60) !!}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @elseif(Session('locale')=='en')
                        <div class="row">
                            @foreach(@$project as $value)
                            <div class="col-md-4 mb-3">
                                <div class="card card-hover">
                                    <div class="card-top">
                                        <a href="{{ route('project', ['slug'=>$value->slug]) }}"><img
                                                src="{{ $value->image1 }}"
                                                alt="{{ $value->name_en }}" class="products-img"></a>
                                    </div>
                                    <div class="card-body">
                                        <div class="products-title">
                                            <a href="{{ route('project', ['slug'=>$value->slug]) }}">{{ $value->name_en }}</a>
                                        </div>
                                        <div class="products-content">
                                            <span>{!! Common::_substr(strip_tags($value->content_en), 60) !!}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif
                        <div class="col-md-12 py-3">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    {{ $project->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="title-right">
                            <h4>@lang('home.according_to_the_progress')</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nolist product-years">
                                    <li><a href="{{ route('search_project','dathicong') }}">@lang('home.already_constructed')</a></li>
                                    <li><a href="{{ route('search_project','dangthicong') }}">@lang('home.under_construction')</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop