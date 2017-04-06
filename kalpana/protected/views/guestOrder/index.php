<?php
/* @var $this GuestOrderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Guest Orders',
);

$this->menu=array(
	array('label'=>'Create GuestOrder', 'url'=>array('create')),
	array('label'=>'Manage GuestOrder', 'url'=>array('admin')),
);
?>

<h1>Guest Orders</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
