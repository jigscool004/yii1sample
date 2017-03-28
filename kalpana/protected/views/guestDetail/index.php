<?php
    /* @var $this GuestDetailController */
    /* @var $model GuestDetail */

    $this->breadcrumbs = array(
        'Guest Details' => array('index'),
        'Manage',
    );

    $this->menu = array(
        array('label' => 'List GuestDetail', 'url' => array('index')),
        array('label' => 'Create GuestDetail', 'url' => array('create')),
    );

    Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#guest-detail-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<!-- Button trigger modal -->



<div class='role'>
    <div class='box-header'>
        <h1 class='box-title'>Manage Guest Details</h1>
        <div class="pull-right">
            <?php echo CHtml::link('<i class="fa fa-plus-square"></i> Add New Guest', Yii::app()->createUrl('guestDetail/create')) ?>
        </div>
    </div>
    <div class="box-body table-responsive">
        <ul  class="nav nav-pills">
            <li class="<?php echo $ischeckout == 0 ? 'active':'' ?>">
                <a href="<?php echo Yii::app()->createUrl('guestDetail/index'); ?>" >Checkin Details</a>
            </li>
            <li class="<?php echo $ischeckout == 1 ? 'active':'' ?>">
            <a href="<?php echo Yii::app()->createUrl('guestDetail/index',array('checkout' => 'y')); ?>" >Checkout Details</a>
            </li>
        </ul>
        <?php
            $this->widget('zii.widgets.grid.CGridView', array_merge(CommonController::customizeGrid(),array(
                'id' => 'guest-detail-grid',
                'dataProvider' => $model->search(),
                'filter' => $model,
                'columns' => array(
                    'guest_id' => array(
                        'name' => 'guest_id',
                        'header' => 'Guest no',
                        'value' => '$data->guest_id',
                        'htmlOptions' => array('width' => '8%'),
                        'filter' => chtml::textField('GuestDetail[guest_id]', $model->id, array('class' => 'form-control'))
                    ),
                    'first_name' => array(
                        'name' => 'first_name',
                        'header' => 'Guest name',
                        'value' => function($data){

                            if (isset($data->first_name,$data->last_name)) {
                                return $data->first_name . ' ' . $data->last_name;
                            } else {
                                return '';
                            }
                        },

                        'htmlOptions' => array('width' => '15%'),
                        'filter' => chtml::textField('GuestDetail[guest_id]', $model->id, array('class' => 'form-control'))
                    ),
                    'mobile_no' => array(
                        'name' => 'mobile_no',
                        'header' => 'Mobile No',
                        'value' => '$data->mobile_no',
                        'htmlOptions' => array('width' => '8%'),
                        'filter' => chtml::textField('GuestDetail[mobile_no]', $model->id, array('class' => 'form-control'))
                    ),

                    'room_id' => array(
                        'name' => 'room_id',
                        'header' => 'Room No',
                        'value' => 'isset($data->Room->room_no) ? $data->Room->room_no : ""',
                        'htmlOptions' => array('width' => '8%'),
                        'filter' => chtml::textField('GuestDetail[checkin_time]', $model->id, array('class' => 'form-control'))
                    ),
                    'room_rate' => array(
                        'name' => 'room_rate',
                        'header' => 'Room Rate',
                        'value' => 'isset($data->room_rate) ? $data->room_rate : ""',
                        'htmlOptions' => array('width' => '10%'),
                        'filter' => chtml::textField('GuestDetail[room_rate]', $model->id, array('class' => 'form-control'))
                    ),
                    'checkin_date' => array(
                        'name' => 'checkin_date',
                        'header' => 'Guest no',
                        'value' => 'isset($data->checkin_date)  && $data->checkin_date != "" ? date("d-m-Y",strtotime($data->checkin_date)) : "" ',
                        'htmlOptions' => array('width' => '8%'),
                        'filter' => chtml::textField('GuestDetail[checkin_date]', $model->id, array('class' => 'form-control'))
                    ),
                    'checkin_time' => array(
                        'name' => 'checkin_time',
                        'header' => 'Checkin Time',
                        'value' => '$data->checkin_time',
                        'htmlOptions' => array('width' => '12%'),
                        'filter' => chtml::textField('GuestDetail[checkin_time]', $model->id, array('class' => 'form-control'))
                    ),

                    'is_checkout' => array(
                        'name' => 'is_checkout',
                        'header' => 'Status',
                        'value' => function($data){
                            return $data->is_checkout == 1 ? 'Checkout' : 'Checkin';
                         },
                        'htmlOptions' => array('width' => '8%'),
                        'filter' => chtml::textField('GuestDetail[is_checkout]', $model->id, array('class' => 'form-control'))
                    ),
                    array(
                        'class' => 'CButtonColumn',
                        'template' => '{views}&nbsp;&nbsp;|&nbsp;&nbsp;{order}<br>{edit}&nbsp;&nbsp;|&nbsp;&nbsp;{remove}',
                        'header' => 'Actions',
                        'buttons' => array(
                            'views' => array(
                                'label' => '<i class="fa fa-list"></i> View ',
                                'options' => array('title' => 'View', 'class' => 'update'),
                                'url' => 'Yii::app()->createUrl("guestDetail/view",array("id" => $data->id))'
                            ),
                            'order' => array(
                                'label' => '<i class="fa fa-plus-square"></i> Add Order ',
                                'options' => array('title' => 'Add Order', 'class' => 'update'),
                                'url' => 'Yii::app()->createUrl("order/create",array("id" => $data->id))'
                            ),
                            'edit' => array(
                                'label' => '<i class="fa fa-plane"></i> Edit ',
                                'options' => array('title' => 'Edit', 'class' => 'update'),
                                'url' => 'Yii::app()->createUrl("guestDetail/update",array("id" => $data->id))'
                            ),
                            'remove' => array(
                                'label' => '<i class="fa fa-user-times"></i> Delete',
                                'url' => 'Yii::app()->createUrl("guestDetail/delete",array("id" => $data->id))',
                                'options' => array('title' => 'Delete', 'class' => 'delete'),
                            )
                        ),
                        'htmlOptions' => array('width' => '15%')
                    ),
                ),
            )) );
        ?>

    </div>
</div>
