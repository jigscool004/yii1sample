<?php
/* @var $this PageController */
/* @var $data Page */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('page_name')); ?>:</b>
    <?php echo CHtml::encode($data->page_name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('actions')); ?>:</b>
    <?php echo CHtml::encode($data->actions); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('default_action')); ?>:</b>
    <?php echo CHtml::encode($data->default_action); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
    <?php echo CHtml::encode($data->status); ?>
    <br />


</div>