<?php

use App\Entities\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name' => 'Industry Link',
                'slug' => 'industry-link',
                'type' => 'events',
                'thumbnail' => '',
                'parent_id' => 0,
            ],
            [
                'name' => 'The Changmakers Series',
                'slug' => 'the-changmakers-series',
                'type' => 'events',
                'thumbnail' => '',
                'parent_id' => 0,
            ],
            [
                'name' => 'Nghệ thuật và nhân văn',
                'slug' => 'nghe-thuat-va-nhan-van',
                'type' => 'events',
                'thumbnail' => '',
                'parent_id' => 0,
            ]
        ]);

        Category::insert([
            [
                'name' => 'Cuộc thi quốc tế',
                'slug' => 'cuoc-thi-quoc-te',
                'type' => 'posts',
                'thumbnail' => '',
                'is_hot'    => 0,
            ],
            [
                'name' => 'Tin tức hằng ngày',
                'slug' => 'tin-tuc-hang-ngay',
                'type' => 'posts',
                'thumbnail' => '',
                'is_hot'    => 0,
            ],
            [
                'name' => 'Ngành Công nghệ thông tin',
                'slug' => 'tin-tuc-nganh-cong-nghe-thong-tin',
                'type' => 'posts',
                'thumbnail' => '',
                'is_hot'    => 0,
            ],
            [
                'name' => 'Hoạt động sinh viên',
                'slug' => 'hoat-dong-sinh-vien',
                'type' => 'posts',
                'thumbnail' => '',
                'is_hot'    => 0,
            ],
            [
                'name' => 'Trải nghiệm trực tuyến',
                'slug' => 'trai-nghiem-truc-tuyen',
                'type' => 'posts',
                'thumbnail' => '',
                'is_hot'    => 1,
            ],
            [
                'name' => 'Hỗ trợ học sinh',
                'slug' => 'ho-tro-hoc-sinh',
                'type' => 'posts',
                'thumbnail' => '',
                'is_hot'    => 1,
            ],
            [
                'name' => 'Những mẹo học hiệu quả',
                'slug' => 'nhung-meo-hoc-hieu-qua',
                'type' => 'posts',
                'thumbnail' => '',
                'is_hot'    => 1,
            ],
        ]);

        Category::insert(
            [
                [
                    'name' => 'Covid 19',
                    'slug' => 'covid-19',
                    'type' => 'faqs',
                    'thumbnail' => '/assets/images/questions/question_1.jpg',
                    'is_hot'    => rand(0, 1),
                ],
                [
                    'name' => 'Chương trình đào tạo',
                    'slug' => 'chuong-trinh-dao-tao',
                    'type' => 'faqs',
                    'thumbnail' => '/assets/images/questions/question_2.jpg',
                    'is_hot'    => rand(0, 1),
                ],
                [
                    'name' => 'Dịch vụ sinh viên',
                    'slug' => 'dich-vu-sinh-vien',
                    'type' => 'faqs',
                    'thumbnail' => '/assets/images/questions/question_3.jpg',
                    'is_hot'    => rand(0, 1),
                ],
                [
                    'name' => 'Đăng ký và Ghi danh',
                    'slug' => 'dang-ky-va-ghi-danh',
                    'type' => 'faqs',
                    'thumbnail' => '/assets/images/questions/question_4.jpg',
                    'is_hot'    => rand(0, 1),
                ],
                [
                    'name' => 'Vị trí giáo dục',
                    'slug' => 'vi-tri-giao-duc',
                    'type' => 'faqs',
                    'thumbnail' => '/assets/images/questions/question_5.jpg',
                    'is_hot'    => rand(0, 1),
                ],
                [
                    'name' => 'Phí và hỗ trợ tài chính',
                    'slug' => 'phi-va-ho-tro-tai-chinh',
                    'type' => 'faqs',
                    'thumbnail' => '/assets/images/questions/question_6.jpg',
                    'is_hot'    => rand(0, 1),
                ],
                [
                    'name' => 'Tốt nghiệp và Nghề nghiệp',
                    'slug' => 'tot-nghiep-va-nghe-nghiep',
                    'type' => 'faqs',
                    'thumbnail' => '/assets/images/questions/question_7.jpg',
                    'is_hot'    => rand(0, 1),
                ],
                [
                    'name' => 'Trình độ học vấn',
                    'slug' => 'trinh-do-hoc-van',
                    'type' => 'faqs',
                    'thumbnail' => '/assets/images/questions/question_8.jpg',
                    'is_hot'    => rand(0, 1),
                ],
                [
                    'name' => 'Khoá học của tôi',
                    'slug' => 'khoa-hoc-cua-toi',
                    'type' => 'faqs',
                    'thumbnail' => '/assets/images/questions/question_9.jpg',
                    'is_hot'    => rand(0, 1),
                ],
                [
                    'name' => 'Học trực tuyến',
                    'slug' => 'hoc-truc-tuyen',
                    'type' => 'faqs',
                    'thumbnail' => '/assets/images/questions/question_10.jpg',
                    'is_hot'    => rand(0, 1),
                ],
                [
                    'name' => 'Hỗ trợ',
                    'slug' => 'ho-tro',
                    'type' => 'faqs',
                    'thumbnail' => '/assets/images/questions/question_11.jpg',
                    'is_hot'    => rand(0, 1),
                ],
                [
                    'name' => 'Đại học công nghệ Swinburne',
                    'slug' => 'dai-hoc-cong-nghe-swinburne',
                    'type' => 'faqs',
                    'thumbnail' => '/assets/images/questions/question_12.jpg',
                    'is_hot'    => rand(0, 1),
                ],
                [
                    'name' => 'Ngành Công nghệ',
                    'slug' => 'nganh-cong-nghe-2',
                    'type' => 'faqs',
                    'thumbnail' => '/assets/images/questions/question_13.jpg',
                    'is_hot'    => rand(0, 1),
                ]
            ]
        );
    }
}
