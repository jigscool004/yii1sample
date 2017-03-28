<?php
/* @var $this GuestOrderController */
/* @var $model GuestOrder */

$this->breadcrumbs=array(
	'Guest Orders'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List GuestOrder', 'url'=>array('index')),
	array('label'=>'Create GuestOrder', 'url'=>array('create')),
	array('label'=>'Update GuestOrder', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GuestOrder', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GuestOrder', 'url'=>array('admin')),
);
?>

<h1>View GuestOrder #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'guest_id',
		'order_date',
		'order_time',
		'order_name',
		'qty',
		'price',
		'include_tax',
		'created_by',
		'created_on',
		'updated_by',
		'updated_on',
	),
)); ?>
