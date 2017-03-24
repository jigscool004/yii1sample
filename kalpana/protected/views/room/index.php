<?php
/* @var $this RoomController */
/* @var $model Room */

$this->breadcrumbs = array(
    'Rooms' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Room', 'url' => array('index')),
    array('label' => 'Create Room', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#room-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="box-header with-border">
    <h3 class="box-title">Manage Rooms</h3>
    <div class="pull-right">
        <?php echo CHtml::link('<i class="fa fa-plus-square"></i> Add New Room', Yii::app()->createUrl('room/create')) ?>
    </div>
</div>
<div class="box-body table-responsive">
    <?php
    $this->widget('zii.widgets.grid.CGridView', array_merge(CommonController::customizeGrid(), array(
        'id' => 'room-grid',
        'dataProvider' => $model->search(),
        'filter' => $model,
        'columns' => array(
            'id' => array(
                'name' => 'id',
                'header' => 'ID',
                'htmlOptions' => array('width' => '5%'),
                'value' => '$data->id',
                'filter' => CHtml::textField('Room[id]', $model->id, array('class' => 'form-control'))
            ),
            'room_no' => array(
                'name' => 'room_no',
                'header' => 'Room No',
                'value' => '$data->room_no',
                'htmlOptions' => array('width' => '15%'),
                'filter' => CHtml::textField('Room[room_no]', $model->room_no, array('class' => 'form-control'))
            ),
            'floor_no' => array(
                'name' => 'floor_no',
                'header' => 'Floor No',
                'value' => '$data->floor_no',
                'htmlOptions' => array('width' => '15%'),
                'filter' => CHtml::textField('Room[floor_no]', $model->floor_no, array('class' => 'form-control'))
            ),
            'room_name' => array(
                'name' => 'room_name',
                'header' => 'Room Name',
                'value' => '$data->room_name',
                'htmlOptions' => array('width' => '15%'),
                'filter' => CHtml::textField('Room[room_name]', $model->room_name, array('class' => 'form-control'))
            ),
            'room_rate' => array(
                'name' => 'room_rate',
                'header' => 'Room Rate',
                'htmlOptions' => array('width' => '15%'),
                'value' => '$data->room_rate',
                'filter' => CHtml::textField('Room[room_rate]', $model->room_rate, array('class' => 'form-control'))
            ),
            array(
                'class' => 'CButtonColumn',
                'template' => '{edit}&nbsp;&nbsp;|&nbsp;&nbsp;{remove}',
                'header' => 'Actions',
                'buttons' => array(
                    'edit' => array(
                        'label' => '<i class="fa fa-pencil-square-o"></i> Edit ',
                        'options' => array('title' => 'Edit', 'class' => 'update'),
                        'url' => 'Yii::app()->createUrl("room/update",array("id" => $data->id))'
                    ),
                    'remove' => array(
                        'label' => '<i class="fa fa-user-times"></i> Delete',
                        'url' => 'Yii::app()->createUrl("room/delete",array("id" => $data->id))',
                        'options' => array('title' => 'Delete', 'class' => 'delete'),
                    )
                ),
                'htmlOptions' => array('width' => '15%')
            ),
        ),)
    ));
    ?>
</div>