<?php

use Illuminate\Support\Str;

return [

    'paths' => ['api/*'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['http://localhost:4200', 'https://angular-blog.pages.dev'],

    'allowed_headers' => ['*'],

    'supports_credentials' => true,

];
