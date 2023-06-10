# yii2-masonry

Masonry widget for Yii framework.

This widget depends on masonry script: http://masonry.desandro.com

## Install

``composer require --prefer-dist ereminmdev/yii2-masonry``

## Documentation

http://masonry.desandro.com/options.html

## Use

Add next code in the view file:

```
MasonryAsset::register($this);

$this->registerJs('
    new Masonry(".items", {
        itemSelector: ".item"
    });
');
```

To fix overlapping item elements, use ImagesLoaded:

```
ImagesLoadedAsset::register($this);
MasonryAsset::register($this);

$this->registerJs('
    imagesLoaded(document.querySelector(".items"), () => {
        new Masonry(".items", {
            itemSelector: ".item"
        });
    });
');
```
