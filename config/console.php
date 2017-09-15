<?php
/*
 * This is global configuration file for console configuration
 */

Yii::setAlias('@tests', dirname(__DIR__) . '/tests');

$config = [
    'id' => 'kse-console',
    'bootstrap' => ['gii'],
    'controllerNamespace' => 'app\commands',
    'modules' => [
        'gii' => 'yii\gii\Module',
        'user' =>  Da\User\Module::class,
    ],
];

return $config;
