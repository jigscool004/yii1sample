<?php
/* @var $this RoleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Roles',
);

$this->menu = array(
    array('label' => 'Create Role', 'url' => array('create')),
    array('label' => 'Manage Role', 'url' => array('admin')),
);

Yii::app()->clientScript->registerScript('search', "

$('#rolesearch').submit(function(){
    console.log($(this).serialize());
	$('#role-grid').yiiGridView('update', {
        
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
    'id' => 'rolesearch'
)); ?>
<div class='role'>
    <div class='box-header'>
        <h1 class='box-title'>Roles</h1>
    </div>
    <div class="box-body table-responsive">
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'dataProvider' => $model->search(),
            'filter' => $model,
            'id' => 'role-grid',
            'enableSorting' => true,
            'itemsCssClass' => 'table table-bordered table-striped dataTable no-footer',
            'columns' => array(
                array(
                    'name' => 'id',
                    'value' => '$data->id',
                    'filter' => false,
                ),
                array(
                    'name' => 'role',
                    'value' => '$data->role',
                    'filter' => CHtml::textField('role[name]',isset($_REQUEST['role']['name']) ? $_REQUEST['role']['name'] :'',array('class' => 'form-control'))
                ),
                array(
                    'name' => 'status',
                    'header' => 'Status',
                    'value' => function($data) {
                        return isset($data->status) && $data->status == 1 ? 'Active' : 'Inactive';
                    },
                    'filter' => CHtml::dropDownList('role[name]',isset($_REQUEST['role']['status']) ? $_REQUEST['role']['status'] :'',array(1 => 'Active', 0 => 'Inactive'),array('empty' => '- Select role','class' => 'form-control'))
                )
            )
        ));
        ?>

    </div>
</div>


<?php $this->endWidget(); ?>