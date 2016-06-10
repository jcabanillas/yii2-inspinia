<?php
namespace maxyc\inspinia;

/**
 * Class FontawesomeAsset
 *
 * @package maxyc\inspinia
 */
class FlotSplineAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/flot-spline';
    public $js = [
        'js/jquery.flot.spline.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'maxyc\inspinia\FlotAsset'
    ];
}