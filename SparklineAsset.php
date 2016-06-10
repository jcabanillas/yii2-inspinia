<?php
namespace jcabanillas\inspinia;

/**
 * Class FontawesomeAsset
 *
 * @package jcabanillas\inspinia
 */
class SparklineAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/jquery-sparkline';
    public $js = [
        'dist/jquery.sparkline.min.js',
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}