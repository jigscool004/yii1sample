<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

$criteria = new CDbCriteria();
$criteria->select = 'role,id';
$criteria->compare('status',1);
$roleAttr = CHtml::listData(Role::model()->findAll($criteria),'id','role');

$criteria = new CDbCriteria();
$criteria->select = 'id,name';
$criteria->compare('status',1);
$userAttr = CHtml::listData(User::model()->findAll($criteria),'id','name');


?>

<div class='users'>
    <div class='box-header'>
        <h1 class='box-title'>Manage Users</h1>
        <div class="pull-right">
            <?php echo CHtml::link('<i class="fa fa-plus-square"></i> Add New User',Yii::app()->createUrl('user/create'))?>
        </div>
    </div>
    <div class="box-body table-responsive">
    <?php $this->widget('zii.widgets.grid.CGridView', array_merge(
            CommonController::customizeGrid(),
            array(
            'id'=>'user-grid',
            'dataProvider'=>$model->search(),
            'filter'=>$model,
            'columns'=>array(
                'id' => array(
                    'name' => 'id',
                    'filter' => false,
                    'htmlOptions' => array('width' => '2%')
                ),
                'name' => array(
                    'name' => 'name',
                    'value' => '$data->name',
                    'filter' => CHtml::textField('User[name]',$model->name,array('class' => 'form-control'))
                ),
                'login_username' => array(
                    'name' => 'login_username',
                    'value' => '$data->login_username',
                    'filter' => CHtml::textField('User[login_username]',$model->login_username,array('class' => 'form-control'))
                ),
                'role_id' => array(
                    'name' => 'role_id',
                    'value' => function($data) use ($roleAttr){
                        if (isset($roleAttr[$data->role_id])) {
                            return $roleAttr[$data->role_id];
                        }
                    },
                    'filter' => CHtml::dropDownList('User[role_id]',$model->role_id,$roleAttr,array('class' => 'form-control','empty' => '- Select-'))
                ),
                'status' => array(
                    'name' => 'status',
                    'value' => function($data) {
                         return $data->status == 1 ? 'Active' : 'Inactive';
                    },
                    'filter' => CHtml::dropDownList('User[status]',$model->status,array(1 => 'Active',0 => 'Inactive'),array('class' => 'form-control','empty' => '- Select-'))
                ),
                'created_by' => array(
                    'name' => 'created_by',
                    'value' => function($data) use ($userAttr){
                        if (isset($userAttr[$data->id])) {
                            return $userAttr[$data->id];
                        }
                    },
                    'filter' => CHtml::dropDownList('User[created_by]',$model->created_by,$userAttr,array('class' => 'form-control','empty' => '- Select-'))
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
                    'class'=>'CButtonColumn',
                ),
            ),
        ))
         ); ?>
    </div>
</div>

