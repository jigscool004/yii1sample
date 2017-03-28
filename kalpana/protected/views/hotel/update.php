<?php
/* @var $this HotelController */
/* @var $model Hotel */

$this->breadcrumbs = array(
    'Hotels' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List Hotel', 'url' => array('index')),
    array('label' => 'Create Hotel', 'url' => array('create')),
    array('label' => 'View Hotel', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage Hotel', 'url' => array('admin')),
);
?>
<div class="box-header with-border">
    <h3 class="box-title">Update Hotel <?php echo $model->id; ?></h3>
</div>
<div class="box-body">
    <div class="row">
        <?php $this->renderPartial('_form', array('model' => $model)); ?>
    </div>
</div>
