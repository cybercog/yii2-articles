<?php

/**
 * @copyright Copyright &copy;2014 Giandomenico Olini
 * @company Gogodigital - Wide ICT Solutions 
 * @website http://www.gogodigital.it
 * @package yii2-articles
 * @github https://github.com/cinghie/yii2-articles
 * @license GNU GENERAL PUBLIC LICENSE VERSION 3
 */

use yii\helpers\Html;
use kartik\grid\GridView;

$this->title = Yii::t('articles.message', 'Categories');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categories-index">
	<div class="page-header">
    	<h1><?= Html::encode($this->title) ?></h1>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <?= GridView::widget([
			'dataProvider'=> $dataProvider,
			'filterModel' => $searchModel,
			'columns' => [
				[
					'attribute' => 'id',
					'width' => '8%',
					'hAlign' => 'center',
				],
				'name',
				'parent',
				'access',
				'ordering',
				[
					'attribute' => 'language',
					'width' => '7%',
					'hAlign' => 'center',
				],
				[ 
					'class' => '\kartik\grid\BooleanColumn',
					'attribute' => 'published',
					'trueLabel' => '1',
					'falseLabel' => '0'
				],
				[
					'class' => '\kartik\grid\ActionColumn',
				],
				[
					'class' => '\kartik\grid\CheckboxColumn'
				]
			],
			'responsive'=>true,
			'hover'=>true,
			'panel' => [
				'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i></h3>',
				'type'=>'success',
				'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> '.Yii::t('articles.message', 'Create Category'), ['create'], ['class' => 'btn btn-success']),				
				'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> '.Yii::t('articles.message', 'Reset Grid'), ['index'], ['class' => 'btn btn-info']),
				'showFooter'=>false
			],
		]);	
	?>

</div>
