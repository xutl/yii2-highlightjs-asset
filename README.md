# yii2-highlightjs-asset

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist xutl/yii2-highlightjs-asset
```

or add

```
"xutl/yii2-highlightjs-asset": "~1.0.0"
```

to the require section of your `composer.json` file.

Usage
-----

```php
use xutl\highlightjs\HighlightJsAsset;
HighlightJsAsset::register($this,'php');
$this->registerJs('hljs.initHighlightingOnLoad();');
```

```php
use xutl\highlightjs\HighlightJs;

HighlightJs::begin([
    'format'=>$model->format
]);
echo Html::encode($model->content); ?>
HighlightJs::end()
```