<?php


namespace wdmg\widgets;

/**
 * @author          Sreeraj <>
 * @copyright       Copyright (c) 2023 India
 * 
 */

use yii\web\AssetBundle;

class EditorAssets extends AssetBundle
{

    public $sourcePath = '@bower/bootstrap-wysiwyg-editor/dist';

    public function init()
    {
        parent::init();
        $this->css = YII_DEBUG ? [
            'css/wysiwyg.css',
            'css/highlight.min.css'
        ] : [
            'css/wysiwyg.min.css',
            'css/highlight.min.css'
        ];
        $this->js = YII_DEBUG ? [
            'js/wysiwyg.js',
            'js/highlight.js'
        ] : [
            'js/wysiwyg.min.js',
            'js/highlight.min.js'
        ];
        $this->depends = [\yii\web\JqueryAsset::class];
    }

}