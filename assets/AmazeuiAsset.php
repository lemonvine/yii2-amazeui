<?php

namespace mango\assets;

use Yii;
use yii\web\AssetBundle;

class AmazeuiAsset extends AssetBundle
{
	public static $path = '@vendor/allmobilize/amazeui/dist';
	
	public $depends = [
	    'yii\web\JqueryAsset',
	];
	
	public function init()
	{
		$this->sourcePath = self::$path;
		$postfix = YII_DEBUG ? '' : '.min';
		$version = Yii::$app->params['admin_version'];
		
		$this->js[] = "js/amazeui{$postfix}.js?v=v{$version}";
		
		$this->css[] = "css/amazeui{$postfix}.css?v=v{$version}";
		
		parent::init();
	}
}
