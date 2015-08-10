<?php
namespace app\assets;

class AppAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/media';
    public $css = [
        'css/style.css',
        'gallery/gallery.css',
    ];
    public $js = [
        'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js',
        'http://code.jquery.com/jquery-migrate-1.2.1.min.js',
        'js/frontSlider.js',
        'js/scripts.js',
        'gallery/gallery.js',
    ];
    public $depends = [
    //    'yii\web\JqueryAsset',
   //     'yii\bootstrap\BootstrapAsset',
    ];

    public function init()
    {
        parent::init();
        // resetting BootstrapAsset to not load own css files
        \Yii::$app->assetManager->bundles['yii\\bootstrap\\BootstrapAsset'] = [
            'css' => [],
            'js' => []
        ];
    }
}
