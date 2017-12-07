<?php //begin.Content Menu ?>
<div class="contentmenu clearfix">
	<?php $this->generateMenu($menus);?>
	<?php $this->widget('adminx-hospital.components.system.CMenu', array(
		'items'=>$this->menus,
		'htmlOptions'=>array('class'=>'gridmenu clearfix'),
	)); ?>
</div>
<?php //end.Content Menu ?>