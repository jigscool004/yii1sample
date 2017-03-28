<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController {

    /**
     * @var string the default layout for the controller view. Defaults to '//layouts/column1',
     * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
     */
    public $layout = '//layouts/column1';

    /**
     * @var array context menu items. This property will be assigned to {@link CMenu::items}.
     */
    public $menu = array();

    /**
     * @var array the breadcrumbs of the current page. The value of this property will
     * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
     * for more details on how to specify this property.
     */
    public $breadcrumbs = array();

    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    public function accessRules() {
        $allowtoAllUserArr = array(
            'login'
        );
        $accessArr = array();
        $role_id = Yii::app()->user->getState('role_id');
        $criteria = new CDbCriteria();
        $criteria->compare('role_id',$role_id);
        $pageAccessDataArr = RoleAccess::model()->findAll($criteria);
        $pageAccessArr = array();
        foreach ($pageAccessDataArr as $page) {
            $pageAccessArr[$page->controller_name] = array(
                'access' => isset($page->access_list) && $page->access_list != '' ? explode(',',$page->access_list) : array(),
                'deny' => isset($page->denied_list) && $page->denied_list != '' ? explode(',',$page->denied_list) : array(),
            );
        }
        $controllerId = Yii::app()->controller->id;


        $accessArr[] = array(
            'allow',
            'actions' => $pageAccessArr[$controllerId]['access'],
            'users' => array('*')
        );

        if (count($pageAccessArr[$controllerId]['deny']) > 0) {
            $accessArr[] = array(
                'deny',
                'actions' => $pageAccessArr[$controllerId]['deny'],
                'users' => array('*')
            );
        }


        

        //echo "<pre>"; print_r($accessArr); echo "</pre>";
        return $accessArr;

        //exit;
        /*$pageAccessList = Yii::app()->User->getState('pageAccessList');
        //echo "<pre>"; print_r($pageAccessList); echo "</pre>";
        $accessArr = array();

        if (isset($pageAccessList[$controllerId])) {
            $accessArr[] = array(
                'allow',
                'actions' => $pageAccessList[$controllerId],
                'users' => '@'
            );
        }

        //echo $controllerId;
        if ($controllerId == 'guestDetail') {
            $accessArr[] = array(
                'deny',
                'actions' => 'index,create,update,delete',
                'users' => '@'
            );
        }*/

        //echo "<pre>"; print_r($accessArr); echo "</pre>"; exit;


    }

    public function beforeAction($action) {
        $controllerName = Yii::app()->controller->id;
        $actionUrl = $controllerName . '/' . $action->id;
        $actionurlArr = array(
            'site/login',
            'site/logout'
        );
        //var_dump(Yii::app()->user->isGuest);
        if (Yii::app()->user->isGuest) {
            if (!in_array($actionUrl, $actionurlArr)) {
                $this->redirect(Yii::app()->createUrl('site/login'));
            }
        }
        return $action;
    }

}
