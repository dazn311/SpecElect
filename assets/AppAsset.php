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
        'css/bootstrap.css',
        'css/style.css',
        'http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900',
        'http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900',
        'css/memenu.css',
    ];
    public $js = [
        'js/jquery.min.js', //add daz
        'js/memenu.js', //add daz
        'js/simpleCart.min.js', //add daz
        'js/main.js', //add daz
        'js/responsiveslides.min.js', //add daz
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',  -daz comment
    ];
}
