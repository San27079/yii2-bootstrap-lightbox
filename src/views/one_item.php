<?php
/**
 * Created by PhpStorm.
 * User: San27079
 * Date: 07.05.2019
 * Time: 2:28
 */

?>
<a class="<?php echo (isset($options['src_class']) ? $options['src_class'] : '');  ?>"
   href="<?php echo $src; ?>"
   <?php echo (isset($data['width']) ? 'data-width="'.$data['width'].'"' : ''); ?>
   <?php echo (isset($data['height']) ? 'data-height="'.$data['height'].'"' : ''); ?>
   data-toggle="bootstrap-lightbox"
   data-title="<?php echo (isset($data['title']) ? $data['title'] : '');  ?>"
   data-footer="<?php echo (isset($data['footer_title']) ? $data['footer_title'] : '');  ?>">
    <img src="<?php echo $thumb; ?>" class="img-fluid <?php echo (isset($options['thumb_class']) ? $options['thumb_class'] : '') ?>">
</a>