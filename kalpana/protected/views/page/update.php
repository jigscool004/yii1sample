<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs = array(
    'Pages' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List Page', 'url' => array('index')),
    array('label' => 'Create Page', 'url' => array('create')),
    array('label' => 'View Page', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage Page', 'url' => array('admin')),
);
?>

<div class="box-header with-border">
    <h3 class="box-title">Update Page <?php echo $model->id; ?></h3>
</div>
<div class="box-body">
    <div class="row">
        <?php $this->renderPartial('_form', array('model' => $model)); ?>
    </div>
</div>
