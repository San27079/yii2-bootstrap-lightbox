<?php
/**
 * Created by PhpStorm.
 * User: San27079
 * Date: 07.05.2019
 * Time: 2:25
 */

namespace san27079\BootstrapLightbox\interfaces;


interface LightBoxHandler
{
    public function getContent(array $data, array $options, array $plugin_options);
}