<?php

return [
    [
        "title" => "Tổng quan",
        "icon" => ["icon" => "dashboard", "pack" => "social-networks"],
        "modules" => "dashboard",
        "link" => '/admin/dashboard'
    ],
    // [
    //     "title" => 'Đơn hàng',
    //     "icon" => ["icon" => 'order', "pack" => 'social-networks'],
    //     "modules" => 'order',
    //     "children" => [
    //         [
    //             "title" => 'Danh sách',
    //             "link" => '/admin/order'
    //         ],
    //         [
    //             "title" => 'Tạo mới',
    //             "link" => '/admin/order/create'
    //         ],
    //         [
    //             "title" => 'Đơn hoàn trả',
    //             "link" => '/admin/order/unit-pay'
    //         ],
    //         [
    //             "title" => 'Đơn khiếu nại',
    //             "link" => '/admin/order/unit-complain'
    //         ]
    //     ]
    // ],
    // [
    //     "title" => 'Sản phẩm',
    //     "icon" => ["icon" => 'product', "pack" => 'social-networks'],
    //     "modules" => 'product',
    //     "children" => [
    //         [
    //             "title" => 'Danh sách',
    //             "link" => '/admin/products'
    //         ],
    //         [
    //             "title" => 'Tạo mới',
    //             "link" => '/admin/products/create'
    //         ],
    //         // [
    //         //     "title" => 'Cấu hình',
    //         //     "link" => '/admin/products/config-meta'
    //         // ],
    //         [
    //             "title" => 'Danh mục',
    //             "link" => '/admin/products/categories'
    //         ]
    //     ]
    // ],
    [
        "title" => 'Bài viết',
        "icon" => ["icon" => 'post', "pack" => 'social-networks'],
        "modules" => 'post',
        "children" => [
            [
                "title" => 'Danh sách',
                "link" => '/admin/posts'
            ],
            [
                "title" => 'Tạo mới',
                "link" => '/admin/posts/create'
            ],
            [
                "title" => 'Danh mục',
                "link" => '/admin/posts/categories'
            ],
            [
                "title" => 'Cấu hình',
                "link" => '/admin/posts/schema-posts'
            ]
        ]
    ],
    [
        "title" => 'Bài viết khác',
        "icon" => ["icon" => 'post', "pack" => 'social-networks'],
        "modules" => 'other_post',
        "children" => [
            [
                "title" => 'Danh sách',
                "link" => '/admin/post-types'
            ],
            // [
            //     "title" => 'Tạo mới',
            //     "link" => '/admin/post-types/create'
            // ],
            // [
            //     "title" => 'Danh mục',
            //     "link" => '/admin/post-types/categories'
            // ],
            // [
            //     "title" => 'Cấu hình',
            //     "link" => '/admin/posts/schema-posts'
            // ]
        ]
    ],
    // [
    //     "title" => 'Khách hàng',
    //     "icon" => ["icon" => 'customer', "pack" => 'social-networks'],
    //     "modules" => 'customer',
    //     "children" => [
    //         [
    //             "title" => 'Danh sách',
    //             "link" => '/admin/customer'
    //         ],
    //         [
    //             "title" => 'Hộp thư đến',
    //             "link" => '/admin/customer/inbox'
    //         ],
    //         [
    //             "title" => 'Bình Luận',
    //             "link" => '/admin/customer/comment'
    //         ],
    //         [
    //             "title" => 'Đánh giá',
    //             "link" => '/admin/customer/review'
    //         ],
    //         [
    //             "title" => 'Tạo mới',
    //             "link" => '/admin/customer/create'
    //         ]
    //     ]
    // ],
    // [
    //     "title" => 'Thống kê',
    //     "icon" => ["icon" => 'chart', "pack" => 'social-networks'],
    //     "modules" => 'statistical',
    //     "children" => [
    //         [
    //             "title" => 'Tổng quan',
    //             "link" => '/admin/statistical'
    //         ],
    //         [
    //             "title" => 'Báo cáo',
    //             "link" => '/admin/statistical/report'
    //         ]
    //     ]
    // ],
    // [
    //     "title" => 'Tối ưu tìm kiếm',
    //     "icon" => ["icon" => 'optimal', "pack" => 'social-networks'],
    //     "modules" => 'search-optimization',
    //     "link" => '/admin/search-optimization'
    // ],
    [
        "title" => 'Thiết lập',
        "icon" => ["icon" => 'setting', "pack" => 'social-networks'],
        "badge" => [
            "text" => '!',
            "status" => 'danger',
        ],
        "modules" => 'setup',
        "link" => '/admin/setting'
    ],
];
