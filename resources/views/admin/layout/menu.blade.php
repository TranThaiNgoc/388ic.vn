<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        @if(in_array("supperadmin",json_decode(Auth::user()->roles)))
                        <li>
                            <a href="#"><i class="far fa-newspaper"></i> Tin tức<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.news') }}">Danh sách tin tức</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.news.add') }}">Thêm tin tức</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-search"></i> Tuyển dụng<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.job') }}">Danh sách tuyển dụng</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.job.add') }}">Thêm tuyển dụng</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-project-diagram"></i> Dự án<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.project') }}">Danh sách dự án</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.project.add') }}">Thêm dự án</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-hammer"></i> Ngành nghề<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.career') }}">Danh sách ngành nghề</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.career.add') }}">Thêm ngành nghề</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-address-card"></i> Giới thiệu<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.about_company') }}">Giới thiệu chung</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.about_organization') }}">Sơ đồ tổ chức</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.manager') }}">Ban giám đốc</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.par')}}">Tầm nhìn sứ mệnh</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.develope') }}">Chiến lượt phát triển</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.business') }}">Lĩnh lực kinh doanh</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.image_about') }}">Hình ảnh hoạt động</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{ route('admin.list_certificate') }}"><i class="fas fa-stamp"></i> Chứng chỉ<span class="fa arrow"></span></a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.user') }}">Danh sách User</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.user.add') }}">Thêm User</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{ route('admin.partner') }}"><i class="fas fa-images"></i> Hình ảnh đối tác<span class="fa arrow"></span></a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{ route('admin.feedback') }}"><i class="fas fa-comments"></i> Phần hổi khách hàng<span class="fa arrow"></span></a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{ route('admin.configuration.add') }}"><i class="fas fa-sliders-h"></i> Cấu hình hệ thống<span class="fa arrow"></span></a>
                            <!-- /.nav-second-level -->
                        </li>
                        @elseif(in_array("admin",json_decode(Auth::user()->roles)))
                        <li>
                            <a href="#"><i class="far fa-newspaper"></i> Tin tức<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.news') }}">Danh sách tin tức</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.news.add') }}">Thêm tin tức</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-search"></i> Tuyển dụng<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.job') }}">Danh sách tuyển dụng</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.job.add') }}">Thêm tuyển dụng</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-project-diagram"></i> Dự án<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.project') }}">Danh sách dự án</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.project.add') }}">Thêm dự án</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        @elseif(in_array("user",json_decode(Auth::user()->roles)))
                        <li>
                            <a href="#"><i class="far fa-newspaper"></i> Tin tức<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.news') }}">Danh sách tin tức</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.news.add') }}">Thêm tin tức</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        @endif
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>