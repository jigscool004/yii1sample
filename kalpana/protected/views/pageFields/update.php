<?php
/* @var $this PageFieldsController */
/* @var $model PageFields */

$this->breadcrumbs = array(
    'Page Fields' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List PageFields', 'url' => array('index')),
    array('label' => 'Create PageFields', 'url' => array('create')),
    array('label' => 'View PageFields', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage PageFields', 'url' => array('admin')),
);
?>
<div class="box-header with-border">
    <h3 class="box-title">Update PageFields <?php echo $model->id; ?></h3>
</div>
<div class="box-body">
    <div class="row">
        <?php $this->renderPartial('_form', array('model' => $model)); ?>
    </div>
</div>
