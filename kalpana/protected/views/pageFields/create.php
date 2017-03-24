<?php
/* @var $this PageFieldsController */
/* @var $model PageFields */

$this->breadcrumbs = array(
    'Page Fields' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List PageFields', 'url' => array('index')),
    array('label' => 'Manage PageFields', 'url' => array('admin')),
);
?>

<div class="box-header with-border">
    <h3 class="box-title">Create new page fields</h3>
</div>
<div class="box-body">
    <div class="row">
        <?php $this->renderPartial('_form', array('model' => $model)); ?>
    </div>
</div>
