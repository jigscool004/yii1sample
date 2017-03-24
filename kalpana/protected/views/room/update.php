<?php
/* @var $this RoomController */
/* @var $model Room */

$this->breadcrumbs = array(
    'Rooms' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List Room', 'url' => array('index')),
    array('label' => 'Create Room', 'url' => array('create')),
    array('label' => 'View Room', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage Room', 'url' => array('admin')),
);
?>

<div class="box-header with-border">
    <h3 class="box-title">Update Room <?php echo $model->id; ?></h3>
</div>
<div class="box-body">
    <div class="row">
        <?php $this->renderPartial('_form', array('model' => $model)); ?>
    </div>
</div>
