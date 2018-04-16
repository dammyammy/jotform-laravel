<?php

return [

    'key' => env('JOTFORM_API_KEY', ''),

    'version' => 'v1',

    'region' => 'us',

    'debug' => env('JOTFORM_DEBUG_MODE', false),

    'output' => env('JOTFORM_OUTPUT_TYPE', 'json'),
];
