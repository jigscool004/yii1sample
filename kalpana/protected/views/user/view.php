<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs = array(
    'Users' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List User', 'url' => array('index')),
    array('label' => 'Create User', 'url' => array('create')),
    array('label' => 'Update User', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete User', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage User', 'url' => array('admin')),
);

$userAttr = CommonController::getUserList();
$roleArr = CHtml::listData(Role::model()->findAll('status = 1'), 'id', 'name');
?>

<div class="box-header with-border">
    <h3 class="box-title">View User #<?php echo $model->id; ?></h3>
    <div class="pull-right">
        <?php
        echo CHtml::link('<i class="fa fa-plus-square"></i> Add New user', Yii::app()->createUrl('user/create'));
        echo "  |  ";
        echo CHtml::link('Back', Yii::app()->createUrl('user/admin'))
        ?>
    </div>
</div>
<div class="box-body table-responsive">
    <?php
    $this->widget('zii.widgets.CDetailView', array(
        'data' => $model,
        'htmlOptions' => array('class' => 'table table-bordered table-striped dataTable no-footer'),
        'attributes' => array(
            'name',
            'login_username',
            'role_id' => array(
                'name' => 'role_id',
                'value' => function($model) use ($roleArr) {
                    return isset($roleArr[$model->role_id]) ? $roleArr[$model->role_id] : "";
                }
            ),
            'email',
            'mobile_no',
            'status' => array(
                'name' => 'status',
                'value' => isset($model->status) && $model->status == 1 ? "Active" : "Inactive",
            ),
            'created_by' => array(
                'name' => 'created_by',
                'value' => function($model) use ($userAttr) {
                    return isset($userAttr[$model->created_by]) ? $userAttr[$model->created_by] : 'NA';
                }
            ),
            'created_on' => array(
                'name' => 'created_on',
                'value' => isset($model->created_on) ? date("d/m/Y H:i:s", strtotime($model->created_on)) : "-",
            ),
            'updated_by' => array(
                'name' => 'updated_by',
                'value' => function($model) use ($userAttr) {
                    return isset($userAttr[$model->updated_by]) ? $userAttr[$model->updated_by] : 'NA';
                }
            ),
            'updated_on' => array(
                'name' => 'updated_on',
                'value' => isset($model->updated_on) ? date("d/m/Y H:i:s", strtotime($model->updated_on)) : "-",
            ),
        ),
    ));
    ?> 
</div>

