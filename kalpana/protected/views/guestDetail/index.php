<?php
/* @var $this GuestDetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Guest Details',
);

$this->menu = array(
    array('label' => 'Create GuestDetail', 'url' => array('create')),
    array('label' => 'Manage GuestDetail', 'url' => array('admin')),
);
?>

<h1>Guest Details</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
