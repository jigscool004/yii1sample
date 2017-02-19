<?php
/* @var $this TaxRateController */
/* @var $model TaxRate */

$this->breadcrumbs=array(
	'Tax Rates'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TaxRate', 'url'=>array('index')),
	array('label'=>'Create TaxRate', 'url'=>array('create')),
	array('label'=>'View TaxRate', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TaxRate', 'url'=>array('admin')),
);
?>

<h1>Update TaxRate <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>