<?php
/* @var $this TaxRateController */
/* @var $model TaxRate */

$this->breadcrumbs = array(
    'Tax Rates' => array('index'),
    $model->name => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List TaxRate', 'url' => array('index')),
    array('label' => 'Create TaxRate', 'url' => array('create')),
    array('label' => 'View TaxRate', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage TaxRate', 'url' => array('admin')),
);
?>

<div class="box-header with-border">
    <h3 class="box-title">Update tax rate</h3>
</div>
<div class="box-body">
    <div class="row">
        <?php $this->renderPartial('_form', array('model' => $model, 'taxCategoriesArr' => $taxCategoriesArr)); ?>
    </div>
</div>