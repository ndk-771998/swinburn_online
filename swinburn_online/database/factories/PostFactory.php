<?php

use App\Entities\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;

$domain = config('app.url');

$factory->define(Post::class, function (Faker $faker) use ($domain) {
    return [
        'title'       => $faker->randomElement([
            'Những điều bạn cần biết về tiêu chí tuyển sinh 2022 của Swinburne Việt Nam',
            'Chương trình học bổng du học Úc tại Đại học Công nghệ Swinburne',
        ]),
        'description' => 'Swinburne University of Technology (Đại học Công nghệ Swinburne) đang có học bổng hấp dẫn dành cho sinh viên quốc tế. Đây là cơ hội tốt để du học Úc mà có thể tiết kiệm được phần lớn chi phí.',
        'content'     => "<p><a href='/'>C&aacute;c ng&agrave;nh kinh doanh</a> l&agrave; một trong những lựa chọn của rất nhiều bạn trẻ khi đăng k&iacute; chọn trường đại học. Ng&agrave;nh học n&agrave;y đ&ograve;i hỏi bạn cần c&oacute; một số tố chất nhất định cũng như c&oacute; qu&aacute; tr&igrave;nh t&iacute;ch lũy kiến thức v&agrave; trải nghiệm trước khi bắt tay v&agrave;o c&ocirc;ng việc thực tế.</p>\n<p style=\"margin-top: 20px;\"><span><strong>Những tố chất ph&ugrave; hợp với ng&agrave;nh kinh doanh</strong></span></p>\n<p><span>Kinh doanh l&agrave; ng&agrave;nh học li&ecirc;n quan đến c&ocirc;ng việc quản l&yacute; hoạt động kinh doanh của một tổ chức, cơ quan v&agrave; doanh nghiệp. Với độ bao phủ rộng như vậy n&ecirc;n sau khi ra trường, cơ hội việc l&agrave;m của ng&agrave;nh nghề n&agrave;y l&agrave; v&ocirc; c&ugrave;ng rộng r&atilde;i v&agrave; linh hoạt. Tuy nhi&ecirc;n kh&ocirc;ng phải ai cũng ph&ugrave; hợp để học <a href='/'>c&aacute;c ng&agrave;nh kinh doanh</a>. Khẳng định điều n&agrave;y, Thạc sĩ Nguyễn Văn Đương, Ph&oacute; trưởng ph&ograve;ng Đ&agrave;o tạo Trường ĐH Kinh tế TP.HCM, cho rằng: &ldquo;Tố chất đầu ti&ecirc;n cần c&oacute; nếu quyết định x&eacute;t tuyển nh&oacute;m <a href='/'>c&aacute;c ng&agrave;nh kinh doanh</a> l&agrave; t&iacute;nh năng động v&agrave; sự ham th&iacute;ch c&aacute;c hoạt động quản l&yacute;, mua b&aacute;n&rdquo;. Bởi niềm đam m&ecirc; v&agrave; kh&aacute;t khao đủ lớn sẽ gi&uacute;p bạn dễ d&agrave;ng vượt qua những kh&oacute; khăn trong qu&aacute; tr&igrave;nh theo đuổi c&ocirc;ng việc tương lai đầy t&iacute;nh mạo hiểm v&agrave; rủi ro n&agrave;y.</span></p>\n<p style=\"text-align: center; margin-top: 30px;\"><img src=\"http://swinburne-vn.edu.vn/wp-content/uploads/2021/01/s1.7-700x466.png\" alt=\"\" width=\"71%\" height=\"17%\" /></p>\n<p style=\"text-align: center; margin-bottom: 30px; font-size: 12px;\"><em><span>C&aacute;c ng&agrave;nh kinh doanh l&agrave; một trong những lựa chọn của rất nhiều bạn trẻ khi đăng k&iacute; chọn trường đại học.</span></em></p>\n<p style=\"text-align: left;\"><span>C&aacute;c bạn trẻ cũng cần c&oacute; c&oacute; tinh thần ham học hỏi, sự nhạy b&eacute;n để nắm bắt v&agrave; xử l&yacute; c&aacute;c th&ocirc;ng tin li&ecirc;n quan, đặc biệt l&agrave; c&aacute;c th&ocirc;ng tin kinh tế x&atilde; hội v&agrave; đẩu tư ph&aacute;t triển. Đồng thời thường xuy&ecirc;n trau dồi những kiến thức mới về <a href='/'>c&aacute;c ng&agrave;nh kinh doanh</a> th&ocirc;ng qua c&aacute;c t&agrave;i liệu hoặc với sự gi&uacute;p đỡ của người hướng dẫn gi&agrave;u kinh nghiệm. Điều n&agrave;y sẽ gi&uacute;p c&aacute;c bạn trang bị cho m&igrave;nh khả năng dự b&aacute;o m&ocirc;i trường thương mại cũng như biết c&aacute;ch x&acirc;y dựng, định hướng chiến lược một c&aacute;ch ch&iacute;nh x&aacute;c v&agrave; bền vững.</span></p>\n<p style=\"text-align: left; margin-top: 20px;\"><span><img style=\"float: right; margin-left: 50px\" src=\"http://swinburne-vn.edu.vn/wp-content/uploads/2021/01/129525917_430948244947270_3965506926499703530_o-700x466.jpg\" alt=\"\" width=\"45%\" /><span><strong>Chọn ng&agrave;nh kinh doanh ở đ&acirc;u để dễ d&agrave;ng gặt h&aacute;i th&agrave;nh c&ocirc;ng?</strong></span></span></p>\n<p style=\"text-align: left;\">Để theo đuổi v&agrave; gặt h&aacute;i th&agrave;nh c&ocirc;ng với ng&agrave;nh n&agrave;y, b&ecirc;n cạnh c&aacute;c tố chất cần c&oacute;, c&aacute;c bạn trẻ cần chọn lựa được m&ocirc;i trường v&agrave; chuy&ecirc;n ng&agrave;nh ph&ugrave; hợp với năng lực, sở th&iacute;ch của bản th&acirc;n.</p>\n<p style=\"text-align: left;\">Hiện nay, c&oacute; rất nhiều trường đ&agrave;o tạo <a href='/'>c&aacute;c ng&agrave;nh kinh doanh</a>, với rất nhiều chuy&ecirc;n ng&agrave;nh hấp dẫn, trong đ&oacute; phải kể đến c&aacute;c chuy&ecirc;n ng&agrave;nh &ldquo;hot&rdquo; nhất hiện nay như: Quản trị kinh doanh, Kinh doanh quốc tế v&agrave; Marketing. C&aacute;c chương tr&igrave;nh đ&agrave;o tạo cũng phong ph&uacute; về h&igrave;nh thức v&agrave; c&aacute;ch tiếp cận, sinh vi&ecirc;n c&oacute; thể lựa chọn học c&aacute;c kh&oacute;a đ&agrave;o tạo ch&iacute;nh quy hoặc c&aacute;c chương tr&igrave;nh li&ecirc;n kết quốc tế. Với những bạn muốn thử sức với h&igrave;nh thức &ldquo;du học tại chỗ&rdquo;, bạn ho&agrave;n to&agrave;n c&oacute; thể chọn lựa c&aacute;c trường đ&agrave;o tạo ng&agrave;nh kinh doanh uy t&iacute;n như <a href='/'><a href='/'>Swinburne Việt Nam</a></a>. Được biết, ng&agrave;nh Kinh doanh của Swinburne xếp hạng thứ 351 theo ng&agrave;nh học (QS2020) tr&ecirc;n thế giới. Sau khi tốt nghiệp, sinh vi&ecirc;n sẽ nhận được bằng quốc tế được cấp bởi Swinburne University of Technology &ndash; một trong những trường đại học h&agrave;ng đầu tại Australia.</p>\n<p style=\"text-align: left; margin-top: 30px;\">Tại Swinburne, sinh vi&ecirc;n sẽ được học qua trải nghiệm gắn với dự &aacute;n thực tế tại c&aacute;c doanh nghiệp lớn tại Việt Nam v&agrave; thế giới. &nbsp;C&ugrave;ng với đ&oacute; được trang bị kiến thức để trở th&agrave;nh những c&ocirc;ng d&acirc;n to&agrave;n cầu. Đ&oacute; ch&iacute;nh l&agrave; khả năng sử dụng Tiếng Anh th&agrave;nh thạo, nắm bắt được những thay đổi mới về c&ocirc;ng nghệ, kỹ năng giao tiếp, kỹ năng giải quyết vấn đề, kỹ năng phản biện, kỹ năng l&atilde;nh đạo bản th&acirc;n, th&aacute;i độ l&agrave;m việc chuy&ecirc;n nghiệp, khả năng tư duy s&aacute;ng tạo&hellip;&nbsp;</p>\n<p style=\"text-align: left;\">Sinh vi&ecirc;n học ng&agrave;nh Kinh doanh sẽ được học c&aacute;c kiến thức cơ bản ứng dụng trong mọi lĩnh vực kinh doanh. C&aacute;c kiến thức n&agrave;y gồm Giới thiệu về quản trị, Những nguy&ecirc;n tắc của Marketing, Những nguy&ecirc;n tắc cơ bản về kinh tế, Giới thiệu về hệ thống th&ocirc;ng tin doanh nghiệp, Thực h&agrave;nh kinh doanh đổi mới, Th&ocirc;ng tin t&agrave;i ch&iacute;nh cho việc ra quyết định, Dự &aacute;n tư vấn doanh nghiệp&hellip;Sau khi ho&agrave;n th&agrave;nh c&aacute;c m&ocirc;n cơ bản, sinh vi&ecirc;n tiếp tục theo học c&aacute;c m&ocirc;n chuy&ecirc;n ng&agrave;nh theo từng lĩnh vực hoặc hoạt động kinh doanh cụ thể.</p>\n<p style=\"text-align: left;\">Điểm lợi thế của c&aacute;c sinh vi&ecirc;n theo học ng&agrave;nh Kinh doanh tại <a href='/'><a href='/'>Swinburne Việt Nam</a></a> đ&oacute; ch&iacute;nh l&agrave; chứng chỉ AACSB m&agrave; c&aacute;c bạn sẽ nhận được sau khi tốt nghiệp. AACSB (Association to Advance Collegiate Schools of Business) &nbsp;l&agrave; hiệp hội c&aacute;c trường đ&agrave;o tạo kinh doanh được th&agrave;nh lập năm 1916. Đ&acirc;y l&agrave; một tổ chức kiểm định chất lượng đ&agrave;o tạo về kinh doanh l&acirc;u đời v&agrave; nổi tiếng nhất ở Mỹ, với 1700 trường th&agrave;nh vi&ecirc;n đến từ 100 quốc gia tr&ecirc;n thế giới. &nbsp;</p>\n<p style=\"text-align: left;\">Hiện nay, AACSB l&agrave; một chứng chỉ được c&aacute;c nh&agrave; tuyển dụng đ&aacute;nh gi&aacute; rất cao khi tuyển chọn c&aacute;c ứng vi&ecirc;n v&agrave;o doanh nghiệp. Bởi n&oacute; như một tấm v&eacute; đảm bảo rằng c&aacute;c bạn được giảng dạy rất tốt trong trường đại học, được cung cấp đầy đủ những kiến thức m&agrave; c&aacute;c doanh nghiệp cần.</p>",
        'status'      => 1,
        'thumbnail'         => $faker->randomElement([
            $domain . '/assets/images/blogs/blog_1.jpg',
            $domain . '/assets/images/blogs/blog_2.jpg',
            $domain . '/assets/images/blogs/blog_3.jpg',
            $domain . '/assets/images/blogs/blog_4.jpg',
        ]),
        'is_hot' => rand(1, 2),
        'published_date' => Carbon::now(),
        'type' => 'posts',
        'author_id' => rand(1, 2)
    ];
});

