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

<h1>Manage Guest Details</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'guest-detail-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'guest_id',
        'checkin_date',
        'checkin_time',
        'checkout_date',
        'checkout_time',
        /*
          'is_checkout',
          'adult',
          'child',
          'first_name',
          'last_name',
          'mobile_no',
          'landline_no',
          'gender',
          'address_line1',
          'address_line2',
          'zipcode',
          'state',
          'email_id',
          'license_no',
          'adharecard_no',
          'passport_no',
          'description',
          'photos',
          'room_rate',
          'hotel_tax',
          'advance_amount',
          'debit_amount',
          'created_by',
          'created_on',
          'updated_by',
          'updated_on',
         */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
