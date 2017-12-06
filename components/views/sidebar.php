<?php //begin.Left Sidebar ?>
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
<?php //end.Left Sidebar ?>