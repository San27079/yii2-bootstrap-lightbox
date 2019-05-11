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
use yii\base\InvalidConfigException;
use yii\base\ViewNotFoundException;

class OneItemHandler implements LightBoxHandler
{
    public $view = 'one_item.php';
    
    public function getContent(array $data, array $options, array $plugin_options)
    {
        if(isset($data['src']) && !empty($data['src'])){
            $src = $data['src'];
            unset($data['src']);
        }else{
            throw new InvalidConfigException('Required `data[src]` param isn\'t set.');
        }

        if(isset($data['thumb']) && !empty($data['thumb'])){
            $thumb = $data['thumb'];
            unset($data['thumb']);
        }else{
            throw new InvalidConfigException('Required `data[thumb]` param isn\'t set.');
        }

        if(file_exists(__DIR__.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.$this->view)){
            $content = Yii::$app->view->renderFile(__DIR__.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.$this->view,
                [
                    'src' => $src,
                    'thumb' => $thumb,
                    'data' => $data,
                    'options' => $options
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
        Yii::$app->view->registerJs($js);
    }

}