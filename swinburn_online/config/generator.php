<?php

return [

    'disk'        => 'root',

    'module'      => [
        'root' => 'modules',
    ],

    'scaffolding' => base_path() . '/modules/vc_laravel_module_generator/scaffolding',

    'stubs'       => [
        'command'              => base_path() . '/modules/vc_laravel_module_generator/stubs/Command.stub',
        'entity'               => base_path() . '/modules/vc_laravel_module_generator/stubs/Entity.stub',
        'controller'           => base_path() . '/modules/vc_laravel_module_generator/stubs/Controller.stub',
        'repository_interface' => base_path() . '/modules/vc_laravel_module_generator/stubs/Repository.stub',
        'repository_eloquent'  => base_path() . '/modules/vc_laravel_module_generator/stubs/RepositoryEloquent.stub',
        'validator'            => base_path() . '/modules/vc_laravel_module_generator/stubs/Validator.stub',
        'test'                 => base_path() . '/modules/vc_laravel_module_generator/stubs/Test.stub',
        'provider'             => base_path() . '/modules/vc_laravel_module_generator/stubs/ServiceProvider.stub',
        'transformer'          => base_path() . '/modules/vc_laravel_module_generator/stubs/Transformer.stub',
        'event'                => base_path() . '/modules/vc_laravel_module_generator/stubs/Event.stub',
        'listener'             => base_path() . '/modules/vc_laravel_module_generator/stubs/Listener.stub',
        'notification'         => base_path() . '/modules/vc_laravel_module_generator/stubs/Notification.stub',
        'migration'            => base_path() . '/modules/vc_laravel_module_generator/stubs/Migration.stub',
    ],

];
