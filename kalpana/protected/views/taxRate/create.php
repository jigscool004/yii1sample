<?php
/* @var $this TaxRateController */
/* @var $model TaxRate */

$this->breadcrumbs = array(
    'Tax Rates' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List TaxRate', 'url' => array('index')),
    array('label' => 'Manage TaxRate', 'url' => array('admin')),
);
?>

<div class="box-header with-border">
    <h3 class="box-title">create and manage new tax rate</h3>
</div>
<div class="box-body">
    <div class="row">
        <?php $this->renderPartial('_form', array('model' => $model, 'taxCategoriesArr' => $taxCategoriesArr)); ?>
    </div>
</div>
