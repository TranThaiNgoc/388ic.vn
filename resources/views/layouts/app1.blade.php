<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="DC.Language" content="vi" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="">
    <title>Công ty cổ phần đầu tư và xây lắp 388 {{ isset($meta_title) ? $meta_title : '' }}</title>
    <meta name="description" content="{{ isset($meta_description) ? $meta_description :'' }}" />
    <meta name="DC.Language" content="vi" >
    <link rel="alternate" href="{{ url('/') }}" hreflang="{{ str_replace('_', '-', app()->getLocale()) }}" />
    <meta name="copyright" content="Công ty cổ phần đầu tư và xây lắp 388" />
    <meta name="robots" content="index,follow" />
    <meta name="geo.placename" content="Ha Noi, Viet Nam" />
    <meta name="geo.region" content="VN-HN" />
    <meta name="geo.position" content="21.030624;105.782431" />
    <meta name="ICBM" content="21.030624, 105.782431" />
    <meta name="revisit-after" content="days" />
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/custom.css?v=1')}}">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3&appId=2046573405635669&autoLogAppEvents=1">
    </script>
</head>
<style>
    .card-body {
        padding: 12px!important;
    }
    .be-breadcrumb li {
        display: inline-block;
    }
    .img-company-items {
        height: 100px;
        object-fit: cover;
    }
    @media screen and (max-width: 996px) {
        .img-company-items {
            height: 60px;
        }
    }
    @media screen and (max-width: 575px) {
        .img-company-items {
            height: auto!important;
        }
    }
