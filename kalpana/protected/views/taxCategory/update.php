<?php
/* @var $this TaxCategoryController */
/* @var $model TaxCategory */

$this->breadcrumbs=array(
	'Tax Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TaxCategory', 'url'=>array('index')),
	array('label'=>'Create TaxCategory', 'url'=>array('create')),
	array('label'=>'View TaxCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TaxCategory', 'url'=>array('admin')),
);
?>
<div class="box-header with-border">
        <h3 class="box-title">Update tax category</h3>
</div>
<div class="box-body">
    <div class="row">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>
    </div>
</div>