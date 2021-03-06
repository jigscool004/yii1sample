<?php

class RoleController extends Controller {
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    //public $layout='//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
                //array('ext.booster.filters.BootstrapFilter')
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'delete'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->pageTitle = 'Role Management';
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Role;
        $this->pageTitle = 'Create new role';

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);
        $roleAccess = RoleController::roleAccess();
        if (isset($_POST['Role'])) {
            $model->attributes = $_POST['Role'];
            if ($model->save()) {
                $this->saveRoleAccessData($model->id,$roleAccess);
                $this->redirect(array('index'));
            }
        }

        $this->render('create', array(
            'model' => $model,
            'roleAccess' => $roleAccess,
        ));
    }

    /**
     * @param $role_id
     */
    private function saveRoleAccessData($role_id,$roleAccess_data) {
        $pageAccessArr = array();
        $role = Yii::app()->request->getPost('Role');
        foreach ($roleAccess_data as $key => $roleAccess) {
            $accessActionNameArr = $deniedActionNameArr = array();
            if (isset($role['page_field_id'][$roleAccess->id])) {
                $actionNameArr = explode(',',$roleAccess->actions_name);
                $deniedActionNameArr = array_diff($actionNameArr,$role['page_field_id'][$roleAccess->id]);
                $accessActionNameArr = $role['page_field_id'][$roleAccess->id];
            } else {
                $deniedActionNameArr = explode(',',$roleAccess->actions_name);
            }

            $pageAccessArr[$roleAccess->id] = array(
                'role_id' => $role_id,
                'controller_name' => $roleAccess->controller_name,
                'access_list' => count($accessActionNameArr) > 0 ? implode(',',$accessActionNameArr) : '',
                'denied_list' => count($deniedActionNameArr) > 0 ? implode(',',$deniedActionNameArr) : '',
            );
        }

        $criteria = new CDbCriteria();
        $criteria->compare('role_id', $role_id);
        RoleAccess::model()->deleteAll($criteria);
        if (count($pageAccessArr) > 0) {
            $builder = Yii::app()->db->schema->commandBuilder;
            $builder->createMultipleInsertCommand('role_access', $pageAccessArr)->execute();
        }
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        $criteria = new CDbCriteria();
        $criteria->compare('role_id', $id);
        $roleAccess = RoleAccess::model()->findAll($criteria); //,'page_id','page_field_id');
        $roleAccessData = RoleController::roleAccess();
        $roleAccessArr = array();

        if (count($roleAccess) > 0) {
            foreach ($roleAccess as $key => $roleaccess_data) {
             //   echo $roleaccess_data->controller_name . " >>>>>> " . $roleaccess_data->access_list . ' <<<< <hr>';
                $roleAccessArr[$roleaccess_data->controller_name] = $roleaccess_data->access_list != "" ?
                                                            explode(',',$roleaccess_data->access_list) : array();
            }
        }
        //echo "<pre>"; print_r($roleAccessArr); echo "</pre>"; exit;
        if (isset($_POST['Role'])) {
            $model->attributes = $_POST['Role'];
            if ($model->save()) {
                $this->saveRoleAccessData($model->id,$roleAccessData);
                $this->redirect(array('index'));
            }
        }

        $this->render('update', array(
            'model' => $model,
            'roleAccessArr' => $roleAccessArr,
            'roleAccess' => $roleAccessData,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $id = $this->loadModel($id)->delete();
        if ($id) {
            $this->redirect('index');
        }
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex2() {

        $model = new Role('search');
        if (isset($_REQUEST['role'])) {
            $model->attributes = $_REQUEST['role'];
        }
        $this->render('index', array(
            'model' => $model,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionIndex() {
        $model = new Role('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Role']))
            $model->attributes = $_GET['Role'];


        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Role the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Role::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Role $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'role-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public static function roleAccess() {
        $criteria = new CDbCriteria;
        //$criteria->select = 't.page_name,t.controller_name,t.id,pf.field_name,pf.id AS field_id';
        //$criteria->join = ' INNER JOIN page_fields pf ON pf.page_id = t.id';
        $criteria->compare('t.status', 1);

        $model = Page::model()->findAll($criteria);
        
        return $model;
    }

}
