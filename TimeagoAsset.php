<?php
    /**
     * @link http://www.yiiframework.com/
     * @copyright Copyright (c) 2008 Yii Software LLC
     * @license http://www.yiiframework.com/license/
     */
    namespace maxyc\inspinia;
    /**
     * @author Nghia Nguyen <yiidevelop@hotmail.com>
     * @since 2.0
     */
    class TimeagoAsset extends \yii\web\AssetBundle {
        public $sourcePath = '@bower/jquery-timeago';
        public $js = ['jquery.timeago.js'];
        public $depends = [
            'yii\web\JqueryAsset'
        ];
    }