$factory->state(Post::class, 'events', function () {
    return [
        'type' => 'events',
    ];
});

$factory->state(Post::class, 'events', function (Faker $faker) use ($domain) {
    return [
        'title' => $faker->randomElement([
            'Chương trình học bổng du học Úc tại Đại học Công nghệ Swinburne',
            'ĐẠI HỌC CÔNG NGHỆ SWINBURNE: HỌC BỔNG LÊN TỚI 75% HỌC PHÍ'
        ]),
        'description' => 'Trong thời đại mà hệ thống tư pháp hình sự của chúng ta không ngừng thích nghi và phát triển, nghề nghiệp lĩnh vực tội phạm học và tư pháp hình sự trở nên quan trọng hơn bao giờ hết.',
        'content' => "<p><a href='/'>C&aacute;c ng&agrave;nh kinh doanh</a> l&agrave; một trong những lựa chọn của rất nhiều bạn trẻ khi đăng k&iacute; chọn trường đại học. Ng&agrave;nh học n&agrave;y đ&ograve;i hỏi bạn cần c&oacute; một số tố chất nhất định cũng như c&oacute; qu&aacute; tr&igrave;nh t&iacute;ch lũy kiến thức v&agrave; trải nghiệm trước khi bắt tay v&agrave;o c&ocirc;ng việc thực tế.</p>\n<p style=\"margin-top: 20px;\"><span><strong>Những tố chất ph&ugrave; hợp với ng&agrave;nh kinh doanh</strong></span></p>\n<p><span>Kinh doanh l&agrave; ng&agrave;nh học li&ecirc;n quan đến c&ocirc;ng việc quản l&yacute; hoạt động kinh doanh của một tổ chức, cơ quan v&agrave; doanh nghiệp. Với độ bao phủ rộng như vậy n&ecirc;n sau khi ra trường, cơ hội việc l&agrave;m của ng&agrave;nh nghề n&agrave;y l&agrave; v&ocirc; c&ugrave;ng rộng r&atilde;i v&agrave; linh hoạt. Tuy nhi&ecirc;n kh&ocirc;ng phải ai cũng ph&ugrave; hợp để học <a href='/'>c&aacute;c ng&agrave;nh kinh doanh</a>. Khẳng định điều n&agrave;y, Thạc sĩ Nguyễn Văn Đương, Ph&oacute; trưởng ph&ograve;ng Đ&agrave;o tạo Trường ĐH Kinh tế TP.HCM, cho rằng: &ldquo;Tố chất đầu ti&ecirc;n cần c&oacute; nếu quyết định x&eacute;t tuyển nh&oacute;m <a href='/'>c&aacute;c ng&agrave;nh kinh doanh</a> l&agrave; t&iacute;nh năng động v&agrave; sự ham th&iacute;ch c&aacute;c hoạt động quản l&yacute;, mua b&aacute;n&rdquo;. Bởi niềm đam m&ecirc; v&agrave; kh&aacute;t khao đủ lớn sẽ gi&uacute;p bạn dễ d&agrave;ng vượt qua những kh&oacute; khăn trong qu&aacute; tr&igrave;nh theo đuổi c&ocirc;ng việc tương lai đầy t&iacute;nh mạo hiểm v&agrave; rủi ro n&agrave;y.</span></p>\n<p style=\"text-align: center; margin-top: 30px;\"><img src=\"http://swinburne-vn.edu.vn/wp-content/uploads/2021/01/s1.7-700x466.png\" alt=\"\" width=\"71%\" height=\"17%\" /></p>\n<p style=\"text-align: center; margin-bottom: 30px; font-size: 12px;\"><em><span>C&aacute;c ng&agrave;nh kinh doanh l&agrave; một trong những lựa chọn của rất nhiều bạn trẻ khi đăng k&iacute; chọn trường đại học.</span></em></p>\n<p style=\"text-align: left;\"><span>C&aacute;c bạn trẻ cũng cần c&oacute; c&oacute; tinh thần ham học hỏi, sự nhạy b&eacute;n để nắm bắt v&agrave; xử l&yacute; c&aacute;c th&ocirc;ng tin li&ecirc;n quan, đặc biệt l&agrave; c&aacute;c th&ocirc;ng tin kinh tế x&atilde; hội v&agrave; đẩu tư ph&aacute;t triển. Đồng thời thường xuy&ecirc;n trau dồi những kiến thức mới về <a href='/'>c&aacute;c ng&agrave;nh kinh doanh</a> th&ocirc;ng qua c&aacute;c t&agrave;i liệu hoặc với sự gi&uacute;p đỡ của người hướng dẫn gi&agrave;u kinh nghiệm. Điều n&agrave;y sẽ gi&uacute;p c&aacute;c bạn trang bị cho m&igrave;nh khả năng dự b&aacute;o m&ocirc;i trường thương mại cũng như biết c&aacute;ch x&acirc;y dựng, định hướng chiến lược một c&aacute;ch ch&iacute;nh x&aacute;c v&agrave; bền vững.</span></p>\n<p style=\"text-align: left; margin-top: 20px;\"><span><img style=\"float: right; margin-left: 50px\" src=\"http://swinburne-vn.edu.vn/wp-content/uploads/2021/01/129525917_430948244947270_3965506926499703530_o-700x466.jpg\" alt=\"\" width=\"45%\" /><span><strong>Chọn ng&agrave;nh kinh doanh ở đ&acirc;u để dễ d&agrave;ng gặt h&aacute;i th&agrave;nh c&ocirc;ng?</strong></span></span></p>\n<p style=\"text-align: left;\">Để theo đuổi v&agrave; gặt h&aacute;i th&agrave;nh c&ocirc;ng với ng&agrave;nh n&agrave;y, b&ecirc;n cạnh c&aacute;c tố chất cần c&oacute;, c&aacute;c bạn trẻ cần chọn lựa được m&ocirc;i trường v&agrave; chuy&ecirc;n ng&agrave;nh ph&ugrave; hợp với năng lực, sở th&iacute;ch của bản th&acirc;n.</p>\n<p style=\"text-align: left;\">Hiện nay, c&oacute; rất nhiều trường đ&agrave;o tạo <a href='/'>c&aacute;c ng&agrave;nh kinh doanh</a>, với rất nhiều chuy&ecirc;n ng&agrave;nh hấp dẫn, trong đ&oacute; phải kể đến c&aacute;c chuy&ecirc;n ng&agrave;nh &ldquo;hot&rdquo; nhất hiện nay như: Quản trị kinh doanh, Kinh doanh quốc tế v&agrave; Marketing. C&aacute;c chương tr&igrave;nh đ&agrave;o tạo cũng phong ph&uacute; về h&igrave;nh thức v&agrave; c&aacute;ch tiếp cận, sinh vi&ecirc;n c&oacute; thể lựa chọn học c&aacute;c kh&oacute;a đ&agrave;o tạo ch&iacute;nh quy hoặc c&aacute;c chương tr&igrave;nh li&ecirc;n kết quốc tế. Với những bạn muốn thử sức với h&igrave;nh thức &ldquo;du học tại chỗ&rdquo;, bạn ho&agrave;n to&agrave;n c&oacute; thể chọn lựa c&aacute;c trường đ&agrave;o tạo ng&agrave;nh kinh doanh uy t&iacute;n như <a href='/'><a href='/'>Swinburne Việt Nam</a></a>. Được biết, ng&agrave;nh Kinh doanh của Swinburne xếp hạng thứ 351 theo ng&agrave;nh học (QS2020) tr&ecirc;n thế giới. Sau khi tốt nghiệp, sinh vi&ecirc;n sẽ nhận được bằng quốc tế được cấp bởi Swinburne University of Technology &ndash; một trong những trường đại học h&agrave;ng đầu tại Australia.</p>\n<p style=\"text-align: left; margin-top: 30px;\">Tại Swinburne, sinh vi&ecirc;n sẽ được học qua trải nghiệm gắn với dự &aacute;n thực tế tại c&aacute;c doanh nghiệp lớn tại Việt Nam v&agrave; thế giới. &nbsp;C&ugrave;ng với đ&oacute; được trang bị kiến thức để trở th&agrave;nh những c&ocirc;ng d&acirc;n to&agrave;n cầu. Đ&oacute; ch&iacute;nh l&agrave; khả năng sử dụng Tiếng Anh th&agrave;nh thạo, nắm bắt được những thay đổi mới về c&ocirc;ng nghệ, kỹ năng giao tiếp, kỹ năng giải quyết vấn đề, kỹ năng phản biện, kỹ năng l&atilde;nh đạo bản th&acirc;n, th&aacute;i độ l&agrave;m việc chuy&ecirc;n nghiệp, khả năng tư duy s&aacute;ng tạo&hellip;&nbsp;</p>\n<p style=\"text-align: left;\">Sinh vi&ecirc;n học ng&agrave;nh Kinh doanh sẽ được học c&aacute;c kiến thức cơ bản ứng dụng trong mọi lĩnh vực kinh doanh. C&aacute;c kiến thức n&agrave;y gồm Giới thiệu về quản trị, Những nguy&ecirc;n tắc của Marketing, Những nguy&ecirc;n tắc cơ bản về kinh tế, Giới thiệu về hệ thống th&ocirc;ng tin doanh nghiệp, Thực h&agrave;nh kinh doanh đổi mới, Th&ocirc;ng tin t&agrave;i ch&iacute;nh cho việc ra quyết định, Dự &aacute;n tư vấn doanh nghiệp&hellip;Sau khi ho&agrave;n th&agrave;nh c&aacute;c m&ocirc;n cơ bản, sinh vi&ecirc;n tiếp tục theo học c&aacute;c m&ocirc;n chuy&ecirc;n ng&agrave;nh theo từng lĩnh vực hoặc hoạt động kinh doanh cụ thể.</p>\n<p style=\"text-align: left;\">Điểm lợi thế của c&aacute;c sinh vi&ecirc;n theo học ng&agrave;nh Kinh doanh tại <a href='/'><a href='/'>Swinburne Việt Nam</a></a> đ&oacute; ch&iacute;nh l&agrave; chứng chỉ AACSB m&agrave; c&aacute;c bạn sẽ nhận được sau khi tốt nghiệp. AACSB (Association to Advance Collegiate Schools of Business) &nbsp;l&agrave; hiệp hội c&aacute;c trường đ&agrave;o tạo kinh doanh được th&agrave;nh lập năm 1916. Đ&acirc;y l&agrave; một tổ chức kiểm định chất lượng đ&agrave;o tạo về kinh doanh l&acirc;u đời v&agrave; nổi tiếng nhất ở Mỹ, với 1700 trường th&agrave;nh vi&ecirc;n đến từ 100 quốc gia tr&ecirc;n thế giới. &nbsp;</p>\n<p style=\"text-align: left;\">Hiện nay, AACSB l&agrave; một chứng chỉ được c&aacute;c nh&agrave; tuyển dụng đ&aacute;nh gi&aacute; rất cao khi tuyển chọn c&aacute;c ứng vi&ecirc;n v&agrave;o doanh nghiệp. Bởi n&oacute; như một tấm v&eacute; đảm bảo rằng c&aacute;c bạn được giảng dạy rất tốt trong trường đại học, được cung cấp đầy đủ những kiến thức m&agrave; c&aacute;c doanh nghiệp cần.</p>",
        'thumbnail'         => $faker->randomElement([
            $domain . '/assets/images/events/event_0.jpg',
            $domain . '/assets/images/events/event_1.jpg',
            $domain . '/assets/images/events/event_2.jpg',
            $domain . '/assets/images/events/event_3.jpg',
            $domain . '/assets/images/events/event_4.jpg',
            $domain . '/assets/images/events/event_5.jpg',
            $domain . '/assets/images/events/event_6.jpg',
            $domain . '/assets/images/events/event_7.jpg',
            $domain . '/assets/images/events/event_8.jpg',
            $domain . '/assets/images/events/event_9.jpg',
        ]),
        'type' => 'events',
        'created_at' => $faker->date,
    ];
});

