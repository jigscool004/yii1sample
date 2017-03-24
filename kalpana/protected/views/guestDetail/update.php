<?php
/* @var $this GuestDetailController */
/* @var $model GuestDetail */

$this->breadcrumbs = array(
    'Guest Details' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List GuestDetail', 'url' => array('index')),
    array('label' => 'Create GuestDetail', 'url' => array('create')),
    array('label' => 'View GuestDetail', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage GuestDetail', 'url' => array('admin')),
);
?>

<h1>Update GuestDetail <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>