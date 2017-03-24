<?php
/* @var $this RoomController */
/* @var $data Room */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('room_no')); ?>:</b>
    <?php echo CHtml::encode($data->room_no); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('floor_no')); ?>:</b>
    <?php echo CHtml::encode($data->floor_no); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('room_name')); ?>:</b>
    <?php echo CHtml::encode($data->room_name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('single_bed')); ?>:</b>
    <?php echo CHtml::encode($data->single_bed); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('double_bed')); ?>:</b>
    <?php echo CHtml::encode($data->double_bed); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('extra_bed')); ?>:</b>
    <?php echo CHtml::encode($data->extra_bed); ?>
    <br />

    <?php /*
      <b><?php echo CHtml::encode($data->getAttributeLabel('room_rate')); ?>:</b>
      <?php echo CHtml::encode($data->room_rate); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
      <?php echo CHtml::encode($data->description); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('equipment_id')); ?>:</b>
      <?php echo CHtml::encode($data->equipment_id); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('column_11')); ?>:</b>
      <?php echo CHtml::encode($data->column_11); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
      <?php echo CHtml::encode($data->created_by); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('created_on')); ?>:</b>
      <?php echo CHtml::encode($data->created_on); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('updated_by')); ?>:</b>
      <?php echo CHtml::encode($data->updated_by); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('updated_on')); ?>:</b>
      <?php echo CHtml::encode($data->updated_on); ?>
      <br />

     */ ?>

</div>