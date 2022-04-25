@extends('layout.master')
@section('content')

@include('includes.banner', ['title' => 'Giới thiệu về Swinburne Online', 'banner_image' => '/assets/images/banners/event_banner.jpg'])
<div class="container-fluid blog-list-container">

    @include('includes.breadcrumb', ['breadcrumb' => ['Về chúng tôi' => '/posts', '#' => 'Trường đại học Swinburne']])
    <div class="container">
        <div class="about-detail-wrap">
            <h1>Phương pháp học tương tác </h1>
            <div class="content">
                <p>Swinburne Online cung cấp phương thức tiếp cận trong học tập mới ở Việt Nam, các khóa học được phân phối và đánh giá bởi Đại học Công nghệ Swinburne.</p>
                <p>Với phương pháp học tương tác, cùng với sự linh hoạt của việc học trực tuyến cũng như hỗ trợ tất cả các ngày trong tuần giúp cho sinh viên trải nghiệm tất cả tính năng tốt nhất của ngôi trường trực tuyến.</p>
                <p>Sinh viên Swinburne Online nhận bằng cấp được cấp bởi Đại học Công nghệ Swinburne - một trường đại học hàng đầu thế giới với hơn 30.000 sinh viên trên khắp Melbourne Úc và các học xá khác trên toàn thế giới.</p>
                <p>Trường học trực tuyến của Swinburne Online cho phép bạn truy cập vào các dịch vụ sinh viên như gia sư, chuyên gia trực tuyến, các tài nguyên học tập và bạn cũng có thể đưa ra những đánh giá cũng như hợp tác với các bạn khác.</p>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-4 about-category-item">
                    <div class="about-category-thumbnail" style="background: url('/assets/images/about/about_1.jpg')">
                        <div class="shadow-layer">
                            <h3>Đại học Công nghệ Swinburne</h3>
                        </div>
                    </div>
                    <a href="#" class="btn btn-see-all w-100">
                        Đọc thêm
                        <span>
                            <img src="/assets/logos/arrow.svg" alt="arrow">
                        </span>
                    </a>
                </div>

                <div class="col-12 col-lg-6 col-xl-4 about-category-item">
                    <div class="about-category-thumbnail" style="background: url('/assets/images/about/about_2.jpg')">
                        <div class="shadow-layer">
                            <h3>Swinburne Việt Nam</h3>
                        </div>
                    </div>
                    <a href="#" class="btn btn-see-all w-100">
                        Đọc thêm
                        <span>
                            <img src="/assets/logos/arrow.svg" alt="arrow">
                        </span>
                    </a>
                </div>

                <div class="col-12 col-lg-6 col-xl-4 about-category-item">
                    <div class="about-category-thumbnail" style="background: url('/assets/images/about/about_3.jpg')">
                        <div class="shadow-layer">
                            <h3>Các khoá học của chúng tôi</h3>
                        </div>
                    </div>
                    <a href="#" class="btn btn-see-all w-100">
                        Đọc thêm
                        <span>
                            <img src="/assets/logos/arrow.svg" alt="arrow">
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection