<?php

return [ 
    'auth_provider_model' => 'App\\Models\\User', 
    'permissions' => [
        'separator' => ':',
        'case' => 'pascal',
        'generate' => true,
    ],
];

?>