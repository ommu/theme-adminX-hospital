<?php
	$menuRender = 0;
	if(($module == null && in_array($controller, array('admin'))) || ($module != null && (($module == 'report' && !in_array($controller, array('o/category','o/setting'))) || ($module == 'support' && !in_array($controller, array('o/contact','o/contactcategory','o/mailsetting','o/widget'))) || ($module == 'telegrambot')))) {
		$menuRender = 1;
		$title = 'Submenu';
		
	} elseif($module == null && in_array($controller, array('content','view','history','module','globaltag','translate','menu'))) {
		$menuRender = 2;
		$title = 'Submenu';
		
	} elseif($module != null && $module == 'users') {
		$menuRender = 3;
		$title = 'Submenu';
		
	} elseif($module == null && in_array($controller, array('settings','language','theme','meta','menucategory','zonecountry','zoneprovince','zonecity','zonedistrict','zonevillage')) || ($module != null && ($module == 'report' && (in_array($controller, array('o/category','o/setting'))) || ($module == 'support' && in_array($controller, array('o/contact','o/contactcategory','o/mailsetting','o/widget')))))) {
		$menuRender = 4;
		$title = 'Submenu';
	}
?>