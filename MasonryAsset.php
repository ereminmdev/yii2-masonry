<?php

namespace ereminmdev\yii2\masonry;

use yii\web\AssetBundle;

class MasonryAsset extends AssetBundle
{
    public $sourcePath = '@vendor/npm/masonry-layout/dist';

    public $js = [
        YII_DEBUG ? 'masonry.pkgd.js' : 'masonry.pkgd.min.js',
    ];
}
