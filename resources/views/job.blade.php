@extends('layouts.app1')
@section('title', 'Tuyển dụng')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-3 home-title">
                <div class="d-md-inline-block text-md-left text-center text-primary title-content">
                    <div class="be-text-large d-md-inline-block d-block">
                        <ul class="nolist be-breadcrumb text-uppercase d-inline-block">
                            <li><a href="{{ url('/') }}">Trang chủ</a></li>
                            <li><a href="{{ route('list_job') }}">Tuyển dụng</a></li>
                            <li><span>{{ $job->title }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="d-flex flex-wrap align-items-center mb-3 detail-company">
            <div class="col-md-2 text-center img-company py-2">
                <img class="img-company-items" src="{{ $job->image }}" alt="{{ $job->title }}">
            </div>
            <div class="col-md-10 content-company py-2">
                <ul class="nolist">
                    <li class="post-title-sm">
                        <span class="post-itemlist-title detail-company__title">{{ $job->title }}</span>
                    </li>
                </ul>
                <div class="recruit-content">
                    <label>
                        <i class="fa fa-money" aria-hidden="true"></i>
                        @foreach(config('master_admin.mucluong') as $k => $v)
							{{ ($job->money == $k) ? $v : '' }}
                        @endforeach
                    </label>
                    <label>
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        {{ date('d-m-Y', strtotime($job->created_at)) }}
                    </label>
                    <label>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        SL: {{ $job->number }}
                    </label>
                </div>
                <div class="recruit-content">
                    <span class="btn-sm btn-warning d-inline-block m-1">@foreach(config('master_admin.kinhnghiem') as $k => $v)
						{{ ($k == $job->experience) ? $v : ''}}
                    @endforeach</span>
                    <span class="btn-sm btn-warning d-inline-block m-1">@foreach(config('master_admin.gioitinh') as $k => $v)
						{{ ($k == $job->sex) ? $v : ''}}
                    @endforeach</span>
                    <span class="btn-sm btn-warning d-inline-block m-1">
						@foreach(config('master_admin.bangcap') as $k => $v)
                    	{{ ($k == $job->degree) ? $v : '' }}
						@endforeach
                    </span>
                    <span class="btn-sm btn-warning d-inline-block m-1">
						@foreach(@$career as $k => $v)
                    	{{ ($v->slug == $job->career) ? $v->name : '' }}
                    	@endforeach
                    	</span>
                    <span class="btn-sm btn-warning d-inline-block m-1">{{ $job->vacancies }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="d-flex flex-wrap list-detail">
                    <div class="col-md-12 flex-column col-12 pt-3 p-0">
                        <div class="list-detail-items">
                            <h4>Quyền lợi được hưởng</h4>
                            <div class="border p-3">
                                <p>{!! $job->right !!}</p>
                            </div>
                        </div>
                        <div class="list-detail-items">
                            <h4>Mô tả công việc</h4>
                            <div class="border p-3">
                                <p>{!! $job->description !!}</p>
                            </div>
                        </div>
                        <div class="list-detail-items">
                            <h4>Yêu cầu công việc</h4>
                            <div class="border p-3">
                                <p>{!! $job->job_requirements !!}</p>
                            </div>
                        </div>
                        <div class="list-detail-items">
                            <h4>Yêu cầu hồ sơ</h4>
                            <div class="border p-3">
                                <p>Sơ yếu lý lịch, hộ khẩu, cmnd, ...</p>
                            </div>
                        </div>
                        <div class="list-detail-items">
                            <h4>Thông tin liên hệ</h4>
                            <div class="border p-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <strong>Người liên hệ:</strong>
                                    </div>
                                    <div class="col-md-8">
                                        <span>{{ $job->contact }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <strong>Số điện thoại:</strong>
                                    </div>
                                    <div class="col-md-8">
                                        <span>{{ $job->phone }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <strong>Hạn nợp hồ sơ:</strong>
                                    </div>
                                    <div class="col-md-8">
                                        <span>{{ date('d-m-Y', strtotime($job->deadline)) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="row flex-column bannerqc-detail sticky">
                    <div class="col-12 mb-3 w-100">
                        <img src="https://i.pinimg.com/originals/71/dd/2e/71dd2e2c9f753dd5c101e1c645ea8eee.jpg" alt="">
                    </div>
                    <div class="col-12 mb-3 w-100">
                        <img src="https://i.pinimg.com/originals/71/dd/2e/71dd2e2c9f753dd5c101e1c645ea8eee.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="list-detail-items">
                    <h4>Việc làm tương tự</h4>
                    <div class="d-flex flex-wrap align-items-center mb-3 detail-company py-3">
                        <div class="col-lg-12">
                            <ul class="nolist list-job-another">
                                @foreach($job_lq as $key => $value)
                                <li><a href="{{ route('job',['slug'=>$value->slug]) }}">{{ $value->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop