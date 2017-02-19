<?php
/* @var $this RoleController */
/* @var $model Role */

$this->breadcrumbs=array(
	'Roles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Role', 'url'=>array('index')),
	array('label'=>'Manage Role', 'url'=>array('admin')),
);
?>
<div class="box-header with-border">
        <h3 class="box-title">create and manage new role</h3>
</div>
<div class="box-body">
	<div class="row">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		
	</div>
</div>



