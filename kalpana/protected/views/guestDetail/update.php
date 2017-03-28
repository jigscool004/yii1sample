<?php
/* @var $this GuestDetailController */
/* @var $model GuestDetail */

$this->breadcrumbs = array(
    'Guest Details' => array('index'),
    $model->first_name . " " . $model->last_name => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List GuestDetail', 'url' => array('index')),
    array('label' => 'Create GuestDetail', 'url' => array('create')),
    array('label' => 'View GuestDetail', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage GuestDetail', 'url' => array('admin')),
);
?>
<div class="box-header with-border">
    <h3 class="box-title">Update Guest details</h3>
</div>
<div class="box-body">
    <div class="row">
        <?php $this->renderPartial('_form', array('model' => $model)); ?>
    </div>
</div>
