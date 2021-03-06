<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommonController
 *
 * @author jigar
 */
class CommonController {

    //put your code here
    public static function customizeGrid() {
        return array(
            'enableSorting' => true,
            'itemsCssClass' => 'table table-bordered table-striped dataTable no-footer',
            'pager' => array(
                'htmlOptions' => array('class' => 'pagination'),
                'header' => '',
                'firstPageCssClass' => ' first',
                'previousPageCssClass' => 'previous',
            ),
            'summaryText' => 'Showing {page} to {pages} of entries',
            'template' => '{items}{summary}{pager}',
            'pagerCssClass' => 'dataTables_paginate paging_simple_numbers'
        );
    }

    public static function getUserList() {
        $criteria = new CDbCriteria();
        $criteria->select = 'id,name';
        $criteria->compare('status', 1);
        $userAttr = CHtml::listData(User::model()->findAll($criteria), 'id', 'name');
        return $userAttr;
    }

    public static function hash_password($password) {
        return sha1(md5($password));
    }

    public static function getTaxRate($id = '') {
        $criteria = new CDbCriteria();
        $criteria->select = 'id, CONCAT(name," : ",rate, "%") AS name,rate';
        $criteria->compare('status',1);
        if ($id != '') {
            $criteria->compare('id',$id);
        }
        $data = TaxRate::model()->findAll($criteria);
        return $data;
    }

}
