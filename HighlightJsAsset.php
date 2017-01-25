<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace xutl\highlightjs;

use yii\web\AssetBundle;

class HighlightJsAsset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@xutl/highlightjs/assets';

    /**
     * @inherit
     */
    public $js = [
        'highlight.js',
    ];
}