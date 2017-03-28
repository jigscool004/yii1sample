<?php
/* @var $this GuestDetailController */
/* @var $data GuestDetail */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('guest_id')); ?>:</b>
    <?php echo CHtml::encode($data->guest_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('checkin_date')); ?>:</b>
    <?php echo CHtml::encode($data->checkin_date); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('checkin_time')); ?>:</b>
    <?php echo CHtml::encode($data->checkin_time); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('checkout_date')); ?>:</b>
    <?php echo CHtml::encode($data->checkout_date); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('checkout_time')); ?>:</b>
    <?php echo CHtml::encode($data->checkout_time); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('is_checkout')); ?>:</b>
    <?php echo CHtml::encode($data->is_checkout); ?>
    <br />

    <?php /*
      <b><?php echo CHtml::encode($data->getAttributeLabel('adult')); ?>:</b>
      <?php echo CHtml::encode($data->adult); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('child')); ?>:</b>
      <?php echo CHtml::encode($data->child); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
      <?php echo CHtml::encode($data->first_name); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
      <?php echo CHtml::encode($data->last_name); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('mobile_no')); ?>:</b>
      <?php echo CHtml::encode($data->mobile_no); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('landline_no')); ?>:</b>
      <?php echo CHtml::encode($data->landline_no); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
      <?php echo CHtml::encode($data->gender); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('address_line1')); ?>:</b>
      <?php echo CHtml::encode($data->address_line1); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('address_line2')); ?>:</b>
      <?php echo CHtml::encode($data->address_line2); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('zipcode')); ?>:</b>
      <?php echo CHtml::encode($data->zipcode); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
      <?php echo CHtml::encode($data->state); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('email_id')); ?>:</b>
      <?php echo CHtml::encode($data->email_id); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('license_no')); ?>:</b>
      <?php echo CHtml::encode($data->license_no); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('adharecard_no')); ?>:</b>
      <?php echo CHtml::encode($data->adharecard_no); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('passport_no')); ?>:</b>
      <?php echo CHtml::encode($data->passport_no); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
      <?php echo CHtml::encode($data->description); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('photos')); ?>:</b>
      <?php echo CHtml::encode($data->photos); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('room_rate')); ?>:</b>
      <?php echo CHtml::encode($data->room_rate); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('hotel_tax')); ?>:</b>
      <?php echo CHtml::encode($data->hotel_tax); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('advance_amount')); ?>:</b>
      <?php echo CHtml::encode($data->advance_amount); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('debit_amount')); ?>:</b>
      <?php echo CHtml::encode($data->debit_amount); ?>
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