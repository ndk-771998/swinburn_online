@extends('layout.master')
@section('content')

@include('includes.banner', ['title' => 'Swinburne Việt Nam', 'banner_image' => '/assets/images/banners/swinburne-graduation-banner.png'])
<div class="container-fluid blog-list-container">

    @include('includes.breadcrumb', ['breadcrumb' => ['Về chúng tôi' => '/posts', '#' => 'Swinburne Việt Nam']])
    <div class="container">
        <div class="about-detail-wrap">
            <div class="content row">
                <div class="left-top col-12 col-lg-6">
                    <h1>Swinburne Việt Nam</h1>
                    <p>Swinburne University of Technology (Melbourne, Australia) là một trường đại học danh tiếng xếp vị trí thứ 321 các trường đại học trên thế giới (QS Ranking 2022) có bề dày lịch sử hơn 100 năm kể từ khi thành lập. Đối với Việt Nam, Swinburne được biết đến trong 20 năm với vai trò là nhà tài trợ cho những nhà vô địch Đường lên đỉnh Olympia cơ hội học tập tại Swinburne.</p>
                    <p>Toàn bộ nội dung, tài liệu và quy trình đào tạo, kiểm soát chất lượng tại Swinburne Việt Nam đều được chuyển giao trực tiếp từ Swinburne Swinburne University of Technology (Melbourne, Australia). Đội ngũ giáo viên, chuyên gia tham gia quá trình đào tạo, tư vấn cho học sinh đều đạt các yêu cầu tiêu chuẩn quốc tế của Swinburne. Bằng đại học của sinh viên sau khi tốt nghiệp sẽ được cấp bởi Swinburne và có hình thức như bằng được cấp cho sinh viên học tập tại Australia.</p>
                </div>
                <div class="right-top col-12 col-lg-6">
                    <img src="/assets/images/about/about_4.jpg" alt="">
                </div>
                <div class="left-bottom col-12 col-lg-6">
                    <img src="/assets/images/about/about_5.jpg" alt="">
                </div>
                <div class="right-bottom col-12 col-lg-6">
                    <h1>Tầm nhìn tới 2025</h1>
                    <p>Swinburne Việt Nam được thành lập cũng nhằm thực hiện tầm nhìn của
                        Swinburne University of Technology, Australia với định vị “Là một trường
                        đẳng cấp quốc tế đóng góp vào tiến bộ kinh tế và xã hội thông qua khoa
                        học, công nghệ và sáng tạo”.</p>
                    <p>Sứ mệnh của Swinburne Việt Nam là “Nâng cao năng lực cạnh toàn cầu cho
                        đông đảo người học, góp phần mở mang bờ cõi trí tuệ quốc gia:</p>
                    <p><span>Giá trị:</span> Mang lại sự thành công cho người học (The University of Success)</p>
                    <ul>
                        <li>Kiến thức toàn cầu từ một trường đại học đẳng cấp cao quốc tế.</li>
                        <li>Kỹ năng làm việc thực tế.</li>
                        <li class="blue">Kỹ năng công dân toàn cầu.</li>
                        <li>Trải nghiệm học tập hạnh phúc.</li>
                        <li>Hỗ trợ cá nhân hóa theo yêu cầu và năng lực của người học.</li>
                        <li>Cơ hội việc làm tốt, thu nhập cao không chỉ trong nước mà quốc tế.</li>
                    </ul>
                    <p><span>Xếp hạng: </span></p>
                    <ul>
                        <li>Top 1 bang Victoria về chất lượng trải nghiệm của sinh viên (Theo QILT, 2018).</li>
                        <li>Xếp hạng 45th trong 250 tổ chức giáo dục trẻ (Theo Young University Rankings, 2019).</li>
                        <li>Top 70 các trường khu vực Châu Á – Thái Bình Dương.</li>
                        <li>Xếp hạng top 321th trong 400 ĐH hàng đầu thế giới (Theo QS Ranking, 2022).</li>
                        <li>50 năm phát triển hợp tác với các tổ chức doanh nghiệp hàng đầu thế giới.</li>
                    </ul>
                    <p><span>Chứng chỉ cấp phép và Công nhận:</span></p>
                    <p>Swinburne Việt Nam cam kết mang đến cho sinh viên chương trình đào tạo chất lượng tương đương chất lượng đào tạo tại Swinburne Australia. Chương trình đào tạo tại Swinburne Việt Nam tuân thủ các tiêu chuẩn kiểm định chất lượng đào tạo của Swinburne và được chuyển giao 100% từ Swinburne University of Technology (Australia), đáp ứng yêu cầu quản lý chất lượng của:</p>
                    <ul>
                        <li>Tertiary Education Quality and Standards Agency (TEQSA): Cơ quan Tiêu chuẩn và Chất lượng Giáo dục Đại học của Australia.</li>
                        <li>Association to Advance Collegiate Schools of Business (AACSB): Hiệp hội Phát triển Giảng dạy Doanh thương bậc Đại học.</li>
                    </ul>
                    <p>Theo quy định của Luật Giáo dục sửa đổi Việt Nam (2019), bằng cử nhận của Swinburne University of Technology tuân thủ các tiêu chuẩn kiểm định và công nhận bởi Chính phủ Australia nên cũng được Chính phủ Việt nam (Bộ Giáo dục và đào tạo) công nhận.</p>
                </div>
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