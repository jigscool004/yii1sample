<?php
/* @var $this GuestOrderController */
/* @var $model GuestOrder */

$this->breadcrumbs=array(
	'Guest Orders'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GuestOrder', 'url'=>array('index')),
	array('label'=>'Create GuestOrder', 'url'=>array('create')),
	array('label'=>'View GuestOrder', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GuestOrder', 'url'=>array('admin')),
);
?>

<h1>Update GuestOrder <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>