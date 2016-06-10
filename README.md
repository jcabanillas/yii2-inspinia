Inspinia Admin Theme
====================
Inspinia 2.4 asset widgets

Buy license to this theme https://wrapbootstrap.com/theme/inspinia-responsive-admin-theme-WB0R5L90S
===

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist maxyc/yii2-inspinia-asset "*"
```

or add

```
"maxyc/yii2-inspinia-asset": "*"
```

to the require section of your `composer.json` file.


Quick Start
-----------

Once the extension is installed, you can have a preview by reconfiguring the path mappings of the view component:

For Yii 2 Application Template or Basic Application Template

```
'components' => [
    'view' => [
         'theme' => [
             'pathMap' => [
                '@app/views' => '@vendor/maxyc/yii2-inspinia-asset/views'
             ],
         ],
    ],
],
```

This asset bundle provides sample files for layout and view, they are not meant to be customized directly in the vendor/ folder.

Therefore it is recommended to copy the views into your application and adjust them to your needs.

Customization
-------------

    Copy files from vendor/maxyc/yii2-inspinia-asset/views to @app/views.
    Remove the custom view configuration from your application by deleting the path mappings, if you have made them before.
    
Components
----------

Header block and breadcrumbs
---

Structure

```
<div class="col-sm-12">
    <h2>Title</h2>

    <?=Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
</div>
```

To change it use:

```
<?php $this->beginBlock('content-header'); ?>
About <small>static page</small>
<?php $this->endBlock(); ?>
```

Add this block and use header right toolbar

```
<?php $this->beginBlock('content-header-actions'); ?>
<a href="<?=Url::to(['create'])?>" class="btn btn-primary">
    <i class="fa fa-fw fa-plus"></i>
    <?=\Yii::t('reference', 'Create filial')?>
</a>
<?php $this->endBlock(); ?>
```


Middle box
---
```
<div class="middle-box text-center animated fadeInRightBig">
    <h3 class="font-bold">This is page content</h3>
    <div class="error-desc">
        You can create here any grid layout you want. And any variation layout you imagine:) Check out
        main dashboard and other site. It use many different layout.
        <br/><a href="index-2.html" class="btn btn-primary m-t">Dashboard</a>
    </div>
</div>
```

Panels
---
Usage:
```
<?php Panel::begin([
    'title'=>$this->title,
    'description'=> 'same text',
    'toolbar'=>[
        ...
    ]
])?>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'tableOptions' => ['class' => 'table table-hover']
    ]); ?>
    
<?php Panel::end()?>
```

**Configurations:**
title  - Title of panel;
description - Description panel (right from title)
footer - footer text

toolbar - panel's menu
example
```
'toolbar'=>[
        [
            'title' => '',
            'link'  => Url::to(['/']),
            'icon'  => 'wrench',
            'items' => [
                [
                    'title' => 'Item 1',
                    'link'  => Url::to(['/']),
                    'icon'  => 'earth',
                ],
                [
                    'title' => 'Item 2',
                    'link'  => Url::to(['/']),
                    'icon'  => 'pencil',
                ],
            ],
        ],
        [
            'title' => '',
            'link'  => Url::to(['http://vk.com']),
            'icon'  => 'vk',
        ]
    ]
```

collapse_button  true if panel collapable
close_button     true if panel closable

ionRangeSlider widget
---
```
<?= $form->field($model, 'work_time')->widget(\maxyc\inspinia\widgets\ionRangeSlider::className(), [
    'clientOptions'=>[
        'type'=>'double',
        'grid'=>true,
        'min'=>0,
        'max'=>'24',
        'from'=>10,
        'to'=>18,
        'step'=>'.01',
        'prefix'=> \Yii::t('reference', 'Worktime:'),
        'decorate_both'=> false,
        'values_separator'=>  ' '.\Yii::t('reference', 'to').' ',
    ]
]) ?>
```