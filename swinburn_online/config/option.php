<?php
return [
    'cache'           => [
        'enabled' => false,
        'minutes' => 5,
    ],
    'model' => [
        'option' => App\Entities\Option::class,
    ],
    'auth_middleware' => [
        'admin_view'   => [
            // [
            //     'middleware' => '',
            //     'except'     => [],
            // ],
        ],
        'admin_create' => [
            // [
            //     'middleware' => '',
            //     'except'     => [],
            // ],
        ],
        'admin_update' => [
            [
                'middleware' => 'jwt.auth',
                'except'     => [],
            ],
        ],

    ],
];
