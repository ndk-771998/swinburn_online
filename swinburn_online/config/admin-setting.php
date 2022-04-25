<?php

return [
    'sections' => [
        [
            "label" => "Thiết lập chung",
            "order" => 1,
            "widgets" => [
                [
                    "label" => "Phân quyền",
                    "description" => "Quản lý phân công chức năng công việc cho phòng ban hoặc từng cá nhân cụ thể trong hệ thống.",
                    "order" => 1,
                    "url" => "/admin/system/roles",
                    "icon" => "/assets/images/icon/Mask Group 257.svg",
                ],
                [
                    "label" => "Menu",
                    "description" => "Thêm mới, chỉnh sửa, xóa và sắp xếp menu hiển thị trên website của bạn theo trang, theo danh mục.",
                    "order" => 2,
                    "url" => "/admin/menus",
                    "icon" => "/assets/images/icon/Mask Group 267.svg",
                ],
                // [
                //     "label" => "Trang",
                //     "description" => "Quản lý những tài khoản có thể truy cập vào trang quản trị để chỉnh sửa dữ liệu được hiển thị trên website.",
                //     "order" => 1,
                //     "url" => "/admin/pages",
                //     "icon" => "/assets/images/icon/Mask Group 258.svg",
                // ],
                [
                    "label" => "Ngôn ngữ",
                    "description" => "Thêm mới ngôn ngữ để phù hợp với người dùng của từng quốc gia và khu vực khác nhau khi truy cập website.",
                    "order" => 1,
                    "url" => "/admin/languages",
                    "icon" => "/assets/images/icon/Mask Group 260.svg",
                ],
                [
                    "label" => "Thông tin liên hệ",
                    "description" => "Tổng hợp thông tin người cần liên hệ trong các biểu mẫu trên website.",
                    "order" => 1,
                    "url" => "/admin/contacts/configuration",
                    "icon" => "/assets/images/icon/Mask Group 259.svg",
                ],
                [
                    "label" => "Thư viện",
                    "description" => "Danh sách hình ảnh đã được tải lên website.",
                    "order" => 1,
                    "url" => "/admin/media",
                    "icon" => "/assets/images/icon/Mask Group 261.svg",
                ],
            ],
        ],
        [
            "label" => "Bài viết",
            "order" => 2,
            "widgets" => [
                [
                    "label" => "Cấu hình bài viết",
                    "description" => "Quản lý nội dung các trường thông tin bài viết khác được hiển thị trên các trang riêng biệt trong website của bạn.",
                    "order" => 1,
                    "url" => "/admin/posts/schema-posts",
                    "icon" => "assets/images/icon/Mask Group 262.svg",
                ],
            ],
        ],
        [
            "label" => "Liên lạc khách hàng",
            "order" => 4,
            "widgets" => [
                [
                    "label" => "Người dùng",
                    "description" => "Quản lý những tài khoản có thể truy cập vào trang quản trị để chỉnh sửa dữ liệu được hiển thị trên website.",
                    "order" => 1,
                    "url" => "/admin/system/users",
                    "icon" => "/assets/images/icon/Mask Group 269.svg",
                ],
                [
                    "label" => "Cấu hình Mail",
                    "description" => "Khởi tạo, chỉnh sửa hòm thư doanh nghiệp để liên hệ với người dùng kết nối trên website của bạn.",
                    "order" => 1,
                    "url" => "/admin/system/config-mail",
                    "icon" => "/assets/images/icon/Mask Group 263.svg",
                ],
            ],
        ],
        [
            "label" => "Nâng cao",
            "order" => 4,
            "widgets" => [
                [
                    "label" => "Quản lý mã nhúng",
                    "description" => "Tích hợp các công cụ chat, theo dõi, chuyển đổi, thống kê của bên thứ 3 vào website của bạn.",
                    "order" => 1,
                    "url" => "/admin/system/script-manager",
                    "icon" => "/assets/images/icon/Mask Group 265.svg",
                ],
                [
                    "label" => "Cấu hình nhanh",
                    "description" => "Chỉnh sửa các thông tin nhanh được hiển thị trên website.",
                    "order" => 1,
                    "url" => "/admin/system/configuration",
                    "icon" => "/assets/images/icon/Mask Group 262.svg",
                ],
            ],
        ],
    ],
];