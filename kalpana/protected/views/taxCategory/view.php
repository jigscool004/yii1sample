<?php
/* @var $this TaxCategoryController */
/* @var $model TaxCategory */

$this->breadcrumbs = array(
    'Tax Categories' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List TaxCategory', 'url' => array('index')),
    array('label' => 'Create TaxCategory', 'url' => array('create')),
    array('label' => 'Update TaxCategory', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete TaxCategory', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage TaxCategory', 'url' => array('admin')),
);
?>

<h1>View TaxCategory #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'name',
        'category',
        'status',
        'created_on',
        'created_by',
    ),
));
?>
