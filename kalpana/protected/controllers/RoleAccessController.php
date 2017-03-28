<?php

class RoleAccessController extends Controller {

    public function actionIndex() {

        $criteria = new CDbCriteria;
        $criteria->select = 't.page_name,t.controller_name,t.id,pf.field_name,pf.id AS field_id';
        $criteria->join = ' INNER JOIN page_fields pf ON pf.page_id = t.id';
        $criteria->compare('t.status', 1);
        $criteria->compare('pf.status', 1);
        $model = Page::model()->findAll($criteria);
        $pageGroupingArr = CHtml::listData($model, 'field_id', 'field_name', 'id');
        $this->render('index', array(
            'model' => $model,
            'pageGroupArr' => $pageGroupingArr
        ));
    }

    // Uncomment the following methods and override them if needed
    /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class'=>'path.to.FilterClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }

      public function actions()
      {
      // return external action classes, e.g.:
      return array(
      'action1'=>'path.to.ActionClass',
      'action2'=>array(
      'class'=>'path.to.AnotherActionClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }
     */
}
