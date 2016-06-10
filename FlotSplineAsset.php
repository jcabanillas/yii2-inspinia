<?php
namespace jcabanillas\inspinia;

/**
 * Class FontawesomeAsset
 *
 * @package jcabanillas\inspinia
 */
class FlotSplineAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/flot-spline';
    public $js = [
        'js/jquery.flot.spline.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'jcabanillas\inspinia\FlotAsset'
    ];
}