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
                            <li><span>@lang('home.active_image')</span></li>
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
                    @lang('home.active_image')
                </h1>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-md-9 py-3 py-md-0">
                        @foreach(@$list_image as $key => $value)
                        <div class="title-album">
                            @if(Session::get('locale') == 'vi')
                            <h2>{{ $value['name'] }}</h2>
                            @elseif(Session::get('locale') == 'en')
                            <h2>{{ $value['name_en'] }}</h2>
                            @endif
                        </div>
                        <div class="row py-3">
                        @foreach(@$value['post'] as $v)
                            <div class="col-lg-3 col-md-4 col-6 mb-3 mb-md-0 thumb ">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" 
                                data-caption="Some lovely red flowers"
                                data-image="{{ $v->image }}"
                                data-target="#image-gallery">
                                <img class="img-responsive album-img" src="{{ $v->image }}"
                                alt="Short alt text">
                                </a>
                            </div>
                        @endforeach
                        </div>
                        @endforeach
                        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                                        class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="image-gallery-title"></h4>
                                    </div>
                                    <div class="modal-body">
                                        <img id="image-gallery-image" class="img-responsive" src="">
                                    </div>
                                    <div class="modal-footer">
                                        <div class="col-md-2 mr-3">
                                            <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                                        </div>

                                        <div class="col-md-2">
                                            <button type="button" id="show-next-image" class="btn btn-warning">Next</button>
                                        </div>
                                    </div>
                                </div>
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