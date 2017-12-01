<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';
    public $baseUrl = '@web/frontend/assets';
    public $css = [
        'css/site.css',
        'datatables/dataTables.bootstrap.css',
    ];
    public $js = [
         'datatables/dataTables.bootstrap.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'dmstr\web\AdminLteAsset',
    ];
}
