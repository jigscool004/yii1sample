<?php
/* @var $this TaxRateController */
/* @var $model TaxRate */

$this->breadcrumbs = array(
    'Tax Rates' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List TaxRate', 'url' => array('index')),
    array('label' => 'Create TaxRate', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tax-rate-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
$userAttr = CommonController::getUserList();
$criteria = new CDbCriteria();
$criteria->select = 'id,name';
$criteria->compare('status', 1);
$categoriesArr = CHtml::listData(TaxCategory::model()->findAll($criteria), 'id', 'name');
?>
<div class="box-header with-border">
    <h3 class="box-title">Manage Tax Rate</h3>
    <div class="pull-right">
        <?php echo CHtml::link('<i class="fa fa-plus-square"></i> Add New tax rate', Yii::app()->createUrl('TaxRate/create')) ?>
    </div>
</div>
<div class="box-body table-responsive">
    <?php
    $this->widget('zii.widgets.grid.CGridView', array_merge(
                    CommonController::customizeGrid(), array(
        'id' => 'tax-rate-grid',
        'dataProvider' => $model->search(),
        'filter' => $model,
        'columns' => array(
            'id' => array('name' => 'id', 'filter' => false, 'value' => '$data->id'),
            'name' => array(
                'name' => 'name',
                'value' => '$data->name',
                'filter' => CHtml::textField('TaxRate[name]', $model->name, array('class' => 'form-control'))
            ),
            'rate' => array(
                'name' => 'Rate(%)',
                'value' => '$data->rate',
                'filter' => CHtml::textField('TaxRate[rate]', $model->rate, array('class' => 'form-control'))
            ),
            'category_id' => array(
                'name' => 'Category',
                'value' => function($data) use ($categoriesArr) {
                    return isset($categoriesArr[$data->category_id]) ? $categoriesArr[$data->category_id] : '';
                },
                'filter' => CHtml::dropDownList('TaxRate[category_id]', $model->category_id, $categoriesArr, array('class' => 'form-control', 'empty' => '- Select -')),
            ),
            'status' => array(
                'name' => 'Status',
                'value' => function($data) {
                    return $data->status == 1 ? 'Active' : 'Inactive';
                },
                'sortable' => true,
                'filter' => CHtml::dropDownList('TaxRate[status]', $model->status, array(1 => 'Active', 0 => 'Inactive'), array('class' => 'form-control', 'empty' => '- Select -'))
            ),
            'created_by' => array(
                'name' => 'created_by',
                'value' => function($data) use ($userAttr) {
                    if (isset($userAttr[$data->id])) {
                        return $userAttr[$data->id];
                    }
                },
                'filter' => CHtml::dropDownList('TaxRate[created_by]', $model->created_by, $userAttr, array('class' => 'form-control', 'empty' => '- Select-'))
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
                        'options' => array('title' => 'Edit', 'class' => 'update'),
                        'url' => 'Yii::app()->createUrl("TaxRate/update",array("id" => $data->id))'
                    ),
                    'remove' => array(
                        'label' => '<i class="fa fa-user-times"></i> Delete',
                        'url' => 'Yii::app()->createUrl("TaxRate/delete",array("id" => $data->id))',
                        'options' => array('title' => 'Delete', 'class' => 'delete'),
                    )
                ),
                'htmlOptions' => array('width' => '15%')
            ),
        ),
                    )
            )
    );
    ?>

</div>
