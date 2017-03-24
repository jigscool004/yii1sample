<?php

class RoomController extends Controller {
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    //public $layout='//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        parent::filters();
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        parent::accessRules();
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Room;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Room'])) {
            $_POST['Room']['created_by'] = 1;
            $_POST['Room']['created_on'] = date("Y-m-d H:i:s");
            $model->attributes = $_POST['Room'];


            if ($model->save())
                $this->redirect(array('index'));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Room'])) {
            $_POST['Room']['updated_by'] = 1;
            $_POST['Room']['updated_on'] = date("Y-m-d H:i:s");

            $model->attributes = $_POST['Room'];
            if ($model->save())
                $this->redirect(array('index'));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $model = new Room('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Room']))
            $model->attributes = $_GET['Room'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Room('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Room']))
            $model->attributes = $_GET['Room'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Room the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Room::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Room $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'room-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGetEquipment() {
        $name = Yii::app()->request->getParam('name');
        $criteria = new CDbCriteria();
        $criteria->select = 'id,name';
        $criteria->compare('name', $name, true);
        $criteria->compare('status', 1);
        $equipment = Equipment::model()->findAll($criteria);
        $equipmentArr = array();
        foreach ($equipment as $key => $eq) {
            $equipmentArr[$key] = array(
                'id' => $eq->id,
                'name' => $eq->name
            );
        }
        echo json_encode($equipmentArr);
        YII::app()->end();
    }

}
