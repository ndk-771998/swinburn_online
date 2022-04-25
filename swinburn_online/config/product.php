<?php

return [

    'namespace'       => env('PRODUCT_COMPONENT_NAMESPACE', 'product-management'),

    'models'          => [
        'product' => App\Entities\Product::class,
    ],

    'transformers'    => [
        'product' => VCComponent\Laravel\Product\Transformers\ProductTransformer::class,
    ],

    'viewModels'      => [
        'productList'   => VCComponent\Laravel\Product\ViewModels\ProductList\ProductListViewModel::class,
        'productDetail' => VCComponent\Laravel\Product\ViewModels\ProductDetail\ProductDetailViewModel::class,
    ],
    'auth_middleware' => [
        'admin'    => [
            [
                'middleware' => 'jwt.auth',
                'except'     => [],
            ]
        ],
        'frontend' => [
            // 'middleware' => '',
            // 'except'     => [],
        ],
    ],
    'cache'           => [
        'enabled' => false,
        'minutes' => 1,
    ],
];
