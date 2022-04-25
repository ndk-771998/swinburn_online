<?php

use Illuminate\Database\Seeder;
use App\Entities\ItemMenu;
use App\Entities\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->Menu_1_Position_1();
        $this->Menu_2_Position_1();
        $this->Menu_Footer_Position_1();
        $this->Menu_Footer_Position_2();
    }

    public function Menu_1_Position_1(){
        Menu::create([
            'name' => 'menu-1',
            'position' => 'position-1',
            'page' => 'header'
        ]);

        ItemMenu::insert([
            ['menu_id' => '1', 'label' => 'Về chúng tôi', 'link' => '', 'type' => 'menu-header-1', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'Các câu hỏi thường gặp', 'link' => '/faqs', 'type' => 'menu-header-1', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'Sinh viên Swinburne', 'link' => '', 'type' => 'menu-header-1', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'Các khoá học tại học xá', 'link' => 'https://swinburne-vn.edu.vn/hoc-khoa-hoc-cung-chung-toi/', 'type' => 'menu-header-1', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'Liên hệ', 'link' => '/contact-us', 'type' => 'menu-header-1', 'parent_id' => 0],
        ]);

        ItemMenu::insert([
            ['menu_id' => '1', 'label' => 'Trường đại học Swinburne', 'link' => '/aboutus/gioi-thieu-ve-swinburne-online', 'type' => 'menu-sub-header-1', 'parent_id' => 1],
            ['menu_id' => '1', 'label' => 'Swinburne Việt Nam', 'link' => '/aboutus/swinburne-viet-nam', 'type' => 'menu-sub-header-1', 'parent_id' => 1],
            ['menu_id' => '1', 'label' => 'Đại học Công nghệ Swinburne', 'link' => '/aboutus/dai-hoc-cong-nghe-swinburne', 'type' => 'menu-sub-header-1', 'parent_id' => 3],
            ['menu_id' => '1', 'label' => 'Hỗ trợ việc học của bạn', 'link' => '/services', 'type' => 'menu-sub-header-1', 'parent_id' => 3],
        ]);  

    }

    public function Menu_2_Position_1(){
        Menu::create([
            'name' => 'menu-2',
            'position' => 'position-2',
            'page' => 'header'
        ]);
            // INSERT MENU LEVEL 1
        ItemMenu::insert([
            ['menu_id' => '2', 'label' => 'Khoá học trực tuyến & Bằng cấp', 'link' => '', 'type' => 'menu-header-2', 'parent_id' => 0],
            ['menu_id' => '2', 'label' => 'Hành trình học', 'link' => '/study-journey', 'type' => 'menu-header-2', 'parent_id' => 0],
            ['menu_id' => '2', 'label' => 'Học tập linh hoạt', 'link' => '/flexible-study', 'type' => 'menu-header-2', 'parent_id' => 0],
            ['menu_id' => '2', 'label' => 'Dịch vụ hỗ trợ', 'link' => '/support', 'type' => 'menu-header-2', 'parent_id' => 0],
            ['menu_id' => '2', 'label' => 'Học phí', 'link' => '/pages/hoc-phi', 'type' => 'menu-header-2', 'parent_id' => 0],
            ['menu_id' => '2', 'label' => 'Tin tức', 'link' => '/posts', 'type' => 'menu-header-2', 'parent_id' => 0],
            ['menu_id' => '2', 'label' => 'Sự kiện', 'link' => '/events', 'type' => 'menu-header-2', 'parent_id' => 0],
        ]);
            // INSERT MENU LEVEL 2
        ItemMenu::insert([
            ['menu_id' => '2', 'label' => 'Công nghệ thông tin', 'link' => '#', 'type' => 'menu-sub-header-2', 'parent_id' => 10],
        ]); 
        
            // INSERT MENU LEVEL 3
        ItemMenu::insert([
            ['menu_id' => '2', 'label' => 'Cử nhân', 'link' => '#', 'type' => 'menu-sub-header-2', 'parent_id' => 17],
        ]);   

            // INSERT MENU LEVEL 4
        ItemMenu::insert([
            ['menu_id' => '2', 'label' => 'Cử nhân công nghệ thông tin', 'link' => '/onlinecourses/nganh-cong-nghe', 'type' => 'menu-sub-header-2', 'parent_id' => 18],
        ]);  
    }

    public function Menu_Footer_Position_1(){
        Menu::create([
            'name' => 'footer-1',
            'position' => 'position-1',
            'page' => 'footer'
        ]);

        ItemMenu::insert([
            ['menu_id' => '3', 'label' => 'Các khoá học trực tuyến', 'link' => '', 'type' => 'menu-footer-1', 'parent_id' => 0],
            ['menu_id' => '3', 'label' => 'Hành trình học', 'link' => '/study-journey', 'type' => 'menu-footer-1', 'parent_id' => 0],
            ['menu_id' => '3', 'label' => 'Dịch vụ hỗ trợ', 'link' => '/support', 'type' => 'menu-footer-1', 'parent_id' => 0],
            ['menu_id' => '3', 'label' => 'Học phí', 'link' => '/pages/hoc-phi', 'type' => 'menu-footer-1', 'parent_id' => 0],
            ['menu_id' => '3', 'label' => 'Sự kiện', 'link' => '/events', 'type' => 'menu-footer-1', 'parent_id' => 0],
        ]);
    }

    public function Menu_Footer_Position_2(){
        Menu::create([
            'name' => 'footer-2',
            'position' => 'position-2',
            'page' => 'footer'
        ]);

        ItemMenu::insert([
            ['menu_id' => '4', 'label' => 'Về chúng tôi', 'link' => '/aboutus/gioi-thieu-ve-swinburne-online', 'type' => 'menu-footer-2', 'parent_id' => 0],
            ['menu_id' => '4', 'label' => 'Những câu hỏi thường gặp', 'link' => '/faqs', 'type' => 'menu-footer-2', 'parent_id' => 0],
            ['menu_id' => '4', 'label' => 'Liên hệ', 'link' => '/contact-us', 'type' => 'menu-footer-2', 'parent_id' => 0],
            ['menu_id' => '4', 'label' => 'Hợp tác', 'link' => '#', 'type' => 'menu-footer-2', 'parent_id' => 0],
        ]);

    }

}
