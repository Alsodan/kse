<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace app\modules\admin\assets;

use yii\web\AssetBundle;

class CorrectThemeAsset extends AssetBundle
{
    public $sourcePath = '@bower/gentelella/';
    public $css = [
        'build/css/custom.css',
    ];
    public $js = [
        'src/js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'yiister\gentelella\assets\BootstrapProgressbar',
    ];
}
