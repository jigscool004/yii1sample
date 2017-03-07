<?php
/* @var $this PageFieldsController */
/* @var $model PageFields */

$this->breadcrumbs=array(
	'Page Fields'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PageFields', 'url'=>array('index')),
	array('label'=>'Create PageFields', 'url'=>array('create')),
	array('label'=>'Update PageFields', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PageFields', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PageFields', 'url'=>array('admin')),
);
?>

<h1>View PageFields #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'page_id',
		'field_name',
		'status',
	),
)); ?>
