<?php
/**
 * @var $this AccountController
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
		'Reset Password',
	);
	
	$this->layout = 'login';
?>

<?php if($condition == 'success') {?>
	<div class="col-md-12">
		<?php echo CHtml::link(Yii::t('phrase', 'SIGN IN'), Yii::app()->createUrl('site/login'), array('class'=>'btn btn-raised g-bg-cyan waves-effect'));?>
	</div>

<?php } else if(in_array($condition, array('novalid','expired'))) {?>
	<div class="col-md-12">
		<?php echo CHtml::link(Yii::t('phrase', 'Verify?'), Yii::app()->controller->createUrl('verify'), array('class'=>'btn btn-raised g-bg-cyan waves-effect'));?>
		<div class="m-t-10">
			<?php echo CHtml::link(Yii::t('phrase', 'Sign In!'), Yii::app()->createUrl('site/login'));?>
		</div>
	</div>
	
<?php }?>