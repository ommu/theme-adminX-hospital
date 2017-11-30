<?php
/**
 * @var $this SignupController
 * @var $error array
 * version: 1.3.0
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2012 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/core
 * @contact (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Sign Up',
	);
	
	$this->layout = 'login';
	$this->pageTitle = Yii::t('phrase', 'Sign Up');
	$this->pageDescription = Yii::t('phrase', 'Register a new membership');
?>

<form class="col-md-12">
	<div class="form-group form-float">
		<div class="form-line">
			<input type="text" class="form-control">
			<label class="form-label"><?php echo Yii::t('phrase', 'Enter Name');?></label>
		</div>
	</div>
	<div class="form-group form-float">
		<div class="form-line">
			<input type="email" class="form-control">
			<label class="form-label"><?php echo Yii::t('phrase', 'Email Address');?></label>
		</div>
	</div>
	<div class="form-group form-float">
		<div class="form-line">
			<input type="password" class="form-control">
			<label class="form-label"><?php echo Yii::t('phrase', 'Password');?></label>
		</div>
	</div>
	<div class="form-group form-float">
		<div class="form-line">
			<input type="password" class="form-control">
			<label class="form-label"><?php echo Yii::t('phrase', 'Confirm Password');?></label>
		</div>
	</div>
	<div class="form-group">
		<input type="checkbox" name="terms" id="terms" class="filled-in chk-col-cyan">
		<label for="terms"><?php echo Yii::t('phrase', 'I read and agree to the {terms}.', array('{terms}'=>CHtml::link(Yii::t('phrase', 'terms of usage'), '', array('target' => '_blank'))));?></label>
	</div>
	<div class="text-left"> <a href="#" class="btn btn-raised waves-effect g-bg-cyan"><?php echo Yii::t('phrase', 'SIGN UP');?></a> </div>
	<div class="m-t-10 m-b--5"> <a href="<?php echo Yii::app()->createUrl('site/login');?>"><?php echo Yii::t('phrase', 'You already have a membership?');?></a> </div>
</form>