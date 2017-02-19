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
                 'header'         => '',
                'firstPageCssClass' => ' first',
                'previousPageCssClass' => 'previous',
                
                
            ),
            'summaryText' => 'Showing {page} to {pages} of entries',
            'template'=>'{items}{summary}{pager}',
        );
    }
}
