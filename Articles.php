<?php

/**
 * @copyright Copyright &copy;2014 Giandomenico Olini
 * @company Gogodigital - Wide ICT Solutions 
 * @website http://www.gogodigital.it
 * @package yii2-articles
 * @github https://github.com/cinghie/yii2-articles
 * @license GNU GENERAL PUBLIC LICENSE VERSION 3
 */

namespace cinghie\articles;

use Yii;

class Articles extends \yii\base\Module
{
    public $controllerNamespace = 'cinghie\articles\controllers';
	
	public $languages  = ["en-GB" => "en-GB"];
	
	public $editor 	   = "ckeditor";
	
	public $categoryimagetype = "jpg,jpeg,gif,png";
	
	public $categoryimgname   = "categoryname";
	
	public $categoryimagepath = "/img/articles/categories/";
	
	public $categorythumbpath = "/img/articles/categories/thumb/";
	
	public $categorythumboptions =	[ 
		'small'  => ['quality' => 100, 'width' => 200, 'height' => 150],
		'medium' => ['quality' => 100, 'width' => 300, 'height' => 200],
		'large'  => ['quality' => 100, 'width' => 400, 'height' => 300],
		'extra'  => ['quality' => 100, 'width' => 600, 'height' => 400],
	];

    public function init()
    {
        parent::init();
		
		// Translating module messages
		\Yii::$app->getI18n()->translations['articles.*'] = [
			'class' => 'yii\i18n\PhpMessageSource',
			'basePath' => __DIR__.'/messages',
		];
		
    }

}