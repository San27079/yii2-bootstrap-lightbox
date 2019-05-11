<?php
/**
 * Created by PhpStorm.
 * User: San27079
 * Date: 07.05.2019
 * Time: 1:39
 */

namespace san27079\BootstrapLightbox;

use yii\base\Widget;
use yii\base\InvalidConfigException;
use san27079\BootstrapLightbox\LightboxAsset;

class LightBoxWidget extends Widget
{
    /*
     * Constants for different types of content
     */
    const ONE_ITEM = 'OneItem';
    const GALLERY = 'Gallery';

    /*
     * Widget options
     */

    /** @var array Content for rendering.
     * One item: thumb, src, title, footer_title, width, height
     * Gallery: array [thumb, src, title, footer_title, width, height]
     */
    public $data = null;

    /** @var string Type of content. */
    protected $type = null;

    /** @var array Options for view in plugin.
     * One item: thumb_class, src_class
     * Gallery: thumb_class, src_class, row_class(default: row), column_class(default: col-sm-4)
     */
    public $options = [];

    protected $handler;

    /** @var array Plugin options. */
    public $plugin_options = [];

    public function init()
    {
        $this->setData($this->data);
        $this->setTypeOfContent($this->data);
        LightboxAsset::register($this->getView());
        $this->setHandler();
    }

    protected function setData($data)
    {
        if (!empty($data)) {
            $this->data = $data;
        } else {
            throw new InvalidConfigException('Required `data` param isn\'t set.');
        }
    }

    protected function setTypeOfContent($data)
    {
        if($this->checkDataOnContainArrays($data)){
            return $this->type = self::GALLERY;
        }else{
            return $this->type = self::ONE_ITEM;
        }
    }

    protected function checkDataOnContainArrays($data)
    {
        $arrays = 0;
        foreach($data as $item){
            if(is_array($item)){
                $arrays++;
            }else{
                return false;
            }
            if($arrays > 1){
                return true;
            }
        }
    }

    protected function setHandler()
    {
        $handler_class = "san27079\BootstrapLightbox\\$this->type".'Handler';
        $this->handler = new $handler_class;
    }

    public function run()
    {
        return $this->handler->getContent($this->data, $this->options, $this->plugin_options);
    }
}