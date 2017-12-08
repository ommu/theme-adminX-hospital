<?php
/**
 * @var $this MenuContent
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */
?>

<div class="contentmenu clearfix">
	<?php $this->generateMenu($menus);?>
	<?php $this->widget('adminx-hospital.components.system.CMenu', array(
		'items'=>$this->menus,
		'htmlOptions'=>array('class'=>'gridmenu clearfix'),
	)); ?>
</div>