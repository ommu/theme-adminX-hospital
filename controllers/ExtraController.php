<?php
/**
 * ExtraController
 * @var $this ExtraController
 * version: 1.3.0
 * Reference start
 *
 * TOC :
 *	Index
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2012 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/ommu
 * @contact (+62)856-299-4114
 *
 *----------------------------------------------------------------------------------------------------------
 */

class ExtraController extends Controller
{
	/**
	 * Initialize public template
	 */
	public function init() 
	{
		$arrThemes = Utility::getCurrentTemplate('public');
		Yii::app()->theme = $arrThemes['folder'];
		$this->layout = $arrThemes['layout'];
		Utility::applyViewPath(__dir__, false);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules() 
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','search','chat'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	/**
	 * Displays the login page
	 */
	public function actionIndex()
	{
		$this->redirect(Yii::app()->controller->createUrl('search'));
	}
	
	/**
	 * Displays the login page
	 */
	public function actionSearch()
	{
		$this->pageTitle = Yii::t('phrase', 'Search Results');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_search');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionChat()
	{
		$this->pageTitle = Yii::t('phrase', 'Chats');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_chat');
	}
}