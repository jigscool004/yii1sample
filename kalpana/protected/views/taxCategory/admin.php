<?php
/* @var $this TaxCategoryController */
/* @var $model TaxCategory */

$this->breadcrumbs=array(
	'Tax Categories'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TaxCategory', 'url'=>array('index')),
	array('label'=>'Create TaxCategory', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tax-category-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="box-header with-border">
        <h3 class="box-title">Manage Tax Categories</h3>
        <div class="pull-right">
            <?php echo CHtml::link('<i class="fa fa-plus-square"></i> Add New tax category',Yii::app()->createUrl('TaxCategory/create'))?>
        </div>
</div>
<div class="box-body table-responsive">
        <?php $this->widget('zii.widgets.grid.CGridView', array_merge(CommonController::customizeGrid(),array(
            'id'=>'tax-category-grid',
            'dataProvider'=>$model->search(),
            'filter'=>$model,
            'columns'=>array(
                'id',
                'name',
                'category',
                'status',
                'created_on',
                'created_by',
                /*
                'updated_on',
                'updated_by',
                */
                array(
                    'class'=>'CButtonColumn',
                ),
            ),)
        )); ?>
</div>