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
$userAttr = CommonController::getUserList();
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
                'id' => array(
                    'name' => 'id',
                    'value' => '$data->id',
                    'filter' => false,
                ),
                'name' => array(
                    'name' => 'name',
                    'header' => 'Name',
                    'value' => '$data->name',
                    'sortable' => true,
                    'filter' => CHtml::textField('TaxCategory[name]',$model->name,array('class' => 'form-control'))
                ),
                'category' => array(
                    'name' => 'category',
                    'header' => 'Category',
                    'value' => function($data){
                        return $data->category == 1 ? 'Guest Check in Tax' : 'Guest Check out Tax';
                    },
                    'sortable' => true,
                    'filter' => CHtml::dropDownList('TaxCategory[category]',$model->category,array( 1 => 'Guest Check in Tax',2 => 'Guest Check out Tax'),array('class' => 'form-control','empty' => '- Select -'))
                ),
                'status' => array(
                    'name' => 'status',
                    'header' => 'Status',
                    'value' => function($data){
                        return $data->status == 1 ? 'Active' : 'Inactive';
                    },
                    'sortable' => true,
                    'filter' => CHtml::dropDownList('TaxCategory[status]',$model->status,array( 1 => 'Active', 0 => 'Inactive'),array('class' => 'form-control','empty' => '- Select -'))   
                ),
                 'created_by' => array(
                    'name' => 'created_by',
                    'value' => function($data) use ($userAttr){
                        if (isset($userAttr[$data->id])) {
                            return $userAttr[$data->id];
                        }
                    },
                    'filter' => CHtml::dropDownList('TaxCategory[created_by]',$model->created_by,$userAttr,array('class' => 'form-control','empty' => '- Select-'))
                ),            
                'created_on' => array(
                    'name' => 'created_on',
                    'value' => function($data) {
                        if (isset($data->created_on) && $data->created_on != "") {
                            return date('d-m-Y', strtotime($data->created_on));
                        }
                    }
                ),
                array(
                    'class' => 'CButtonColumn',
                    'template' => '{edit}&nbsp;&nbsp;|&nbsp;&nbsp;{remove}',
                    'header' => 'Actions',
                    'buttons' => array(
                        'edit' => array(
                            'label' => '<i class="fa fa-pencil-square-o"></i> Edit ',
                            'options' => array('title' => 'Edit','class' => 'update'),
                            'url' => 'Yii::app()->createUrl("taxCategory/update",array("id" => $data->id))'
                        ),
                        'remove' => array(
                            'label' => '<i class="fa fa-user-times"></i> Delete',
                            'url' => 'Yii::app()->createUrl("taxCategory/delete",array("id" => $data->id))',
                            'options' => array('title' => 'Delete','class' => 'delete'),
                        )
                    ),
                    'htmlOptions' => array('width' => '15%')
                ),
            ),)
        )); ?>
</div>