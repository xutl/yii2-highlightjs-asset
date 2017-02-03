<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace xutl\highlightjs;

use yii\base\Widget;
use yii\helpers\Html;

/**
 * Class HighlightJs
 * @package xutl\highlightjs
 */
class HighlightJs extends Widget
{
    public $format;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        echo Html::beginTag('pre');
        echo Html::beginTag('code', ['class'=>$this->format]);
    }

    public function run()
    {
        echo Html::endTag('code');
        echo Html::endTag('pre');
        HighlightJsAsset::register($this->view, $this->format);
        $this->view->registerJs("jQuery('pre code').each(function(i, block) {hljs.highlightBlock(block);});");
    }
}