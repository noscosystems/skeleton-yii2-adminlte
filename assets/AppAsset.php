<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/twbs-addons.css',
        // 'third/bootstrap/css/bootstrap.min.css',
        'third/bootstrap-material-design-master/dist/css/ripples.min.css',
        'third/bootstrap-material-design-master/dist/css/roboto.min.css',
        'third/AdminLTE-2.3.0/dist/css/AdminLTE.min.css',
        'third/AdminLTE-2.3.0/dist/css/skins/_all-skins.min.css',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',
        'third/AdminLTE-2.3.0/plugins/jvectormap/jquery-jvectormap-2.0.3.css',
        'third/AdminLTE-2.3.0/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
    ];
    public $js = [
        'third/bootstrap/js/bootstrap.min.js',
        'third/bootstrap-material-design-master/dist/js/material.min.js',
        'third/bootstrap-material-design-master/dist/js/ripples.min.js',
        'js/main.js',
        'third/AdminLTE-2.3.0/dist/js/app.min.js',
        'third/AdminLTE-2.3.0/plugins/chartjs/Chart.min.js',
        'third/AdminLTE-2.3.0/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js',
        'third/AdminLTE-2.3.0/plugins/jvectormap/uk_countries_mill.js',
        'third/AdminLTE-2.3.0/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
