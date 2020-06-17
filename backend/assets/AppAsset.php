<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'adminlte/fontawesome-free/css/_all.min.css',
        'adminlte/dist/css/adminlte.min.css',
    ];
    public $js = [
        'adminlte/dist/js/adminlte.js',
        'adminlte/dist/js/demo.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
    ];
}
