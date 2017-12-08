<?php
/**
 * @var $this Sidebar
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */
?>

<aside id="leftsidebar" class="sidebar"> 
	<?php //begin.Menu ?>
	<div class="menu">
		<ul class="list">
			<?php $this->widget('SidebarMenuAccount'); // Sidebar Menu Account ?>
			<?php $themeMenuPreview['database']['status'] == 1 ? $this->widget('SidebarMenuFromDatabase', array('category'=>$themeMenuPreview['database']['category'])) : ''; // Sidebar Menu Database ?>
			<?php $themeMenuPreview['backoffice'] == 1 ? $this->widget('SidebarMenuBackoffice') : ''; // Sidebar Menu Backoffice ?>
			<?php $themeMenuPreview['theme'] == 1 ? $this->widget('SidebarMenuFromTheme') : ''; // Sidebar Menu Theme ?>
		</ul>
	</div>
	<?php //end.Menu ?>
</aside>