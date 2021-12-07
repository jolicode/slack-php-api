<?php

return [
    'openapi-file' => __DIR__ . '/resources/slack-openapi-patched.json',
    'namespace' => 'JoliCode\Slack\Api',
    'directory' => __DIR__ . '/generated/',
    'reference' => true,
    'strict' => false,
    'clean-generated' => true,
    'use-fixer' => true,
    'fixer-config-file' => __DIR__ . '/.php-cs-fixer.php',
];
