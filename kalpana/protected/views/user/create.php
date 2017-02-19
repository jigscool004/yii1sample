<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>


<div class='role'>
    <div class='box-header'>
        <h1 class='box-title'>Create User</h1>
    </div>
    <div class="box-body table-responsive">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>

    </div>
</div>