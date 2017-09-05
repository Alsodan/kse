<?php
/*
 * This is local configuration file for web configuration
 */

$config = [
    'components' => [
        'request' => [
            'cookieValidationKey' => '',
        ],
        //Make a simlinks for assets, not copy
        'assetManager' => [
            'linkAssets' => true,
        ],
        //Log events into several files, belongs events level
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error'],
                    'logFile' => '@app/runtime/logs/web-error.log'
                ],
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['warning'],
                    'logFile' => '@app/runtime/logs/web-warning.log'
                ],
            ],
        ],
    ],
];

return $config;
