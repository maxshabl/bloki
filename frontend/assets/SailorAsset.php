<?
namespace frontend\assets;

use yii;
use yii\web\AssetBundle;
use yii\web\View;

class SailorAsset extends  AssetBundle{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        //'source/css/bootstrap.min.css',
        'source/plugins/flexslider/flexslider.css',
        'source/css/cubeportfolio.min.css',
        'source/css/style.css',
        'source/skins/default.css',
        'source/bodybg/bg1.css'

    ];

    public $js = [

        'source/js/jquery.min.js',
        'source/js/modernizr.custom.js',
        'source/js/jquery.easing.1.3.js',
        'source/js/bootstrap.min.js',
        'source/plugins/flexslider/jquery.flexslider-min.js',
        'source/plugins/flexslider/flexslider.config.js',
        'source/js/jquery.appear.js',
        'source/js/stellar.js',
        'source/js/classie.js',
        'source/js/uisearch.js',
        'source/js/jquery.cubeportfolio.min.js',
		
        'source/js/google-code-prettify/prettify.js',
        'source/js/animate.js',
        'source/js/custom.js',
        'source/js/jquery.cubeportfolio.min.js'

    ];

    public $depends = [
        'yii\web\YiiAsset', // yii.js, jquery.js
        'yii\bootstrap\BootstrapAsset', // bootstrap.css
        'yii\bootstrap\BootstrapPluginAsset' // bootstrap.js
    ];

    public $jsOptions = [
       'position' =>  View::POS_END,
    ];


}