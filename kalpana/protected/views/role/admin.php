<?php
/* @var $this RoleController */
/* @var $model Role */

$this->breadcrumbs = array(
    'Roles' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Role', 'url' => array('index')),
    array('label' => 'Create Role', 'url' => array('create')),
);

//Yii::app()->clientScript->registerScript('search', "
//$('.search-button').click(function(){
//	$('.search-form').toggle();
//	return false;
//});
//$('.search-form form').submit(function(){
//	$('#role-grid').yiiGridView('update', {
//		data: $(this).serialize()
//	});
//	return false;
//});
//");
?>

<div class='role'>
    <div class='box-header'>
        <h1 class='box-title'>Manage Roles</h1>
    </div>
    <div class="box-body table-responsive">

        <?php
        $this->widget('zii.widgets.grid.CGridView', array_merge(CommonController::customizeGrid(),array(
            'id' => 'role-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                array(
                    'name' => 'id',
                    'value' => '$data->id',
                    'filter' => false,
                    'htmlOptions' => array('width' => '5%')
                ),
                array(
                    'name' => 'role',
                    'value' => '$data->role',
                    'filter' => CHtml::textField('Role[role]', $model->role, array('class' => 'form-control')),
                    'htmlOptions' => array('width' => '35%')
                ),
                array(
                    'name' => 'status',
                    'header' => 'Status',
                    'value' => function($data) {
                        return isset($data->status) && $data->status == 1 ? 'Active' : 'Inactive';
                    },
                    'filter' => CHtml::dropDownList('Role[status]', $model->status, array(1 => 'Active', 0 => 'Inactive'), array('empty' => '- Select role', 'class' => 'form-control')),
                            'htmlOptions' => array('width' => '35%')
                )
                ,
                array(
                    'class' => 'CButtonColumn',
                    'template' => '{edit}&nbsp;&nbsp;|&nbsp;&nbsp;{remove}',
                    'header' => 'Actions',
                    'buttons' => array(
                        'edit' => array(
                            'label' => '<i class="fa fa-pencil-square-o"></i> Edit ',
                            'options' => array('title' => 'Edit','class' => 'update'),
                            'url' => 'Yii::app()->createUrl("role/update",array("id" => $data->id))'
                        ),
                        'remove' => array(
                            'label' => '<i class="fa fa-user-times"></i> Delete',
                            'url' => 'Yii::app()->createUrl("role/delete",array("id" => $data->id))',
                            'options' => array('title' => 'Delete','class' => 'delete'),
                        )
                    ),
                    'htmlOptions' => array('width' => '15%')
                ),
            ),
        )));
        ?>
    </div>
</div>