<?php
/* @var $this HotelController */
/* @var $model Hotel */

$this->breadcrumbs = array(
    'Hotels' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List Hotel', 'url' => array('index')),
    array('label' => 'Manage Hotel', 'url' => array('admin')),
);
?>
<div class="box-header with-border">
    <h3 class="box-title">Create Hotel</h3>
</div>
<div class="box-body">
    <div class="row">
        <?php $this->renderPartial('_form', array('model' => $model)); ?>
    </div>
</div>
