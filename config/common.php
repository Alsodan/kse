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
    'layout' => '@app/common/views/layouts/main',
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
                    '' => 'site/default/index',
                    'contact' => 'site/default/contact',
                    '<_action:error>' => 'site/default/<_action>',
                    '<_action:(login|logout)>' => 'site/default/<_action>',

                    '<_module:[\w\-]+>' => '<_module>/default/index',
                    '<_module:[\w\-]+>/<_controller:[\w\-]+>' => '<_module>/<_controller>/index',
                    '<_module:[\w\-]+>/<_controller:[\w\-]+>/<id:\d+>' => '<_module>/<_controller>/view',
                    '<_module:[\w\-]+>/<_controller:[\w\-]+>/<_action:[\w\-]+>/<id:\d+>' => '<_module>/<_controller>/<_action>',
                ],
        ],
        'authManager' => [
            'class' => 'Da\User\Component\AuthDbManagerComponent',
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
    'modules' => [
        'site' => [
            'class' => 'app\modules\site\Module',
            'layout' => 'main',
        ],
        'admin' => [
            'class' => 'app\modules\admin\Module',
            'layout' => 'main',
        ],
        'user' => [
            'class' => Da\User\Module::class,
            //'layout' => '@app/modules/admin/layouts/main',
            //'admins' => ['admin'],
        ],
    ],
    'params' => $params,
];