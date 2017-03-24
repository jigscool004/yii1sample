<?php
/* @var $this GuestDetailController */
/* @var $model GuestDetail */

$this->breadcrumbs = array(
    'Guest Details' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List GuestDetail', 'url' => array('index')),
    array('label' => 'Create GuestDetail', 'url' => array('create')),
    array('label' => 'Update GuestDetail', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete GuestDetail', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage GuestDetail', 'url' => array('admin')),
);
?>

<h1>View GuestDetail #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'guest_id',
        'checkin_date',
        'checkin_time',
        'checkout_date',
        'checkout_time',
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
    ),
));
?>
