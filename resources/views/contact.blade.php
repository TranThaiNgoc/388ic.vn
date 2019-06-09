@extends('layouts.app1')
@section('title', 'Liên hệ')
@section('content')
<section class="contact">
    <div class="container animated fadeIn">
        <div class="row">
            <div class="col-md-12 p-3 home-title">
                <div class="d-md-inline-block text-md-left text-center text-primary title-content">
                    <div class="be-text-large d-md-inline-block d-block">
                        <ul class="nolist be-breadcrumb text-uppercase d-inline-block">
                            <li><a href="{{ url('/') }}">@lang('home.home_menu')</a></li>
                            <!-- //Home -->
                            <li><span>@lang('home.contact_menu')</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 py-3">
                <h1 class="header-title text-warning">@lang('home.contact_menu')</h1>
                <hr>
            </div>
            <div class="col-12" id="parent">
                <div class="row">
                    <div class="col-md-6 order-1 order-md-0">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.573190031049!2d107.09900765043832!3d10.375970669258114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317571c9cb02e367%3A0xc59432ef2c3de9ea!2zQ8O0bmcgdHkgQ-G7lSBwaOG6p24gxJDhuqd1IHTGsCB2w6AgWMOieSBs4bqvcCAzODggKDM4OCBJQyk!5e0!3m2!1svi!2s!4v1559637020249!5m2!1svi!2s"
                            width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6 order-0 order-md-1">
                        <form action="" class="contact-form" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control w-100 mr-0" id="name" name="nm" placeholder="@lang('home.name')"
                                    required="" autofocus="">
                            </div>
                            <div class="form-group form_left">
                                <input type="email" class="form-control w-100 mr-0" id="email" name="em" placeholder="Email"
                                    required="">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control w-100 mr-0" id="phone" 
                                    placeholder="@lang('home.phone')" required="">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control textarea-contact" rows="3" id="comment" name="FB"
                                    placeholder="@lang('home.content')" required=""></textarea>
                            </div>
                            <button class="btn btn-info btn-send my-3 my-md-0"> <span class="glyphicon glyphicon-send"></span>
                                @lang('home.submit')
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>
@stop