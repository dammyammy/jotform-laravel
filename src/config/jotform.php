<?php

return [

    'api_version' => 'v1',

    'api_key' => env('JOTFORM_API_KEY', ''),

    'debug_mode' => env('JOTFORM_DEBUG_MODE', false),

    'output_type' => env('JOTFORM_OUTPUT_TYPE', 'json'),
];
