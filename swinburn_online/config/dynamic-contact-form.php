<?php
return [
    'models' => [
        'contact_form_input' => App\Entities\ContactFormInput::class,
        'contact_form_input_validation' => App\Entities\ContactFormInputValidation::class,
    ],

    'auth_middleware' => [
        // 'admin'    => [
        //     [
        //         'middleware' => '',
        //         'except'     => [],
        //     ],
        // ],
        'frontend' => [
            [
                'middleware' => 'translate',
                'except' => [],
            ],
        ],
    ],
    'page' => [
        'contact' => [
            'label' => 'Liên hệ',
            'position' => [
                'position-1' => 'Vị trí chính',
            ],
        ],
        'career' => [
            'label' => 'Đăng ký',
            'position' => [
                'position-1' => 'Default',
            ],
        ],
    ],
];
