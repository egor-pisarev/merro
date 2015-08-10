<?php
namespace app\assets;

class GalleryAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/media';
    public $css = [
        'css/style.css',
        'gallery/gallery.css',
    ];
    public $js = [
        'gallery/gallery.js',
    ];
    public $depends = [

    ];

    public function init()
    {
        parent::init();
        \Yii::$app->assetManager->bundles['yii\\bootstrap\\BootstrapAsset'] = [
            'css' => [],
            'js' => []
        ];
    }
}
