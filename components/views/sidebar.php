<?php //begin.Left Sidebar ?>
<aside id="leftsidebar" class="sidebar"> 
	<?php //begin.Menu ?>
	<div class="menu">
		<ul class="list">
			<?php $this->widget('SidebarMenuAccount'); // Sidebar Menu Account ?>
			<?php $this->widget('SidebarMenuBackoffice'); // Sidebar Menu Backoffice ?>
			<?php $this->widget('SidebarMenuFromTheme'); // Sidebar Menu Theme ?>
		</ul>
	</div>
	<?php //end.Menu ?>
</aside>
<?php //end.Left Sidebar ?>