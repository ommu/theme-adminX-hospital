<?php
/**
 * PatientController
 * @var $this PatientController
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

class PatientController extends Controller
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
				'actions'=>array('index','add','profile','invoice'),
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
		$this->pageTitle = Yii::t('phrase', 'All Patients');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_index');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionAdd()
	{
		$this->pageTitle = Yii::t('phrase', 'Add Patient');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_add');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionProfile()
	{
		$this->pageTitle = Yii::t('phrase', 'Patient Profile');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_profile');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionInvoice()
	{
		$this->pageTitle = Yii::t('phrase', 'Invoice');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_invoice');
	}
}