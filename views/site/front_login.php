<?php
/**
 * @var $this SiteController
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
		'Login',
	);
	
	$this->layout = 'login';
	$this->pageTitle = Yii::t('phrase', 'Login');
	$this->pageDescription = '';
?>

<form class="col-md-12" id="sign_in" method="POST">
	<div class="form-group form-float">
		<div class="form-line">
			<input type="text" class="form-control">
			<label class="form-label"><?php echo Yii::t('phrase', 'First Name');?></label>
		</div>
	</div>
	<div class="form-group form-float">
		<div class="form-line">
			<input type="text" class="form-control">
			<label class="form-label"><?php echo Yii::t('phrase', 'Password');?></label>
		</div>
	</div>
	<div>
		<input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-cyan">
		<label for="rememberme"><?php echo Yii::t('phrase', 'Remember Me');?></label>
	</div>
	<a href="<?php echo Yii::app()->createUrl('site/login');?>" class="btn btn-raised g-bg-cyan waves-effect"><?php echo Yii::t('phrase', 'SIGN IN');?></a>
	<a href="<?php echo Yii::app()->createUrl('site/signup');?>" class="btn btn-raised waves-effect"><?php echo Yii::t('phrase', 'SIGN UP');?></a>
	<div class="m-t-10"> <a href="forgot-password.html"><?php echo Yii::t('phrase', 'Forgot Password?');?></a> </div>
</form>