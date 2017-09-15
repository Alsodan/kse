<?php

namespace app\modules\admin\assets;

use yii\web\AssetBundle;

class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'web/css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'app\modules\admin\assets\CorrectThemeAsset',
        'yiister\gentelella\assets\ExtensionAsset',
    ];
}