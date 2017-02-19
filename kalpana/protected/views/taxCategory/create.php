<?php
/* @var $this TaxCategoryController */
/* @var $model TaxCategory */

$this->breadcrumbs=array(
	'Tax Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TaxCategory', 'url'=>array('index')),
	array('label'=>'Manage TaxCategory', 'url'=>array('admin')),
);
?>

<div class="box-header with-border">
        <h3 class="box-title">Create tax category</h3>
</div>
<div class="box-body">
    <div class="row">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>
    </div>
</div>
