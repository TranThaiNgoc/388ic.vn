<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/app.css')}}">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3&appId=2046573405635669&autoLogAppEvents=1">
</script>
<title>@yield('title')</title>
</head>

<body>
    <section class="">
        <div class="container">
            <div class="d-flex flex-wrap">
                <div class="flex-grow-1">
                    <div class="logo bg-white d-inline-block">
                        <a href="#" class="d-block py-1">
                            <img src="{{ $configuration->logo_website }}" alt="388ic.com">
                        </a>
                    </div>
                </div>
                <div class="header-right">
                    <div class="topBar text-right p-2 d-none d-md-block">
                        <a href="#" class="text-dark">
                            <img class="flag" src="{{asset('home/images/eng.jpg')}}" alt="">
                            ENG
                        </a>
                        <a href="#" class="text-dark">
                            <img class="flag" src="{{asset('home/images/vietnam.jpg')}}" alt="">
                            VI
                        </a>
                    </div>
                    <form method="get" action="">
                        <div class="d-flex flex-direction-row justify-content-center">
                            <div class="searchbar">
                                <input class="search_input rounded px-2" type="text" name="" placeholder="Search..."
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
                            <li><a href="{{ url('/') }}">Trang chủ</a></li>
                            <li>
                                <a href="{{ route('about') }}">Giới thiệu
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('list_news') }}">Tin Tức
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('list_project') }}">Dự Án
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('list_job') }}">Tuyển Dụng
                                </a>
                            </li>
                            <li><a href="{{ route('contact') }}">Liên Hệ</a></li>
                            <li class="d-block d-md-none ">
                                <div class="topBar pb-2 d-flex">
                                    <a href="#" class="text-dark">
                                        <img class="flag" src="{{asset('home/images/eng.jpg')}}" alt="">
                                        ENG
                                    </a>
                                    <a href="#" class="text-dark">
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
                        <h3 class="text-uppercase">Đối tác chiến lược</h3>
                    </div>
                </div>
                <div class="d-flex flex-wrap py-3">
                    <ul class="nolist company-list">
                        <li>
                            <a href="#">
                                <img src="{{asset('home/images/logo1.png')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{asset('home/images/logo2.png')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{asset('home/images/logo3.png')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{asset('home/images/logo4.png')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{asset('home/images/logo5.png')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{asset('home/images/logo6.png')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{asset('home/images/logo7.png')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{asset('home/images/logo8.png')}}" alt="">
                            </a>
                        </li>
                    </ul>
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
                                    <span><u>Văn Phòng Đại Diện:</u></span>
                                    <span>No 20A – Pham Van Dinh Street – Thang Nhat Ward – Vung Tau City – Ba Ria Vung Tau Province.</span>
                                </li>
                                <li>
                                    <span><u>Trụ Sở Chính:</u></span>
                                    <span>No 2/14 - Bao Phuc Street – Dang Hai Ward - Ngo Quyen Dist - Hai Phong City</span>
                                </li>
                                <li>
                                    <span><u>Số điện thoại:</u></span>
                                    <span> +84 2253 722 126</span>
                                </li>
                                <li>
                                    <span><u>Hotline:</u></span>
                                    <span> +84 313 851 266</span>
                                </li>
                                <li>
                                    <span><u>Email:</u></span>
                                    <span>admin@388ic.com.vn</span>
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
                <span class="text-white">Copyright &copy; 2019 388ic Group.</span>
                <span class="text-dark">Design by <a href="#" class="text-dark">TyHon Company</a></span>
            </div>
        </div>
    </div>
    <div class="scroll-top">
        <a href="#" class="smooth-scroll">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
            Top
        </a>
    </div>

</div>
</footer>
<script src="{{asset('home/js/jquery.min.js')}}"></script>
<script src="{{asset('home/js/popper.min.js')}}"></script>
<script src="{{asset('home/js/swiper.min.js')}}"></script>
<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
<script src="{{asset('home/js/app.js')}}"></script>

</body>

</html>