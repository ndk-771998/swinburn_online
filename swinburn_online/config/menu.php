<?php

return [
    'cache' => [
        'enabled' => true,
        'minutes' => 30,
    ],

    'auth_middleware' => [
        'admin' => [
            [
                'middleware' => 'jwt.auth',
                'except'     => [],
            ],
        ],
    ],
    'page' => [
        'header' => [
            'label' => 'header',
            'position' => [
                'position-1' => 'Menu trên',
                'position-2' => 'Menu chính',
            ],
        ],
        'footer' => [
            'label' => 'footer',
            'position' => [
                'position-1' => 'Menu trái',
                'position-2' => 'Menu phải',
            ],
        ],
    ],
];
