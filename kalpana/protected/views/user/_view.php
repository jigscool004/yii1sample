<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
    <?php echo CHtml::encode($data->name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('login_username')); ?>:</b>
    <?php echo CHtml::encode($data->login_username); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('hash_password')); ?>:</b>
    <?php echo CHtml::encode($data->hash_password); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('role_id')); ?>:</b>
    <?php echo CHtml::encode($data->role_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
    <?php echo CHtml::encode($data->email); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('mobile_no')); ?>:</b>
    <?php echo CHtml::encode($data->mobile_no); ?>
    <br />

    <?php /*
      <b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
      <?php echo CHtml::encode($data->status); ?>
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