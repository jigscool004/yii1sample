<?php
/* @var $this GuestDetailController */
/* @var $model GuestDetail */

$this->breadcrumbs = array(
    'Guest Details' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List GuestDetail', 'url' => array('index')),
    array('label' => 'Manage GuestDetail', 'url' => array('admin')),
);
?>

<div class="box-header with-border">
    <h3 class="box-title">Create New Guest</h3>
</div>
<div class="box-body">
    <div class="row">
        <?php $this->renderPartial('_form', array('model' => $model)); ?>
    </div>
</div>
