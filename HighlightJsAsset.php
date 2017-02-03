<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace xutl\highlightjs;

use yii\web\View;
use yii\web\AssetBundle;

class HighlightJsAsset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@xutl/highlightjs/assets';
    //public $sourcePath = '';

    //public $basePath = '//cdn.bootcss.com/highlight.js/9.9.0';

    public $css = [
        'styles/default.min.css'
    ];

    /**
     * @inherit
     */
    public $js = [
        'highlight.min.js',

    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public static $language = null;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        if (!is_null(static::$language)) {
            array_push($this->js, static::$language);
            //array_unshift($this->js, static::$language);
        }
    }

    /**
     * Registers this asset bundle with a view.
     * @param \yii\base\View $view the view to be registered with
     * @param null|string $language
     * @return static the registered asset bundle instance
     */
    public static function register($view, $language = null)
    {
        if (!is_null($language)) {
            static::$language = 'languages/' . $language . '.min.js';
        }
        return $view->registerAssetBundle(get_called_class());
    }
}