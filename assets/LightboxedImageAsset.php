<?php

namespace common\widgets\assets;

use yii\web\AssetBundle;

class LightboxedImageAsset extends AssetBundle
{
	public $sourcePath = '@common/widgets/assets';
	public $css = [
		'css/lightbox.css'
	];
	
	public $js = [
        'js/lightbox.js'
    ];
    
	public $depends = [
		'yii\web\YiiAsset',
	];
}

?>