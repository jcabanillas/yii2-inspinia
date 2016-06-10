<?php
namespace jcabanillas\inspinia;

/**
 * Class FontawesomeAsset
 *
 * @package jcabanillas\inspinia
 */
class FlotTooltipAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/flot.tooltip';
    public $js = [
        'js/jquery.flot.tooltip.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'maxyc\inspinia\FlotAsset'
    ];
}