$factory->state(Post::class, 'onlinecourses', function (Faker $faker) {
    return [
        'title' => $faker->randomElement([
            'Ngành công nghệ',
        ]),
        'description'   => '<h2>Tổng quan về khoá học</h2><p>Cử nhân Công nghệ thông tin</p><p>Cử nhân Công nghệ Thông tin là ngành học độc đáo, nó đòi hỏi sinh viên phải hoàn thành hai chuyên ngành:công nghệ mạng và công nghệ phần mềm.</p><p>Với việc tập trung vào giải quyết vấn đề thực tế, khóa học này cung cấp cho sinh viên hiểu biết thấu đáovề các nguyên tắc Công nghệ Thông tin (ICT), trang bị cho sinh viên các kỹ năng cần thiết để thành côngtrong ngành công nghiệp đang phát triển. Có rất nhiều cơ hội mở ra cho các chuyên gia ICT, và Cử nhânCông nghệ Thông tin sẽ đảm bảo sinh viên tốt nghiệp có thể sẵn sàng làm việc.</p><p>Sinh viên sẽ có được các kỹ năng công nghệ thông tin tiên tiến bao gồm cả việc sử dụng phần mềm chuyêndụng, để có thể tự tin áp dụng các giải pháp ICT trong môi trường chuyên nghiệp. Sinh viên cũng sẽ họccác kỹ năng thiết yếu tại nơi làm việc như giao tiếp hiệu quả, quản lý các bên liên quan và ứng dụng vềpháp lý và đạo đức.</p><p>Khóa học ở cấp độ chuyên nghiệp được chứng nhận bởi the Australian Computer Society (ACS).</p>',
        'content'   => '<table style="width: 100%;" cellspacing="30"><tbody><tr><td style="width: 49.6869%;"><h2>Cơ hội nghề nghiệp</h2><p><img src="https://www.swinburneonline.edu.au/app/uploads/Programmer-working-at-office.jpg" alt="" width="570" height="250" /></p><table style="border-collapse: collapse; width: 88.4007%;"><tbody><tr><td style="width: 8.96638%;"><img src="/assets/logos/user.png" alt="" width="28" height="28" /></td><td style="width: 90.8593%;"><h3>Chuy&ecirc;n gia ph&acirc;n t&iacute;ch kinh doanh</h3></td></tr><tr><td style="width: 8.96638%;">&nbsp;</td><td style="width: 90.8593%;"><p>Ph&acirc;n t&iacute;ch một tổchức hoặc lĩnh vực kinh doanh v&agrave; ghi lại hoạt động kinhdoanh, quy tr&igrave;nh hoặc hệ thống của n&oacute;.</p></td></tr><tr><td style="width: 8.96638%;"><img src="/assets/logos/user.png" alt="" width="28" height="28" /></td><td style="width: 90.8593%;"><h3>Quản l&yacute; Triển khai Hệ thống</h3></td></tr><tr><td style="width: 8.96638%;">&nbsp;</td><td style="width: 90.8593%;"><p><span style="font-weight: 400;">Quản l&yacute; một nh&oacute;m c&aacute;c chuy&ecirc;n gia thực hiện chịu tr&aacute;ch nhiệm thực hiện c&aacute;c hệ thống kỹ thuật, phần mềm v&agrave; phần cứng.</span></p></td></tr><tr><td style="width: 8.96638%;"><img src="/assets/logos/user.png" alt="" width="28" height="28" /></td><td style="width: 90.8593%;"><h3>Chuy&ecirc;n gia Bảo mật Th&ocirc;ng tin</h3></td></tr><tr><td style="width: 8.96638%;">&nbsp;</td><td style="width: 90.8593%;"><p><span style="font-weight: 400;">Ph&acirc;n t&iacute;ch c&aacute;c quy tr&igrave;nh bảo mật hiện c&oacute; v&agrave; đề xuất những thay đổi để tăng hiệu quả v&agrave; bảo mật.</span></p></td></tr><tr><td style="width: 8.96638%;"><img src="/assets/logos/user.png" alt="" width="28" height="28" /></td><td style="width: 90.8593%;"><h3>Trưởng nh&oacute;m an ninh mạng</h3></td></tr><tr><td style="width: 8.96638%;">&nbsp;</td><td style="width: 90.8593%;"><p><span style="font-weight: 400;">Đảm bảo rằng tất cả c&aacute;c c&ocirc;ng việc ho&agrave;n th&agrave;nh trong CNTT được đ&aacute;nh gi&aacute; về c&aacute;c lỗ hổng v&agrave; tiếp x&uacute;c với cuộc tấn c&ocirc;ng.</span></p></td></tr><tr><td style="width: 8.96638%;"><img src="/assets/logos/user.png" alt="" width="28" height="28" /></td><td style="width: 90.8593%;"><h3>Chuy&ecirc;n vi&ecirc;n ph&aacute;t triển ứng dụng web</h3></td></tr><tr><td style="width: 8.96638%;">&nbsp;</td><td style="width: 90.8593%;"><p><span style="font-weight: 400;">Với bộ c&ocirc;ng cụ lập tr&igrave;nh th&iacute;ch ứng, cộng t&aacute;c trong việc thiết kế v&agrave; triển khai c&aacute;c ứng dụng dựa tr&ecirc;n web, khắc phục sự cố khi ch&uacute;ng ph&aacute;t sinh.</span></p></td></tr><tr><td style="width: 8.96638%;"><img src="/assets/logos/user.png" alt="" width="28" height="28" /></td><td style="width: 90.8593%;"><h3>Chuy&ecirc;n vi&ecirc;n ph&acirc;n t&iacute;ch Giao diện Người d&ugrave;ng</h3></td></tr><tr><td style="width: 8.96638%;">&nbsp;</td><td style="width: 90.8593%;"><p><span style="font-weight: 400;">Thiết kế v&agrave; gi&aacute;m s&aacute;t c&aacute;c giao diện người d&ugrave;ng v&agrave; hệ thống phần mềm kh&aacute;c nhau cho c&aacute;c nền tảng web v&agrave; c&aacute;c ứng dụng kh&aacute;c.</span></p></td></tr><tr><td style="width: 8.96638%;"><img src="/assets/logos/user.png" alt="" width="28" height="28" /></td><td style="width: 90.8593%;"><h3>Thiết kế hệ thống</h3></td></tr><tr><td style="width: 8.96638%;">&nbsp;</td><td style="width: 90.8593%;"><p><span style="font-weight: 400;">Ph&acirc;n t&iacute;ch kh&aacute;ch quan v&agrave; đề xuất sự kết hợp ch&iacute;nh x&aacute;c của c&aacute;c th&agrave;nh phần y&ecirc;u cầu CNTT để đạt được c&aacute;c mục ti&ecirc;u kinh doanh cụ thể.</span></p></td></tr><tr><td style="width: 8.96638%;"><img src="/assets/logos/user.png" alt="" width="28" height="28" /></td><td style="width: 90.8593%;"><h3>Thiết kế kho dữ liệu</h3></td></tr><tr><td style="width: 8.96638%;">&nbsp;</td><td style="width: 90.8593%;"><p><span style="font-weight: 400;">Thiết kế v&agrave; duy tr&igrave; c&aacute;c giải ph&aacute;p quản l&yacute; dữ liệu phức tạp c&oacute; thể truy cập v&agrave; an to&agrave;n.</span></p></td></tr><tr><td style="width: 8.96638%;"><img src="/assets/logos/user.png" alt="" width="28" height="28" /></td><td style="width: 90.8593%;"><h3>Nh&agrave; ph&acirc;n t&iacute;ch dữ liệu</h3></td></tr><tr><td style="width: 8.96638%;">&nbsp;</td><td style="width: 90.8593%;"><p><span style="font-weight: 400;">Ph&acirc;n t&iacute;ch v&agrave; giải th&iacute;ch c&aacute;c bộ dữ liệu phức tạp v&agrave; chuyển đổi th&ocirc;ng tin đ&oacute; th&agrave;nh c&aacute;c giải ph&aacute;p kinh doanh c&oacute; thể h&agrave;nh động.</span></p></td></tr></tbody></table></td><td style="width: 49.6869%; vertical-align: top;"><h2>Những g&igrave; sinh vi&ecirc;n sẽ được học</h2><p><img src="https://www.swinburneonline.edu.au/app/uploads/SOL-cybersecurity-leadership.jpg" alt="" width="570" height="250" /></p><table style="border-collapse: collapse; width: 88.4007%;"><tbody><tr><td style="width: 8.96638%;"><img src="/assets/logos/note-book.png" alt="" width="28" height="28" /></td><td style="width: 90.8593%;"><h3>Quản l&yacute; dự &aacute;n</h3></td></tr><tr><td style="width: 8.96638%;">&nbsp;</td><td style="width: 90.8593%;"><p><span style="font-weight: 400;">X&aacute;c định nhu cầu về c&aacute;c giải ph&aacute;p ICT, gợi ra th&ocirc;ng tin từ c&aacute;c b&ecirc;n li&ecirc;n quan về c&aacute;c y&ecirc;u cầu đối với giải ph&aacute;p v&agrave; nghi&ecirc;n cứu v&agrave; lập kế hoạch giải ph&aacute;p theo c&aacute;c y&ecirc;u cầu được x&aacute;c định.</span></p></td></tr><tr><td style="width: 8.96638%;"><img src="/assets/logos/note-book.png" alt="" width="28" height="28" /></td><td style="width: 90.8593%;"><h3>Đ&aacute;nh gi&aacute; vấn đề ICT</h3></td></tr><tr><td style="width: 8.96638%;">&nbsp;</td><td style="width: 90.8593%;"><p><span style="font-weight: 400;">Đ&aacute;nh gi&aacute; v&agrave; ph&acirc;n t&iacute;ch sự ph&ugrave; hợp của c&aacute;c phương ph&aacute;p v&agrave; c&ocirc;ng nghệ để thiết kế v&agrave; thực hiện c&aacute;c giải ph&aacute;p ICT.</span></p></td></tr><tr><td style="width: 8.96638%;"><img src="/assets/logos/note-book.png" alt="" width="28" height="28" /></td><td style="width: 90.8593%;"><h3>Nghi&ecirc;n cứu v&agrave; tiến h&agrave;nh</h3></td></tr><tr><td style="width: 8.96638%;">&nbsp;</td><td style="width: 90.8593%;"><p><span style="font-weight: 400;">Nghi&ecirc;n cứu, đ&aacute;nh gi&aacute; v&agrave; thảo luận về sự ph&ugrave; hợp v&agrave; c&aacute;c lựa chọn mua sắm của c&aacute;c lựa chọn thay thế cho một mục đ&iacute;ch nhất định.</span></p></td></tr><tr><td style="width: 8.96638%;"><img src="/assets/logos/note-book.png" alt="" width="28" height="28" /></td><td style="width: 90.8593%;"><h3>Phần mềm t&igrave;m nguồn cung ứng</h3></td></tr><tr><td style="width: 8.96638%;">&nbsp;</td><td style="width: 90.8593%;"><p><span style="font-weight: 400;">X&aacute;c định v&agrave; ph&acirc;n t&iacute;ch c&aacute;c t&igrave;nh huống đ&ograve;i hỏi phải điều tra về phương ph&aacute;p, thực tiễn, c&ocirc;ng nghệ, c&aacute;c vấn đề đạo đức v&agrave; ph&aacute;p l&yacute; v&agrave; nguồn gốc c&aacute;c c&ocirc;ng cụ phần mềm chung v&agrave; chuy&ecirc;n dụng được sử dụng bởi c&aacute;c chuy&ecirc;n gia CNTT.</span></p></td></tr><tr><td style="width: 8.96638%;"><img src="/assets/logos/note-book.png" alt="" width="28" height="28" /></td><td style="width: 90.8593%;"><h3>Giao tiếp chuy&ecirc;n nghiệp</h3></td></tr><tr><td style="width: 8.96638%;">&nbsp;</td><td style="width: 90.8593%;"><p><span style="font-weight: 400;">Giao tiếp hiệu quả sinh vi&ecirc;n c&aacute;ch sử dụng tiếng Anh sinh vi&ecirc;n văn sinh vi&ecirc;n v&agrave; n&oacute;i trong bối cảnh chuy&ecirc;n nghiệp, điều chỉnh phong c&aacute;ch tương t&aacute;c c&aacute; nh&acirc;n cho một đối tượng nhất định, l&agrave;m việc hiệu quả trong một nh&oacute;m, hướng dẫn v&agrave; chỉ đạo c&aacute;c th&agrave;nh vi&ecirc;n kh&aacute;c trong nh&oacute;m, x&aacute;c định c&aacute;c vấn đề ph&aacute;p l&yacute; v&agrave; đạo đức th&iacute;ch hợp v&agrave; l&agrave;m quen với c&aacute;c c&ocirc;ng cụ phần mềm chung v&agrave; chuy&ecirc;n biệt được sử dụng bởi c&aacute;c chuy&ecirc;n gia CNTT</span></p></td></tr><tr><td style="width: 8.96638%;"><img src="/assets/logos/note-book.png" alt="" width="28" height="28" /></td><td style="width: 90.8593%;"><h3>Ứng dụng c&ocirc;ng nghệ</h3></td></tr><tr><td style="width: 8.96638%;">&nbsp;</td><td style="width: 90.8593%;"><p><span style="font-weight: 400;">Thể hiện kỹ năng giải quyết vấn đề để &aacute;p dụng c&ocirc;ng nghệ v&agrave;o c&aacute;c t&igrave;nh huống mới khi thực hiện, bảo tr&igrave;, ghi lại v&agrave; khắc phục sự cố c&aacute;c hệ thống quy m&ocirc; nhỏ.</span></p></td></tr><tr><td style="width: 8.96638%;"><img src="/assets/logos/note-book.png" alt="" width="28" height="28" /></td><td style="width: 90.8593%;"><h3>Thấu hiểu c&ocirc;ng nghệ</h3></td></tr><tr><td style="width: 8.96638%;">&nbsp;</td><td style="width: 90.8593%;"><p><span style="font-weight: 400;">Thể hiện kiến thức th&iacute;ch hợp về c&aacute;c c&ocirc;ng nghệ tạo n&ecirc;n cơ sở hạ tầng ICT v&agrave; n&oacute;i r&otilde; c&aacute;c mối li&ecirc;n hệ v&agrave; phụ thuộc lẫn nhau giữa c&aacute;c c&ocirc;ng nghệ.</span></p></td></tr></tbody></table></td></tr></tbody></table>',
        'type' => 'onlinecourses',
    ];
});

