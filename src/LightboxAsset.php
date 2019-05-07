<?php
/**
 * Created by PhpStorm.
 * User: San27079
 * Date: 07.05.2019
 * Time: 0:50
 */

namespace san27079\BootstrapLightbox;

use yii\web\AssetBundle;

/**
 * LightBox Asset Bundle
 */
class LightboxAsset extends AssetBundle
{
    public $baseUrl = '@web';
    public $sourcePath = '@npm/ekko-lightbox/dist';

    public $css = [
        'ekko-lightbox.css',
    ];

    public $js = [
        'ekko-lightbox.min.js'
    ];

    public $depends = [
        'yii\bootstrap4\BootstrapPluginAsset',
    ];
}