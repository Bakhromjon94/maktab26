<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/style.css',
        'css/css/style.css',
        'css/owl.carousel.min.css',
        'css/magnific-popup.css',
        'css/font-awesome.min.css',
        'css/custom-icon.css',
        'css/classy-nav.min.css',
        'css/bootstrap.min.css',
        'css/animate.css'

    ];
    public $fonts=[
        'glyphicons-halflings-regular.woff2',
        'fontawesome-webfont.woff2',
        'glyphicons-halflings-regular.woff',
        'fontawesome-webfont.woff',
        'glyphicons-halflings-regular.ttf',
        'fontawesome-webfont.ttf',
        'glyphicons-halflings-regular.svg',
        'fontawesome-webfont.svg',
        'FontAwesome.otf',
        'glyphicons-halflings-regular.eot',
        'fontawesome-webfont.eot'
    ];
    public $js = [
        'js/jquery/jquery-2.2.4.min.js',
        'js/bootstrap/popper.min.js',
        'js/bootstrap/bootstrap.min.js',
        'js/plugins/plugins.js',
        'js/active.js',
        'js/jquery.chocolat.js',
        'js/jquery.magnific-popup.js',
        'js/move-top.js',
        'js/owl.carousel.js',
        'js/responsiveslides.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
