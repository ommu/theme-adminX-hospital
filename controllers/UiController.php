<?php
/**
 * UiController
 * @var $this UiController
 * version: 1.3.0
 * Reference start
 *
 * TOC :
 *	Index
 *	Signup
 *	Forgot
 *	Reset
 *	Verify
 *	Email
 *	Username
 *
 *	LoadModel
 *	performAjaxValidation
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2012 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/ommu
 * @contact (+62)856-299-4114
 *
 *----------------------------------------------------------------------------------------------------------
 */

class UiController extends Controller
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
				'actions'=>array('index','typography','helperclasses','alerts','animations','badges','breadcrumbs','buttons','collapse','colors','dialogs','icons','labels','listgroup','mediaobject','modals','notifications','pagination','preloaders','progressbars','rangesliders','sortablenestable','tabs','waves'),
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
		$this->redirect(Yii::app()->createUrl('site/index'));
	}
	
	/**
	 * Displays the login page
	 */
	public function actionTypography()
	{
		$this->pageTitle = Yii::t('phrase', 'Typography');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_typography');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionHelperclasses()
	{
		$this->pageTitle = Yii::t('phrase', 'Helper Clasdees');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_helperclasses');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionAlerts()
	{
		$this->pageTitle = Yii::t('phrase', 'Alerts');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_alerts');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionAnimations()
	{
		$this->pageTitle = Yii::t('phrase', 'Animations');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_animations');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionBadges()
	{
		$this->pageTitle = Yii::t('phrase', 'Badges');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_badges');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionBreadcrumbs()
	{
		$this->pageTitle = Yii::t('phrase', 'Breadcrumbs');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_breadcrumbs');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionButtons()
	{
		$this->pageTitle = Yii::t('phrase', 'Buttons');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_buttons');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionCollapse()
	{
		$this->pageTitle = Yii::t('phrase', 'Collapse');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_collapse');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionColors()
	{
		$this->pageTitle = Yii::t('phrase', 'Colors');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_colors');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionDialogs()
	{
		$this->pageTitle = Yii::t('phrase', 'Sweet Alert Dialogs');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_dialogs');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionIcons()
	{
		$this->pageTitle = Yii::t('phrase', 'Material Design Icons');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_icons');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionLabels()
	{
		$this->pageTitle = Yii::t('phrase', 'Labels');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_labels');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionListgroups()
	{
		$this->pageTitle = Yii::t('phrase', 'List groups');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_listgroup');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionMediaobject()
	{
		$this->pageTitle = Yii::t('phrase', 'Media Object');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_mediaobject');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionModals()
	{
		$this->pageTitle = Yii::t('phrase', 'Modals');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_modals');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionNotifications()
	{
		$this->pageTitle = Yii::t('phrase', 'Notifications');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_notifications');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionPagination()
	{
		$this->pageTitle = Yii::t('phrase', 'Pagination');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_pagination');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionPreloaders()
	{
		$this->pageTitle = Yii::t('phrase', 'Preloaders');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_preloaders');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionProgressbars()
	{
		$this->pageTitle = Yii::t('phrase', 'Progress Bars');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_progressbars');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionRangesliders()
	{
		$this->pageTitle = Yii::t('phrase', 'Range Sliders');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_rangesliders');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionSortablenestable()
	{
		$this->pageTitle = Yii::t('phrase', 'Sortable & Nestable');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_sortable_nestable');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionTabs()
	{
		$this->pageTitle = Yii::t('phrase', 'Tabs');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_tabs');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionWaves()
	{
		$this->pageTitle = Yii::t('phrase', 'Waves');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_waves');
	}
}