<?php

return [

    // upload route configration
    'route' => [

        'prefix' => '',

        'middleware'    => ['web'],

    ],

    // upload file configration
    'upload'  => [

        'enable' => true,

        'disk' => 'public',

        'directory'  => [
            'image'  => 'images',
            'file'   => 'files',
        ],

        // file size, unit: M
        'limit' => [
            'image' => 10,
            'file' => 10,
        ]
    ],
];