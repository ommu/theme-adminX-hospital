<?php
/**
 * @var $this SiteController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @created date 28 November 2017, 15:07 WIB
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

	$this->breadcrumbs=array(
		'Main',
	);
	
	$this->pageTitle = Yii::t('phrase', 'Main');
	$this->pageDescription = '';
	
	if(Yii::app()->user->isGuest)
		$this->redirect(array('site/login'));

	if(Yii::app()->controller->themeSetting['redirect']['rules'])
		$this->redirect(Yii::app()->controller->themeSetting['redirect']['rules']);
?>