$factory->state(Post::class, 'units', function (Faker $faker) {
    return [
        'title' => $faker->randomElement([
            'Giới thiệu về Hệ thống thông tin doanh nghiệp',
            'Phát triển web',
            'Giới thiệu về lập trình',
            'Lập trình hướng đối tượng',
            'Giải quyết vấn đề với ICT',
            'Phân tích và thiết kế cơ sở dữ liệu',
            'Thiết kế lấy người dùng làm trung tâm',
            'Hệ thống máy tính',
        ]),
        'content' => '<h3>About this unit</h3> <p>Introduction to Business Information Systems aims to instill an appreciation of how technology can be used to assist business, without the technology becoming an end in itself. In particular, the unit aims to generate an awareness of the importance of information to decision-making and how to provide such information to ensure its usefulness to the decision makers. Students gain a strong foundation of business systems fundamentals and the influence of the Internet on business stakeholders; customers, suppliers, manufacturers, service makers, regulators, managers and employees.</p> <h3>Content</h3> <ul> <li>Organisations in the digital economy</li> <li>Information Systems: their evolution to current role and purpose in business & society</li> <li>Strategic review of purposes of commercial business, organisational requirements for Information Systems</li> <li>Data and information management in the digital economy; Ethical, legal and security issues; Databases, and their importance to contemporary business</li> <li>Business processes: evolution and support of IS</li> <li>E-Commerce Networks and commercial internet applications</li> <li>IS to support business transactions & processes; transaction processing systems, supply chain management, customer relationship management; enterprise systems</li> <li>IS to support managerial decision making, business intelligence, decision support, and knowledge management; the nature of IS management</li> <li>Information Systems requirements analysis; Information systems acquisition, development, and implementation</li> </ul> <h3>This unit found in:</h3> <ul> <li>Bachelor of Business With a Major in Logistics and Supply Chain Management</li> <li>Bachelor of Business With a Major in Management</li> <li>Bachelor of Business With a Major in Marketing</li> <li>Bachelor of Business With a Major in Sports Management</li> <li>Bachelor of Business With a Major in Business Administration</li> <li>Bachelor of Business With a Major in Accounting</li> </ul>',
        'type' => 'units'
    ];
});

$factory->state(Post::class, 'standards', function (Faker $faker) {
    return [
        'title' => $faker->randomElement([
            'Không phải lớp 12 nhập học',
            'Đầu vào lớp 12',
            'Điều kiện tiên quyết với chứng chỉ tốt nghiệp  tại bang Victoria, Úc  (VCE Pre-re-resites)'
        ]),
        'content' => '<p>Hoàn thành hoặc hoàn thành một phần sinh viên đại học đã được phê duyệt (bao gồm chứng chỉ IV (đã hoàn thành), văn sinh viên, văn sinh viên cao cấp, sinh viên cấp liên kết và sinh viên cấp).</p> <p>Nếu sinh viên không có sinh viên cấp chính thức, sinh viên có thể được xem xét nhập học sau khi hoàn thành bài kiểm tra STAT.</p>',
        'type' => 'standards',
    ];
});