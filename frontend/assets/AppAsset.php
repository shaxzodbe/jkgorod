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
        'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700',
        'https://demos.creative-tim.com/soft-ui-design-system/assets/css/nucleo-icons.css',
        'https://demos.creative-tim.com/soft-ui-design-system/assets/css/nucleo-svg.css',
        'css/theme.css',
        'css/loopple.css',
    ];
    public $js = [
        'https://loopple.s3.eu-west-3.amazonaws.com/soft-ui-design-system/js/core/bootstrap.min.js',
<<<<<<< HEAD
        'https://kit.fontawesome.com/42d5adcbca.js',
=======
>>>>>>> 59ea0495131e6a4a90e3da7e838037e08155b15b
//        'https://demos.creative-tim.com/soft-ui-design-system/assets/js/soft-design-system.min.js?v=1.0.5',
        'https://demos.creative-tim.com/soft-ui-design-system-pro/assets/js/plugins/countup.min.js',
        'https://demos.creative-tim.com/soft-ui-design-system-pro/assets/js/plugins/flatpickr.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
