<?php

return [

    'namespace'       => env('POST_COMPONENT_NAMESPACE', 'post-management'),

    'models'          => [
        'post' => App\Entities\Post::class,
        'draf' => VCComponent\Laravel\Post\Entities\Draftable::class,
    ],

    'transformers'    => [
        'post' => VCComponent\Laravel\Post\Transformers\PostTransformer::class,
        'draf' => VCComponent\Laravel\Post\Transformers\DraftableTransformer::class,
    ],

    'viewModels'      => [
        'postList'   => VCComponent\Laravel\Post\ViewModels\PostList\PostListViewModel::class,
        'postDetail' => VCComponent\Laravel\Post\ViewModels\PostDetail\PostDetailViewModel::class,
        'draf' => VCComponent\Laravel\Post\ViewModels\DrafDetail\DrafDetailViewModel::class,
    ],

    'auth_middleware' => [
        'admin'    => [
            'middleware' => 'jwt.auth',
            'except'     => [],
        ],
        'frontend' => [
            'middleware' => '',
            'except'     => [],
        ],
    ],

];
