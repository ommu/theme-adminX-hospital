<li> 
	<?php //begin.User Info ?>
	<div class="user-info">
		<div class="admin-image"> <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt="profile img"> </div>
		<div class="admin-action-info">
			<span>Welcome</span>
			<h3>Dr.John Smith</h3>
			<ul>
				<li><a data-placement="bottom" title="Go to Inbox" href="mail-inbox.html"><i class="zmdi zmdi-email"></i></a></li>
				<li><a data-placement="bottom" title="Go to Profile" href="<?php echo Yii::app()->createUrl('doctor/profile');?>"><i class="zmdi zmdi-account"></i></a></li>
				<li><a data-placement="bottom" title="Full Screen" href="<?php echo Yii::app()->createUrl('site/login');?>" ><i class="zmdi zmdi-sign-in"></i></a></li>
			</ul>
		</div>
	</div>
	<?php //end.User Info ?>
</li>