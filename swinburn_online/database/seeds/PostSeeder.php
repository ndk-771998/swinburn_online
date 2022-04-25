<?php

use App\Entities\Category;
use Illuminate\Database\Seeder;
use App\Entities\Post;
use VCComponent\Laravel\Post\Entities\PostSchema;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->insertEvents();
        $this->insertPosts();
        $this->insertOnlinecourses();
        $this->insertUnits();
        $this->insertStandards();
        $this->insertSwinburneCollege();
        $this->insertSwinburneVietNam();
        $this->insertSwinburneTechnology();
        $this->insertFeeSwinburne();
        $this->insertQuestions();
    }

    public function insertEvents()
    {
        PostSchema::insert([
            ['name' => 'seo_title', 'Label' => 'Tiêu đề SEO', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'posts'],
            ['name' => 'seo_desc', 'Label' => 'Mô tả SEO', 'schema_type_id' => 2, 'schema_rule_id' => 3, 'post_type' => 'posts'],
        ]);
        factory(Post::class, 50)->state('events')->create();
    }

    public function insertPosts()
    {
        PostSchema::insert([
            ['name' => 'seo_title', 'Label' => 'Tiêu đề SEO', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'posts'],
            ['name' => 'seo_desc', 'Label' => 'Mô tả SEO', 'schema_type_id' => 2, 'schema_rule_id' => 3, 'post_type' => 'posts'],
        ]);
        factory(Post::class, 20)->create();
    }

    public function insertOnlinecourses()
    {
        PostSchema::insert([
            ['name' => 'seo_title', 'Label' => 'Tiêu đề SEO', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'onlinecourses'],
            ['name' => 'seo_desc', 'Label' => 'Mô tả SEO', 'schema_type_id' => 2, 'schema_rule_id' => 3, 'post_type' => 'onlinecourses'],
            ['name' => 'qualification', 'Label' => 'Bằng cấp', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'onlinecourses'],
            ['name' => 'duration', 'Label' => 'Thời gian', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'onlinecourses'],
            ['name' => 'units', 'Label' => 'Tín chỉ', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'onlinecourses'],
            ['name' => 'start_date', 'Label' => 'Thời gian bắt đầu', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'onlinecourses'],
            ['name' => 'testimonial_image', 'Label' => 'Hình ảnh lời chứng thực', 'schema_type_id' => 5, 'schema_rule_id' => 3, 'post_type' => 'onlinecourses'],
            ['name' => 'testimonial_content', 'Label' => 'Nội dung lời chứng thực', 'schema_type_id' => 2, 'schema_rule_id' => 3, 'post_type' => 'onlinecourses'],
            ['name' => 'testiminial_author', 'Label' => 'Tác giả lời chứng thực', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'onlinecourses'],
            ['name' => 'learning_outcome', 'Label' => 'Kết quả học tập khóa học', 'schema_type_id' => 2, 'schema_rule_id' => 3, 'post_type' => 'onlinecourses'],
            ['name' => 'end_of_major', 'Label' => 'Kết thúc chuyên ngành', 'schema_type_id' => 2, 'schema_rule_id' => 3, 'post_type' => 'onlinecourses'],
            ['name' => 'course_rules', 'Label' => 'Quy tắc khóa học', 'schema_type_id' => 2, 'schema_rule_id' => 3, 'post_type' => 'onlinecourses'],
        ]);
        factory(Post::class, 1)->state('onlinecourses')->create(['is_hot' => 1])->each(function ($post) {
            $units_category = Category::updateOrCreate([
                'name'      => $post->title,
                'type'      => 'units',
            ], [
                'thumbnail' => $post->thumbnail,
            ]);

            $standards_category = Category::updateOrCreate([
                'name'      => $post->title,
                'type'      => 'standards',
            ], [
                'thumbnail' => $post->thumbnail,
            ]);

            $post->postMetas()->createMany([
                [
                    'key'   => 'qualification',
                    'value' => 'Đại học',
                ],
                [
                    'key'   => 'duration',
                    'value' => '3 năm',
                ],
                [
                    'key'   => 'units',
                    'value' => '24',
                ],
                [
                    'key'   => 'start_date',
                    'value' => 'Tháng 3, tháng 7, tháng 11',
                ],
                [
                    'key'   => 'testimonial_image',
                    'value' => 'https://www.swinburneonline.edu.au/app/uploads/Lauren.jpg',
                ],
                [
                    'key'   => 'testimonial_content',
                    'value' => 'Tôi thực sự đánh giá cao khả năng tự học của mình và có thể tiếp thu tất cả các khái niệm trong không gian riêng ở nhà.',
                ],
                [
                    'key'   => 'testimonial_author',
                    'value' => 'Lauren - Cựu sinh viên Swinburne Online',
                ],
                [
                    'key'   => 'learning_outcome',
                    'value' => '<h2>Kết quả học tập khoá học</h2><p>Sau khi hoàn thành khóa học này, sinh viên sẽ có thể:</p><ul><li>Xác định nhu cầu về các giải pháp ICT, gợi ra thông tin từ các bên liên quan về các yêu cầu đối vớigiải pháp và các giải pháp nghiên cứu, lập kế hoạch theo các yêu cầu đã xác định.</li><li>Đánh giá và phân tích sự phù hợp của phương pháp và công nghệ để thiết kế và thực hiện các giải phápICT</li><li>xác định và phân tích các tình huống đòi hỏi phải điều tra về phương pháp, thực tiễn, công nghệ, cácvấn đề đạo đức và pháp lý và nguồn các công cụ phần mềm chung và chuyên dụng được sử dụng bởi cácchuyên gia CNTT</li><li>Giao tiếp hiệu quả sinh viên cách sử dụng tiếng Anh sinh viên văn sinh viên và nói trong bối cảnhchuyên nghiệp, điều chỉnh phong cách tương tác cá nhân cho một đối tượng nhất định, làm việc hiệuquả trong một nhóm, hướng dẫn và chỉ đạo các thành viên khác trong nhóm, xác định các vấn đề pháp lývà đạo đức thích hợp và làm quen với các công cụ phần mềm chung và chuyên dụng được sử dụng bởi cácchuyên gia CNTT</li><li>Thể hiện kỹ năng giải quyết vấn đề để ứng dụng công nghệ vào các tình huống mới khi triển khai, bảotrì, ghi lại và khắc phục sự cố hệ thống quy mô nhỏ</li><li>Thể hiện kiến thức phù hợp về các công nghệ tạo nên cơ sở hạ tầng ICT và nói rõ mối quan hệ và phụthuộc lẫn nhau giữa các công nghệ.</li></ul>',
                ],
                [
                    'key'   => 'end_of_major',
                    'value' => '<h2>Sinh viên ngành công nghệ phần mềm có thể</h2><p>Sinh viên chuyên ngành Công nghệ phần mềm sẽ có thể:</p><ul><li>Tham gia vào dự án phát triển phần mềm, thiết kế và triển khai phần mềm hướng đối tượng, bao gồmphần mềm cho các ứng dụng di động và xem xét các khía cạnh bảo mật và khả năng sử dụng liên quan</li><li>Thiết kế, duy trì và quản lý cơ sở hạ tầng và dịch vụ ICT</li><li>Lập kế hoạch và triển khai các hệ thống mạng an toàn sử dụng các thực tiễn hiện tại trong công nghệIP, bảo mật mạng và triển khai máy chủ có thể mở rộng</li><li>Khơi ra thông tin về các quy trình kinh doanh hiện tại hoặc dự kiến, phân tích các quy trình này từquan điểm của tất cả các bên liên quan và tư vấn cho các bên liên quan về những cải tiến có thể,cung cấp các mô hình quy trình có thể được thảo luận với khách hàng.</li><li>Lập kế hoạch và thực hiện một hệ thống thông tin xem xét các yêu cầu của kinh doanh và quản lý, cáckhía cạnh của việc mua lại hệ thống, lựa chọn công nghệ và bối cảnh tổ chức.</li></ul>',
                ],
                [
                    'key'   => 'course_rules',
                    'value' => '<h2>Quy tắc khoá học</h2><p>Để đủ điều kiện nhận bằng Cử nhân Công nghệ Thông tin , sinh viên phải hoàn thành 300 điểm tín chỉ baogồm:</p><ul><li>8 học phần chủ lực (100 điểm tín chỉ)</li><li>8 học phần nghiên cứu từ một trong các chuyên ngành sau: Công nghệ mạng, Công nghệ phần mềm (100điểm tín chỉ)</li><li>8 học phần nghiên cứu khác (100 điểm tín chỉ) bao gồm một môn chuyên ngành, các môn của ngành phụ,các môn của ngành phụ nâng cao hoặc các môn tự chọn.</li></ul><p>Sinh viên không được hoàn thành quá 150 điểm tín chỉ (thường là 12 học phần) ở cấp độ giới thiệu. Một họcphần học tập chỉ có thể được tính một lần, trong đó các học phần được chia sẻ giữa các chuyên ngành và /hoặc trẻ vị thành niên, sinh viên phải chọn một người thay thế được phê duyệt.</p><h4><strong>Khối lượng học tập</strong></h4><p>Cử nhân Công nghệ Thông tin bao gồm tổng cộng 300 điểm tín chỉ. Các học phần thường có 12,5 điểm tín chỉ(CPS). Tiêu chuẩn hàng năm của chương trình toàn thời gian bao gồm 100 điểm tín chỉ, và tiêu chuẩn hàngnăm của chương trình sinh viên thời gian bao gồm 50 điểm tín chỉ. Thời gian học tập của Cử nhân Côngnghệ Thông tin thường là 3 năm.</p><h4><strong>Tín chỉ học tập tối đa</strong></h4><p>Số lượng tín chỉ tối đa có thể cấp cho ngành Cử nhân Công nghệ thông tin là 200 điểm tín chỉ (thường là16 học phần).</p>',
                ],
                [
                    'key'   => 'hidden_units_category_id',
                    'value' => $units_category->id,
                ],
                [
                    'key'   => 'hidden_standards_category_id',
                    'value' => $standards_category->id,
                ],
            ]);
        });
    }

    public function insertUnits()
    {
        PostSchema::insert([
            ['name' => 'unit_code', 'Label' => 'Unit code', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'units'],
            ['name' => 'duration', 'Label' => 'Thời gian', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'units'],
            ['name' => 'contact_hours', 'Label' => 'Số giờ liên lạc', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'units'],
            ['name' => 'more_information_link', 'Label' => 'Đường dẫn thông tin chi tiết', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'units'],
        ]);
        $this->createAUnitPost(
            'Giới thiệu về hệ thống thông tin doanh nghiệp',
            '<h3><span style="font-weight: 400;">About this unit</span></h3><p><span style="font-weight: 400;">Introduction to Business Information Systems aims to instill an appreciation of how technology can be used to assist business, without the technology becoming an end in itself. In particular, the unit aims to generate an awareness of the importance of information to decision-making and how to provide such information to ensure its usefulness to the decision makers. Students gain a strong foundation of business systems fundamentals and the influence of the Internet on business stakeholders; customers, suppliers, manufacturers, service makers, regulators, managers and employees.</span></p><h3><span style="font-weight: 400;">Content</span></h3><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Organisations in the digital economy</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Information Systems: their evolution to current role and purpose in business &amp; society</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Strategic review of purposes of commercial business, organisational requirements for Information Systems</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Data and information management in the digital economy; Ethical, legal and security issues; Databases, and their importance to contemporary business</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Business processes: evolution and support of IS</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">E-Commerce Networks and commercial internet applications</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">IS to support business transactions &amp; processes; transaction processing systems, supply chain management, customer relationship management; enterprise systems</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">IS to support managerial decision making, business intelligence, decision support, and knowledge management; the nature of IS management</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Information Systems requirements analysis; Information systems acquisition, development, and implementation</span></li></ul><h3><span style="font-weight: 400;">This unit is found in:</span></h3><ul><li style="font-weight: 400;" aria-level="1"><span style="color: #333333;"><a style="color: #333333; text-decoration: underline;" href="https://www.swinburneonline.edu.au/online-courses/business/bachelor-business-major-logistics-and-supply-chain-management"><span style="font-weight: 400;">Bachelor of Business With a Major in Logistics and Supply Chain Management</span></a></span></li><li style="font-weight: 400;" aria-level="1"><span style="color: #333333;"><a style="color: #333333; text-decoration: underline;" href="https://www.swinburneonline.edu.au/online-courses/business/bachelor-business-major-management"><span style="font-weight: 400;">Bachelor of Business With a Major in Management</span></a></span></li><li style="font-weight: 400;" aria-level="1"><span style="color: #333333;"><a style="color: #333333; text-decoration: underline;" href="https://www.swinburneonline.edu.au/online-courses/business/bachelor-business-major-marketing"><span style="font-weight: 400;">Bachelor of Business With a Major in Marketing</span></a></span></li><li style="font-weight: 400;" aria-level="1"><span style="color: #333333;"><a style="color: #333333; text-decoration: underline;" href="https://www.swinburneonline.edu.au/online-courses/business/bachelor-business-major-sports-management"><span style="font-weight: 400;">Bachelor of Business With a Major in Sports Management</span></a></span></li><li style="font-weight: 400;" aria-level="1"><span style="color: #333333;"><a style="color: #333333; text-decoration: underline;" href="https://www.swinburneonline.edu.au/online-courses/business/bachelor-business-major-business-administration"><span style="font-weight: 400;">Bachelor of Business With a Major in Business Administration</span></a></span></li><li style="font-weight: 400;" aria-level="1"><span style="color: #333333;"><a style="color: #333333; text-decoration: underline;" href="https://www.swinburneonline.edu.au/online-courses/business/bachelor-business-major-accounting"><span style="font-weight: 400;">Bachelor of Business With a Major in Accounting</span></a></span></li></ul>',
            'INF10003',
            'https://www.swinburne.edu.au/study/courses/units/Introduction-to-Business-Information-Systems-INF10003/local'
        );
        $this->createAUnitPost(
            'Phát triển Web',
            '<h3><span style="font-weight: 400;">About this unit</span></h3><p><span style="font-weight: 400;">This unit introduces the technology of the internet to develop an understanding of the technologies associated with programming for the online environment.</span></p><h3><span style="font-weight: 400;">Content</span></h3><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Web concepts: definition, history and fundamental concepts</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Introduction to HTML, CSS and web development processes</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">HTML5: logical document structure, syntax, images, links, maps, tables, frames, forms</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">W3C standards, validation</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Design, layout and usability: principles of navigation, usability, page style guides, standards</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Protocols and server technology: HTTP, TCP/IP, MIME, URI, DNS</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">JavaScript: syntax, object model, event handling, common tasks</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Interactivity: DOM, and some evolving technologies forms processing, common tasks</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Style sheets: fundamentals, CSS formatting, CSS positioning, standards</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Web design and usability: principles of navigation, usability, style guides, standards</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Introduction to XML: syntax, DTDs, XSL, applications</span></li></ul><p><span style="font-weight: 400;">This unit is found in the Bachelor of Information and Communication Technology.</span></p>',
            'COS10005',
            'https://www.swinburne.edu.au/study/courses/units/Web-Development-COS10005/local'
        );
        $this->createAUnitPost(
            'Giới thiệu về lập trình',
            '<h3><span style="font-weight: 400;">About this unit</span></h3><p><span style="font-weight: 400;">This unit introduces students to computer programming, and teaches them to apply code reading and debugging techniques to analyse, interpret and describe the purpose of program code, and locate within this code errors in syntax, logic, style and/or good practice.</span></p><h3><span style="font-weight: 400;">Content</span></h3><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Designing, writing, compiling, documenting and testing programs</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Programming language syntax</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Structured programming principles</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Functional decomposition</span></li></ul><h3><span style="font-weight: 400;">This unit is found in the </span><span style="color: #333333;"><a style="color: #333333;" href="https://www.swinburneonline.edu.au/online-courses/technology/bachelor-of-information-and-communication-technology"><span style="font-weight: 400;">Bachelor of Information and Communication Technology</span></a><span style="font-weight: 400;">.</span></span></h3>',
            'COS10009',
            'https://www.swinburne.edu.au/study/courses/units/Introduction-to-Programming-COS10009/local'
        );
        $this->createAUnitPost(
            'Lập trình hướng đối tượng',
            '<h3><span style="font-weight: 400;">About this unit</span></h3><p><span style="font-weight: 400;">This unit of study aims to introduce students to structured programming and design.</span></p><h3><span style="font-weight: 400;">Content</span></h3><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Designing, writing, compiling, documenting and testing programs</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Programming language syntax</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Structured programming principles</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Functional decomposition</span></li></ul><h3><span style="font-weight: 400;">This unit is found in the </span><span style="color: #333333;"><a style="color: #333333;" href="https://www.swinburneonline.edu.au/online-courses/technology/bachelor-of-information-and-communication-technology"><span style="font-weight: 400;">Bachelor of Information and Communication Technology</span></a><span style="font-weight: 400;">.</span></span></h3>',
            'COS20007',
            'https://www.swinburne.edu.au/study/courses/units/Object-Oriented-Programming-COS20007/local'
        );
        $this->createAUnitPost(
            'Quản trị mạng',
            '<h3><span style="font-weight: 400;">About this unit</span></h3><p><span style="font-weight: 400;">This unit aims to build the understanding and skills required to design, configure and manage a single domain network.</span></p><h3><span style="font-weight: 400;">Content</span></h3><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Network fundamentals</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Project management</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Deploying and managing Windows server 2012</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Active directory domain services</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">IPv4, IPv6 and dynamic host configuration protocol</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Domain name system</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">File and print services</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Group policy</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Server virtualisation with Hyper-V</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Managing risk and disaster recovery</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Managing quality by monitoring Windows</span></li></ul><h3><span style="font-weight: 400;">This unit is found in the </span><span style="color: #333333;"><a style="color: #333333;" href="https://www.swinburneonline.edu.au/online-courses/technology/bachelor-of-information-and-communication-technology"><span style="font-weight: 400;">Bachelor of Information and Communication Technology</span></a></span></h3>',
            'TNE10005',
            'https://www.swinburneonline.edu.au/online-courses/technology/bachelor-of-information-and-communication-technology'
        );
        $this->createAUnitPost(
            'Phát triển dự án 1 - Công cụ và thực hành',
            '<h3><span style="font-weight: 400;">About this unit</span></h3><p><span style="font-weight: 400;">This unit of study aims to introduce knowledge and techniques for modelling problem and solution</span></p><p><span style="font-weight: 400;">domains for software systems.</span></p><h3><span style="font-weight: 400;">Content</span></h3><p><span style="font-weight: 400;">Process models</span></p><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">How software is built</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Iterative, non-linear development processes</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Models of the software development lifecycle</span></li></ul><p><span style="font-weight: 400;">Problems and solutions</span></p><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Why software is developed</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Problem and vision statements</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Goals and objectives</span></li></ul><p><span style="font-weight: 400;">Stakeholders and goals</span></p><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Users and usability</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Sponsors and functionality</span></li></ul><p><span style="font-weight: 400;">Understanding the problem domain</span></p><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Conceptual solutions</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">User stories</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Domain modelling</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Prototyping</span></li></ul><p><span style="font-weight: 400;">Validation and verification</span></p><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Build the right product, correctly</span></li></ul><h3><span style="font-weight: 400;">This unit is found in the </span><span style="color: #333333;"><a style="color: #333333;" href="https://www.swinburneonline.edu.au/online-courses/technology/bachelor-of-information-and-communication-technology"><span style="font-weight: 400;">Bachelor of Information and Communication Technology</span></a><span style="font-weight: 400;">.</span></span></h3>',
            'SWE20001',
            'https://www.swinburne.edu.au/study/courses/units/Development-Project-1---Tools-and-Practices-SWE20001/local'
        );
        $this->createAUnitPost(
            'Bảo mật CNTT',
            '<h3><span style="font-weight: 400;">About this unit</span></h3><p><span style="font-weight: 400;">Students who complete this unit of study will understand the nature of security threats to IT systems. Student will be familiar with the tools used by hackers and crackers and be aware of ways of identifying and rectifying security breaches and will understand how to assess the vulnerability of computing systems.</span></p><h3><span style="font-weight: 400;">Content</span></h3><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Overview of internet crime and computer security threats</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Operating system flaws</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Security tools</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">System logs</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Firewalls, security: theory, practice, design</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Ports scanning, packet sniffing and intrusion detection</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Understanding and responding to security alerts</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Server technologies, risks and policies</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Vulnerability analysis and audit</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Secure programming practices</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Script injection and input sanitising</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Security models</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Physical security</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Authentication (identity, biometrics and digital signatures)</span></li></ul><h3><span style="font-weight: 400;">This unit is found in the </span><span style="color: #333333;"><a style="color: #333333;" href="https://www.swinburneonline.edu.au/online-courses/technology/bachelor-of-information-and-communication-technology"><span style="font-weight: 400;">Bachelor of Information and Communication Technology</span></a><span style="font-weight: 400;">.</span></span></h3>',
            'COS30015',
            'https://www.swinburne.edu.au/study/courses/units/IT-Security-COS30015/international'
        );
        $this->createAUnitPost(
            'Phát triển phần mềm cho thiết bị di động',
            '<h3><span style="font-weight: 400;">About this unit</span></h3><p><span style="font-weight: 400;">This unit of study aims to introduce students to software development and design for mobile devices.</span></p><h3><span style="font-weight: 400;">Content</span></h3><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Mobile devices &ndash; hardware, operating systems and architecture</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Principles and techniques to use when developing applications for mobile platforms</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">User experience &ndash; interaction design and usability evaluation</span></li></ul><h3><span style="font-weight: 400;">This unit is found in the </span><span style="color: #333333;"><a style="color: #333333;" href="https://www.swinburneonline.edu.au/online-courses/technology/bachelor-of-information-and-communication-technology"><span style="font-weight: 400;">Bachelor of Information and Communication Technology</span></a><span style="font-weight: 400;">.</span></span></h3>',
            'COS30017',
            'https://www.swinburne.edu.au/study/courses/units/Software-Development-for-Mobile-Devices-COS30017/local'
        );
        $this->createAUnitPost(
            'Lập trình IoT',
            '<h3><span style="font-weight: 400;">About this unit</span></h3><p><span style="font-weight: 400;">The Internet of Things (IoT) programming unit will teach students the fundamentals of developing an IoT-based solution for smart homes, smart cities etc., using IoT sensors and devices. Students will learn the skills to work with current popular IoT sensor and platforms such as Arduino, Netatmo and will have the opportunity to apply these skills in developing innovative IoT-based system. The unit will be hands-on, with students expected to work in groups to design, develop and implement the IoT-based system.</span></p><h3><span style="font-weight: 400;">Content</span></h3><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Introduction to Android programming</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">IoT programming</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">IoT system design</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">IoT data management</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">IoT networking</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Cloud computing for IoT</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Cloud for IoT and RESTful web services</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Introduction to data visualisation</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">IoT security and privacy</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Advanced topics in IoT</span></li></ul><h3><span style="font-weight: 400;">This unit is found in the </span><span style="color: #333333;"><a style="color: #333333;" href="https://www.swinburneonline.edu.au/online-courses/technology/bachelor-of-information-and-communication-technology"><span style="font-weight: 400;">Bachelor of Information and Communication Technology</span></a><span style="font-weight: 400;">.</span></span></h3>',
            'SWE30011',
            'https://www.swinburne.edu.au/study/courses/units/IoT-Programming-SWE30011/local'
        );
        $this->createAUnitPost(
            'Các vấn đề chuyên môn trong CNTT',
            '<h3><span style="font-weight: 400;">About this unit</span></h3><p><span style="font-weight: 400;">Students will learn to identify and understand issues relating to the personal and organisational application of ICT. Students will develop a sense of professional responsibility through exploring professional codes of ethics articulated by professional accrediting bodies. Students will explore a range of social, legal, ethical and business issues that ICT professionals face in their careers.</span></p><h3><span style="font-weight: 400;">Content</span></h3><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Ethics and professionalism, including the philosophical foundations of professional ethics</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Formal codes of ethics and codes of conduct (ACS and others, including a selection from ACM, AIS, IEEE-CS, ACM Software Engineering, Engineers Australia), and their impact on the work and behaviour of ICT professionals</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Understanding industry drivers, ICT trends within industries and interconnectedness between industries (with a focus on the Australian industry, including support provided by professional societies and industry associations)</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Professionals&rsquo; roles and responsibilities, professional work behaviours and attitudes (including a focus on the structure of ICT work such as provided, for example, by the Skills Foundation for the Information Age (SFIA)</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Business compliance imperatives, including: Sarbanes Oxley, &amp; Australian Standard 8015 (Corporate Governance of Information &amp; Communication Technologies) and their implications for ICT professionals; privacy legislation and anti-money laundering legislation; and their impacts on the work of ICT professionals</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Issues in both employee and contractor relationships, including responsibilities and management issues involved in providing IT contracting services</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Social impacts of ICT, including understanding the impacts of ICT on end-users and consumers(with an emphasis on privacy, security and copyright matters)</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Life-long learning and career development as it relates to sound professional practice</span></li></ul>',
            'ICT30005',
            'https://www.swinburne.edu.au/study/courses/units/Professional-Issues-in-IT-ICT30005/international'
        );
        $this->createAUnitPost(
            'Giải quyết vấn đề bằng CNTT-TT',
            '<h3><span style="font-weight: 400;">About this unit</span></h3><p><span style="font-weight: 400;">Every day we are faced with problems that require analytical thinking, creativity and resourcefulness to solve. This unit challenges students to explore different approaches to analysing and solving problems in an organisation framework. Students will develop the ability to apply analysis techniques to unfamiliar problems and present their investigation through the use of a wide range of innovative information communication technologies [ICT], including prototyping, cloud-based tools, report writing and presentations. In addition, students are encouraged to reflect upon the learning taking place throughout the unit.</span></p><h3><span style="font-weight: 400;">Content</span></h3><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Introduction to problem solving</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Project planning and methodology</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Information gathering</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Content management systems and hosting requirements</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Business value and process improvement</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Team dynamics</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Overview of computer systems in terms of hardware, software and networking</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Usability testing</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Innovation and creativity</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Teamwork, planning and collaboration</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Report writing and presentation techniques</span></li></ul><h3><span style="font-weight: 400;">This unit is found in the </span><span style="color: #333333;"><a style="color: #333333;" href="https://www.swinburneonline.edu.au/online-courses/technology/bachelor-of-information-and-communication-technology"><span style="font-weight: 400;">Bachelor of Information and Communication Technology</span></a><span style="font-weight: 400;">.</span></span></h3>',
            'ICT10001',
            'https://www.swinburne.edu.au/study/courses/units/Problem-Solving-with-ICT-ICT10001/local'
        );
        $this->createAUnitPost(
            'Phân tích và thiết kế cơ sở dữ liệu',
            '<h3><span style="font-weight: 400;">About this unit</span></h3><p><span style="font-weight: 400;">Digital data is central to the modern economy. Transactions, managerial decisions and strategy development rely on data. Databases are the tool used to create, store, organise and disseminate data. This unit delivers the fundamental principles needed to effectively design and use databases. It seeks to unpack the notion of data, and introduce contemporary tools and techniques for storing, retrieving, exploiting and visualising data. Emphasis is given to understanding data modelling and design approaches, and the emerging opportunities afforded by big data, social media, data analytics and unstructured data. Both commercial and open-source database management tools are focused upon.</span></p><h3><span style="font-weight: 400;">Content</span></h3><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Database relations, tables, records, keys, filters, queries, parameters, forms, indexes</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Data formats, manipulation, and exchange tools</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Transactions and ACID</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Entity-relationship diagrams and modelling</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">SQL</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Data warehousing, big data and data normalisation</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Data analytics, business intelligence, visualisations and functions</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Semi-structured and unstructured data storage</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Applications and examples of data and databases in organisations</span></li></ul><h3><span style="font-weight: 400;">This unit is found in the </span><span style="color: #333333;"><a style="color: #333333;" href="https://www.swinburneonline.edu.au/online-courses/technology/bachelor-of-information-and-communication-technology"><span style="font-weight: 400;">Bachelor of Information and Communication Technology</span></a><span style="font-weight: 400;">.</span></span></h3>',
            'INF10002',
            'https://www.swinburne.edu.au/study/courses/units/Database-Analysis-and-Design-INF10002/local'
        );
        $this->createAUnitPost(
            'Thiết kế lấy người dùng làm trung tâm',
            '<h3><span style="font-weight: 400;">About this unit</span></h3><p><span style="font-weight: 400;">This unit of study aims to introduce students to the concept of usability and the process of user-centred design as a method of achieving good usability outcomes in software development.</span></p><h3><span style="font-weight: 400;">Content</span></h3><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">ISO user-centred design process and principles</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Usability as a component of software quality</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Understanding and modelling context of use (users, tasks and system environment)</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Requirements elicitation and specification</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Ethics of human research</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Usability design principles, guidelines and standards</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Conceptual design and iterative prototyping</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Usability evaluation methods</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Psychological principles</span></li></ul><h3><span style="font-weight: 400;">This unit is found in the </span><span style="color: #333333;"><a style="color: #333333;" href="https://www.swinburneonline.edu.au/online-courses/technology/bachelor-of-information-and-communication-technology"><span style="font-weight: 400;">Bachelor of Information and Communication Technology</span></a><span style="font-weight: 400;">.</span></span></h3>',
            'COS30020',
            'https://www.swinburne.edu.au/study/courses/units/User-Centred-Design-COS20001/local'
        );
        $this->createAUnitPost(
            'Hệ thống máy tính',
            '<h3><span style="font-weight: 400;">About this unit</span></h3><p><span style="font-weight: 400;">Students will become familiar with the design, programming, operation, and design constraints of computing hardware.</span></p><h3><span style="font-weight: 400;">Content</span></h3><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Assembly language programming</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">An introduction to program timing considerations and interrupts</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Serial and parallel input/output</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Memory types and organisation</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Basic computer organisation: Von Neumann and Harvard architectures</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">The internals of a microcomputer using a RISC CPU</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">An introduction to interfacing to the analogue world</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">A block diagram of a complete CPU</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">An introduction to data storage technologies</span></li></ul><h3><span style="font-weight: 400;">This unit is found in </span><span style="color: #333333;"><a style="color: #333333;" href="https://www.swinburneonline.edu.au/online-courses/technology/bachelor-of-information-and-communication-technology"><span style="font-weight: 400;">Bachelor of Information and Communication Technology</span></a><span style="font-weight: 400;">.</span></span></h3>',
            'COS10004',
            'https://www.swinburne.edu.au/study/courses/units/Computer-Systems-COS10004/local'
        );
        $this->createAUnitPost(
            'Phát triển ứng dụng web',
            '<h3><span style="font-weight: 400;">About this unit</span></h3><p><span style="font-weight: 400;">This unit is designed to introduce a variety of technologies and techniques typically used in development of contemporary web-based systems, and to enable students to achieve a level of fluency in using these in a thoughtful and considered manner. Two web programming techniques will be introduced. The first is to use web-based embedded scripting language (PHP) on a web server (Apache) and a server-side database (MySQL), and the second is to use Ajax to manage asynchronous client-server communication and XML/JSON as data exchange languages.</span></p><h3><span style="font-weight: 400;">Content</span></h3><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Server-side scripting language PHP: variables, data types, operations, strings, functions, control statements, arrays, files and directory access, maintaining state</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Web programming approach by using embedded PHP</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Access and manipulation of MySQL</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">DOM and CSS used in JavaScript</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Design patterns used in web applications</span></li></ul><p><span style="font-weight: 400;">This unit is found in the Bachelor of Information and Communication Technology.</span></p>',
            'COS3002',
            'https://www.swinburne.edu.au/study/courses/units/Web-Application-Development-COS30020/local'
        );
        $this->createAUnitPost(
            'Mạng và chuyển mạch',
            '<h3><span style="font-weight: 400;">About this unit</span></h3><p><span style="font-weight: 400;">This unit of study aims to introduce you to the field of data networking and to provide you with the necessary skills to design and successfully deploy a small network.</span></p><h3><span style="font-weight: 400;">Content</span></h3><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Networking fundamentals</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">OSI network layers</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Ethernet fundamentals, technologies and switching</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">TCP/IP and addressing</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Subnets and subnetting (VLSM and CIDR)</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Switching concepts</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Virtual LANs</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Inter-VLAN static routing</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Etherchannel bundling</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Spanning tree protocol</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Wireless LANs</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Basic switch troubleshooting</span></li></ul><h3><span style="font-weight: 400;">This unit is found in the </span><span style="color: #333333;"><a style="color: #333333;" href="https://www.swinburneonline.edu.au/online-courses/technology/bachelor-of-information-and-communication-technology"><span style="font-weight: 400;">Bachelor of Information and Communication Technology</span></a><span style="font-weight: 400;">.</span></span></h3>',
            'TNE10006',
            'https://www.swinburne.edu.au/study/courses/units/Networks-and-Switching-TNE10006/local'
        );
        $this->createAUnitPost(
            'Nguyên tắc định tuyến mạng',
            '<h3><span style="font-weight: 400;">About this unit</span></h3><p><span style="font-weight: 400;">This unit of study aims to provide you with a solid foundation in the technologies and functionality of routing within data networks. The unit will also provide with an introduction to Wide Area Networks (WANs) and the skills to deploy common network services within a WAN infrastructure.</span></p><h3><span style="font-weight: 400;">Content</span></h3><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Routing fundamentals</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Static and dynamic routing</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Configuring routers and routing devices</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Routing protocols (RIP, RIPv2, EIGRP, OSPF)</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">WAN technologies</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Access control lists</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">PPP</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">DHCP and NAT services</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Frame relay</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Network troubleshooting</span></li></ul><h3><span style="font-weight: 400;">This unit is found in the </span><span style="color: #333333;"><a style="color: #333333;" href="https://www.swinburneonline.edu.au/online-courses/technology/bachelor-of-information-and-communication-technology"><span style="font-weight: 400;">Bachelor of Information and Communication Technology</span></a><span style="font-weight: 400;">.</span></span></h3>',
            'TNE20002',
            'https://www.swinburne.edu.au/study/courses/units/Network-Routing-Principles-TNE20002/local'
        );
        $this->createAUnitPost(
            'Quản lý dự án CNTT',
            '<h3><span style="font-weight: 400;">About this unit</span></h3><p><span style="font-weight: 400;">This unit of study aims to expose students to the range of project management practices that are used in contemporary software development projects, so that they learn and understand the major issues that project managers have to handle.</span></p><h3><span style="font-weight: 400;">Content</span></h3><p><span style="font-weight: 400;">Project management issues</span></p><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Scope, time, cost, quality</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Risk</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Work breakdown structures</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Estimation techniques</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Project planning techniques</span></li></ul><p><span style="font-weight: 400;">Risk management</span></p><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Common project risk categories</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Risk identification and prioritisation</span></li></ul><p><span style="font-weight: 400;">Managing risks using spikes</span></p><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Quality management</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Defect identification and classification</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Quality reviews</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Defect reporting</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Change logs</span></li></ul><p><span style="font-weight: 400;">Measurement</span></p><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Size and complexity metrics</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Metric tools</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Relationships between defect and metrics</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Tracking and reporting</span></li></ul><p><span style="font-weight: 400;">This unit is found in the </span><span style="color: #333333;"><a style="color: #333333;" href="https://www.swinburneonline.edu.au/online-courses/technology/bachelor-of-information-and-communication-technology"><span style="font-weight: 400;">Bachelor of Information and Communication Technology</span></a><span style="font-weight: 400;">.</span></span></p>',
            'SWE30010',
            'https://www.swinburne.edu.au/study/courses/units/Managing-IT-Projects-SWE30010/local'
        );
        $this->createAUnitPost(
            'Quản trị máy chủ mạng doanh nghiệp',
            '<h3><span style="font-weight: 400;">About this unit</span></h3><p><span style="font-weight: 400;">The aim of this unit is to establish the skills and understanding required to design and configure a Windows server based enterprise network, and to build the skills required to design, configure and manage a single domain network.</span></p><h3><span style="font-weight: 400;">Content</span></h3><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Deploying and maintaining server images</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Advanced network services, DHCP and DNS</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Active directory domain services, sites and replication</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Group policy infrastructure</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Network policy server and network access protection</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Update management</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Advanced file services</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Active directory certificate services</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Active directory rights management services</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Active directory federation services</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">High availability with network load balancing and failover clustering</span></li></ul><h3><span style="font-weight: 400;">This unit is found in the </span><span style="color: #333333;"><a style="color: #333333;" href="https://www.swinburneonline.edu.au/online-courses/technology/bachelor-of-information-and-communication-technology"><span style="font-weight: 400;">Bachelor of Information and Communication Technology</span></a><span style="font-weight: 400;">.</span></span></h3>',
            'TNE30018',
            'https://www.swinburne.edu.au/study/courses/units/Enterprise-Network-Server-Administration-TNE30018/local'
        );
        $this->createAUnitPost(
            'Dự án công nghệ thông tin',
            '<h3><span style="font-weight: 400;">About this unit</span></h3><p><span style="font-weight: 400;">This unit is designed as a capstone industry project unit that provides students with professionally focused learning experiences during their final year of study. The unit aims at consolidating and integrating student learning with real world practice and facilitating a successful transition from academic learning environment to work environment. In conjunction with the development of analytical, critical thinking, problem solving, technical, and project management skills, the unit also has a strong emphasis on the development of professional and generic skills such as communication skill, teamwork skill, ability to tackle unfamiliar problems, and ability to work independently.</span></p><h3><span style="font-weight: 400;">Content</span></h3><ul><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Professional communication in dealing with clients and colleagues</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Project planning and management</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Design</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Configuration/creation of a software or technology solution</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Quality assurance process</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Test planning, execution and record-keeping</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Usability testing</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Working to standards</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Technical documentation</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Document version control</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Change management planning</span></li></ul><h3><span style="font-weight: 400;">This unit is found in the </span><span style="color: #333333;"><a style="color: #333333;" href="https://www.swinburneonline.edu.au/online-courses/technology/bachelor-of-information-and-communication-technology"><span style="font-weight: 400;">Bachelor of Information and Communication Technology</span></a><span style="font-weight: 400;">.</span></span></h3>',
            'ICT30001',
            'https://www.swinburne.edu.au/study/courses/units/Information-Technology-Project-ICT30001/international'
        );
        $ids = Category::where('type', 'units')->pluck('id');
        $posts = Post::ofType('units')->get();
        foreach ($posts as $post) {
            $post->syncCategories($ids);
        }
    }

    public function insertStandards()
    {
        factory(Post::class)->state('standards')->create([
            'title' => 'Điều kiện tiên quyết với chứng chỉ tốt nghiệp  tại bang Victoria, Úc  (VCE Pre-re-resites)',
            'content' => '<p>VCE tín chỉ 3 và 4: điểm học tập tối thiểu là 25 đối với bất kỳ chương trình bổ trợ tiếng Anh nào (ngoại trừ EAL) hoặc 30 đối với tiếng Anh như Ngôn ngữ bổ sung <br>(EAL) hoặc tương đương.',
            'order' => 3,
        ])->each(function ($post) {
            $ids = Category::where('type', 'standards')->pluck('id');
            $post->syncCategories($ids);
        });

        factory(Post::class)->state('standards')->create([
            'title' => 'Đầu vào lớp 12',
            'content' => '<p>Hoàn thành tốt Chứng chỉ Giáo dục Victoria (VCE) hoặc chứng chỉ tương đương, chẳng hạn như chứng chỉ lớp 12 quốc tế.</p>',
            'order' => 2,
        ])->each(function ($post) {
            $ids = Category::where('type', 'standards')->pluck('id');
            $post->syncCategories($ids);
        });

        factory(Post::class)->state('standards')->create([
            'title' => 'Không phải lớp 12 nhập học',
            'content' => '<p>Hoàn thành hoặc hoàn thành một phần sinh viên đại học đã được phê duyệt (bao gồm chứng chỉ IV (đã hoàn thành), văn sinh viên, văn sinh viên cao cấp, sinh viên cấp liên kết và sinh viên cấp).</p><p>Nếu sinh viên không có sinh viên cấp chính thức, sinh viên có thể được xem xét nhập học sau khi hoàn thành bài kiểm tra STAT.</p>',
            'order' => 1,
        ])->each(function ($post) {
            $ids = Category::where('type', 'standards')->pluck('id');
            $post->syncCategories($ids);
        });
    }

    public function insertSwinburneCollege()
    {
        Post::create([
            'title' => 'Giới thiệu về Swinburne Online',
            'type' => 'aboutus',
            'status' => 1,
            'thumbnail' => '/assets/images/banners/swinburne-online-banner.jpg',
            'description' => 'Phương pháp học tương tác',
            'content' => '<h2><strong>Swinburne Online</strong></h2><p>Với phương ph&aacute;p học tương t&aacute;c, Swinburne Online cung cấp phương thức tiếp cận trong học tập mới ở Việt Nam, c&aacute;c kh&oacute;a học được ph&acirc;n phối v&agrave; đ&aacute;nh gi&aacute; bởi Đại học C&ocirc;ng nghệ Swinburne.</p><p>Với phương ph&aacute;p học tương t&aacute;c, c&ugrave;ng với sự linh hoạt của việc học trực tuyến cũng như hỗ trợ tất cả c&aacute;c ng&agrave;y trong tuần gi&uacute;p cho sinh vi&ecirc;n trải nghiệm tất cả t&iacute;nh năng tốt nhất của ng&ocirc;i trường trực tuyến.</p><p>Sinh vi&ecirc;n Swinburne Online nhận bằng cấp được cấp bởi Đại học C&ocirc;ng nghệ Swinburne -&nbsp; một trường đại học h&agrave;ng đầu thế giới với hơn 30.000 sinh vi&ecirc;n tr&ecirc;n khắp Melbourne &Uacute;c v&agrave; c&aacute;c học x&aacute; kh&aacute;c tr&ecirc;n to&agrave;n thế giới.</p><p>Trường học trực tuyến của Swinburne Online cho ph&eacute;p bạn truy cập v&agrave;o c&aacute;c dịch vụ sinh vi&ecirc;n như gia sư, chuy&ecirc;n gia trực tuyến, c&aacute;c t&agrave;i nguy&ecirc;n học tập v&agrave; bạn cũng c&oacute; thể đưa ra những đ&aacute;nh gi&aacute; cũng như hợp t&aacute;c với c&aacute;c bạn kh&aacute;c.</p>'
        ]);
    }

    public function insertSwinburneVietNam()
    {
        Post::create(
            [
                'title' => 'Swinburne Việt Nam',
                'type' => 'aboutus',
                'status' => 1,
                'thumbnail' => '/assets/images/banners/swinburne-graduation-banner.jpg',
                'description' => 'Swinburne Việt Nam',
                'content' => '<table style="border-collapse: separate; width: 100%; border-style: none;" cellspacing="30"><tbody><tr><td style="width: 50%; vertical-align: top;"><h2>Swinburne Việt Nam</h2><p>Swinburne University of Technology (Melbourne, Australia) l&agrave; một trường đại học danh tiếng xếp vị tr&iacute; thứ 321 c&aacute;c trường đại học tr&ecirc;n thế giới (QS Ranking 2022) c&oacute; bề d&agrave;y lịch sử hơn 100 năm kể từ khi th&agrave;nh lập. Đối với Việt Nam, Swinburne được biết đến trong 20 năm với vai tr&ograve; l&agrave; nh&agrave; t&agrave;i trợ cho những nh&agrave; v&ocirc; địch Đường l&ecirc;n đỉnh Olympia cơ hội học tập tại Swinburne.</p><p style="line-height: 1.4;">To&agrave;n bộ nội dung, t&agrave;i liệu v&agrave; quy tr&igrave;nh đ&agrave;o tạo, kiểm so&aacute;t chất lượng tại Swinburne Việt Nam đều được chuyển giao trực tiếp từ Swinburne Swinburne University of Technology (Melbourne, Australia). Đội ngũ gi&aacute;o vi&ecirc;n, chuy&ecirc;n gia tham gia qu&aacute; tr&igrave;nh đ&agrave;o tạo, tư vấn cho học sinh đều đạt c&aacute;c y&ecirc;u cầu ti&ecirc;u chuẩn quốc tế của Swinburne. Bằng đại học của sinh vi&ecirc;n sau khi tốt nghiệp sẽ được cấp bởi Swinburne v&agrave; c&oacute; h&igrave;nh thức như bằng được cấp cho sinh vi&ecirc;n học tập tại Australia.</p></td><td style="width: 50%; vertical-align: top;"><img src="' . config('app.url') . '/assets/images/about/about_4.jpg" alt="" width="100%" style="margin-bottom: 20px;" /></td></tr><tr><td style="width: 49.6916%; vertical-align: top;"><img src="' . config('app.url') . '/assets/images/about/about_5.jpg" alt="" width="570px" height="1107px" /></td><td style="width: 49.6916%; vertical-align: top;"><h2>Tầm nh&igrave;n tới 2025</h2><p>Swinburne Việt Nam được th&agrave;nh lập cũng nhằm thực hiện tầm nh&igrave;n của Swinburne University of Technology, Australia với định vị &ldquo;L&agrave; một trường đẳng cấp quốc tế đ&oacute;ng g&oacute;p v&agrave;o tiến bộ kinh tế v&agrave; x&atilde; hội th&ocirc;ng qua khoa học, c&ocirc;ng nghệ v&agrave; s&aacute;ng tạo&rdquo;.</p><p>Sứ mệnh của Swinburne Việt Nam l&agrave;&nbsp; &ldquo;N&acirc;ng cao năng lực cạnh to&agrave;n cầu cho đ&ocirc;ng đảo người học, g&oacute;p phần mở mang bờ c&otilde;i tr&iacute; tuệ quốc gia:</p><h4><strong>Gi&aacute; trị</strong>: Mang lại sự th&agrave;nh c&ocirc;ng cho người học (The University of Success)</h4><ul><li>Kiến thức to&agrave;n cầu từ một trường đại học đẳng cấp cao quốc tế.</li><li>Kỹ năng l&agrave;m việc thực tế.</li><li><a class="external-link" title="Follow link" href="https://swinburne-vn.edu.vn/news/3-tieu-chi-cua-cong-dan-toan-cau-la-gi/" target="_blank" rel="nofollow noopener">Kỹ năng c&ocirc;ng d&acirc;n to&agrave;n cầu.</a></li><li>Trải nghiệm học tập hạnh ph&uacute;c</li><li>Hỗ trợ c&aacute; nh&acirc;n h&oacute;a theo y&ecirc;u cầu v&agrave; năng lực của người học</li><li>Cơ hội việc l&agrave;m tốt, thu nhập cao kh&ocirc;ng chỉ trong nước m&agrave; quốc tế</li></ul><h4><strong>Xếp hạng</strong></h4><ul><li>Top 1 bang Victoria về chất lượng trải nghiệm của sinh vi&ecirc;n (Theo QILT, 2018)</li><li>Xếp hạng 45th trong 250 tổ chức gi&aacute;o dục trẻ (Theo Young University Rankings, 2019)</li><li>Top 70 c&aacute;c trường khu vực Ch&acirc;u &Aacute; &ndash; Th&aacute;i B&igrave;nh Dương</li><li>Xếp hạng top 321th trong 400 ĐH h&agrave;ng đầu thế giới (Theo QS Ranking, 2022)</li><li>50 năm ph&aacute;t triển hợp t&aacute;c với c&aacute;c tổ chức doanh nghiệp h&agrave;ng đầu thế giới</li></ul><h4><strong>Chứng chỉ cấp ph&eacute;p v&agrave; C&ocirc;ng nhận</strong></h4><p>Swinburne Việt Nam cam kết mang đến cho sinh vi&ecirc;n chương tr&igrave;nh đ&agrave;o tạo chất lượng tương đương chất lượng đ&agrave;o tạo tại Swinburne Australia. Chương tr&igrave;nh đ&agrave;o tạo tại Swinburne Việt Nam tu&acirc;n thủ c&aacute;c ti&ecirc;u chuẩn kiểm định chất lượng đ&agrave;o tạo của Swinburne v&agrave; được chuyển giao 100% từ Swinburne University of Technology (Australia), đ&aacute;p ứng y&ecirc;u cầu quản l&yacute; chất lượng của:</p><ul><li>Tertiary Education Quality and Standards Agency (TEQSA): Cơ quan Ti&ecirc;u chuẩn v&agrave; Chất lượng Gi&aacute;o dục Đại học của Australia</li><li>Association to Advance Collegiate Schools of Business (AACSB): Hiệp hội Ph&aacute;t triển Giảng dạy Doanh thương bậc Đại học.</li></ul><p>Theo quy định của Luật Gi&aacute;o dục sửa đổi Việt Nam (2019), bằng cử nhận của Swinburne University of Technology tu&acirc;n thủ c&aacute;c ti&ecirc;u chuẩn kiểm định v&agrave; c&ocirc;ng nhận bởi Ch&iacute;nh phủ Australia n&ecirc;n cũng được Ch&iacute;nh phủ Việt nam (Bộ Gi&aacute;o dục v&agrave; đ&agrave;o tạo) c&ocirc;ng nhận.</p></td></tr></tbody></table>'
            ]
        );
    }

    public function insertSwinburneTechnology()
    {
        Post::create(
            [
                'title' => 'Đại học Công nghệ Swinburne',
                'type' => 'aboutus',
                'status' => 1,
                'thumbnail' => '/assets/images/banners/swinburne-university-banner.jpg',
                'description' => 'Đại học Công nghệ Swinburne',
                'content' => '<table style="border-collapse: collapse; width: 100%;" cellspacing="30"><tbody><tr><td style="vertical-align: top;"><img src="' . config('app.url') . '/assets/images/about/about_6.jpg" alt="" width="500" height="370" /></td><td style="width: 53.25%; vertical-align: top;"><p>Hơn 100 năm lịch sử đ&aacute;ng tự h&agrave;o, Đại học C&ocirc;ng nghệ Swinburne đ&atilde; cung cấp cho sinh vi&ecirc;n những cải tiến mới nhất trong nền gi&aacute;o dục, đồng thời tạo ra c&aacute;c kết nối bền vững đến c&aacute;c ng&agrave;nh nghề h&agrave;ng đầu để trang bị cho sinh vi&ecirc;n mọi kỹ năng cần thiết cho một sự nghiệp th&agrave;nh c&ocirc;ng.</p><p>Trong những năm gần đ&acirc;y, Swinburne đ&atilde; trở th&agrave;nh một trong những trường đại học h&agrave;ng đầu thế giới, nằm trong top 400 thế giới, theo đ&aacute;nh gi&aacute; của Bảng xếp hạng học thuật c&aacute;c trường đại học thế giới.</p><p>C&oacute; hơn 30.000 sinh vi&ecirc;n đang theo học tại Swinburne tr&ecirc;n to&agrave;n thế giới, được hỗ trợ bởi 2.800 nh&acirc;n vi&ecirc;n v&agrave; hơn 170.000 mạng lưới cựu sinh vi&ecirc;n.</p><p>Với ba cơ sở tại Melbourne, &Uacute;c v&agrave; một cơ sở quốc tế ở Sarawak, Malaysia, điểm nhấn của Swinburne l&agrave; chất lượng giảng dạy v&agrave; nghi&ecirc;n cứu về khoa học, c&ocirc;ng nghệ đẳng cấp thế giới v&agrave; lu&ocirc;n đổi mới để tạo ra sự kh&aacute;c biệt. Sinh vi&ecirc;n Swinburne Online sẽ tốt nghiệp với tr&igrave;nh độ v&agrave; bằng cấp tương đương với sinh vi&ecirc;n học tại khu&ocirc;n vi&ecirc;n trường.</p><p>C&aacute;c thế mạnh về nghi&ecirc;n cứu của Swinburne l&agrave; thuộc c&aacute;c lĩnh vực C&ocirc;ng nghệ sản xuất ti&ecirc;n tiến, Vật l&yacute; thi&ecirc;n văn, C&ocirc;ng nghệ sinh học, Khoa học nhận thức, Thiết kế, T&iacute;nh to&aacute;n, Kỹ thuật vi m&ocirc; v&agrave; nano, Quang học, Ứng dụng c&ocirc;ng nghệ laser v&agrave; X&atilde; hội bền vững.</p><p>Nh&agrave; trường cam kết cung cấp cơ hội học tập cho tất cả sinh vi&ecirc;n c&oacute; khả năng ở bất cứ nơi n&agrave;o ch&uacute;ng t&ocirc;i ph&aacute;t hiện ra. Vừa l&agrave; một nh&agrave; l&atilde;nh đạo trong gi&aacute;o dục quốc tế v&agrave; l&agrave; người ti&ecirc;n phong đ&agrave;o tạo gi&aacute;o dục trực tuyến, Swinburne đang mở rộng c&aacute;c cơ hội học tập cho c&aacute;c nh&agrave; l&atilde;nh đạo mới.</p><p>T&igrave;m hiểu th&ecirc;m về <span style="text-decoration: underline; color: #000000;">Đại học C&ocirc;ng nghệ Swinburne</span></p></td></tr></tbody></table>'
            ]
        );
    }

    public function insertFeeSwinburne(){
        Post::create(
            ['title' => 'Học phí', 
            'type' => 'pages', 
            'status' => 1,
            'thumbnail' => '/assets/images/banners/swinburne-fee-banner.jpg',
            'description' => 'Học phí tại Swinburne Việt Nam', 
            'content' => '<p><h2><span style="font-size: 32px;">Học ph&iacute; tại Swinburne Việt Nam</span></h2>
            <p>Học ph&iacute; của chương tr&igrave;nh bao gồm học ph&iacute; học chương tr&igrave;nh C&ocirc;ng d&acirc;n to&agrave;n cầu v&agrave; học ph&iacute; học Chuy&ecirc;n ng&agrave;nh gồm:</p>
            <h3><span style="font-size: 18px;"><strong>1. Chương tr&igrave;nh C&ocirc;ng d&acirc;n to&agrave;n cầu:</strong></span></h3>
            <p>Mức học ph&iacute; của chương tr&igrave;nh C&ocirc;ng d&acirc;n to&agrave;n cầu l&agrave; <span style="color: #da2e2e;">14 triệu VNĐ/mức độ</span> (tương đương 600USD/ mức độ). Tối đa l&agrave; 6 mức độ trong v&ograve;ng 1 năm, th&iacute; sinh sẽ được phỏng vấn để tư vấn mức độ học ph&ugrave; hợp nhất. Đ&acirc;y l&agrave; chương tr&igrave;nh đ&agrave;o tạo nền tảng để trở th&agrave;nh c&ocirc;ng d&acirc;n to&agrave;n cầu.</p>
            <h3><span style="font-size: 18px;"><strong>2. Chương tr&igrave;nh chuy&ecirc;n ng&agrave;nh:</strong></span></h3>
            <p>Học ph&iacute; của chương tr&igrave;nh chuy&ecirc;n ng&agrave;nh tại Swinburne Online l&agrave; <span style="color: #da2e2e;">466,6 triệu VNĐ</span> to&agrave;n kh&oacute;a học (tương đương 20.000 USD/một kho&aacute; học) 3 năm. Sinh vi&ecirc;n c&oacute; cơ hội gi&agrave;nh được học bổng cho to&agrave;n kh&oacute;a học trong c&aacute;c chương tr&igrave;nh thi tuyển v&agrave; x&eacute;t tuyển v&agrave;o học tại Swinburne Việt Nam.</p>
            <p style="text-align:center;"><img src="/assets/images/fee/fee_1.jpg" alt="" width="88%" height="auto" /></p>
            <h3><span style="font-size: 18px;"><strong>Ghi ch&uacute;:</strong></span></h3>
            <p>Học ph&iacute; ni&ecirc;m yết theo tiền Việt Nam (VNĐ) theo từng kho&aacute; học v&agrave; c&oacute; thể thay đổi kh&ocirc;ng qu&aacute; 10%/năm học t&ugrave;y theo điều kiện. Sau 3 năm hoạt động c&oacute; ưu đ&atilde;i về học ph&iacute;, kể từ kỳ nhập học th&aacute;ng 9 năm học 2022, mức học ph&iacute; dự kiến của Swinburne sẽ l&agrave; 512 triệu VND, tương đương 22.000 USD/to&agrave;n kh&oacute;a học)</p>
            <p><img style="display: block; margin-left: auto; margin-right: auto; margin-top: 30px; padding-bottom: 70px;" src="/assets/images/fee/fee_2.jpg" alt="" width="65.8%" /></p>
            ']
        );
    }

    public function insertQuestions(){
        Post::insert([
            [
                'title' => 'Tôi có cần phải mua tài liệu học tập không?', 'slug' => 'toi-co-can-phai-mua-tai-lieu-hoc-tap-khong' ,'type' => 'faqs', 'status' => 1, 'thumbnail' => '/assets/images/questions/faqs.jpg', 
                'content' => 'Đối với sinh viên Swinburne Online, hầu hết các tài liệu học tập của các bạn sẽ được Swinburne Online mua bản quyền và cung cấp hoàn toàn miễn phí. Tuy nhiên, trong một số trường hợp, bạn sẽ được thông báo qua email sinh viên rằng bạn sẽ cần phải mua phần mềm cụ thể nào đó hoặc eTexts. Ngoài ra, bạn sẽ không cần phải mua thêm bất kỳ vật liệu nào nữa.'
            ], 

            [
                'title' => 'Tôi nên bắt đầu với những tín chỉ nào?', 'slug' => 'toi-nen-bat-dau-voi-nhung-tin-chi-nao' ,'type' => 'faqs', 'status' => 1, 'thumbnail' => '/assets/images/questions/faqs.jpg',
                'content' => 'Đối với sinh viên Swinburne Online, hầu hết các tài liệu học tập của các bạn sẽ được Swinburne Online mua bản quyền và cung cấp hoàn toàn miễn phí. Tuy nhiên, trong một số trường hợp, bạn sẽ được thông báo qua email sinh viên rằng bạn sẽ cần phải mua phần mềm cụ thể nào đó hoặc eTexts. Ngoài ra, bạn sẽ không cần phải mua thêm bất kỳ vật liệu nào nữa.'
            ], 

            [
                'title' => 'Tôi có cần phải đăng nhập để học vào những thời gian cụ thể không?', 'slug' => 'toi-co-can-phai-dang-nhap-de-hoc-vao-nhung-thoi-gian-cu-the-khong' ,'type' => 'faqs', 'status' => 1, 'thumbnail' => '/assets/images/questions/faqs.jpg',
                'content' => 'Đối với sinh viên Swinburne Online, hầu hết các tài liệu học tập của các bạn sẽ được Swinburne Online mua bản quyền và cung cấp hoàn toàn miễn phí. Tuy nhiên, trong một số trường hợp, bạn sẽ được thông báo qua email sinh viên rằng bạn sẽ cần phải mua phần mềm cụ thể nào đó hoặc eTexts. Ngoài ra, bạn sẽ không cần phải mua thêm bất kỳ vật liệu nào nữa.'
            ]
        ]);
    }

    protected function createAUnitPost($title, $content, $unit_code, $more_info, $duration = '1 Teaching Period', $contact_hours = 'Recommended 10 hours of study per week') {
        factory(Post::class)->state('units')->create([
            'title' => $title,
            'content' => $content,
        ])->postMetas()->createMany([
            [
                'key'   => 'unit_code',
                'value' => $unit_code,
            ],
            [
                'key' => 'duration',
                'value' => $duration,
            ],
            [
                'key' => 'contact_hours',
                'value' => $contact_hours,
            ],
            [
                'key'   => 'more_information_link',
                'value' => $more_info
            ]
        ]);
    }
}
