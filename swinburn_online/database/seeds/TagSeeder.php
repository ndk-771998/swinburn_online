<?php

use Illuminate\Database\Seeder;
use App\Entities\Tag;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        $this->insertTags();
    }

    public function insertTags(){
        Tag::insert([
            ['id' => '', 'name' => 'Bootcamps', 'slug' => 'bootcamps', 'status' => '1'],

            ['id' => '', 'name' => 'Cựu sinh viên', 'slug' => 'cuu-sinh-vien', 'status' => '1'],

            ['id' => '', 'name' => 'Kinh doanh', 'slug' => 'kinh-doanh', 'status' => '1'],

            ['id' => '', 'name' => 'Giáo dục', 'slug' => 'giao-duc', 'status' => '1'],

            ['id' => '', 'name' => 'Lời khuyên nghề nghiệp', 'slug' => 'loi-khuyen-nghe-nghiep', 'status' => '1'],

            ['id' => '', 'name' => 'Thay đổi nghề nghiệp', 'slug' => 'thay-doi-nghe-nghiep', 'status' => '1'],

            ['id' => '', 'name' => 'Thiết kế', 'slug' => 'thiet-ke', 'status' => '1'],

            ['id' => '', 'name' => 'eLA', 'slug' => 'ela', 'status' => '1'],

            ['id' => '', 'name' => 'Kỳ thi', 'slug' => 'ky-thi', 'status' => '1'],

            ['id' => '', 'name' => 'Lời khuyên chuyên gia', 'slug' => 'loi-khuyen-chuyen-gia', 'status' => '1'],

            ['id' => '', 'name' => 'An ninh', 'slug' => 'an-ninh', 'status' => '1'],

            ['id' => '', 'name' => 'Video', 'slug' => 'video', 'status' => '1'],

            ['id' => '', 'name' => 'Mẹo học', 'slug' => 'meo-hoc', 'status' => '1'],

            ['id' => '', 'name' => 'Hỗ trợ sinh viên', 'slug' => 'ho-tro-sinh-vien', 'status' => '1'],

            ['id' => '', 'name' => 'Đại học', 'slug' => 'dai-hoc', 'status' => '1'],

            ['id' => '', 'name' => 'Bài giảng', 'slug' => 'bai-giang', 'status' => '1']
        ]);
    }
}

