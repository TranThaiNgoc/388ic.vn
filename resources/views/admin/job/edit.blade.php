@extends('admin.layout.index')
@section('title','Sửa tuyển dụng')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa tuyển dụng
                    <small>{{ $job->name }}</small>
                </h1>
            </div>
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                {{$err}}<br>
                @endforeach
            </div>
            @endif
            <!--hien thi thanh cong-->
            @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif
            @if(session('thongbaoloi'))
            <div class="alert alert-danger">
                {{session('thongbaoloi')}}
            </div>
            @endif
            <!-- /.col-lg-12 -->
            <form action="" method="POST" enctype="multipart/form-data">
                <h2>Tuyển dụng tiếng Việt</h2>
                <div class="row">
                    <div class="col-lg-6">
                        @csrf
                        <div class="form-group">
                            <label>Chức danh</label>
                            <input type="text" value="{{ $job['title'] }}" name="title" placeholder="Tuyển dụng nhân viên cơ khí,..." class="form-control">
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea placeholder="Mô tả việc làm" id="ckeditor" class="form-control ckeditor" name="description">{!! $job['description'] !!}</textarea>
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Quyền lợi được hưởng</label>
                            <textarea placeholder="Quyền lợi được hưởng" id="ckeditor" class="form-control ckeditor" name="right">{!! $job['right'] !!}</textarea>
                            <span class="text-danger">{{ $errors->first('right') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Số lượng</label>
                            <input type="number" name="number" value="{{ $job['number'] }}" class="form-control" placeholder="Nhập số lượng">
                            <span class="text-danger">{{ $errors->first('number') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Kinh nghiệm</label>
                            <select class="form-control" name="experience">
                                @foreach(config('master_admin.kinhnghiem') as $key => $value)
                                <option value="{{ $key }}" {{ ($key == $job['experience']) ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('experience') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Bằng cấp</label>
                            <select class="form-control" name="degree">
                                @foreach(config('master_admin.bangcap') as $key => $value)
                                <option value="{{ $key }}" {{ ($job['degree'] == $key) ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('degree') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Giới tính</label>
                            <select class="form-control" name="sex">
                                @foreach(config('master_admin.gioitinh') as $key => $value)
                                <option value="{{ $key }}" {{ ($job['sex'] == $key) ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('sex') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Hạn nộp hồ sơ</label>
                            <div class="form-group">
                                <input type="date" value="{{ $job['deadline'] }}" name="deadline_day" max="3000-12-31" min="1000-01-01" class="form-control form-control-ps" value="1950-03-31">
                            </div>
                            <span class="text-danger">{{ $errors->first('deadline_day') }}</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Người liên hệ</label>
                            <input type="text" name="contact" value="{{ $job['contact'] }}" class="form-control" placeholder="Người liên hệ">
                            <span class="text-danger">{{ $errors->first('contact') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Yêu cầu công việc</label>
                            <textarea name="job_requirements" id="ckeditor" class="w-100 form-control ckeditor" rows="4">{!! $job['job_requirements'] !!}</textarea>
                            <span class="text-danger">{{ $errors->first('job_requirements') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Yêu cầu hồ sơ</label>
                            <textarea name="request_profile" id="editor1" class="w-100 form-control ckeditor" rows="6">{!! $job['request_profile'] !!}</textarea>
                            <span class="text-danger">{{ $errors->first('request_profile') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="number" value="{{ $job['phone'] }}" name="phone" class="form-control" placeholder="Số điện thoại liên hệ">
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Mức lương</label>
                            <select class="form-control" name="money">
                                @foreach(config('master_admin.mucluong') as $key => $value)
                                <option value="{{ $key }}" {{ ($job['money'] == $key) ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('money') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Ngành nghề</label>
                            <select class="form-control" name="career">
                                @foreach($career as $key => $value)
                                <option value="{{ $value->slug }}" {{ ($job['career'] == $value->slug) ? 'selected' : '' }}>{{ $value->name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('career') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Vị trí tuyển dụng</label>
                            <input type="text" value="{{ $job['vacancies'] }}" name="vacancies" class="form-control" placeholder="Vị trí tuyển dụng" value="">
                            <span class="text-danger">{{ $errors->first('vacancies') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh (logo công ty)</label>
                            <input type="file" name="image">
                            <img width="30%" src="{{ $job['image'] }}">
                        </div>
                        
                    </div>
                </div>
                <h2>Tuyển dụng tiếng Anh</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" value="{{ $job['title_en'] }}" name="title_en" placeholder="Recruitment of mechanical staff,..." class="form-control">
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Career</label>
                            <input type="text" value="{{ $job['career_en'] }}" name="career_en" placeholder="Career" class="form-control">
                            <span class="text-danger">{{ $errors->first('career_en') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Experience</label>
                            <select class="form-control" name="experience_en">
                                @foreach(config('master_admin.experience') as $key => $value)
                                <option value="{{ $key }}" {{ ($key == $job['experience_en']) ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('experience_en') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea placeholder="Job description" value="{{ old('description_en') }}" id="editor3" class="form-control ckeditor" name="description_en">{{ $job['description_en'] }}</textarea>
                            <span class="text-danger">{{ $errors->first('description_en') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Benefit enjoyed</label>
                            <textarea placeholder="Benefits are enjoyed" id="editor4" class="form-control ckeditor" name="right_en">{{ $job['right_en'] }}</textarea>
                            <span class="text-danger">{{ $errors->first('right_en') }}</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Degree</label>
                            <select class="form-control" name="degree_en">
                                @foreach(config('master_admin.degree') as $key => $value)
                                <option value="{{ $key }}" {{ ($key == $job['degree_en']) ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('degree_en') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" value="{{ $job['location_en'] }}" name="location_en" placeholder="Location" class="form-control">
                            <span class="text-danger">{{ $errors->first('location_en') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Sex</label>
                            <select class="form-control" name="sex_en">
                                @foreach(config('master_admin.sex') as $key => $value)
                                <option value="{{ $key }}" {{ ($key == $job['sex_en']) ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('sex_en') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Request profile</label>
                            <textarea name="request_profile_en" id="editor6" class="w-100 form-control ckeditor" rows="6">{{ $job['request_profile_en'] }}</textarea>
                            <span class="text-danger">{{ $errors->first('request_profile_en') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Job requirements</label>
                            <textarea name="job_requirements_en" id="editor5" placeholder="Job requirements" class="w-100 form-control ckeditor" rows="4">{{ $job['job_requirements_en'] }}</textarea>
                            <span class="text-danger">{{ $errors->first('job_requirements_en') }}</span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sửa tuyển dụng</button>
                <form>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @stop