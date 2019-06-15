@extends('layouts.app1')
@section('content')
<section class="intro-main">
    <div class="container">
        <div class="img-main" style="background-image: url('https://batdongsannhadep.com/wp-content/uploads/2019/05/19.jpg')">
            <div class="row">
                <article class="about-box">
                    <h2 class="about-box_title">@lang('home.history_begin')</h2>
                    <div class="about-box_content p-3 mt-3">
                        <p>@lang('home.content_history_begin')</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <div class=" py-3">
        <div class="container">
            <div class="text-center">
                <h2 class="text-uppercase about-title">
                    388IC @lang('home.maxim')
                </h2>
            </div>
            <div class="about-content">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="img-left">
                        <img src="{{asset('/home/images/about1.png')}}" alt="">
                    </div>
                    <div class="content-right">
                        <div class="content-boxs">
                            <span>@lang('home.mission')</span> 
                            @lang('home.mission_content')
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center">
                    <div class="content-right order-1 order-md-0">
                        <div class="content-boxs">
                            <span>@lang('home.policy')</span> 
                            @lang('home.policy_content')
                        </div>
                    </div>
                    <div class="img-left order-0 order-md-1">
                        <img src="{{asset('/home/images/about2.png')}}" alt="">
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center">
                    <div class="img-left">
                        <img src="{{asset('/home/images/about3.png')}}" alt="">
                    </div>
                    <div class="content-right">
                        <div class="content-boxs">
                            <span>@lang('home.cultural')</span>
                            @lang('home.cultural_content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery-about">
        <div class="container">
            <div class="text-center">
                <h2 class="text-uppercase about-title">
                    @lang('home.image') 388IC
                </h2>
            </div>
            <div class="d-flex flex-wrap p-0">
                <div class="col-lg-4 col-md-6 col-12 p-0">
                    <img src="{{asset('/home/images/gallery1.png')}}" alt="">
                </div>
                <div class="col-lg-4 col-md-6 col-12 p-0">
                    <img src="{{asset('/home/images/gallery2.png')}}" alt="">
                </div>
                <div class="col-lg-4 col-md-6 col-12 p-0">
                    <img src="{{asset('/home/images/gallery3.png')}}" alt="">
                </div>
                <div class="col-lg-4 col-md-6 col-12 p-0">
                    <img src="{{asset('/home/images/gallery4.png')}}" alt="">
                </div>
                <div class="col-lg-4 col-md-6 col-12 p-0">
                    <img src="{{asset('/home/images/gallery5.png')}}" alt="">
                </div>
                <div class="col-lg-4 col-md-6 col-12 p-0">
                    <img src="{{asset('/home/images/gallery6.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@stop