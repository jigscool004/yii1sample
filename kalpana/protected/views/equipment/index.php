<?php

/* @var $this EquipmentController */
/* @var $model Equipment */

$this->breadcrumbs = array(
    'Equipments' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Equipment', 'url' => array('index')),
    array('label' => 'Create Equipment', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#equipment-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php

$this->widget('zii.widgets.grid.CGridView', array_merge(
                array(
    'id' => 'equipment-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'name',
        'status',
        'created_by',
        'created_on',
        'updated_by',
        /*
          'updated_on',
         */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
                ), CommonController::customizeGrid()
));
?>
