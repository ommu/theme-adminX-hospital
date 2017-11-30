<?php
/**
 * Ommu Settings (ommu-settings)
 * @var $this ComingsoonController
 * @var $model OmmuSettings
 * version: 1.3.0
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2012 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/core
 * @contact (+62)856-299-4114
 *
 */
 
	$this->breadcrumbs=array(
		'Coming Soon',
	);
	
	$this->layout = 'login';
	$this->pageTitle = Yii::t('phrase', 'Coming Soon');
	$this->pageDescription = CHtml::encode($setting->construction_text);
?>

<form class="col-md-12" id="sign_in" method="POST">
	<div class="form-group form-float">
		<div class="form-line">
			<input type="text" class="form-control">
			<label class="form-label"><?php echo Yii::t('phrase', 'Search...');?></label>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<a class="btn btn-raised g-bg-cyan waves-effect" href="<?php echo Yii::app()->createUrl('site/index');?>"><?php echo Yii::t('phrase', 'GO TO HOMEPAGE');?></a>
			<a class="btn btn-raised waves-effect" href="<?php echo Yii::app()->createUrl('site/login');?>"><?php echo Yii::t('phrase', 'Sign In');?></a>
		</div>
	</div>
</form>