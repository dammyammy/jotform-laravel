<?php

return [

    'version' => 'v1',

    'region' => 'us',

    'key' => env('JOTFORM_API_KEY', ''),

    'debug' => env('JOTFORM_DEBUG_MODE', false),

    'output' => env('JOTFORM_OUTPUT_TYPE', 'json'),

    'folders' => [],

    'forms' => [
        // 'quote' => [
        //     'id' => 1234567890,
        // ]
    ]
];
