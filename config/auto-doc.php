<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Documentation Route
    |--------------------------------------------------------------------------
    |
    | Route which will return documentation
    */

    'route' => '/',

    /*
    |--------------------------------------------------------------------------
    | Info block
    |--------------------------------------------------------------------------
    |
    | Information fields
    */

    'info' => [

        /*
        |--------------------------------------------------------------------------
        | Documentation Template
        |--------------------------------------------------------------------------
        |
        | You can use your custom documentation view
        */

        'description' => 'swagger-description',
        'version' => '0.0.0',
        'title' => 'Name of Your Application',
        'termsOfService' => '',
        'contact' => [
            'email' => 'your@email.com'
        ],
        'license' => [
            'name' => '',
            'url' => ''
        ]
    ],
    'swagger' => [
        'version' => '2.0'
    ],

    /*
    |--------------------------------------------------------------------------
    | Base API path
    |--------------------------------------------------------------------------
    |
    | Base path for API routes. If config is set, all routes which starts from
    | this value will be grouped.
    */

    'basePath' => '/',
    'schemes' => [],
    'definitions' => [],

    /*
    |--------------------------------------------------------------------------
    | Security Library
    |--------------------------------------------------------------------------
    |
    | Library name, which used to secure the project.
    | Available values: "jwt", "laravel", "null"
    */

    'security' => env('AUTO_DOK_SECURITY', null),
    'defaults' => [

        /*
        |--------------------------------------------------------------------------
        | Default descriptions of code statuses
        |--------------------------------------------------------------------------
        */

        'code-descriptions' => [
            '200' => 'Operation successfully done',
            '204' => 'Operation successfully done',
            '404' => 'This entity not found'
        ]
    ],

    'production_path' => env('LOCAL_DATA_COLLECTOR_PROD_PATH')
];
