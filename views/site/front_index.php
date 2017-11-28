<?php
/**
 * @var $this SiteController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @created date 28 November 2017, 15:07 WIB
 * @link https://github.com/OmmuThemes/adminX-hospital
 * @contact (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Main',
	);
	
	$this->layout = 'login';
	$this->pageTitle = Yii::t('phrase', 'Main');
	$this->pageDescription = '';
	
	if(Yii::app()->user->isGuest)
		$this->redirect(array('site/login'));
?>