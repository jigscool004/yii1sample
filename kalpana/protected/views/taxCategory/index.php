<?php
/* @var $this TaxCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tax Categories',
);

$this->menu=array(
	array('label'=>'Create TaxCategory', 'url'=>array('create')),
	array('label'=>'Manage TaxCategory', 'url'=>array('admin')),
);
?>

<h1>Tax Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
