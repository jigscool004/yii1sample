<?php
/* @var $this PageFieldsController */
/* @var $data PageFields */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('page_id')); ?>:</b>
    <?php echo CHtml::encode($data->page_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('field_name')); ?>:</b>
    <?php echo CHtml::encode($data->field_name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
    <?php echo CHtml::encode($data->status); ?>
    <br />


</div>