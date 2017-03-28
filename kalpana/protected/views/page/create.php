<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs = array(
    'Pages' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List Page', 'url' => array('index')),
    array('label' => 'Manage Page', 'url' => array('admin')),
);
?>
<div class="box-header with-border">
    <h3 class="box-title">Create new page</h3>
</div>
<div class="box-body">
    <div class="row">
        <?php $this->renderPartial('_form', array('model' => $model)); ?>
    </div>
</div>
