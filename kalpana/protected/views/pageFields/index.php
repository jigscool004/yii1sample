<?php
	/* @var $this PageFieldsController */
	/* @var $model PageFields */

	$this->breadcrumbs=array(
		'Page Fields'=>array('index'),
		'Manage',
	);

	$this->menu=array(
		array('label'=>'List PageFields', 'url'=>array('index')),
		array('label'=>'Create PageFields', 'url'=>array('create')),
	);

	Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#page-fields-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");


?>

<div class='role'>
	<div class='box-header'>
		<h1 class='box-title'>Manage Page Fields</h1>
		<div class="pull-right">
			<?php echo CHtml::link('<i class="fa fa-plus-square"></i> Add new page Field',Yii::app()->createUrl('pageFields/create'))?>
		</div>
	</div>
	<div class="box-body table-responsive">
		<?php $this->widget('zii.widgets.grid.CGridView', array_merge(CommonController::customizeGrid(),array(
			'id'=>'page-fields-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'id' => array(
					'name' => 'id',
					'header' => 'id',
					'value' => '$data->id',
					'htmlOptions' => array('width' => '5%'),
					'filter' => chtml::textField('PageFields[id]',$model->id,array('class' => 'form-control'))
				),
				'page_id' => array(
					'name' => 'page_id',
					'header' => 'Page name',
					'htmlOptions' => array('width' => '25%'),
					'value' => function($data) use ($pagesArr) {
						if (isset($pagesArr[$data->page_id])) {
							return $pagesArr[$data->page_id];
						} else {
							return 'NA';
						}
					},
					'filter' => chtml::dropDownList('PageFields[page_id]',$model->page_id,$pagesArr,array('class' => 'form-control','empty' => '-Select-'))
				),
				'field_name' => array(
					'name' => 'field_name',
					'header' => 'Action name',
					'htmlOptions' => array('width' => '25%'),
					'value' => '$data->field_name',
					'filter' => chtml::textField('PageFields[field_name]',$model->field_name,array('class' => 'form-control'))
				 ),
				'status' => array(
					'name' => 'status',
					'header' => 'Status',
					'htmlOptions' => array('width' => '15%'),
					'value' => 'isset($data->status) && $data->status == 1 ? "Active" : "Inactive"',
					'filter' => chtml::dropDownList('PageFields[status]',$model->status,array( 1 => 'Active', 0 => 'Inactive'),array('class' => 'form-control','empty' => '-Select-'))
				),
				array(
					'class' => 'CButtonColumn',
					'template' => '{edit}&nbsp;&nbsp;|&nbsp;&nbsp;{remove}',
					'header' => 'Actions',
					'htmlOptions' => array('width' => '20%'),
					'buttons' => array(
						'edit' => array(
							'label' => '<i class="fa fa-pencil-square-o"></i> Edit ',
							'options' => array('title' => 'Edit','class' => 'update'),
							'url' => 'Yii::app()->createUrl("pageFields/update",array("id" => $data->id))'
						),
						'remove' => array(
							'label' => '<i class="fa fa-user-times"></i> Delete',
							'url' => 'Yii::app()->createUrl("pageFields/delete",array("id" => $data->id))',
							'options' => array('title' => 'Delete','class' => 'delete'),
						)
					),
					'htmlOptions' => array('width' => '15%')
				),
			),
		))); ?>

	</div>

</div>
