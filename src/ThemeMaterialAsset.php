<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2019
 * @package yii2-widgets
 * @subpackage yii2-widget-select2
 * @version 2.1.4
 */

namespace kartik\select2;

use kartik\base\AssetBundle;

/**
 * Asset bundle for the Krajee theme for [[Select2]] widget.
 *
 * @author Mohamad Faeez <mfmdevsystem@gmail.com>
 * @since 1.0
 */
class ThemeMaterialAsset extends ThemeAsset
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->initTheme();
        $this->setupAssets('css', ['css/select2-material']);
        parent::init();
    }
}
