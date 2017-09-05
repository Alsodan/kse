<?php
/*
 * This is local configuration file for common (between web and console) configuration
 */

return [
    'components' => [
        'db' => [
            'dsn' => 'mysql:host=localhost;dbname=',
            'username' => '',
            'password' => '',
        ],
        'mailer' => [
            'useFileTransport' => true,
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
