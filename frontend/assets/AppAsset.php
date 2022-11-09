<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap',
        'css/loopple.css',
    ];
    public $js = [
        'https://kit.fontawesome.com/42d5adcbca.js',
    ];
    public $depends = [
        'yii\bootstrap5\BootstrapAsset',
    ];
}

