<?php


namespace wdmg\widgets;

/**
 * @author          Sreeraj <>
 * @copyright       Copyright (c) 2023 Intersmart
 * 
 */

use yii\web\AssetBundle;

class FontAwesomeAssets extends AssetBundle
{

    public $sourcePath = '@bower/font-awesome';

    public function init()
    {
        parent::init();
        $this->css = YII_DEBUG ? ['css/all.css'] : ['css/all.min.css'];
        $this->depends = [\yii\web\JqueryAsset::class];
    }

}