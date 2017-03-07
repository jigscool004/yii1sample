<?php
/* @var $this HotelController */
/* @var $model Hotel */

$this->breadcrumbs=array(
	'Hotels'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Hotel', 'url'=>array('index')),
	array('label'=>'Create Hotel', 'url'=>array('create')),
	array('label'=>'Update Hotel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Hotel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hotel', 'url'=>array('admin')),
);
?>
<div class="box-header with-border">
        <h3 class="box-title">View Hotel #<?php echo $model->id; ?></h3>
        <div class="pull-right">
            <?php echo CHtml::link('<i class="fa fa-plus-square"></i> Update Information',Yii::app()->createUrl('hotel/update',array('id' => $model->id)));
                    
                    ?>
        </div>
</div>
<div class="box-body table-responsive">
    <?php $this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array('class' => 'table table-bordered table-striped dataTable no-footer'),
	'data'=>$model,
	'attributes'=>array(
		'hotel_name',
		'owner_name',
		'address_line_one',
		'address_line_two',
		'zip_code',
		'address_other',
		'mobile_no',
		'hotel_phone_no',
		'reservation_no',
		'email',
		'website',
		'check_in',
		'check_out',
		'creatd_on',
		'created_by',
		'updated_on',
		'updated_by',
	),
)); ?>

</div>
