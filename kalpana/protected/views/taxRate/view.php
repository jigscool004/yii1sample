<?php
/* @var $this TaxRateController */
/* @var $model TaxRate */

$this->breadcrumbs=array(
	'Tax Rates'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TaxRate', 'url'=>array('index')),
	array('label'=>'Create TaxRate', 'url'=>array('create')),
	array('label'=>'Update TaxRate', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TaxRate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TaxRate', 'url'=>array('admin')),
);
?>

<h1>View TaxRate #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'rate',
		'category_id',
		'status',
		'created_by',
		'created_on',
		'updated_by',
		'updated_on',
	),
)); ?>
