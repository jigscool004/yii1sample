<?php
/* @var $this TaxRateController */
/* @var $model TaxRate */

$this->breadcrumbs=array(
	'Tax Rates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TaxRate', 'url'=>array('index')),
	array('label'=>'Manage TaxRate', 'url'=>array('admin')),
);
?>

<h1>Create TaxRate</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>