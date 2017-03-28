<?php
/* @var $this TaxRateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Tax Rates',
);

$this->menu = array(
    array('label' => 'Create TaxRate', 'url' => array('create')),
    array('label' => 'Manage TaxRate', 'url' => array('admin')),
);
?>

<h1>Tax Rates</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
