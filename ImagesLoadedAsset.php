<?php

namespace ereminmdev\yii2\masonry;

use yii\web\AssetBundle;

class ImagesLoadedAsset extends AssetBundle
{
    public $sourcePath = '@npm/imagesloaded';

    public $js = [
        YII_DEBUG ? 'imagesloaded.pkgd.js' : 'imagesloaded.pkgd.min.js',
    ];

    public $publishOptions = [
        'only' => [
            'imagesloaded.pkgd.js',
            'imagesloaded.pkgd.min.js',
        ]
    ];
}
