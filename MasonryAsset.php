<?php

namespace ereminmdev\yii2\masonry;

use yii\web\AssetBundle;

class MasonryAsset extends AssetBundle
{
    public $sourcePath = '@npm/masonry-layout/dist';

    public $js = [
        YII_DEBUG ? 'masonry.pkgd.js' : 'masonry.pkgd.min.js',
    ];
}
