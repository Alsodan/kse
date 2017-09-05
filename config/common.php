<?php
/*
 * This is global configuration file for common (between web and console) configuration
 */

use yii\helpers\ArrayHelper;

//Merge local and global params
$params = ArrayHelper::merge(
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);
 
return [
    'basePath' => dirname(__DIR__),
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'bootstrap' => ['log'],
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'charset' => 'utf8',
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
                'enablePrettyUrl' => true,
                'showScriptName' => false,
                'rules' => [
                    '<_controller:[\w\-]+>/<id:\d+>' => '<_controller>/view',
                    '<_controller:[\w\-]+>' => '<_controller>/index',
                    '<_controller:[\w\-]+>/<_action:[\w\-]+>/<id:\d+>' => '<_controller>/<_action>',
                ],
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
        ],
        'cache' => [
            'class' => 'yii\caching\DummyCache',
        ],
        'log' => [
            'class' => 'yii\log\Dispatcher',
        ],
    ],
    'params' => $params,
];