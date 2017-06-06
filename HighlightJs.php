<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace xutl\highlightjs;

use yii\base\Widget;
use yii\helpers\Html;
use yii\base\InvalidConfigException;

/**
 * Class HighlightJs
 * @package xutl\highlightjs
 */
class HighlightJs extends Widget
{
    /**
     * @var string 代码格式
     */
    public $format;

    /**
     * @var string 代码内容
     */
    public $content;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        if (!isset ($this->content)) {
            throw new InvalidConfigException ('The "content" property must be set.');
        }
        $this->registerAssets();
    }

    public function run()
    {
        echo Html::beginTag('pre');
        echo Html::tag('code',Html::encode($this->content),['class' => $this->format]);
        echo Html::endTag('pre');
    }

    /**
     * Registers the needed assets
     */
    public function registerAssets()
    {
        HighlightJsAsset::register($this->view, $this->format);
        $this->view->registerJs("jQuery('pre code').each(function(i, block) {hljs.highlightBlock(block);});");
    }
}