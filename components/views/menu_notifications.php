<ul class="nav navbar-nav navbar-right">
	<li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="zmdi zmdi-search"></i></a></li>

	<li class="dropdown menu-app"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"> <i class="zmdi zmdi-apps"></i> </a>
		<?php $this->widget('MenuNotificationChange'); // Menu Notification Change ?>
	</li>

	<li class="dropdown msg-notification"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"> <i class="zmdi zmdi-email"></i>
		<?php $this->widget('MenuNotificationMessage'); // Menu Notification Messsage ?>
	</li>

	<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
		<?php $this->widget('MenuNotificationAlert'); // Menu Notification Alert ?>
	</li>

	<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle " data-toggle="dropdown" role="button"> <i class="zmdi zmdi-format-list-bulleted"></i>
		<?php $this->widget('MenuNotificationTask'); // Menu Notification Task ?>
	</li>

	<li><a href="<?php echo Yii::app()->createUrl('site/logout');?>" title="<?php echo Yii::t('phrase', 'Logout');?>" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a></li>
	
	<li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-sort-amount-desc"></i></a></li>
</ul>