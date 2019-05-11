Bootstrap light box plugin
==========================
Bootstrap light box plugin

Based on A lightbox gallery plugin for Bootstrap https://github.com/ashleydw/lightbox

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist san27079/yii2-bootstrap-lightbox "*"
```

or add

```
"san27079/yii2-bootstrap-lightbox": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

- create gallery

```php
<?php echo LightBoxWidget::widget([
        'data' => [
            ['src' => 'https://unsplash.it/1200/768.jpg?image=251', 'thumb' => 'https://unsplash.it/600.jpg?image=251', 'title' => 'Test Gallery',   'width' => 320],
            ['src' => 'https://unsplash.it/1200/768.jpg?image=251', 'thumb' => 'https://unsplash.it/600.jpg?image=251', 'title' => 'Test Gallery',   'width' => 320],
            ['src' => 'https://unsplash.it/1200/768.jpg?image=251', 'thumb' => 'https://unsplash.it/600.jpg?image=251', 'title' => 'Test Gallery',   'width' => 320],
            ['src' => 'https://unsplash.it/1200/768.jpg?image=251', 'thumb' => 'https://unsplash.it/600.jpg?image=251', 'title' => 'Test Gallery'],
            ['src' => 'https://unsplash.it/1200/768.jpg?image=251', 'thumb' => 'https://unsplash.it/600.jpg?image=251', 'title' => 'Test Gallery'],
            ['src' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', 'thumb' => 'https://unsplash.it/600.jpg?image=251', 'title' => 'Test Gallery'],
            ['src' => 'https://unsplash.it/1200/768.jpg?image=251', 'thumb' => 'https://unsplash.it/600.jpg?image=251', 'title' => 'Test Gallery'],
        ],
        'options' => [
            'row_class' => 'row custom_row',
            'column_class' => 'col-3',
        ]
    ]); ?>
```


- create one item

```php
<?php echo LightBoxWidget::widget([
    'data' => [
        'src' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
        'thumb' => 'https://unsplash.it/600.jpg?image=251',
        'title' => 'Test Video',
        'width' => 1280,
        'height' => 720
    ],
    'options' => [
        'src_class' => 'row custom_row',
        'thumb_class' => 'col-3',
    ]
]); ?>
```
Params
----
options - array of params for customization plugin, it contains:

- src_class - class of source 

- thumb_class - class of thumbnail,

params for gallery:

- row_class - gallery wrapper class,
- column_class - class for item or column

plugin_options - associative array of params for js plugin init for example:

alwaysShowClose, width / height, showArrows etc.
 

