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
?>

<?php $form=$this->beginWidget('application.libraries.core.components.system.OActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions'=>array(
		'class'=>'col-md-12',
	),
)); ?>
	<?php if($condition == false || ($condition == true && $token == null)) {?>
	<div class="form-group form-float">
		<div class="form-line <?php echo $model->email != '' ? 'focused' : '';?>">
			<?php echo $form->textField($model,'email', array('maxlength'=>32, 'class'=>'form-control')); ?>
			<?php echo $form->labelEx($model,'email', array('class'=>'form-label')); ?>
		</div>
		<?php echo $form->error($model,'email'); ?>
	</div>
	<?php }?>
	<?php if($condition == false || ($condition == true && $token != null)) {
		if($condition == true && $token != null) {
			$model->email = Users::getToken2Email($token);
			echo $form->hiddenField($model,'email');
		}?>
	<div class="form-group form-float">
		<div class="form-line <?php echo $model->password != '' ? 'password' : '';?>">
			<?php echo $form->passwordField($model,'password', array('maxlength'=>32, 'class'=>'form-control')); ?>
			<?php echo $form->labelEx($model,'password', array('class'=>'form-label')); ?>
		</div>
		<?php echo $form->error($model,'password'); ?>
	</div>
	<div>
		<?php echo $form->checkBox($model,'rememberMe', array('class'=>'filled-in chk-col-cyan')); ?>
		<?php echo $form->labelEx($model,'rememberMe', array('class'=>'form-label')); ?>
	</div>
	<?php }?>
	<?php echo CHtml::submitButton(Yii::t('phrase', 'SIGN IN'), array('onclick'=>'setEnableSave()', 'class'=>'btn btn-raised g-bg-cyan waves-effect')); ?>
	<?php echo CHtml::link(Yii::t('phrase', 'SIGN UP'), Yii::app()->createUrl('signup/index'), array('class'=>'btn btn-raised waves-effect'));?>
	<div class="m-t-10">
		<?php echo CHtml::link(Yii::t('phrase', 'Forgot Password?'), Yii::app()->createUrl('forgot/password'));?>
	</div>
<?php $this->endWidget(); ?>