<?php
class SidebarMenuAccount extends CWidget
{
	public $imageDefault;
	
	public function init() {
		$imageDefault = 'public/users/default.png';
		if(file_exists($imageDefault))
			$this->imageDefault = Yii::app()->request->baseUrl.'/'.$imageDefault;
	}

	public function run() {
		$this->renderContent();
	}

	protected function renderContent() {
		$module = strtolower(Yii::app()->controller->module->id);
		$controller = strtolower(Yii::app()->controller->id);
		$action = strtolower(Yii::app()->controller->action->id);
		$currentAction = strtolower(Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);
		$currentModule = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id);
		$currentModuleAction = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);

		$model = Users::model()->findByPk(Yii::app()->user->id, array(
			'select' => 'photos',
		));

		$this->render('sidebar_menu_account',array(
			'model'=>$model,
			'module'=>$module,
			'controller'=>$controller,
			'action'=>$action,
			'currentAction'=>$currentAction,
			'currentModule'=>$currentModule,
			'currentModuleAction'=>$currentModuleAction,
		));	
	}
}
