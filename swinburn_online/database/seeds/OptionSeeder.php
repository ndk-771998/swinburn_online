<?php

use Illuminate\Database\Seeder;
use VCComponent\Laravel\Config\Entities\Option;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $domain = strtolower(config('app.url'));
        $domain = '';

        Option::insert([
            [
                'label' => 'Header logo',
                'key'   => 'header-logo',
                'value'  => $domain . '/assets/logos/logo.svg',
            ],
            [
                'label' => 'Website Favicon',
                'key'   => 'website-favicon',
                'value'  => $domain . '/assets/logos/cropped-favicon-180x180.png',
            ],
            [
                'label' => 'File brochure',
                'key'   => 'file-brochure',
                'value'  => $domain . '/assets/files/brochure.online.fn.pdf',
            ],
            [
                'label' => 'Liên kết tới twitter',
                'key'   => 'footer-twitter-link',
                'value'  => '#',
            ],
            [
                'label' => 'Liên kết tới facebook',
                'key'   => 'footer-facebook-link',
                'value'  => '#',
            ],
            [
                'label' => 'Liên kết tới youtube',
                'key'   => 'footer-youtube-link',
                'value'  => '#',
            ],
            [
                'label' => 'Liên kết tới LinkedIn',
                'key'   => 'footer-linkedin-link',
                'value'  => '#',
            ],
            [
                'label' => 'Footer logo',
                'key'   => 'footer-logo',
                'value'  => $domain . '/assets/logos/logo-ft.svg',
            ],
            [
                'label' => 'Thông tin liên hệ footer',
                'key'   => 'footer-contact-info',
                'value'  => '<p>Hãy gọi cho chúng tôi: (+84) 939 403 555</p><p>8:00 – 18:00</p><div>Từ Thứ Hai đến Chủ Nhật</div>',
            ],
            [
                'label' => 'Copy right',
                'key'   => 'copy-right',
                'value'  => '<a href="/">Bản quyền & Tuyên bố từ chối trách nhiệm</a> <a href="/">Riêng tư</a> <span>Đại học Công nghệ Swinburne CRICOS 00111D | RTO 3059 | TEQSA PRV12148 Đại học Việt Nam</span>',
            ],
            [
                'label' => 'Tiêu đề SEO trang chủ',
                'key'   => 'home-seo-title',
                'value'  => 'Swinburne Online Việt Nam',
            ],
            [
                'label' => 'Mô tả SEO trang chủ',
                'key'   => 'home-seo-desc',
                'value'  => 'Đại học Công nghệ Swinburne (Swinburne) là một trường đại học danh tiếng nằm trong TOP 386 các trường đại học trên thế giới (QS xếp hạng 2019) có bề dày lịch sử hơn 100 năm kể từ khi thành lập. Đối với Việt Nam, Swinburne được biết đến trong 20 năm với vai trò là nhà tài trợ chắp cánh cho những nhà vô địch Đường lên đỉnh Olympia.',
            ],
            [
                'label' => 'Ảnh SEO trang chủ',
                'key'   => 'home-seo-image',
                'value'  => 'https://swinburne-vn.edu.vn/wp-content/uploads/2021/09/Swinburne-University.jpg',
            ],
            [
                'label' => 'Banner trang chủ',
                'key'   => 'home-banner',
                'value'  => $domain . '/assets/images/home/home_banner.jpg',
            ],
            [
                'label' => 'Tiêu đề banner trang chủ',
                'key'   => 'home-title-banner',
                'value' => 'Mở rộng cơ hội của bạn',
            ],
            [
                'label' => 'Mô tả banner trang chủ',
                'key'   => 'home-desc-banner',
                'value' => 'Học trực tuyến với một trường đại học được xếp hạng 321 trên thế giới.',
            ],
            [
                'label' => 'Ngành học nổi bật',
                'key'   => 'home-course',
                'value'  => 'Ngành công nghệ',
            ],
            [
                'label' => 'Mô tả ngành học nổi bật',
                'key'   => 'home-course-desc',
                'value'  => '<h3>Bạn có quan tâm về công nghệ?</h3> <p>Công nghệ kỹ thuật số đã thay đổi cách chúng ta giao tiếp, việc học và kinh doanh. Vì vậy, những người biết cách sử dụng nó sẽ được đánh giá rất cao trong xã hội. Công nghệ là một công cụ rất cần thiết trong hầu hết mọi ngành công nghiệp cũng như mở ra nhiều các cơ hội việc làm.</p> <p>Công nghệ thông tin của <a href="/">Swinburne Online</a> sẽ trang bị cho bạn những kỹ năng cũng như những công cụ tiên tiến cần thiết để bắt đầu sự nghiệp của bạn. Với tính linh hoạt trong học tập, học từ bất cứ đâu, bất cứ khi nào miễn các bạn có kết nối internet. Các khóa học trực tuyến của Swinburne phù hợp cho bất cứ ai đam mê công nghệ. Dù bạn đang là học sinh, sinh viên, đi làm hay các bạn sinh viên muốn học văn bằng hai thì <a href="/">Swinburne Online</a> là sự lựa chọn hoàn hảo. </p> <p>Sinh viên sẽ có được các kỹ năng công nghệ thông tin tiên tiến bao gồm cả việc sử dụng phần mềm chuyên dụng, để có thể tự tin áp dụng các giải pháp ICT trong môi trường chuyên nghiệp. Sinh viên cũng sẽ học các kỹ năng thiết yếu tại nơi làm việc như giao tiếp hiệu quả, quản lý các bên liên quan và ứng dụng về pháp lý và đạo đức.</p> <p>Chọn một khóa học tại <a href="/">Swinburne Online</a> để trải nghiệm học tập tương tác, chất lượng cao. Hãy gọi ngay cho chúng tôi để được tư vấn về khóa học.</p>',
            ],
            [
                'label' => 'Bằng cấp',
                'key'   => 'home-qualification',
                'value'  => 'Đại học',
            ],
            [
                'label' => 'Thời gian',
                'key'   => 'home-duration',
                'value'  => '3 năm',
            ],
            [
                'label' => 'Tín chỉ',
                'key'   => 'home-units',
                'value'  => '24',
            ],
            [
                'label' => 'Thời gian bắt đầu',
                'key'   => 'home-start-date',
                'value'  => 'Tháng 3, tháng 7, tháng 11',
            ],
            [
                'label' => 'Label đường dẫn chi tiết ngành',
                'key'   => 'home-course-link-label',
                'value'  => 'Ngành công nghệ thông tin',
            ],
            [
                'label' => 'Đường dẫn chi tiết ngành',
                'key'   => 'home-course-link',
                'value'  => $domain . '/onlinecourses/nganh-cong-nghe',
            ],
            [
                'label' => 'Tiêu đề lý do chọn Swinburne Online',
                'key'   => 'home-reason-title',
                'value'  => 'Swinburne Online, tại sao không?',
            ],
            [
                'label' => 'Mô tả lý do chọn Swinburn Online',
                'key'   => 'home-reason-desc',
                'value'  => '<p>Bạn đang đi làm nhưng vẫn muốn lấy bằng Đại học chính quy của trường đại học hàng đầu thế giới?</p> <p>Bạn nghĩ đến việc quay lại giảng đường nhưng quá bận rộn, không có thời gian lên lớp? </p> <p>Hãy đến với <a href="/">Swinburne Online</a>, chúng tôi sẽ giúp bạn Học đại học song song với việc vẫn duy trì công việc hiện tại và làm những điều bạn muốn mà không cần lên lớp, học mọi lúc mọi nơi, bằng cấp tương đương với các sinh viên khác tại Swinburne. Bạn chỉ cần có 1 bằng THPT và điểm tổng kết trên 7.0 và vốn tiếng anh khá là đủ điều kiện.</p>',
            ],
            [
                'label' => 'Tiêu đề liên hệ',
                'key'   => 'home-contact-title',
                'value'  => 'Liên hệ với chúng tôi',
            ],
            [
                'label' => 'Mô tả liên hệ',
                'key'   => 'home-contact-desc',
                'value'  => '<p>Để biết bạn có phù hợp với khóa học, hãy gọi cho chúng tôi, chuyên gia tư vấn sẽ trả lời những thắc mắc của bạn liên quan đến thủ tục, giấy tờ, lệ phí và việc đào tạo từ xa. Họ có thể hỗ trợ bạn mọi thứ thông qua cuộc gọi.</p>',
            ],
            [
                'label' => 'Đường dây nóng',
                'key'   => 'home-contact-phone',
                'value'  => 'Hotline: <a href="tel: 84939403555">(+84) 939 403 555</a>',
            ],
            [
                'label' => 'Thời gian làm việc',
                'key'   => 'home-contact-working-time',
                'value'  => '9am - 5pm UTC, Thứ hai - Thứ Sáu',
            ],
            [
                'label' => 'Ảnh liên hệ',
                'key'   => 'home-contact-thumbnail',
                'value' => $domain . '/assets/images/home/home_contact.png',
            ],
            [
                'label' => 'Tiêu đề số liệu',
                'key'   => 'home-numbers',
                'value'  => 'Tại sao nên học với Swinburne Online?',
            ],
            [
                'label' => 'Tiêu đề năm thành lập',
                'key'   => 'home-found-year-title',
                'value'  => 'Năm thành lập'
            ],
            [
                'label' => 'Năm thành lập',
                'key'   => 'home-found-year-value',
                'value'  => '1908'
            ],
            [
                'label' => 'Mô tả năm thành lập',
                'key'   => 'home-found-year-desc',
                'value'  => 'Được thành lập từ 1908, <br> Swinburne có một bề dày lịch sử'
            ],
            [
                'label' => 'Tiêu đề xếp hạng',
                'key'   => 'home-rank-title',
                'value'  => 'Top'
            ],
            [
                'label' => 'Xếp hạng',
                'key'   => 'home-rank-value',
                'value'  => '400'
            ],
            [
                'label' => 'Mô tả xếp hạng',
                'key'   => 'home-rank-desc',
                'value'  => 'Chúng tôi xếp hạng 321 <br>trên thế giới',
            ],
            [
                'label' => 'Tiêu đề số lượng sinh viên',
                'key'   => 'home-number-of-students-title',
                'value'  => 'Vượt hơn',
            ],
            [
                'label' => 'Số lượng sinh viên',
                'key'   => 'home-number-of-students',
                'value'  => '10,000',
            ],
            [
                'label' => 'Mô tả số lượng sinh viên',
                'key'   => 'home-number-of-students-desc',
                'value'  => 'Có hơn 10,000 sinh viên đang <br>theo học tại Swinburne Online',
            ],
            [
                'label' => 'Tiêu đề hỗ trợ',
                'key'   => 'home-support-title',
                'value'  => 'Học trực tuyến với các chuyên gia',
            ],
            [
                'label' => 'Nội dung hỗ trợ',
                'key'   => 'home-support-content',
                'value'  => '<p>Học tại <a href="/">Swinburne Online</a>, bạn sẽ không bao giờ cảm thấy cô đơn vì các chuyên gia và nhân viên của chúng tôi luôn đồng hành cùng bạn trong suốt quá trình để bạn có thể quản lý việc học cũng như có những trải nghiệm tuyệt vời nhất tại đây.</p> <p>Xem video hoặc nhấn vào liên kết bên dưới để xem cách chúng tôi hỗ trợ bạn một cách chi tiết từ lúc nhập học đến khi tốt nghiệp.</p>',
            ],
            [
                'label' => 'Ảnh đại điện hỗ trợ',
                'key'   => 'home-support-thumbnail',
                'value'  => $domain . '/assets/images/home/home_support.jpg',
            ],
            [
                'label' => 'Video hỗ trợ',
                'key'   => 'home-support-video',
                'value'  => '<iframe width="640" height="360" src="https://www.youtube.com/embed/ulOb9gIGGd0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ],
            [
                'label' => 'Banner giữa trang',
                'key'   => 'home-body-banner',
                'value'  => $domain . '/assets/images/banners/home_body_banner.jpg',
            ],
            [
                'label' => 'Tiêu đề SEO trang liên hệ',
                'key'   => 'contact-seo-title',
                'value'  => 'Liên hệ',
            ],
            [
                'label' => 'Mô tả SEO trang liên hệ',
                'key'   => 'contact-banner-desc',
                'value'  => ''
            ],
            [
                'label' => 'Banner trang liên hệ',
                'key'   => 'contact-banner',
                'value'  => $domain . '/assets/images/banners/swinburne-graduation-banner.jpg',
            ],
            [
                'label' => 'Tiêu đề banner trang liên hệ',
                'key'   => 'contact-banner-title',
                'value'  => 'Liên hệ'
            ],
            [
                'label' => 'Tiêu đề liên hệ',
                'key'   => 'contact-title',
                'value'  => 'Liên hệ Swinburne Việt Nam'
            ],
            [
                'label' => 'Mô tả liên hệ',
                'key'   => 'contact-desc',
                'value'  => '<p>Hãy liên hệ với Swinburne Việt Nam để chúng tôi có thể tư vấn và giải đáp trực tiếp các câu hỏi và vấn đề bạn quan tâm. Chúng tôi luôn sẵn lòng lắng nghe và hỗ trợ bạn!</p>'
            ],
            [
                'label' => 'Tiêu đề chính sách',
                'key'   => 'contact-policy-title',
                'value'  => 'Chính sách bảo mật trong quá trình liên hệ Swinburne'
            ],
            [
                'label' => 'Mô tả chính sách',
                'key'   => 'contact-policy-desc',
                'value'  => '<p>Thông tin cá nhân được thu thập trong mẫu nhằm mục đích cung cấp thông tin chi tiết về Swinburne Việt Nam, bao gồm các sự kiện và khóa học mà Swinburne Việt Nam cung cấp. Thông tin sẽ chỉ được tiết lộ cho các bên thứ ba với sự đồng ý của sinh viên, người bảo hộ hoặc để đáp ứng các nghĩa vụ theo luật pháp.</p>'
            ],
            [
                'label' => 'Tiêu đề phản hồi và khiếu nại',
                'key'   => 'contact-report-title',
                'value'  => 'Phản hồi và khiếu nại'
            ],
            [
                'label' => 'Mô tả phản hồi và khiếu nại',
                'key'   => 'contact-report-desc',
                'value'  => '<ul><li>Email: <a href="mailto: swinburne@fe.edu.vn">swinburne@fe.edu.vn</a></li><li>Hotline: (+84) 939 403 555</li></ul>'
            ],
            [
                'label' => 'Tiêu đề widget 1',
                'key'   => 'contact-widget-1-title',
                'value'  => 'Sinh viên tương lai',
            ],
            [
                'label' => 'Mô tả widget 1',
                'key'   => 'contact-widget-1-desc',
                'value'  => '<ul><li>Đặt lịch hẹn tại đây</li><li>Thông tin liên hệ:</li><ul><li>Email: <a href="swinburne@fe.edu.vn">swinburne@fe.edu.vn</a></li><li>Hotline:</li><ul><li>Cơ sở Hà Nội: (+84) 939 403 555</li><li>Cơ sở Hồ Chí Minh: (+84) 387 148 555</li></ul></ul><li>Thời gian: 8h00 - 18h00, Từ Thứ Hai đến Chủ Nhật</li></ul>',
            ],
            [
                'label' => 'Tiêu đề widget 2',
                'key'   => 'contact-widget-2-title',
                'value'  => 'Sinh viên hiện tại',
            ],
            [
                'label' => 'Mô tả widget 2',
                'key'   => 'contact-widget-2-desc',
                'value'  => '<ul><li>Đặt lịch hẹn tại đây</li><li>Thông tin liên hệ:</li><ul><li>Email: <a href="swinburne@fe.edu.vn">swinburne@fe.edu.vn</a></li><li>Hotline:</li><ul><li>Cơ sở Hà Nội: (+84) 939 403 555</li><li>Cơ sở Hồ Chí Minh: (+84) 387 148 555</li></ul></ul><li>Thời gian: 8h00 - 18h00, Từ Thứ Hai đến Chủ Nhật</li></ul>',
            ],
            [
                'label' => 'Tiêu đề widget 3',
                'key'   => 'contact-widget-3-title',
                'value'  => 'Swinburne Campuses',
            ],
            [
                'label' => 'Mô tả widget 3',
                'key'   => 'contact-widget-3-desc',
                'value'  => '<ul><li>Hà Nội Campus: Số 2 Dương Khuê, Cầu Giấy, Hà Nội, Việt Nam</li><li>Hồ Chí Minh Campus: A35 Bạch Đằng, Tân Bình, TP. Hồ Chí Minh, Việt Nam</li><li>Hawthorn Campus: John Street, Hawthorn, Victoria 3122 Australia</li><li>Sarawal Campus: Jalan Simpang Tiga, 93350 Kuching, Sarawak, Malaysia</li></ul>',
            ],
            [
                'label' => 'Tiêu đề SEO trang đăng ký trực tuyến',
                'key'   => 'apply-seo-title',
                'value'  => 'Đăng ký trực tuyến',
            ],
            [
                'label' => 'Mô tả SEO trang đăng ký trực tuyến',
                'key'   => 'apply-banner-desc',
                'value'  => ''
            ],
            [
                'label' => 'Banner trang đăng ký trực tuyến',
                'key'   => 'apply-banner',
                'value'  => $domain . '/assets/images/banners/swinburne-graduation-banner.jpg',
            ],
            [
                'label' => 'Tiêu đề banner trang đăng ký trực tuyến',
                'key'   => 'apply-banner-title',
                'value'  => 'Đăng ký trực tuyến'
            ],
            [
                'label' => 'Tiêu đề form đăng ký trực tuyến',
                'key'   => 'apply-form-title',
                'value'  => 'Đăng ký ngành Cử nhân Công nghệ thông tin'
            ],
            [
                'label' => 'Mô tả form đăng ký trực tuyến',
                'key'   => 'apply-form-desc',
                'value'  => 'Chuyên gia tư vấn khóa học sẽ liên lạc để tư vấn và hướng dẫn bạn quá trình đăng ký. Họ sẽ trả lời bất cứ câu hỏi nào liên quan đến quá trình đăng ký, brochure, học phí, học bổng hay cách thức học trực tuyến.'
            ],
            [
                'label' => 'Khóa học trực tuyến và bằng cấp - tiêu đề đăng ký',
                'key'   => 'onlinecourse-apply-title',
                'value'  => 'Đăng ký ngay hôm nay cho khóa học Cử nhân Công nghệ Thông tin'
            ],
            [
                'label' => 'Khóa học trực tuyến và bằng cấp - mô tả đăng ký',
                'key'   => 'onlinecourse-apply-desc',
                'value'  => 'Bắt đầu đơn đăng ký của bạn trực tuyến hoặc nói chuyện với Chuyên gia tư vấn khóa học theo số (+84) 939 403 555.'
            ],
            [
                'label' => 'Khóa học trực tuyến và bằng cấp - đường dẫn đăng ký',
                'key'   => 'onlinecourse-apply-link',
                'value'  => config('app.url') . '/apply',
            ],
            [
                'label' => 'Khóa học trực tuyến và bằng cấp - tiêu đề đường dẫn đăng lý',
                'key'   => 'onlinecourse-apply-link-label',
                'value'  => 'Đăng ký ngay hôm nay'
            ],
            // Options event
            [
                'label' => 'Tiêu đề SEO trang sự kiện',
                'key' => 'event-seo-title',
                'value' => 'Sự kiện'
            ],
            [
                'label' => 'Mô tả SEO trang sự kiện',
                'key'   => 'event-banner-desc',
                'value'  => ''
            ],
            [
                'label' => 'Banner trang sự kiện',
                'key'   => 'event-banner',
                'value'  => $domain . '/assets/images/banners/event_banner.jpg',
            ],
            [
                'label' => 'Tiêu đề banner trang sự kiện',
                'key'   => 'event-banner-title',
                'value'  => 'Sự kiện'
            ],
            [
                'label' => 'Tiêu đề danh sách sự kiện ',
                'key'   => 'event-list-title',
                'value'  => 'Sự kiện sắp tới'
            ],
            [
                'label' => 'Tiêu đề danh mục sự kiện ',
                'key'   => 'event-category-title',
                'value'  => 'Danh mục'
            ],
            [
                'label' => 'Tiêu đề danh sách sự kiện liên quan ',
                'key'   => 'event-related-title',
                'value'  => 'Sự kiện cùng chuyên mục'
            ],
            // posts - Post option
            [
                'label' => 'Tiêu đề SEO trang tin tức',
                'key' => 'posts-seo-title',
                'value' => 'Tin tức'
            ],
            [
                'label' => 'Mô tả SEO trang tin tức',
                'key'   => 'posts-banner-desc',
                'value'  => ''
            ],
            [
                'label' => 'Banner trang tin tức',
                'key'   => 'posts-banner',
                'value'  => $domain . '/assets/images/banners/event_banner.jpg',
            ],
            [
                'label' => 'Tiêu đề banner trang tin tức',
                'key'   => 'posts-banner-title',
                'value'  => 'Tin tức'
            ],
            [
                'label' => 'Tiêu đề danh sách tin tức',
                'key'   => 'posts-list-title',
                'value'  => 'Tin tức: Gần đây nhất'
            ],
            [
                'label' => 'Tiêu đề danh mục tin tức',
                'key'   => 'posts-category-title',
                'value'  => 'Danh mục'
            ],
            [
                'label' => 'Tiêu đề danh mục thẻ tags tin tức',
                'key'   => 'posts-tag-title',
                'value'  => 'Tags'
            ],
            [
                'label' => 'Tiêu đề danh sách tin tức liên quan ',
                'key'   => 'posts-related-title',
                'value'  => 'Tin tức cùng chuyên mục'
            ],
            // Support Option
            [
                'label' => 'Tiêu đề SEO trang dịch vụ hỗ trợ',
                'key' => 'support-seo-title',
                'value' => 'Dịch vụ hỗ trợ'
            ],
            [
                'label' => 'Mô tả SEO trang dịch vụ hỗ trợ',
                'key'   => 'support-banner-desc',
                'value'  => ''
            ],
            [
                'label' => 'Banner trang dịch vụ hỗ trợ',
                'key'   => 'support-banner',
                'value'  => $domain . '/assets/images/banners/support.jpg',
            ],
            [
                'label' => 'Tiêu đề banner trang dịch vụ hỗ trợ',
                'key'   => 'support-banner-title',
                'value'  => 'Dịch vụ hỗ trợ'
            ],
            [
                'label' => 'Mô tả danh sách dịch vụ hỗ trợ 1',
                'key'   => 'support-list-desc-1',
                'value'  => '<h2>Những dịch vụ hỗ trợ cho bạn</h2><p>Chúng tôi sẽ hỗ trợ từng bước cho bạn trong suốt quá trình học tại Swinburne Online. Chúng tôi thấu hiểu một ngày của bạn không phải lúc nào cũng bắt đầu lúc 9 giờ sáng đến 5 giờ chiều, đơn giản vì chúng tôi cũng vậy! Chúng tôi tăng thời gian hỗ trợ cho bạn để đảm bảo bạn có thể nhận được hồi đáp khi bạn cần.</p>  <p>Sau cùng, Swinburne Online đảm bảo đơn giản hóa nhất việc học cho học viên. Chúng tôi không chỉ có các công cụ và nhóm hỗ trợ phù hợp để kịp thời trả lời các thắc mắc và xử lý các vấn đề kỹ thuật trong quá trình học - đội ngũ Swinburne sẽ đồng hành và mang đến thành công cho bạn.</p>'
            ],
            [
                'label' => 'Mô tả danh sách dịch vụ hỗ trợ 2',
                'key'   => 'support-list-desc-2',
                'value'  => '<h2>Tất cả các quyền lợi như sinh viên học ở khuôn viên học xá</h2><p>Sinh viên Swinburne Online có quyền sử dụng tất cả các dịch vụ và quyền lợi giống như một sinh viên học tại trường.</p>'
            ],
            //Widget content 1
            [
                'label' => 'Tiêu đề Widget Support 1',
                'key' => 'widget-title-support-1',
                'value' => 'Chuyên gia tư vấn khóa học'
            ],
            [
                'label' => 'Mô tả Widget Support 1',
                'key' => 'widget-desc-support-1',
                'value' => 'Đội ngũ tư vấn sẽ hướng dẫn từng bước một cho bạn trong trình đăng ký. Họ sẽ giải thích hình thức học trực tuyến, sẽ hướng dẫn bạn những giấy tờ cần nộp và trả lời bất kỳ câu hỏi nào từ bạn.'
            ],
            [
                'label' => 'Hình ảnh Widget Support 1',
                'key' => 'widget-image-support-1',
                'value' => $domain . '/assets/images/supports/support_1.png'
            ],

            // Widget Content 2
            [
                'label' => 'Tiêu đề Widget Support 2',
                'key' => 'widget-title-support-2',
                'value' => 'Cố vấn sinh viên'
            ],
            [
                'label' => 'Mô tả Widget Support 2',
                'key' => 'widget-desc-support-2',
                'value' => 'Cố vấn Sinh viên tại Swinburne luôn sẵn sàng giúp bạn bất cứ khi nào bạn cần, và luôn đồng hành cùng bạn. Bất cứ khi nào cần trợ giúp về bài luận, hỗ trợ kỹ thuật hay tư vấn việc học, bạn có thể truy cập ngay vào một nhóm hỗ trợ luôn sẵn sàng túc trực.'
            ],
            [
                'label' => 'Hình ảnh Widget Support 2',
                'key' => 'widget-image-support-2',
                'value' => $domain . '/assets/images/supports/support_2.png'
            ],
            // Widget Content 3
            [
                'label' => 'Tiêu đề Widget Support 3',
                'key' => 'widget-title-support-3',
                'value' => 'Huấn luyện viên'
            ],
            [
                'label' => 'Mô tả Widget Support 3',
                'key' => 'widget-desc-support-3',
                'value' => 'Nhắc đến việc quản lý thời gian và duy trì động lực tại Swinburne, không thể không nhắc đến huấn luyện viên. Họ có thể giúp bạn đặt ra những mục tiêu thực tế, hình thành và phát triển thói quen học tập tích cực và luyện tập việc tự lo trong quá trình học.'
            ],
            [
                'label' => 'Hình ảnh Widget Support 3',
                'key' => 'widget-image-support-3',
                'value' => $domain . '/assets/images/supports/support_3.png'
            ],
            // Widget Content 4
            [
                'label' => 'Tiêu đề Widget Support 4',
                'key' => 'widget-title-support-4',
                'value' => 'Tutors (Gia sư)'
            ],
            [
                'label' => 'Mô tả Widget Support 4',
                'key' => 'widget-desc-support-4',
                'value' => 'Không cần phải ngồi học ở giảng đường để có thể tương tác với các gia sư đại học giỏi nhất. Các chuyên gia học thuật của Swinburne Online hay còn gọi là Cố vấn eLearning sẽ giúp bạn có những trải nghiệm học tập trực tuyến đơn giản và bổ ích.'
            ],
            [
                'label' => 'Hình ảnh Widget Support 4',
                'key' => 'widget-image-support-4',
                'value' => $domain . '/assets/images/supports/support_4.png'
            ],
            // Widget Content 5
            [
                'label' => 'Tiêu đề Widget Support 5',
                'key' => 'widget-title-support-5',
                'value' => 'Nhóm hỗ trợ sinh viên'
            ],
            [
                'label' => 'Mô tả Widget Support 5',
                'key' => 'widget-desc-support-5',
                'value' => 'Không cần phải ngồi học ở giảng đường để có thể tương tác với các gia sư đại học giỏi nhất. Các chuyên gia học thuật của Swinburne Online hay còn gọi là Cố vấn eLearning sẽ giúp bạn có những trải nghiệm học tập trực tuyến đơn giản và bổ ích.'
            ],
            [
                'label' => 'Hình ảnh Widget Support 5',
                'key' => 'widget-image-support-5',
                'value' => $domain . '/assets/images/supports/support_5.png'
            ],
            // Widget Content 6
            [
                'label' => 'Tiêu đề Widget Support 6',
                'key' => 'widget-title-support-6',
                'value' => 'Lớp học'
            ],
            [
                'label' => 'Mô tả Widget Support 6',
                'key' => 'widget-desc-support-6',
                'value' => 'Đôi khi, bạn bè cùng lớp sẽ là những hỗ trợ đắc lực cho bạn trong quá trình học. Đối với mỗi môn học, bạn sẽ được vào một lớp có các thành viên giống như bạn. Nên đừng lo lắng vì tại Swinburne Online bạn không sẽ không phải học một mình.'
            ],
            [
                'label' => 'Hình ảnh Widget Support 6',
                'key' => 'widget-image-support-6',
                'value' => $domain . '/assets/images/supports/support_6.png'
            ],
            [
                'label' => 'Đường dẫn button 1',
                'key' => 'button-link-support-1',
                'value' => '/study-journey'
            ],
            // Widget Content 7
            [
                'label' => 'Tiêu đề Widget Support 7',
                'key' => 'widget-title-support-7',
                'value' => 'Tư vấn viên'
            ],
            [
                'label' => 'Mô tả Widget Support 7',
                'key' => 'widget-desc-support-7',
                'value' => 'Tư vấn viên tại Swinburne Online là những người có trình độ cao, họ được đào tạo đặc biệt để tư vấn trực tuyến. Nếu bạn đang phải vật lộn với một số khó khăn về sức khỏe, cảm xúc và tinh thần, hay là những khó khăn liên quan đến việc học Các tư vấn viên Swinburne Online có thể giúp bạn.'
            ],
            [
                'label' => 'Hình ảnh Widget Support 7',
                'key' => 'widget-image-support-7',
                'value' => $domain . '/assets/images/supports/support_7.png'
            ],
            // Widget Content 8
            [
                'label' => 'Tiêu đề Widget Support 8',
                'key' => 'widget-title-support-8',
                'value' => 'Chứng nhận'
            ],
            [
                'label' => 'Mô tả Widget Support 8',
                'key' => 'widget-desc-support-8',
                'value' => 'Các giấy chứng nhận hay phần quà dùng để ghi nhận những bạn có thành tích cao trong nỗ lực, phấn đấu thông qua việc học và tham gia các hoạt động của trường. Và những thành tích đó được nêu rõ trong bảng điểm và bạn cũng có thể nêu rõ trong hồ sơ xin việc.'
            ],
            [
                'label' => 'Hình ảnh Widget Support 8',
                'key' => 'widget-image-support-8',
                'value' => $domain . '/assets/images/supports/support_8.png'
            ],
            // Widget Content 9
            [
                'label' => 'Tiêu đề Widget Support 9',
                'key' => 'widget-title-support-9',
                'value' => 'Các chương trình trao đổi của Swinburne'
            ],
            [
                'label' => 'Mô tả Widget Support 9',
                'key' => 'widget-desc-support-9',
                'value' => 'Sinh viên Swinburne Online đủ điều kiện tham gia chương trình trao đổi sinh viên ở nước ngoài như chương trình trao đổi dài hạn hoặc ngắn hạn. Tham gia chương trình trao đổi sinh viên là cách tuyệt vời để nâng cao giá trị bằng cấp và mở rộng tư duy.'
            ],
            [
                'label' => 'Hình ảnh Widget Support 9',
                'key' => 'widget-image-support-9',
                'value' => $domain . '/assets/images/supports/support_9.png'
            ],
            // Widget Content 10
            [
                'label' => 'Tiêu đề Widget Support 10',
                'key' => 'widget-title-support-10',
                'value' => 'Swinburne Student Life'
            ],
            [
                'label' => 'Mô tả Widget Support 10',
                'key' => 'widget-desc-support-10',
                'value' => 'Niềm vui của sinh viên là được ăn uống, vui chơi với các bạn cùng khóa, và tham gia học Swinburne Online cũng không ngoại lệ. Swinburne Student Life cung cấp các dịch vụ miễn phí, bao gồm các câu lạc bộ sinh viên và tổ chức, bên cạnh đó còn tổ chức các ngày hội thể thao và giải trí, các trò chơi, cũng như các cuộc thi mang tính học thuật.'
            ],
            [
                'label' => 'Hình ảnh Widget Support 10',
                'key' => 'widget-image-support-10',
                'value' => $domain . '/assets/images/supports/support_10.png'
            ],
            [
                'label' => 'Đường dẫn button 2',
                'key' => 'button-link-support-2',
                'value' => '/study-journey'
            ],
            // Service Option
            [
                'label' => 'Tiêu đề SEO trang hỗ trợ việc học của bạn',
                'key' => 'service-seo-title',
                'value' => 'Hỗ trợ việc học'
            ],
            [
                'label' => 'Banner 1 SEO trang hỗ trợ việc học của bạn',
                'key' => 'service-banner-1',
                'value' => $domain . '/assets/images/banners/support_services.jpg'
            ],

            [
                'label' => 'Tiêu đề SEO banner 1 trang hỗ trợ việc học của bạn',
                'key' => 'service-banner-1-title',
                'value' => 'Hỗ trợ việc học cho bạn'
            ],
            [
                'label' => 'Mô tả SEO banner 1 trang hỗ trợ việc học của bạn',
                'key' => 'service-banner-1-desc',
                'value' => ''
            ],
            [
                'label' => 'Mô tả SEO trang hỗ trợ việc học của bạn',
                'key' => 'service-seo-desc',
                'value' => 'Mỗi tháng, Swinburne sẽ tổ chức các buổi hội thảo trực tuyến. Đây là một cơ hội đặc biệt để các bạn đăng nhập cùng lúc với cố vấn học tập của mình. Thông thường nó sẽ diễn ra trước những ngày cuối của bài thi đánh giá. Các bạn sẽ có cơ hội để đặt bất kỳ câu hỏi nào liên quan đến bài tập trong thời gian đó và nhận được các câu hỏi và thắc mắc của các bạn khác. Chúng tôi hiểu rằng không phải ai cũng có thể sắp xếp thời gian tham gia vào các buổi hội thảo này nên các bạn có thể xem lại vào ngày hôm sau.'
            ],

            [
                'label' => 'Tiêu đề Banner 2 trang hỗ trợ việc học của bạn',
                'key' => 'service-banner-2-title',
                'value' => 'Cử nhân Công nghệ thông tin'
            ],

            [
                'label' => 'Mô tả Banner 2 trang hỗ trợ việc học của bạn',
                'key' => 'service-banner-2-desc',
                'value' => 'Bắt đầu đơn đăng ký trực tuyến hoặc nói chuyện với chuyên gia tư vấn khóa học theo số (+84) 939 403 555'
            ],

            [
                'label' => 'Banner 2 trang hỗ trợ việc học của bạn',
                'key' => 'service-banner-2',
                'value' => $domain . '/assets/images/banners/support_services_2.jpg'
            ],

            [
                'label' => 'Tiêu đề Widget 1 trang hỗ trợ việc học của bạn',
                'key' => 'widget-service-title-1',
                'value' => 'Trải nghiệm việc học tốt hơn'
            ],
            [
                'label' => 'Mô tả Widget 1 trang hỗ trợ việc học của bạn',
                'key' => 'widget-service-desc-1',
                'value' => 'Là sinh viên của Swinburne Online Việt Nam, bạn sẽ được sử dụng các tài liệu học tập chất lượng cao được thiết kế riêng cho trực tuyến.'
            ],
            [
                'label' => 'Hình ảnh Widget 1 trang hỗ trợ việc học của bạn',
                'key' => 'widget-service-image-1',
                'value' => $domain . '/assets/images/services/service_1.png'
            ],
            [
                'label' => 'Tiêu đề Widget 2 trang hỗ trợ việc học của bạn',
                'key' => 'widget-service-title-2',
                'value' => 'Việc học trực tuyến diễn ra như thế nào?'
            ],
            [
                'label' => 'Mô tả Widget 2 trang hỗ trợ việc học của bạn',
                'key' => 'widget-service-desc-2',
                'value' => 'Tại Swinburne Online, chúng tôi hướng dẫn cho bạn từng bước một. Khám phá hành trình đại học trực tuyến từ lúc nhập học đến lúc tốt nghiệp.'
            ],
            [
                'label' => 'Hình ảnh Widget 2 trang hỗ trợ việc học của bạn',
                'key' => 'widget-service-image-2',
                'value' => $domain . '/assets/images/services/service_2.png'
            ],
            [
                'label' => 'Tiêu đề Widget 3 trang hỗ trợ việc học của bạn',
                'key' => 'widget-service-title-3',
                'value' => 'Các dịch vụ hỗ trợ'
            ],
            [
                'label' => 'Mô tả Widget 3 trang hỗ trợ việc học của bạn',
                'key' => 'widget-service-desc-3',
                'value' => 'Chúng tôi không chỉ cung cấp các công cụ và nhóm hỗ trợ phù hợp để giúp bạn - chúng tôi còn có đội ngũ tận tâm dẫn dắt bạn đến thành công.'
            ],
            [
                'label' => 'Hình ảnh Widget 3 trang hỗ trợ việc học của bạn',
                'key' => 'widget-service-image-3',
                'value' => $domain . '/assets/images/services/service_3.png'
            ],
            // Flexible Study Option
            [
                'label' => 'Tiêu đề SEO học tập linh hoạt',
                'key' => 'flexible-study-seo-title',
                'value' => 'Học tập linh hoạt'
            ],
            //Widget Flexible Study 1
            [
                'label' => 'Tiêu đề học tập linh hoạt',
                'key' => 'flexible-study-widget-title-1',
                'value' => 'Học tập linh hoạt'
            ],
            [
                'label' => 'Mô tả học tập linh hoạt',
                'key' => 'flexible-study-widget-desc-1',
                'value' => '<p></p><p>Chúng ta đều có những ưu tiên khác nhau khi nhắc đến tính linh hoạt. Có thể bạn muốn được học bất cứ khi nào bạn thích, từ bất cứ nơi nào bạn muốn hoặc với cường độ phù hợp nhất với bạn. Tin vui cho các bạn là cho dù bạn có định nghĩa như thế nào về việc học tập linh hoạt thì Swinburne Online sẽ giúp bạn biến giấc mơ thành hiện thực.</p><p><strong>Kéo xuống</strong> để khám phá sự linh hoạt của Swinburne Online và trải nghiệm nó nhé.</p><p></p>'
            ],
            [
                'label' => 'Background học tập linh hoạt',
                'key' => 'flexible-study-widget-background-1',
                'value' => 'https://www.swinburneonline.edu.au/app/uploads/Jacinta-2.jpg'
            ],

            //Widget Flexible Study 2
            [
                'label' => 'Tiêu đề học bất cứ đâu',
                'key' => 'flexible-study-widget-title-2',
                'value' => 'Học ở bất cứ đâu'
            ],
            [
                'label' => 'Mô tả học bất cứ đâu',
                'key' => 'flexible-study-widget-desc-2',
                'value' => '<p></p><p>Với các khóa học trực tuyến 100% của Swinburne Online, bạn chỉ cần kết nối internet và học từ bất cứ nơi nào. Cho dù bạn đang ở nhà hay đang di chuyển, bạn có thể vào học bất cứ khi nào bạn muốn, mà không cần phải đến trường.</p><p></p>'
            ],
            [
                'label' => 'Background học bất cứ đâu',
                'key' => 'flexible-study-widget-background-2',
                'value' => 'https://www.swinburneonline.edu.au/app/uploads/DonnaColeman_3-scaled.jpg'
            ],
            [
                'label' => 'Nhãn nút học bất cứ đâu',
                'key' => 'flexible-study-widget-button-2',
                'value' => ''
            ],
            [
                'label' => 'Đường dẫn học bất cứ đâu',
                'key' => 'flexible-study-widget-link-2',
                'value' => ''
            ],
            //Widget Flexible Study 3
            [
                'label' => 'Tiêu đề truy cập bất cứ lúc nào',
                'key' => 'flexible-study-widget-title-3',
                'value' => 'Truy cập bất cứ lúc nào'
            ],
            [
                'label' => 'Mô tả truy cập bất cứ lúc nào',
                'key' => 'flexible-study-widget-desc-3',
                'value' => '<p>Việc dậy sớm hay thức đêm không còn xảy ra bởi vì bạn có quyền truy cập vào học 24/7. Những bản thảo luận và nội dung học tập vẫn ở đó vào bất kỳ thời điểm nào.</p>'
            ],
            [
                'label' => 'Background truy cập bất cứ lúc nào',
                'key' => 'flexible-study-widget-background-3',
                'value' => 'https://www.swinburneonline.edu.au/app/uploads/BenFielder_2-scaled.jpg'
            ],

            //Widget Flexible Study 4
            [
                'label' => 'Tiêu đề sắp xếp thứ tự ưu tiên',
                'key' => 'flexible-study-widget-title-4',
                'value' => 'Sắp xếp thứ tự ưu tiên'
            ],
            [
                'label' => 'Mô tả sắp xếp thứ tự ưu tiên',
                'key' => 'flexible-study-widget-desc-4',
                'value' => '<p>Tham gia học Swinburne Online sẽ giúp bạn sắp xếp được thời gian học tập phù hợp, Điều đó có nghĩa bạn sẽ có thời gian cho những công việc khác ngoài việc học. Sắp xếp những điều ưu tiên như gia đình, công việc và những công việc cá nhân, và chỉ học trong khoảng thời gian phù hợp với bạn nhất.</p>'
            ],
            [
                'label' => 'Background sắp xếp thứ tự ưu tiên',
                'key' => 'flexible-study-widget-background-4',
                'value' => 'https://www.swinburneonline.edu.au/app/uploads/Buddhini_Pic.jpg'
            ],
            [
                'label' => 'Nhãn nút sắp xếp thứ tự ưu tiên',
                'key' => 'flexible-study-widget-button-4',
                'value' => ''
            ],
            [
                'label' => 'Đường dẫn sắp xếp thứ tự ưu tiên',
                'key' => 'flexible-study-widget-link-4',
                'value' => ''
            ],
            [
                'label' => 'Video sắp xếp thứ tự ưu tiên',
                'key' => 'flexible-study-widget-video-4',
                'value' => '<iframe width="640" height="360" src="https://www.youtube.com/embed/lp-EO5I60KA?list=RDulOb9gIGGd0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            ],
            //Widget Flexible Study 5
            [
                'label' => 'Tiêu đề sắp xếp lộ trình học cho bản thân',
                'key' => 'flexible-study-widget-title-5',
                'value' => 'Sắp xếp lộ trình học cho bản thân'
            ],
            [
                'label' => 'Mô tả sắp xếp lộ trình học cho bản thân',
                'key' => 'flexible-study-widget-desc-5',
                'value' => 'Nếu bạn không biết về lộ trình bạn đặt ra có thực hiện được hay không thì cũng không nên quá lo lắng, với nhiều sự lựa chọn học bán thời gian hay đăng ký thêm tín chỉ khi bạn đủ khả năng, Swinburne Online sẽ giúp bạn lựa chọn lộ trình phù hợp với bạn nhất. Ngoài ra, bạn cũng có cơ hội tốt nghiệp sớm hơn dự định với việc hoàn thành đủ 12 tín chỉ mỗi năm.'
            ],
            [
                'label' => 'Background sắp xếp lộ trình học cho bản thân',
                'key' => 'flexible-study-widget-background-5',
                'value' => 'https://www.swinburneonline.edu.au/app/uploads/Steph-3.jpg'
            ],

            [
                'label' => 'Nhãn nút sắp xếp lộ trình học cho bản thân',
                'key' => 'flexible-study-widget-button-5',
                'value' => 'Tính toán lộ trình học của bạn'
            ],
            [
                'label' => 'Đường dẫn sắp xếp lộ trình học cho bản thân',
                'key' => 'flexible-study-widget-link-5',
                'value' => '#'
            ],
            //Widget Flexible Study 6
            [
                'label' => 'Tiêu đề mở các môn học ba lần trong năm',
                'key' => 'flexible-study-widget-title-6',
                'value' => 'Mở các môn học ba lần trong năm'
            ],
            [
                'label' => 'Mô tả mở các môn học ba lần trong năm',
                'key' => 'flexible-study-widget-desc-6',
                'value' => 'Với ba đợt tuyển sinh mỗi năm, bạn có thể chọn bất kỳ thời gian nào trong ba đợt này để bắt đầu học, hoặc tạm gác lại việc học khi nó trùng với những việc quan trọng của bạn. các đợt tuyển sinh của Swinburne Online là vào tháng 3, tháng 7 và tháng 11.'
            ],
            [
                'label' => 'Background mở các môn học ba lần trong năm',
                'key' => 'flexible-study-widget-background-6',
                'value' => 'https://www.swinburneonline.edu.au/app/uploads/Adam-3-1.jpg'
            ],

            [
                'label' => 'Nhãn nút mở các môn học ba lần trong năm',
                'key' => 'flexible-study-widget-button-6',
                'value' => ''
            ],
            [
                'label' => 'Đường dẫn mở các môn học ba lần trong năm',
                'key' => 'flexible-study-widget-link-6',
                'value' => ''
            ],
            //Widget Flexible Study 7
            [
                'label' => 'Tiêu đề hỗ trợ xuyên suốt',
                'key' => 'flexible-study-widget-title-7',
                'value' => 'Hỗ trợ xuyên suốt'
            ],
            [
                'label' => 'Mô tả hỗ trợ xuyên suốt',
                'key' => 'flexible-study-widget-desc-7',
                'value' => 'Chúng tôi sẽ hỗ trợ bạn xuyên suốt trong quá trình học. Bất cứ khi nào cần, bạn chỉ cần gửi email cho gia sư trực tuyến để được hỗ trợ trực tiếp với nội dung khóa học hoặc gọi cho Cố vấn Sinh viên để hỏi về những vấn đề khác.'
            ],
            [
                'label' => 'Background hỗ trợ xuyên suốt',
                'key' => 'flexible-study-widget-background-7',
                'value' => 'https://www.swinburneonline.edu.au/app/uploads/Patrick_01_web.jpg'
            ],
            [
                'label' => 'Nhãn nút hỗ trợ xuyên suốt',
                'key' => 'flexible-study-widget-button-7',
                'value' => 'Các dịch vụ hỗ trợ'
            ],
            [
                'label' => 'Đường dẫn hỗ trợ xuyên suốt',
                'key' => 'flexible-study-widget-link-7',
                'value' => '/services'
            ],
            //Widget Flexible Study 8
            [
                'label' => 'Tiêu đề trải nghiệm sự linh hoạt',
                'key' => 'flexible-study-widget-title-8',
                'value' => 'Trải nghiệm sự linh hoạt'
            ],
            [
                'label' => 'Mô tả trải nghiệm sự linh hoạt',
                'key' => 'flexible-study-widget-desc-8',
                'value' => 'Nhắc đến nền giáo dục trong tương lai, điều quan trọng nhất là việc đảm bảo việc học phải đi đôi các việc quan trọng khác trong cuộc sống. Nếu bạn thật sự hứng thú về tính linh hoạt trong việc học, hãy đến với Swinburne Online, hãy tham khảo các khóa học của chúng tôi.'
            ],
            [
                'label' => 'Background trải nghiệm sự linh hoạt',
                'key' => 'flexible-study-widget-background-8',
                'value' => 'https://www.swinburneonline.edu.au/app/uploads/Course-Consultant-Anna-mobile.jpg'
            ],
            [
                'label' => 'Nhãn nút trải nghiệm sự linh hoạt',
                'key' => 'flexible-study-widget-button-8',
                'value' => 'Các khóa học'
            ],
            [
                'label' => 'Đường dẫn trải nghiệm sự linh hoạt',
                'key' => 'flexible-study-widget-link-8',
                'value' => '#'
            ],
            [
                'label' => 'Tiêu đề SEO hành trình học',
                'key' => 'study-journey-seo-title',
                'value' => 'Hành trình học'
            ],
            //Widget Flexible Study 1
            [
                'label' => 'Tiêu đề hành trình của bạn',
                'key' => 'study-journey-widget-title-1',
                'value' => 'Hành trình của bạn'
            ],
            [
                'label' => 'Mô tả hành trình của bạn',
                'key' => 'study-journey-widget-desc-1',
                'value' => '<p></p><p>Tại Swinburne Online, chúng tôi sẽ hướng dẫn bạn từng bước xuyên suốt quá trình học.</p><p><strong>Kéo xuống</strong> để khám phá hành trình dục đại học trực tuyến của bạn từ khi đăng ký đến khi tốt nghiệp.</p><p></p>'
            ],
            [
                'label' => 'Background hành trình của bạn',
                'key' => 'study-journey-widget-background-1',
                'value' => 'https://www.swinburneonline.edu.au/app/uploads/Graduation_Day_March_2017_3_v5.jpg'
            ],
            //Widget Flexible Study 2
            [
                'label' => 'Tiêu đề quá trình học tập',
                'key' => 'study-journey-widget-title-2',
                'value' => 'Quá trình nhập học'
            ],
            [
                'label' => 'Mô tả quá trình học tập',
                'key' => 'study-journey-widget-desc-2',
                'value' => 'Chuyên gia tư vấn khóa học của chúng tôi sẽ kiểm tra hồ sơ của bạn để xem liệu các bạn có đủ điều kiện và trả lời các câu hỏi của bạn về khóa học. Sau đó, họ sẽ chuyển các bạn qua quá trình đăng ký học. Họ sẽ hướng dẫn từng bước một.'
            ],
            [
                'label' => 'Background quá trình học tập',
                'key' => 'study-journey-widget-background-2',
                'value' => 'https://www.swinburneonline.edu.au/app/uploads/Course-Consultant-Anna-mobile.jpg'
            ],
            [
                'label' => 'Nhãn nút quá trình học tập',
                'key' => 'study-journey-widget-button-2',
                'value' => ''
            ],
            [
                'label' => 'Đường dẫn quá trình học tập',
                'key' => 'study-journey-widget-link-2',
                'value' => ''
            ],
            //Widget Flexible Study 3
            [
                'label' => 'Tiêu đề cuộc gọi chào mừng',
                'key' => 'study-journey-widget-title-3',
                'value' => 'Chào mừng bạn đến với Swinburne Online'
            ],
            [
                'label' => 'Mô tả cuộc gọi chào mừng',
                'key' => 'study-journey-widget-desc-3',
                'value' => 'Sau khi hoàn thành đăng ký, bạn sẽ nhận được một cuộc gọi từ Swinburne để đảm bảo bạn đã chuẩn bị kỹ càng để bắt đầu học. Đây là cơ hội tuyệt vời để bạn đặt những câu hỏi liên quan đến việc học.'
            ],
            [
                'label' => 'Background cuộc gọi chào mừng',
                'key' => 'study-journey-widget-background-3',
                'value' => 'https://www.swinburneonline.edu.au/app/uploads/Patrick_01_web.jpg'
            ],
            //Widget Flexible Study 4
            [
                'label' => 'Tiêu đề học xá trực tuyến',
                'key' => 'study-journey-widget-title-4',
                'value' => 'Học xá trực tuyến'
            ],
            [
                'label' => 'Mô tả học xá trực tuyến',
                'key' => 'study-journey-widget-desc-4',
                'value' => 'Bạn sẽ truy cập vào đây để xem thông tin liên lạc cá nhân, hỗ trợ học tập và lớp học trực tuyến của bạn.'
            ],
            [
                'label' => 'Ảnh slide học xá trực tuyến 1',
                'key' => 'study-journey-widget-slide-4-1',
                'value' => $domain . '/assets/images/journey/hoc-xa-1.png'
            ],
            [
                'label' => 'Ảnh slide học xá trực tuyến 2',
                'key' => 'study-journey-widget-slide-4-2',
                'value' => $domain . '/assets/images/journey/hoc-xa-2.png'
            ],
            [
                'label' => 'Ảnh slide học xá trực tuyến 3',
                'key' => 'study-journey-widget-slide-4-3',
                'value' => $domain . '/assets/images/journey/hoc-xa-1.png'
            ],
            [
                'label' => 'Ảnh slide học xá trực tuyến 4',
                'key' => 'study-journey-widget-slide-4-4',
                'value' => $domain . '/assets/images/journey/hoc-xa-2.png'
            ],
            [
                'label' => 'Ảnh slide học xá trực tuyến 5',
                'key' => 'study-journey-widget-slide-4-5',
                'value' => $domain . '/assets/images/journey/hoc-xa-1.png'
            ],
            [
                'label' => 'Ảnh slide học xá trực tuyến 6',
                'key' => 'study-journey-widget-slide-4-6',
                'value' => $domain . '/assets/images/journey/hoc-xa-2.png'
            ],
            [
                'label' => 'Nhãn nút học xá trực tuyến',
                'key' => 'study-journey-widget-button-4',
                'value' => ''
            ],
            [
                'label' => 'Đường dẫn học xá trực tuyến',
                'key' => 'study-journey-widget-link-4',
                'value' => ''
            ],
            //Widget Flexible Study 5
            [
                'label' => 'Tiêu đề lớp học ảo',
                'key' => 'study-journey-widget-title-5',
                'value' => 'Lớp học ảo'
            ],
            [
                'label' => 'Mô tả lớp học ảo',
                'key' => 'study-journey-widget-desc-5',
                'value' => 'Chúng tôi thiết kế riêng lớp học ảo cho việc học trực tuyến của bạn. Bạn sẽ sử dụng nó để tương tác với cố vấn học tập và các bạn cùng lớp, và tham gia vào các phương tiện hỗ trợ học tập bao gồm đa phương tiện, hoạt động tương tác, podcast và video.'
            ],
            [
                'label' => 'Background lớp học ảo',
                'key' => 'study-journey-widget-background-5',
                'value' => 'https://www.swinburneonline.edu.au/app/uploads/SOL_Canvas_Dashboard.jpg'
            ],
            [
                'label' => 'Video lớp học ảo',
                'key' => 'study-journey-widget-video-5',
                'value' => '<iframe width="640" height="360" src="https://www.youtube.com/embed/lp-EO5I60KA?list=RDulOb9gIGGd0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>'
            ],
            [
                'label' => 'Nhãn nút lớp học ảo',
                'key' => 'study-journey-widget-button-5',
                'value' => ''
            ],
            [
                'label' => 'Đường dẫn lớp học ảo',
                'key' => 'study-journey-widget-link-5',
                'value' => ''
            ],
            //Widget Study Journey 6
            [
                'label' => 'Tiêu đề nhóm học tập',
                'key' => 'study-journey-widget-title-6',
                'value' => 'Nhóm học tập'
            ],
            [
                'label' => 'Mô tả nhóm học tập',
                'key' => 'study-journey-widget-desc-6',
                'value' => 'Học trực tuyến không có nghĩa là học một mình. Đối với mỗi môn học, bạn sẽ là một phần của một lớp học hay còn gọi là nhóm học, các bạn được dẫn dắt bởi một gia sư có kinh nghiệm và các bạn sẽ được tương tác thường xuyên với các bạn cùng lớp, mỗi lớp sẽ từ 25-30 bạn.'
            ],
            [
                'label' => 'Background nhóm học tập',
                'key' => 'study-journey-widget-background-6',
                'value' => 'https://www.swinburneonline.edu.au/app/uploads/Marnie_Still001_web.jpg'
            ],
            [
                'label' => 'Video nhóm học tập',
                'key' => 'study-journey-widget-video-6',
                'value' => '<iframe width="640" height="360" src="https://www.youtube.com/embed/lp-EO5I60KA?list=RDulOb9gIGGd0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>'
            ],
            [
                'label' => 'Nhãn nút nhóm học tập',
                'key' => 'study-journey-widget-button-6',
                'value' => ''
            ],
            [
                'label' => 'Đường dẫn nhóm học tập',
                'key' => 'study-journey-widget-link-6',
                'value' => '#'
            ],
            //Widget Flexible Study 7
            [
                'label' => 'Tiêu đề gia sư trực tuyến',
                'key' => 'study-journey-widget-title-7',
                'value' => 'Gia sư trực tuyến'
            ],
            [
                'label' => 'Mô tả gia sư trực tuyến',
                'key' => 'study-journey-widget-desc-7',
                'value' => 'Bạn có thể liên hệ một kèm một với một gia sư để hướng dẫn việc học của bạn trong tất cả môn học. Các gia sư của chúng tôi, được gọi là eLearning Advisors (eLAs), là các chuyên gia trong lĩnh vực của họ.'
            ],
            [
                'label' => 'Background gia sư trực tuyến',
                'key' => 'study-journey-widget-background-7',
                'value' => 'https://www.swinburneonline.edu.au/app/uploads/eLA_Luke_web.jpg'
            ],
            [
                'label' => 'Video gia sư trực tuyến',
                'key' => 'study-journey-widget-video-7',
                'value' => '<iframe width="640" height="360" src="https://www.youtube.com/embed/lp-EO5I60KA?list=RDulOb9gIGGd0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>'
            ],
            [
                'label' => 'Nhãn nút gia sư trực tuyến',
                'key' => 'study-journey-widget-button-7',
                'value' => ''
            ],
            [
                'label' => 'Đường dẫn gia sư trực tuyến',
                'key' => 'study-journey-widget-link-7',
                'value' => ''
            ],
            //Widget Flexible Study 8
            [
                'label' => 'Tiêu đề thảo luận và hội thảo',
                'key' => 'study-journey-widget-title-8',
                'value' => 'Thảo luận và hội thảo'
            ],
            [
                'label' => 'Mô tả thảo luận và hội thảo',
                'key' => 'study-journey-widget-desc-8',
                'value' => 'Gia sư của bạn sẽ tổ chức các buổi tương tác thông qua các cuộc thảo luận và hội thảo thường xuyên để giúp bạn trao đổi nội dung các học phần cũng như bài tập được giao. Điều này giúp các bạn có thể nhìn lại chủ đề mỗi tuần và được học những điều hay và bổ ích từ bạn cùng lớp.'
            ],
            [
                'label' => 'Ảnh slide thảo luận và hội thảo 1',
                'key' => 'study-journey-widget-slide-8-1',
                'value' => $domain . '/assets/images/journey/thao-luan-1.png'
            ],
            [
                'label' => 'Ảnh slide thảo luận và hội thảo 2',
                'key' => 'study-journey-widget-slide-8-2',
                'value' => $domain . '/assets/images/journey/thao-luan-2.png'
            ],
            [
                'label' => 'Ảnh slide thảo luận và hội thảo 3',
                'key' => 'study-journey-widget-slide-8-3',
                'value' => $domain . '/assets/images/journey/thao-luan-1.png'
            ],
            [
                'label' => 'Ảnh slide thảo luận và hội thảo 4',
                'key' => 'study-journey-widget-slide-8-4',
                'value' => $domain . '/assets/images/journey/thao-luan-2.png'
            ],
            [
                'label' => 'Ảnh slide thảo luận và hội thảo 5',
                'key' => 'study-journey-widget-slide-8-5',
                'value' => $domain . '/assets/images/journey/thao-luan-1.png'
            ],
            [
                'label' => 'Ảnh slide thảo luận và hội thảo 6',
                'key' => 'study-journey-widget-slide-8-6',
                'value' => $domain . '/assets/images/journey/thao-luan-2.png'
            ],
            [
                'label' => 'Nhãn nút thảo luận và hội thảo',
                'key' => 'study-journey-widget-button-8',
                'value' => ''
            ],
            [
                'label' => 'Đường dẫn thảo luận và hội thảo',
                'key' => 'study-journey-widget-link-8',
                'value' => ''
            ],
            [
                'label' => 'Tiêu đề nhóm hỗ trợ sinh viên',
                'key' => 'study-journey-widget-title-9',
                'value' => 'Nhóm hỗ trợ sinh viên'
            ],
            [
                'label' => 'Mô tả nhóm hỗ trợ sinh viên',
                'key' => 'study-journey-widget-desc-9',
                'value' => 'Họ là những sinh viên giàu kinh nghiệm đã từng trải nghiệm việc học Swinburne Online, họ thấu hiểu bạn và họ tình nguyện giúp bạn trong quá trình chuyển giao sang học trực tuyến một cách suôn sẻ nhất.'
            ],
            [
                'label' => 'Background nhóm hỗ trợ sinh viên',
                'key' => 'study-journey-widget-background-9',
                'value' => 'https://www.swinburneonline.edu.au/app/uploads/Tanya_Jacqueline_Mentor_web.jpg'
            ],
            [
                'label' => 'Video nhóm hỗ trợ sinh viên',
                'key' => 'study-journey-widget-video-9',
                'value' => '<iframe width="640" height="360" src="https://www.youtube.com/embed/lp-EO5I60KA?list=RDulOb9gIGGd0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>'
            ],
            [
                'label' => 'Nhãn nút nhóm hỗ trợ sinh viên',
                'key' => 'study-journey-widget-button-9',
                'value' => ''
            ],
            [
                'label' => 'Đường dẫn nhóm hỗ trợ sinh viên',
                'key' => 'study-journey-widget-link-9',
                'value' => ''
            ],
            [
                'label' => 'Tiêu đề cố vấn sinh viên',
                'key' => 'study-journey-widget-title-10',
                'value' => 'Cố vấn sinh viên'
            ],
            [
                'label' => 'Mô tả cố vấn sinh viên',
                'key' => 'study-journey-widget-desc-10',
                'value' => 'Cố vấn sinh viên luôn sẵn sàng giúp bạn tất cả các vấn đề từ kỹ thuật đến học thuật và đưa ra những ý kiến tham khảo cho bạn bất cứ khi nào bạn cần.'
            ],
            [
                'label' => 'Background cố vấn sinh viên',
                'key' => 'study-journey-widget-background-10',
                'value' => 'https://www.swinburneonline.edu.au/app/uploads/SA_Bec_2_web.jpg'
            ],
            [
                'label' => 'Nhãn nút cố vấn sinh viên',
                'key' => 'study-journey-widget-button-10',
                'value' => ''
            ],
            [
                'label' => 'Đường dẫn cố vấn sinh viên',
                'key' => 'study-journey-widget-link-10',
                'value' => ''
            ],
            [
                'label' => 'Tiêu đề huấn luyện sinh viên',
                'key' => 'study-journey-widget-title-11',
                'value' => 'Huấn luyện sinh viên'
            ],
            [
                'label' => 'Mô tả huấn luyện sinh viên',
                'key' => 'study-journey-widget-desc-11',
                'value' => 'Bạn có thể đặt một cuộc hẹn qua điện thoại với huấn luyện sinh viên của bạn, những người có thể đưa ra các chiến lược để thành công trong việc học của bạn, ho sẽ tạo động lực và hướng dẫn cho bạn cách học hiệu quả.'
            ],
            [
                'label' => 'Background huấn luyện sinh viên',
                'key' => 'study-journey-widget-background-11',
                'value' => 'https://www.swinburneonline.edu.au/app/uploads/Tomas_01_web.jpg'
            ],
            [
                'label' => 'Video huấn luyện sinh viên',
                'key' => 'study-journey-widget-video-11',
                'value' => '<iframe width="640" height="360" src="https://www.youtube.com/embed/ulOb9gIGGd0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            ],
            [
                'label' => 'Nhãn nút huấn luyện sinh viên',
                'key' => 'study-journey-widget-button-11',
                'value' => ''
            ],
            [
                'label' => 'Đường dẫn huấn luyện sinh viên',
                'key' => 'study-journey-widget-link-11',
                'value' => ''
            ],
            [
                'label' => 'Tiêu đề tốt nghiệp',
                'key' => 'study-journey-widget-title-12',
                'value' => 'Tốt nghiệp'
            ],
            [
                'label' => 'Mô tả tốt nghiệp',
                'key' => 'study-journey-widget-desc-12',
                'value' => 'Là sinh viên Swinburne Online, bạn sẽ nhận được bằng tốt nghiệp như một sinh viên học tại trường. Vì vậy hãy tận hưởng thành quả cho sự cố gắng, chăm chỉ của bạn vào lễ tốt nghiệp nhé.'
            ],
            [
                'label' => 'Background tốt nghiệp',
                'key' => 'study-journey-widget-background-12',
                'value' => 'https://www.swinburneonline.edu.au/app/uploads/GraduationDay_Aug_Erin_ps.jpg'
            ],
            [
                'label' => 'Nhãn nút tốt nghiệp',
                'key' => 'study-journey-widget-button-12',
                'value' => ''
            ],
            [
                'label' => 'Đường dẫn tốt nghiệp',
                'key' => 'study-journey-widget-link-12',
                'value' => ''
            ],
            [
                'label' => 'Tiêu đề SEO trang tìm kiếm',
                'key' => 'search-seo-title',
                'value' => 'Kết quả tìm kiếm'
            ],
            [
                'label' => 'Mô tả SEO trang tìm kiếm',
                'key'   => 'search-banner-desc',
                'value'  => ''
            ],
            [
                'label' => 'Banner trang tìm kiếm',
                'key'   => 'search-banner',
                'value'  => $domain.'/assets/images/banners/search_banner.jpg',
            ],
            [
                'label' => 'Tiêu đề banner trang tìm kiếm',
                'key'   => 'search-banner-title',
                'value'  => 'Kết quả tìm kiếm'
            ],
            [
                'label' => 'Tiêu đề SEO trang các câu hỏi thường gặp',
                'key' => 'faqs-seo-title',
                'value' => 'Các câu hỏi thường gặp'
            ],
            [
                'label' => 'Banner trang các câu hỏi thường gặp',
                'key'   => 'faqs-banner',
                'value'  => '/assets/images/banners/event_banner.jpg',
            ],
            [
                'label' => 'Tiêu đề banner trang các câu hỏi thường gặp',
                'key'   => 'faqs-banner-title',
                'value'  => 'Các câu hỏi thường gặp'
            ],
        ]);
    }
}
