<?php
	/* @var $this PageController */
	/* @var $model Page */

	$this->breadcrumbs=array(
		'Pages'=>array('index'),
		'Manage',
	);

	$this->menu=array(
		array('label'=>'List Page', 'url'=>array('index')),
		array('label'=>'Create Page', 'url'=>array('create')),
	);

	Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#page-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class='role'>
	<div class='box-header'>
		<h1 class='box-title'>Manage Pages</h1>
		<div class="pull-right">
			<?php echo CHtml::link('<i class="fa fa-plus-square"></i> Add New Page',Yii::app()->createUrl('page/create'))?>
		</div>
	</div>
	<div class="box-body table-responsive">
		<?php $this->widget('zii.widgets.grid.CGridView', array_merge(CommonController::customizeGrid(),array(
			'id'=>'page-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'id' => array(
					'name' => 'id',
					'value' => '$data->id',
					'filter' => chtml::textField('Page[id]',$model->id,array('class' => 'form-control'))
				),
				'page_name' => array(
					'name' => 'page_name',
					'header' => 'Page Name',
					'value' => '$data->page_name',
					'filter' => chtml::textField('Page[controller_name]',$model->page_name,array('class' => 'form-control'))
				),
				'controller_name' => array(
					'name' => 'controller_name',
					'header' => 'Controller Name',
					'value' => '$data->controller_name',
					'filter' => chtml::textField('Page[controller_name]',$model->controller_name,array('class' => 'form-control'))
				),
				'actions',
				'status' => array(
					'header' => 'Status',
					'name' => 'status',
					'value' => 'isset($data->status) && $data->status == 1 ? "Active" : "Inactive"',
					'filter' => chtml::dropDownList('Page[status]',$model->status,array(1 => 'Active', 0 => 'Inactive'),array('class' => 'form-control','empty' => '-select-'))
				),
				array(
					'class' => 'CButtonColumn',
					'template' => '{edit}&nbsp;&nbsp;|&nbsp;&nbsp;{remove}',
					'header' => 'Actions',
					'buttons' => array(
						'edit' => array(
							'label' => '<i class="fa fa-pencil-square-o"></i> Edit ',
							'options' => array('title' => 'Edit','class' => 'remove'),
							'url' => 'Yii::app()->createUrl("page/update",array("id" => $data->id))'
						),
						'remove' => array(
							'label' => '<i class="fa fa-user-times"></i> Delete',
							'url' => 'Yii::app()->createUrl("page/delete",array("id" => $data->id))',
							'options' => array('title' => 'Delete','class' => 'delete'),
						)
					),
					'htmlOptions' => array('width' => '15%')
				),
			),
		))); ?>

	</div>
</div>
