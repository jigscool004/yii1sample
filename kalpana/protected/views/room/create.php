<?php
/* @var $this RoomController */
/* @var $model Room */

$this->breadcrumbs = array(
    'Rooms' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List Room', 'url' => array('index')),
    array('label' => 'Manage Room', 'url' => array('admin')),
);
?>
<div class="box-header with-border">
    <h3 class="box-title">Create Room</h3>
</div>
<div class="box-body">
    <div class="row">
        <?php $this->renderPartial('_form', array('model' => $model)); ?>
    </div>
</div>