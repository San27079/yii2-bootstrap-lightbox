<?php
/**
 * Created by PhpStorm.
 * User: San27079
 * Date: 07.05.2019
 * Time: 2:28
 */

?>
<?php if (!empty($data)): ?>
    <div class="<?php echo(isset($options['row_class']) ? $options['row_class'] : 'row') ?>">
        <?php foreach ($data as $item): ?>
            <div class="<?php echo(isset($options['column_class']) ? $options['column_class'] : 'col-4') ?>">
                <a class="<?php echo(isset($options['src_class']) ? $options['src_class'] : ''); ?>"
                    href="<?php echo(isset($item['src']) ? $item['src'] : ''); ?>"
                    data-gallery="<?php echo $gallery_identifier; ?>"
                    data-toggle="bootstrap-lightbox"
                    <?php echo(isset($item['width']) ? 'data-width="' . $item['width'] . '"' : ''); ?>
                    <?php echo(isset($item['height']) ? 'data-height="' . $item['height'] . '"' : ''); ?>
                    data-title="<?php echo(isset($item['title']) ? $item['title'] : ''); ?>"
                    data-footer="<?php echo(isset($item['footer_title']) ? $item['footer_title'] : ''); ?>">
                    <img src="<?php echo(isset($item['thumb']) ? $item['thumb'] : ''); ?>"
                         class="img-fluid <?php echo(isset($options['thumb_class']) ? $options['thumb_class'] : '') ?>">
                </a>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>