<?php

return [
    'sections' => [
        [
            "label" => "Bài viết",
            "order" => 2,
            "widgets" => [
                [
                    "label" => "Tạo mới Bài viết",
                    "type" => "shortcut",
                    "order" => 1,
                    "url" => "/admin/posts/create",
                    "color" => "#eca03c",
                    "icon" => "/assets/icons/icon-white/addpage.svg",
                ],
                [
                    "label" => "Danh sách Bài viết",
                    "type" => "shortcut",
                    "order" => 1,
                    "url" => "/admin/posts",
                    "color" => "#eca03c",
                    "icon" => "/assets/icons/icon-white/addpage.svg",
                ],
            ],
        ],
        [
            "label" => "Thiết lập",
            "order" => 4,
            "widgets" => [
                [
                    "label" => "Cấu hình nhanh",
                    "type" => "shortcut",
                    "order" => 1,
                    "url" => "/admin/system/configuration",
                    "color" => "#00b894",
                    "icon" => "/assets/icons/icon-white/layer.svg",
                ],
                [
                    "label" => "Menu danh mục",
                    "type" => "shortcut",
                    "order" => 2,
                    "url" => "/admin/menus",
                    "color" => "#00b894",
                    "icon" => "/assets/icons/icon-white/menucategory.svg",
                ],
                [
                    "label" => "Thông tin liên hệ",
                    "type" => "shortcut",
                    "order" => 2,
                    "url" => "/admin/contacts/configuration",
                    "color" => "#00b894",
                    "icon" => "/assets/icons/icon-white/customer.svg",
                ],
            ],
        ],
    ],
];