<?php
/**
 * @var $this MenuNotifications
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */
?>

<ul class="nav navbar-nav navbar-right">
	<li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="zmdi zmdi-search"></i></a></li>
	<?php $this->widget('MenuNotificationChange'); // Menu Notification Change ?>
	<?php $this->widget('MenuNotificationMessage'); // Menu Notification Messsage ?>
	<?php $this->widget('MenuNotificationAlert'); // Menu Notification Alert ?>
	<?php $this->widget('MenuNotificationTask'); // Menu Notification Task ?>
	<li><a href="<?php echo Yii::app()->createUrl('site/logout');?>" title="<?php echo Yii::t('phrase', 'Logout');?>" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a></li>
	<li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-sort-amount-desc"></i></a></li>
</ul>