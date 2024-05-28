@extends('layouts.main')
@section('title', 'Home')
@section('content')
    <main>
        <!-- Trending Area Start -->
        @include('layouts.components.slide')
        <!-- Trending Area End -->
        <!-- Whats New Start -->
        <section class="whats-news-area pt-50 pb-20 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="whats-news-wrapper">
                            <!-- Heading & Nav Button -->
                            <div class="row justify-content-between align-items-end mb-15">
                                <div class="col-xl-4">
                                    <div class="section-tittle mb-30">
                                        <h3>Tin Mới</h3>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-md-9">
                                    <div class="properties__button">
                                        <!--Nav Button  -->
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                                    href="#nav-home" role="tab" aria-controls="nav-home"
                                                    aria-selected="true">Đời Sống</a>
                                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                                    href="#nav-profile" role="tab" aria-controls="nav-profile"
                                                    aria-selected="false">Du lịch</a>
                                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                    href="#nav-contact" role="tab" aria-controls="nav-contact"
                                                    aria-selected="false">Thời Trang</a>
                                                <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab"
                                                    href="#nav-last" role="tab" aria-controls="nav-contact"
                                                    aria-selected="false">Thể Thao</a>
                                                <a class="nav-item nav-link" id="nav-Sports" data-toggle="tab"
                                                    href="#nav-nav-Sport" role="tab" aria-controls="nav-contact"
                                                    aria-selected="false">Công nghệ</a>
                                            </div>
                                        </nav>
                                        <!--End Nav Button  -->
                                    </div>
                                </div>
                            </div>
                            <!-- Tab content -->
                            <div class="row">
                                <div class="col-12">
                                    <!-- Nav Card -->
                                    <div class="tab-content" id="nav-tabContent">
                                        <!-- card one -->
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                            aria-labelledby="nav-home-tab">
                                            <div class="row">
                                                <!-- Left Details Caption -->
                                                <div class="col-xl-6 col-lg-12">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/whats_news_details1.png"
                                                                alt="">
                                                        </div>
                                                        <div class="whates-caption">
                                                            <h4><a href="latest_news.html">
                                                                    Việt Nam có hơn 180.000 ca mắc mới ung thư, Bệnh viện K
                                                                    Quán Sứ mở cửa trở lại</a></h4>
                                                            <span>by Son Tung - Jun 19, 2024</span>
                                                            <p>Sau khi nâng cấp cơ sở ở Quán Sứ, Bệnh viện K (Hà Nội) đã
                                                                được hỗ trợ đầu tư hơn 1.000 tỷ đồng để mua sắm trang thiết
                                                                bị siêu hiện đại phục vụ người bệnh.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right single caption -->
                                                <div class="col-xl-6 col-lg-12">
                                                    <div class="row">
                                                        <!-- single -->
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/whats_right_img1.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorb">Đời Sống</span>
                                                                    <h4><a href="latest_news.html">Phong cách phương Tây
                                                                            thập niên 70 trong Celine Hommes Thu Đông
                                                                            2024</a></h4>
                                                                    <p>Jun 19, 2024</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/whats_right_img2.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorb">Đời Sống</span>
                                                                    <h4><a href="latest_news.html">Nga phản ứng vụ Tổng thư
                                                                            ký NATO mở đường cho Ukraine tấn công lãnh thổ
                                                                            Nga</a></h4>
                                                                    <p>Jun 19, 2024</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/whats_right_img3.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorg">Đời Sống</span>
                                                                    <h4><a href="latest_news.html">Thế giới động vật: Xem
                                                                            ảnh, clip động vật hoang dã mới nhất</a></h4>
                                                                    <p>Jun 19, 2024</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/whats_right_img4.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorr">Đời Sống</span>
                                                                    <h4><a href="latest_news.html">Ba Lan gửi tín hiệu "cảnh
                                                                            báo nghiêm trọng" tới Nga</a></h4>
                                                                    <p>Jun 19, 2024</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card two -->
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                            aria-labelledby="nav-profile-tab">
                                            <div class="row">
                                                <!-- Left Details Caption -->
                                                <div class="col-xl-6">
                                                    <div class="whats-news-single mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/whats_right_img2.png"
                                                                alt="">
                                                        </div>
                                                        <div class="whates-caption">
                                                            <h4><a href="#">Việt Nam có hơn 180.000 ca mắc mới ung
                                                                    thư, Bệnh viện K Quán Sứ mở cửa trở lại</a></h4>
                                                            <span>by Son Tung - Jun 19, 2024</span>
                                                            <p>Sau khi nâng cấp cơ sở ở Quán Sứ, Bệnh viện K (Hà Nội) đã
                                                                được hỗ trợ đầu tư hơn 1.000 tỷ đồng để mua sắm trang thiết
                                                                bị siêu hiện đại phục vụ người bệnh.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right single caption -->
                                                <div class="col-xl-6 col-lg-12">
                                                    <div class="row">
                                                        <!-- single -->
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/whats_right_img1.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorb">Du Lịch</span>
                                                                    <h4><a href="latest_news.html">Ba Lan gửi tín hiệu
                                                                            "cảnh báo nghiêm trọng" tới Nga</a></h4>
                                                                    <p>Jun 19, 2020</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/whats_right_img2.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorb">Du Lịch</span>
                                                                    <h4><a href="latest_news.html">Ba Lan gửi tín hiệu
                                                                            "cảnh báo nghiêm trọng" tới Nga</a></h4>
                                                                    <p>Jun 19, 2020</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/whats_right_img3.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorg">Du Lịch</span>
                                                                    <h4><a href="latest_news.html">Ba Lan gửi tín hiệu
                                                                            "cảnh báo nghiêm trọng" tới Nga</a></h4>
                                                                    <p>Jun 19, 2020</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/whats_right_img4.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorr">Du Lịch</span>
                                                                    <h4><a href="latest_news.html">Ba Lan gửi tín hiệu
                                                                            "cảnh báo nghiêm trọng" tới Nga</a></h4>
                                                                    <p>Jun 19, 2020</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card three -->
                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                            aria-labelledby="nav-contact-tab">
                                            <div class="row">
                                                <!-- Left Details Caption -->
                                                <div class="col-xl-6">
                                                    <div class="whats-news-single mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/whats_right_img4.png"
                                                                alt="">
                                                        </div>
                                                        <div class="whates-caption">
                                                            <h4><a href="#">Việt Nam có hơn 180.000 ca mắc mới ung
                                                                    thư, Bệnh viện K Quán Sứ mở cửa trở lại</a></h4>
                                                            <span>by Son Tung - Jun 19, 2024</span>
                                                            <p>Sau khi nâng cấp cơ sở ở Quán Sứ, Bệnh viện K (Hà Nội) đã
                                                                được hỗ trợ đầu tư hơn 1.000 tỷ đồng để mua sắm trang thiết
                                                                bị siêu hiện đại phục vụ người bệnh.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right single caption -->
                                                <div class="col-xl-6 col-lg-12">
                                                    <div class="row">
                                                        <!-- single -->
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/whats_right_img1.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorb">Thời Trang</span>
                                                                    <h4><a href="latest_news.html">Thế giới động vật: Xem
                                                                            ảnh, clip động vật hoang dã mới nhất</a></h4>
                                                                    <p>Jun 19, 2020</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/whats_right_img2.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorb">Thời Trang</span>
                                                                    <h4><a href="latest_news.html">Thế giới động vật: Xem
                                                                            ảnh, clip động vật hoang dã mới nhất</a></h4>
                                                                    <p>Jun 19, 2020</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/whats_right_img3.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorg">Thời Trang</span>
                                                                    <h4><a href="latest_news.html">Thế giới động vật: Xem
                                                                            ảnh, clip động vật hoang dã mới nhất</a></h4>
                                                                    <p>Jun 19, 2020</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/whats_right_img4.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorr">Thời Trang</span>
                                                                    <h4><a href="latest_news.html">Thế giới động vật: Xem
                                                                            ảnh, clip động vật hoang dã mới nhất</a></h4>
                                                                    <p>Jun 19, 2020</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card fure -->
                                        <div class="tab-pane fade" id="nav-last" role="tabpanel"
                                            aria-labelledby="nav-last-tab">
                                            <div class="row">
                                                <!-- Left Details Caption -->
                                                <div class="col-xl-6">
                                                    <div class="whats-news-single mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/whats_right_img2.png"
                                                                alt="">
                                                        </div>
                                                        <div class="whates-caption">
                                                            <h4><a href="#">Việt Nam có hơn 180.000 ca mắc mới ung
                                                                    thư, Bệnh viện K Quán Sứ mở cửa trở lại</a></h4>
                                                            <span>by Son Tung - Jun 19, 2024</span>
                                                            <p>Sau khi nâng cấp cơ sở ở Quán Sứ, Bệnh viện K (Hà Nội) đã
                                                                được hỗ trợ đầu tư hơn 1.000 tỷ đồng để mua sắm trang thiết
                                                                bị siêu hiện đại phục vụ người bệnh.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right single caption -->
                                                <div class="col-xl-6 col-lg-12">
                                                    <div class="row">
                                                        <!-- single -->
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="assets/img/gallery/whats_right_img1.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorb">Thể Thao</span>
                                                                    <h4><a href="latest_news.html">Ba Lan gửi tín hiệu
                                                                            "cảnh báo nghiêm trọng" tới Nga</a></h4>
                                                                    <p>Jun 19, 2020</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="assets/img/gallery/whats_right_img2.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorb">Thể Thao</span>
                                                                    <h4><a href="latest_news.html">Ba Lan gửi tín hiệu
                                                                            "cảnh báo nghiêm trọng" tới Nga</a></h4>
                                                                    <p>Jun 19, 2020</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="assets/img/gallery/whats_right_img3.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorg">Thể Thao</span>
                                                                    <h4><a href="latest_news.html">Ba Lan gửi tín hiệu
                                                                            "cảnh báo nghiêm trọng" tới Nga</a></h4>
                                                                    <p>Jun 19, 2020</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="assets/img/gallery/whats_right_img4.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorr">Thể Thao</span>
                                                                    <h4><a href="latest_news.html">Ba Lan gửi tín hiệu
                                                                            "cảnh báo nghiêm trọng" tới Nga</a></h4>
                                                                    <p>Jun 19, 2020</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card Five -->
                                        <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel"
                                            aria-labelledby="nav-Sports">
                                            <div class="row">
                                                <!-- Left Details Caption -->
                                                <div class="col-xl-6">
                                                    <div class="whats-news-single mb-40">
                                                        <div class="whates-img">
                                                            <img src="assets/img/gallery/whats_news_details1.png"
                                                                alt="">
                                                        </div>
                                                        <div class="whates-caption">
                                                            <h4><a href="#">Việt Nam có hơn 180.000 ca mắc mới ung
                                                                    thư, Bệnh viện K Quán Sứ mở cửa trở lại</a></h4>
                                                            <span>by Son Tung - Jun 19, 2024</span>
                                                            <p>Sau khi nâng cấp cơ sở ở Quán Sứ, Bệnh viện K (Hà Nội) đã
                                                                được hỗ trợ đầu tư hơn 1.000 tỷ đồng để mua sắm trang thiết
                                                                bị siêu hiện đại phục vụ người bệnh.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right single caption -->
                                                <div class="col-xl-6 col-lg-12">
                                                    <div class="row">
                                                        <!-- single -->
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="assets/img/gallery/whats_right_img1.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorb">Công Nghệ</span>
                                                                    <h4><a href="latest_news.html">Nga phản ứng vụ Tổng thư
                                                                            ký NATO mở đường cho Ukraine tấn công lãnh thổ
                                                                            Nga</a></h4>
                                                                    <p>Jun 19, 2020</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="assets/img/gallery/whats_right_img2.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorb">Công Nghệ</span>
                                                                    <h4><a href="latest_news.html">Nga phản ứng vụ Tổng thư
                                                                            ký NATO mở đường cho Ukraine tấn công lãnh thổ
                                                                            Nga</a></h4>
                                                                    <p>Jun 19, 2020</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="assets/img/gallery/whats_right_img3.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorg">Công Nghệ</span>
                                                                    <h4><a href="latest_news.html">Nga phản ứng vụ Tổng thư
                                                                            ký NATO mở đường cho Ukraine tấn công lãnh thổ
                                                                            Nga</a></h4>
                                                                    <p>Jun 19, 2020</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="assets/img/gallery/whats_right_img4.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    <span class="colorr">Công Nghệ</span>
                                                                    <h4><a href="latest_news.html">Nga phản ứng vụ Tổng thư
                                                                            ký NATO mở đường cho Ukraine tấn công lãnh thổ
                                                                            Nga</a></h4>
                                                                    <p>Jun 19, 2020</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Nav Card -->
                                </div>
                            </div>
                        </div>
                        <!-- Banner -->
                        <div class="banner-one mt-20 mb-30">
                            <img src="assets/img/gallery/body_card1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Flow Socail -->

                        <!-- Most Recent Area -->
                        <div class="most-recent-area">
                            <!-- Section Tittle -->
                            <div class="small-tittle mb-20">
                                <h4>Gần đây nhất</h4>
                            </div>
                            <!-- Details -->
                            <div class="most-recent mb-40">
                                <div class="most-recent-img">
                                    <img src="assets/img/gallery/most_recent.png" alt="">
                                    <div class="most-recent-cap">
                                        <span class="bgbeg">Vogue</span>
                                        <h4><a href="latest_news.html">Mặc gì: Hơn 9 bộ trang phục đi làm dễ thương để mặc
                                                này.</a></h4>
                                        <p>SonTung | 2 hours ago</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="most-recent-single">
                                <div class="most-recent-images">
                                    <img src="assets/img/gallery/most_recent1.png" alt="">
                                </div>
                                <div class="most-recent-capt">
                                    <h4><a href="latest_news.html">Ba Lan gửi tín hiệu "cảnh báo nghiêm trọng" tới Nga</a>
                                    </h4>
                                    <p>sonTung | 2 hours ago</p>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="most-recent-single">
                                <div class="most-recent-images">
                                    <img src="assets/img/gallery/most_recent2.png" alt="">
                                </div>
                                <div class="most-recent-capt">
                                    <h4><a href="latest_news.html">Những điều đẹp nhất để làm ở Sidney với bạn
                                            bạn trai</a></h4>
                                    <p>sonTung | 2 hours ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Whats New End -->
        <!--   Weekly2-News start -->
        <div class="weekly2-news-area pt-50 pb-30 gray-bg">
            <div class="container">
                <div class="weekly2-wrapper">
                    <div class="row">
                        <!-- Banner -->
                        <div class="col-lg-3">
                            <div class="home-banner2 d-none d-lg-block">
                                <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/body_card2.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="slider-wrapper">
                                <!-- section Tittle -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="small-tittle mb-30">
                                            <h4>Phổ biến nhất</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slider -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="weekly2-news-active d-flex">
                                            <!-- Single -->
                                            <div class="weekly2-single">
                                                <div class="weekly2-img">
                                                    <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/weeklyNews1.png"
                                                        alt="">
                                                </div>
                                                <div class="weekly2-caption">
                                                    <h4><a href="#">10 điểm đến tuyệt vời cho mùa du lịch hè 2024</a>
                                                    </h4>
                                                    <p>sonTung | 2 hours ago</p>
                                                </div>
                                            </div>
                                            <!-- Single -->
                                            <div class="weekly2-single">
                                                <div class="weekly2-img">
                                                    <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/weeklyNews2.png"
                                                        alt="">
                                                </div>
                                                <div class="weekly2-caption">
                                                    <h4><a href="#">10 điểm đến tuyệt vời cho mùa du lịch hè 2024</a>
                                                    </h4>
                                                    <p>sonTung | 2 hours ago</p>
                                                </div>
                                            </div>
                                            <!-- Single -->
                                            <div class="weekly2-single">
                                                <div class="weekly2-img">
                                                    <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/weeklyNews3.png"
                                                        alt="">
                                                </div>
                                                <div class="weekly2-caption">
                                                    <h4><a href="#">10 điểm đến tuyệt vời cho mùa du lịch hè 2024</a>
                                                    </h4>
                                                    <p>sonTung | 2 hours ago</p>
                                                </div>
                                            </div>
                                            <!-- Single -->
                                            <div class="weekly2-single">
                                                <div class="weekly2-img">
                                                    <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/weeklyNews2.png"
                                                        alt="">
                                                </div>
                                                <div class="weekly2-caption">
                                                    <h4><a href="#">10 điểm đến tuyệt vời cho mùa du lịch hè 2024</a>
                                                    </h4>
                                                    <p>sonTung | 2 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Weekly-News -->
        <!--  Recent Articles start -->
        <div class="recent-articles pt-80 pb-80">
            <div class="container">
                <div class="recent-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Tin tức thịnh hành</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="recent-active dot-style d-flex dot-style">
                                <!-- Single -->
                                <div class="single-recent">
                                    <div class="what-img">
                                        <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/tranding1.png" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <h4><a href="#">
                                                <h4><a href="latest_news.html">Những gì mong đợi từ các đề cử Oscar năm
                                                        2024</a></h4>
                                            </a></h4>
                                        <P>Jun 19, 2024</P>
                                        <a class="popup-video btn-icon"
                                            href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span
                                                class="flaticon-play-button"></span></a>

                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="single-recent">
                                    <div class="what-img">
                                        <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/tranding2.png" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <h4><a href="latest_news.html">Những gì mong đợi từ các đề cử Oscar năm 2024</a>
                                        </h4>
                                        <P>Jun 19, 2024</P>
                                        <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span
                                                class="flaticon-play-button"></span></a>
                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="single-recent">
                                    <div class="what-img">
                                        <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/tranding1.png" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <h4><a href="latest_news.html">
                                                <h4><a href="latest_news.html">Những gì mong đợi từ các đề cử Oscar năm
                                                        2024</a></h4>
                                            </a></h4>
                                        <P>Jun 19, 2024</P>
                                        <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span
                                                class="flaticon-play-button"></span></a>
                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="single-recent">
                                    <div class="what-img">
                                        <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/tranding2.png" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <h4><a href="latest_news.html">Những gì mong đợi từ các đề cử Oscar năm 2024</a>
                                        </h4>
                                        <P>Jun 19, 2024</P>
                                        <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span
                                                class="flaticon-play-button"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Recent Articles End -->
        <!--   Weekly3-News start -->
        <div class="weekly3-news-area pt-80 pb-130">
            <div class="container">
                <div class="weekly3-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider-wrapper">
                                <!-- Slider -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="weekly3-news-active dot-style d-flex">
                                            <div class="weekly3-single">
                                                <div class="weekly3-img">
                                                    <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/weekly2News1.png"
                                                        alt="">
                                                </div>
                                                <div class="weekly3-caption">
                                                    <h4><a href="latest_news.html">Những gì mong đợi từ các đề cử Oscar năm
                                                            2024</a></h4>
                                                    <p>19 Jan 2024</p>
                                                </div>
                                            </div>
                                            <div class="weekly3-single">
                                                <div class="weekly3-img">
                                                    <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/weekly2News2.png"
                                                        alt="">
                                                </div>
                                                <div class="weekly3-caption">
                                                    <h4><a href="latest_news.html">Những gì mong đợi từ các đề cử Oscar năm
                                                            2024</a></h4>
                                                    <p>19 Jan 2024</p>
                                                </div>
                                            </div>
                                            <div class="weekly3-single">
                                                <div class="weekly3-img">
                                                    <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/weekly2News3.png"
                                                        alt="">
                                                </div>
                                                <div class="weekly3-caption">
                                                    <h4><a href="latest_news.html">Những gì mong đợi từ các đề cử Oscar năm
                                                            2024</a></h4>
                                                    <p>19 Jan 2024</p>
                                                </div>
                                            </div>
                                            <div class="weekly3-single">
                                                <div class="weekly3-img">
                                                    <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/weekly2News4.png"
                                                        alt="">
                                                </div>
                                                <div class="weekly3-caption">
                                                    <h4><a href="latest_news.html">Những gì mong đợi từ các đề cử Oscar năm
                                                            2024</a></h4>
                                                    <p>19 Jan 2024</p>
                                                </div>
                                            </div>
                                            <div class="weekly3-single">
                                                <div class="weekly3-img">
                                                    <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/weekly2News2.png"
                                                        alt="">
                                                </div>
                                                <div class="weekly3-caption">
                                                    <h4><a href="latest_news.html">Những gì mong đợi từ các đề cử Oscar năm
                                                            2024</a></h4>
                                                    <p>19 Jan 2024</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Weekly-News -->
        <!-- banner-last Start -->
        <div class="banner-area gray-bg pt-90 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-10">
                        <div class="banner-one">
                            <img src="{{ $_ENV['ASSETS_CLIENT'] }}img/gallery/body_card3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner-last End -->
    </main>
@endsection
