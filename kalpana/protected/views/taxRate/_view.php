<?php
/* @var $this TaxRateController */
/* @var $data TaxRate */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
    <?php echo CHtml::encode($data->name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('rate')); ?>:</b>
    <?php echo CHtml::encode($data->rate); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
    <?php echo CHtml::encode($data->category_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
    <?php echo CHtml::encode($data->status); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
    <?php echo CHtml::encode($data->created_by); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('created_on')); ?>:</b>
    <?php echo CHtml::encode($data->created_on); ?>
    <br />

    <?php /*
      <b><?php echo CHtml::encode($data->getAttributeLabel('updated_by')); ?>:</b>
      <?php echo CHtml::encode($data->updated_by); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('updated_on')); ?>:</b>
      <?php echo CHtml::encode($data->updated_on); ?>
      <br />

     */ ?>

</div>