</style>
<body>
    <section class="">
        <div class="container">
            <div class="d-flex flex-wrap">
                <div class="flex-grow-1">
                    <div class="logo bg-white d-inline-block d-flex align-items-center">
                        <a id="logo" href="{{ url('/') }}" class="d-block py-1">
                            <img src="{{ $configuration->logo_website }}" alt="388ic.com">
                        </a>
                        <div class="logo-name d-none d-md-block ml-2">
                            @lang('home.title')</span>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <div class="topBar text-right p-2 d-none d-md-block">
                        <a href="locale/en" class="text-dark">
                            <img class="flag" src="{{asset('home/images/eng.jpg')}}">
                            ENG
                        </a>
                        <a href="locale/vi" class="text-dark">
                            <img class="flag" src="{{asset('home/images/vietnam.jpg')}}" alt="">
                            VI
                        </a>
                    </div>
                    <form method="GET" action="tim-du-an">
                        <div class="d-flex flex-direction-row justify-content-center">
                            <div class="searchbar">
                                <input class="search_input rounded px-2" type="text" name="name" placeholder="Search..."
                                style="border: 1px solid #ddd">
                                <button class="search_icon btn-sm border-0 btn-info" type="submit"
                                style="line-height: 1.4;">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <div id="toggle" class="d-block d-md-none text-right p-2">
                    <a href="#" data-menu class="text-dark">
                        <i class="fa fa-lg fa-bars"></i>
                        <span>Menu</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<header id="header">
    <div class="container">
        <div class="sticky">
            <div class="row align-items-center">
                <div class="col-md-12 h-100">
                    <nav id="navbar" class="nav-header">
                        <ul class="nolist d-flex flex-wrap">
                            <li><a href="{{ url('/') }}">@lang('home.home_menu')</a></li>
                            <li>
                                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('home.about_menu')
                                </a>
                                <div class="dropdown-menu bg-light p-0 m-0" style="z-index: 10000;">
                                    <ul class="nolist">
                                        <li><a href="{{ route('about_company') }}">@lang('home.general_introduction')</a></li>
                                        <li><a href="{{ route('about_organization') }}">@lang('home.organizational_chart')</a></li>
                                        <li><a href="{{ route('about_manager') }}">@lang('home.board_of_directors')</a></li>
                                        <li><a href="{{ route('about_par') }}">@lang('home.vision_mission')</a></li>
                                        <li><a href="{{ route('about_develope') }}">@lang('home.development_strategy')</a></li>
                                        <li><a href="{{ route('about_business') }}">@lang('home.business_areas')</a></li>
                                        <li><a href="{{ route('about_image') }}">@lang('home.active_image')</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="{{ route('list_news') }}">@lang('home.news_menu')
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('list_project') }}">@lang('home.project_menu')
                                </a>
                            </li>
                            <li>
                                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('home.certificate')
                                </a>
                                <div class="dropdown-menu bg-light p-0 m-0" style="z-index: 10000;">
                                    <ul class="nolist">
                                        @foreach(@$certificates as $value)
                                        <li><a href="{{ route('certificate',['slug'=>$value->slug]) }}">{{ $value->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="{{ route('list_job') }}">@lang('home.job_menu')
                                </a>
                            </li>
                            <li><a href="{{ route('contact') }}">@lang('home.contact_menu')</a></li>
                            <li class="d-block d-md-none ">
                                <div class="topBar pb-2 d-flex">
                                    <a href="locale/en" class="text-dark">
                                        <img class="flag" src="{{asset('home/images/eng.jpg')}}" alt="">
                                        ENG
                                    </a>
                                    <a href="locale/vi" class="text-dark">
                                        <img class="flag" src="{{asset('home/images/vietnam.jpg')}}" alt="">
                                        VI
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</header>
<style>
    .dropdown-menu a {
        padding: 8px 15px;
        display: block;
    }

    .sub-menu {
        position: absolute;
        visibility: hidden;
        will-change: transform;
        top: 100%;
        transform-origin: top;
        transform: scale(1, 0);
        z-index: 1;
        transition: all 0.3s ease-in-out;
    }

    .sub-menu-parent:hover>.sub-menu {
        transform: scale(1, 1);
        visibility: visible;
        transition-delay: 0s, 0s, 0.3s;
        z-index: 2;
    }

    .sub-menu-parent .sub-menu-parent__link::after {
        content: '\f0dd';
        font-family: FontAwesome;
        color: #fff;
    }
</style>

@yield('content')

<footer id="footer">
    <div class="bg-footer" style="background-image: url('http://www.coteccons.vn/images/bgfooter.png')">
        <div class="container">
            <div class="company">
                <div class="d-flex flex-wrap title-descript pt-3">
                    <div class="flex-grow-1">
                        <h3 class="text-uppercase">@lang('home.strategic_partnership')</h3>
                    </div>
                </div>
                <div class="d-flex flex-wrap py-3">
                    <div class="swiper-container swiper-logo">
                        <div class="swiper-wrapper logo-list">
                            @foreach(@$parnter as $key => $value)
                            <div class="swiper-slide">
                                <img src="{{ $value->image }}" alt="{{ $value->name }}">
                            </div>
                            @endforeach
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
            <div class="footer-main">
                <div class="d-flex flex-wrap">
                    <div class="col-md-8">
                        <div class="footer-title">
                            <h4>Thông tin công ty</h4>
                        </div>
                        <div class="footer-body">
                            <ul class="nolist">
                                <li>
                                    <span><u>@lang('home.headquarters'):</u></span>
                                    <span>20A PHẠM VĂN DINH - P.THẮNG NHẤT - TP.VŨNG TÀU</span>
                                </li>
                                <li>
                                    <span><u>@lang('home.phone'):</u></span>
                                    <a class="text-white" href="tel:02543.585.388">02543.585.388</a>
                                </li>
                                <li>
                                    <span><u>Fax:</u></span>
                                    <span> 02543.585.388</span>
                                </li>
                                <li>
                                    <span><u>Email:</u></span>
                                    <span>admin@388ic.com.vn</span>
                                </li>
                                <li>
                                    <a href="http://mail.388ic.com.vn/Mondo/lang/sys/Login.aspx?Version=Desktop" target="_blank" class="text-white"><u>Webmail</u></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-title">
                            <h4>Fanpage</h4>
                        </div>
                        <div class="footer-body">
                            <div class="fb-page"
                            data-href="https://www.facebook.com/C%C3%B4ng-ty-C%E1%BB%95-ph%E1%BA%A7n-%C4%90%E1%BA%A7u-t%C6%B0-v%C3%A0-X%C3%A2y-l%E1%BA%AFp-388-388IC-320814771937085/?ref=br_rs"
                            data-tabs="timeline" data-width="" data-height="200" data-small-header="false" data-adapt-container-width="true"
                            data-hide-cover="false" data-show-facepile="true">
                            <blockquote
                            cite="https://www.facebook.com/C%C3%B4ng-ty-C%E1%BB%95-ph%E1%BA%A7n-%C4%90%E1%BA%A7u-t%C6%B0-v%C3%A0-X%C3%A2y-l%E1%BA%AFp-388-388IC-320814771937085/?ref=br_rs"
                            class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/C%C3%B4ng-ty-C%E1%BB%95-ph%E1%BA%A7n-%C4%90%E1%BA%A7u-t%C6%B0-v%C3%A0-X%C3%A2y-l%E1%BA%AFp-388-388IC-320814771937085/?ref=br_rs">Công
                        ty Cổ phần Đầu tư và Xây lắp 388 - 388IC</a></blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="copyright py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span class="text-white">Copyright &copy; 2019 388IC</span>
                <span class="text-dark">Design by <a href="#" class="text-dark">TyHon Company</a></span>
            </div>
        </div>
    </div>
    <div class="scroll-top" style="cursor: pointer;">
        <a class="smooth-scroll">
            <i class="fa fa-caret-up" aria-hidden="true"></i>
        </a>
    </div>

</div>
</footer>
<script src="{{asset('home/js/jquery.min.js')}}"></script>
<script src="{{asset('home/js/popper.min.js')}}"></script>
<script src="{{asset('home/js/swiper.min.js')}}"></script>
<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
<script src="{{asset('home/js/app.js')}}"></script>
<script type="text/javascript">
    $('.scroll-top').on("click", function () {
    $(window).scrollTop(0);
});
</script>

</body>

</html>