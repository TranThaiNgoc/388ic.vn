@extends('layouts.app1')
@section('title', 'Giới thiệu')
@section('content')
<section class="intro-main">
    <div class="container">
        <div class="img-main" style="background-image: url('https://batdongsannhadep.com/wp-content/uploads/2019/05/19.jpg')">
            <div class="row">
                <article class="about-box">
                    <h2 class="about-box_title">Lịch sử hình thành</h2>
                    <div class="about-box_content p-3 mt-3">
                        <p>Công ty Cổ phần Đầu tư và Xây dựng 388 (388IC) được thành lập vào năm 2011 tại Việt Nam để cung cấp các dịch vụ điện và
                        dụng cụ bao gồm hỗ trợ mua sắm, hỗ trợ lắp đặt và vận hành cho các dự án công nghiệp.<br>
                        388IC đã được hợp tác bởi các kỹ sư chuyên ngành, công nhân lành nghề và kỹ thuật viên và bởi các máy móc hiện đại đồng
                        bộ chuyên dụng để thực hiện tất cả các công việc E & I ở quy mô khác nhau.<br>
                        388IC đã được chứng nhận bởi BVQA và đã đạt được chứng nhận cho Hệ thống quản lý chất lượng ISO 9001: 2008 và Sê-ri đánh
                        giá an toàn và sức khỏe nghề nghiệp OHSAS 18001: 2007.</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <div class=" py-3">
        <div class="container">
            <div class="text-center">
                <h2 class="text-uppercase about-title">
                    388IC Châm Ngôn
                </h2>
            </div>
            <div class="about-content">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="img-left">
                        <img src="./public/images/about1.png" alt="">
                    </div>
                    <div class="content-right">
                        <div class="content-boxs">
                            <span>Sứ mệnh của chúng tôi</span> 
                            Trở thành đối tác lâu dài đáng tin cậy cho khách hàng trong và ngoài nước bằng cách đáp ứng mong đợi của họ và có được sự tin tưởng của họ thông qua hiệu suất đặc biệt từ mọi thành viên trong nhóm của chúng tôi. Tầm nhìn của chúng tôi: Định hình tương lai thông qua giải pháp sáng tạo.
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center">
                    <div class="content-right order-1 order-md-0">
                        <div class="content-boxs">
                            <span>Chính sách của chúng tôi</span> 
                            Để đảm bảo và cải thiện chất lượng công trình, tìm kiếm cách tốt nhất để đáp ứng yêu cầu của
                            khách hàng và duy trì uy tín trên thị trường xây dựng trong nước và nước ngoài
                            Hệ thống quản lý của chúng tôi: Hệ thống quản lý chất lượng của chúng tôi đã được áp dụng theo tiêu chuẩn ISO 9001: 2008
                            và OHSAS 180001: 2007.
                        </div>
                    </div>
                    <div class="img-left order-0 order-md-1">
                        <img src="./public/images/about2.png" alt="">
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center">
                    <div class="img-left">
                        <img src="./public/images/about3.png" alt="">
                    </div>
                    <div class="content-right">
                        <div class="content-boxs">
                            <span>Văn hóa và con người</span>
                            Chúng tôi nhận ra rằng con người của chúng tôi là tài sản chính của
                            chúng tôi, danh tiếng và thành công của chúng tôi. Chúng tôi đã tạo ra một môi trường làm việc khuyến khích sự đổi mới,
                            thúc đẩy làm việc nhóm. Cuối cùng mọi người xác định giá trị cá nhân của chúng tôi, kết hợp nhiều cấp độ kinh nghiệm của
                            họ trong các nhóm làm việc hợp tác.
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
                    Hình ảnh 388IC
                </h2>
            </div>
            <div class="d-flex flex-wrap p-0">
                <div class="col-lg-4 col-md-6 col-12 p-0">
                    <img src="./public/images/gallery1.png" alt="">
                </div>
                <div class="col-lg-4 col-md-6 col-12 p-0">
                    <img src="./public/images/gallery2.png" alt="">
                </div>
                <div class="col-lg-4 col-md-6 col-12 p-0">
                    <img src="./public/images/gallery3.png" alt="">
                </div>
                <div class="col-lg-4 col-md-6 col-12 p-0">
                    <img src="./public/images/gallery4.png" alt="">
                </div>
                <div class="col-lg-4 col-md-6 col-12 p-0">
                    <img src="./public/images/gallery5.png" alt="">
                </div>
                <div class="col-lg-4 col-md-6 col-12 p-0">
                    <img src="./public/images/gallery6.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@stop