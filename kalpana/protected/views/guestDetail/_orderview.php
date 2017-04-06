<?php $this->widget('zii.widgets.grid.CGridView', array_merge(CommonController::customizeGrid(),array(
    'id'=>'guest-order-grid',
    'dataProvider'=> $orderModel->search(),
    'filter'=> $orderModel,
    'columns'=>array(
        /*'id' => array(
            'name' => 'id',
            'header' => 'ID',
            'value' => '$data->id',
            'htmlOptions' => array('width' => '5%'),
            'filter' => CHtml::textField('GuestOrder[id]',isset($_GET['GuestOrder']['id']) && $_GET['GuestOrder']['id'] != "" ? $_GET['GuestOrder']['id'] : '', array('class' => 'form-control'))
        ),*/
        'order_date' => array(
            'name' => 'order_date',
            'header' => 'Order date',
            'htmlOptions' => array('width' => '10%'),
            'value' => 'date(\'d-m-Y\',strtotime($data->order_date)) ',
            'filter' => CHtml::textField('GuestOrder[order_date]',isset($_GET['GuestOrder']['order_date']) && $_GET['GuestOrder']['order_date'] != "" ? $_GET['GuestOrder']['order_date'] : '', array('class' => 'form-control'))
        ),
        'order_time' => array(
            'name' => 'order_time',
            'header' => 'Order Time',
            'value' => '$data->order_time',
            'htmlOptions' => array('width' => '10%'),
            'filter' => CHtml::textField('GuestOrder[order_time]',isset($_GET['GuestOrder']['order_time']) ? $_GET['GuestOrder']['order_time'] : '',array('class' => 'form-control'))
        ),
        'order_name' => array(
            'name' => 'order_name',
            'header' => 'Order Name',
            'value' => '$data->order_name',
          //  'htmlOptions' => array('width' => '20%'),
            'filter' => CHtml::textField('GuestOrder[order_name]',isset($_GET['GuestOrder']['order_name']) ? $_GET['GuestOrder']['order_name'] : '',array('class' => 'form-control'))
        ),
        'qty' => array(
            'name' => 'qty',
            'header' => 'Quantity',
            'value' => '$data->qty',
            'htmlOptions' => array('width' => '10%'),
            'filter' => CHtml::textField('GuestOrder[qty]',isset($_GET['GuestOrder']['qty']) ? $_GET['GuestOrder']['qty'] : '',array('class' => 'form-control'))
        ),
        'price' => array(
            'name' => 'price',
            'header' => 'Price',
            'value' => '$data->price',
            'htmlOptions' => array('width' => '10%'),
            'filter' => CHtml::textField('GuestOrder[price]',isset($_GET['GuestOrder']['price']) ? $_GET['GuestOrder']['price'] : '',array('class' => 'form-control'))
        ),

        'include_tax' => array(
            'name' => 'include_tax',
            'header' => 'Include Tax',
            'value' => '$data->TaxRate->rate',
            'htmlOptions' => array('width' => '10%'),
            'filter' => CHtml::textField('GuestOrder[include_tax]',isset($_GET['GuestOrder']['include_tax']) ? $_GET['GuestOrder']['include_tax'] : '',array('class' => 'form-control'))
        ),
        'total' => array(
            'name' => 'total',
            'header' => 'Total',
            'htmlOptions' => array('width' => '10%'),
            'value' => function($data) {
                $tax = isset($data->TaxRate->rate) ? $data->TaxRate->rate : 0;
                $price = $data->price * $data->qty;
                return ($price * $tax / 100) + $price;

            },
            'filter' => false,
        ),
        array(
            'class'=>'CButtonColumn',
            'template' => '{edit}&nbsp;&nbsp;|&nbsp;&nbsp;{remove}',
            'header' => 'Actions',
            'buttons' => array(
                'edit' => array(
                    'label' => '<i class="fa fa-plane"></i> Edit ',
                    'options' => array('title' => 'Edit', 'class' => 'updateOrder'),
                    'url' => 'Yii::app()->createUrl("guestOrder/update",array("id" => $data->id))'
                ),
                'remove' => array(
                    'label' => '<i class="fa fa-user-times"></i> Delete',
                    'url' => 'Yii::app()->createUrl("guestOrder/delete",array("id" => $data->id))',
                    'options' => array('title' => 'Delete', 'class' => 'delete'),
                )
            ),
            'htmlOptions' => array('width' => '15%')
        ),
    ),
                                                                                               )
)); ?>

<script type="text/javascript">
    $(document).ready(function () {
        $('.updategrid').on('click',function(){
            $('#guest-order-grid').yiiGridView('update');
        });
          })
</script>
