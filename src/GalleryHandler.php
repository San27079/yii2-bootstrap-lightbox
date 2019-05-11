<?php
/**
 * Created by PhpStorm.
 * User: San27079
 * Date: 07.05.2019
 * Time: 1:56
 */

namespace san27079\BootstrapLightbox;

use \Yii;
use san27079\BootstrapLightbox\interfaces\LightBoxHandler;
use yii\base\ViewNotFoundException;

class GalleryHandler implements LightBoxHandler
{
    public $view = 'gallery.php';
    
    public function getContent(array $data, array $options, array $plugin_options)
    {
        if(file_exists(__DIR__.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.$this->view)){
            $content = Yii::$app->view->renderFile(__DIR__.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.$this->view,
                [
                    'data' => $data,
                    'options' => $options,
                    'gallery_identifier' => 'gallery-'.\Yii::$app->security->generateRandomString(8)
                ]
            );
        }else{
            throw new ViewNotFoundException();
        }
        $this->setPluginOptions($plugin_options);
        return $content;
    }

    protected function setPluginOptions(array $plugin_options)
    {
        $json_array = json_encode($plugin_options);
        $js = "$(document).on('click', '[data-toggle=\"bootstrap-lightbox\"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox(
                    ".$json_array."
                );
               
            });";
        $css = '';
        Yii::$app->view->registerJs($js);
        Yii::$app->view->registerCss($css);
    }
}