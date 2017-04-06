<?php

class GuestDetailController extends Controller {
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
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        $data = array();
        $data = array(
            array(
                'allow',
                'actions' => array('GetRoomList'),
                'users' => array('*')
            )
        );
        $data1 = array_merge($data,parent::accessRules());


        //echo "<pre>"; print_r($data1); echo "</pre>"; exit;
        return $data1;
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $orderModel=new GuestOrder('search');
        $orderModel->unsetAttributes();  // clear any default values
        if(isset($_GET['GuestOrder'])) {
            $orderModel->attributes=$_GET['GuestOrder'];
        }
        $this->render('view', array(
            'model' => $this->loadModel($id),
            'orderModel' => $orderModel,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new GuestDetail;

        // Uncomment the following line if AJAX validation is needed
         $this->performAjaxValidation($model);

        if (isset($_POST['GuestDetail'])) {

            $_POST['GuestDetail']['photos'] = $this->uploadFile($model);
            $_POST['GuestDetail']['created_by'] = YII::app()->user->getId();
            $_POST['GuestDetail']['created_on'] = date('Y-m-d h:i:s');
            $_POST['GuestDetail']['checkin_date'] = isset($_POST['GuestDetail']['checkin_date']) ? date('Y-m-d',strtotime($_POST['GuestDetail']['checkin_date'])) :'';
            $model->attributes = $_POST['GuestDetail'];
            if ($model->save()) {
                $guestDetail = GuestDetail::model()->findByPk($model->id);
                $guestDetail->guest_id = str_pad($guestDetail->id, 5, '0', STR_PAD_LEFT);
                $guestDetail->save();
                $this->redirect(array('index'));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function uploadFile($model) {
        $photos = CUploadedFile::getInstancesByName('GuestDetail[photos]');
        $photoNameArr = array();

        if (count($photos) > 0) {
            foreach($photos as $key => $pic) {
                $imgPath = Yii::getPathOfAlias('webroot') .'/upload/guest_photos/';
                $isUpload = $pic->saveAs($imgPath .$pic->name);
                if ($isUpload) {
                    $photoNameArr[] = $pic->name;

                }
            }
        }
        if (isset($model->photos) && $model->photos != '') {
            $previousPhoto = explode(',',$model->photos);
            $photoNameArr = array_merge($photoNameArr,$previousPhoto);
        }
        
        return count($photoNameArr) > 0 ? implode(',',$photoNameArr) : '';
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

        if (isset($_POST['GuestDetail'])) {
            $_POST['GuestDetail']['photos'] = $this->uploadFile($model);
            $_POST['GuestDetail']['updated_by'] = YII::app()->user->getId();
            $_POST['GuestDetail']['updated_on'] = date('Y-m-d h:i:s');
            $_POST['GuestDetail']['checkin_date'] = isset($_POST['GuestDetail']['checkin_date']) ? date('Y-m-d',strtotime($_POST['GuestDetail']['checkin_date'])) :'';
            $model->attributes = $_POST['GuestDetail'];
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
        $model = new GuestDetail('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['GuestDetail']))
            $model->attributes = $_GET['GuestDetail'];

        $ischeckout = 0;
        if (isset($_GET['checkout']) && strtolower($_GET['checkout']) == 'y') {
            $ischeckout = 1;
        }



        $this->render('index', array(
            'model' => $model,
            'ischeckout' => $ischeckout,

        ));
    }

    public function actionCheckout() {
        $this->render('checkout');
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new GuestDetail('search');
        $model->unsetAttributes();  // clear any default values
        
        if (isset($_GET['GuestDetail']))
            $model->attributes = $_GET['GuestDetail'];

        

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return GuestDetail the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = GuestDetail::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param GuestDetail $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'guest-detail-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public static function getRoomDetails($id = '') {
        $criteria = new CDbCriteria(); //equipment_id	
        $criteria->select = 't.*,GROUP_CONCAT(e.name) AS equipment_name';
        $criteria->join = ' JOIN equipment e ON FIND_IN_SET(e.id,t.equipment_id)';
        //$criteria->join .= ' JOIN guest_detail gd ON gd.room_id != t.id';
        if ($id != '') {
            $criteria->compare('t.id', $id);
        } else {
            $criteria->addCondition('t.id NOT IN (SELECT DISTINCT room_id FROM guest_detail)');
        }
        $criteria->group = 't.id';
        $data = Room::model()->findAll($criteria);
        return $data;
    }

    public function ActionGetRoomList($id) {
        $criteria = new CDbCriteria();
        $criteria->select = 't.*, GROUP_CONCAT(e.name) AS equipment_name';
        $criteria->compare('t.id',$id);
        $criteria->join = ' LEFT JOIN equipment e ON FIND_IN_SET(e.id,t.equipment_id)';
        $roomDetail = Room::model()->find($criteria);
        $roomDetailArr = array(
            'room_no' => $roomDetail->room_name,
            'floor_no' => $roomDetail->floor_no,
            'room_name' => $roomDetail->room_name,
            'single_bed' => $roomDetail->single_bed,
            'double_bed' => $roomDetail->double_bed,
            'extra_bed' => $roomDetail->extra_bed,
            'equipment' => $roomDetail->equipment_name,
            'room_rate' => $roomDetail->room_rate,

        );

        Yii::app()->end();
    }

}
