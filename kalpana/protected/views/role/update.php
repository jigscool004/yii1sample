<?php
/* @var $this RoleController */
/* @var $model Role */

$this->breadcrumbs=array(
	'Roles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Role', 'url'=>array('index')),
	array('label'=>'Create Role', 'url'=>array('create')),
	array('label'=>'View Role', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Role', 'url'=>array('admin')),
);
?>

<div class="box-header with-border">
        <h3 class="box-title">Update role</h3>
</div>
<div class="box-body">
	<div class="row">
<?php $this->renderPartial('_form', array('model'=>$model,'roleAccessArr' => $roleAccessArr)); ?>
	</div>
</div>