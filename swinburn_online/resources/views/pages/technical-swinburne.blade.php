@extends('layout.master')
@section('content')

@include('includes.banner', ['title' => 'Đại học Công nghệ Swinburne', 'banner_image' => '/assets/images/banners/swinburne-graduation-banner.png'])
<div class="container-fluid blog-list-container">

    @include('includes.breadcrumb', ['breadcrumb' => ['Về chúng tôi' => '/posts', '#' => 'Đại học Công nghệ Swinburne']])
    <div class="container">
        <div class="about-detail-wrap">
            <div class="content row">
                <div class="left-top col-12 col-lg-5">
                    <img src="/assets/images/about/about_4.jpg" alt="">
                </div>
                <div class="right-top col-12 col-lg-7">
                    <h1>Swinburne Việt Nam</h1>
                    <p>Swinburne University of Technology (Melbourne, Australia) là một trường đại học danh tiếng xếp vị trí thứ 321 các trường đại học trên thế giới (QS Ranking 2022) có bề dày lịch sử hơn 100 năm kể từ khi thành lập. Đối với Việt Nam, Swinburne được biết đến trong 20 năm với vai trò là nhà tài trợ cho những nhà vô địch Đường lên đỉnh Olympia cơ hội học tập tại Swinburne.</p>
                    <p>Toàn bộ nội dung, tài liệu và quy trình đào tạo, kiểm soát chất lượng tại Swinburne Việt Nam đều được chuyển giao trực tiếp từ Swinburne Swinburne University of Technology (Melbourne, Australia). Đội ngũ giáo viên, chuyên gia tham gia quá trình đào tạo, tư vấn cho học sinh đều đạt các yêu cầu tiêu chuẩn quốc tế của Swinburne. Bằng đại học của sinh viên sau khi tốt nghiệp sẽ được cấp bởi Swinburne và có hình thức như bằng được cấp cho sinh viên học tập tại Australia.</p>
                </div>
            </div>

            @include('includes.facebook-plugin')

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