<?php
namespace maxyc\inspinia;

/**
 * Class FontawesomeAsset
 *
 * @package maxyc\inspinia
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