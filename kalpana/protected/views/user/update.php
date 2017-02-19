<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<div class='user'>
    <div class='box-header'>
        <h1 class='box-title'>Update User</h1>
    </div>
    <div class="box-body table-responsive">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>
    </div>
</div>
