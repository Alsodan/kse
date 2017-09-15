<?php
/*
 * This is global configuration file for web configuration
 */

$config = [
    'id' => 'kse',
    'defaultRoute' => 'site/default/index',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
            'baseUrl'=> '',
        ],
        /*'user' => [
            'identityClass' => 'app\common\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['/login'],
        ],*/
        'assetManager' => [
            //Make a simlinks for assets, not copy
            'linkAssets' => true,
            //Add timestamps to resources
            'appendTimestamp' => true,
            'basePath' => '@webroot/assets/',
            'baseUrl' => '/web/assets/',
        ],
        'errorHandler' => [
            'errorAction' => 'site/default/error',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
        ],
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
