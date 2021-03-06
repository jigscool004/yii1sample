<?php

class GuestOrderController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules() {
		return parent::accessRules();
		/*return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);*/
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($id) {
		$model=new GuestOrder;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);
		$this->layout = "//layouts/ajax";

		if(isset($_POST['GuestOrder']))
		{
			$_POST['GuestOrder']['order_date'] = isset($_POST['GuestOrder']['order_date']) && $_POST['GuestOrder']['order_date'] != ''?
													date('Y-m-d',strtotime($_POST['GuestOrder']['order_date'])) : '';

			$_POST['GuestOrder']['created_on'] = date('Y-m-d');
			$_POST['GuestOrder']['created_by'] = Yii::app()->user->getId();
			$model->attributes=$_POST['GuestOrder'];

			if($model->save()) {
				echo 1;
				Yii::app()->end();
			} else {
				echo 0;
				Yii::app()->end();
			}
				//$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
			'id' => $id,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id) {
		$model=$this->loadModel($id);
		$this->layout = "//layouts/ajax";
		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);

		if(isset($_POST['GuestOrder'])) {
			$guest_id = $model->guest_id;
			$_POST['GuestOrder']['order_date'] = isset($_POST['GuestOrder']['order_date']) && $_POST['GuestOrder']['order_date'] != "" ?
				date('Y-m-d',strtotime($_POST['GuestOrder']['order_date'])) : '';
			$model->attributes=$_POST['GuestOrder'];
			$model->updated_by = Yii::app()->user->getId();
			$model->updated_on = date('Y-m-d H:i:s');
			$model->guest_id = $guest_id;
			if($model->save()) {
				echo 1;
			} else {
				echo 0;
			}
			Yii::app()->end();
			//	$this->redirect(array('view','id'=>$model->id));
			
			
		}

		$this->render('update',array(
			'model'=>$model,
			'id' => $id,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('GuestOrder');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new GuestOrder('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['GuestOrder']))
			$model->attributes=$_GET['GuestOrder'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return GuestOrder the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=GuestOrder::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param GuestOrder $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='guest-order-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
