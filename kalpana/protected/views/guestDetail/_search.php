<?php
/* @var $this GuestDetailController */
/* @var $model GuestDetail */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>

    <div class="row">
        <?php echo $form->label($model, 'id'); ?>
        <?php echo $form->textField($model, 'id'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'guest_id'); ?>
        <?php echo $form->textField($model, 'guest_id', array('size' => 60, 'maxlength' => 255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'checkin_date'); ?>
        <?php echo $form->textField($model, 'checkin_date'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'checkin_time'); ?>
        <?php echo $form->textField($model, 'checkin_time'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'checkout_date'); ?>
        <?php echo $form->textField($model, 'checkout_date'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'checkout_time'); ?>
        <?php echo $form->textField($model, 'checkout_time'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'is_checkout'); ?>
        <?php echo $form->textField($model, 'is_checkout'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'adult'); ?>
        <?php echo $form->textField($model, 'adult'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'child'); ?>
        <?php echo $form->textField($model, 'child'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'first_name'); ?>
        <?php echo $form->textField($model, 'first_name', array('size' => 50, 'maxlength' => 50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'last_name'); ?>
        <?php echo $form->textField($model, 'last_name', array('size' => 50, 'maxlength' => 50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'mobile_no'); ?>
        <?php echo $form->textField($model, 'mobile_no', array('size' => 15, 'maxlength' => 15)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'landline_no'); ?>
        <?php echo $form->textField($model, 'landline_no', array('size' => 15, 'maxlength' => 15)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'gender'); ?>
        <?php echo $form->textField($model, 'gender', array('size' => 10, 'maxlength' => 10)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'address_line1'); ?>
        <?php echo $form->textField($model, 'address_line1', array('size' => 60, 'maxlength' => 100)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'address_line2'); ?>
        <?php echo $form->textField($model, 'address_line2', array('size' => 60, 'maxlength' => 100)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'zipcode'); ?>
        <?php echo $form->textField($model, 'zipcode', array('size' => 15, 'maxlength' => 15)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'state'); ?>
        <?php echo $form->textField($model, 'state', array('size' => 60, 'maxlength' => 125)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'email_id'); ?>
        <?php echo $form->textField($model, 'email_id', array('size' => 50, 'maxlength' => 50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'license_no'); ?>
        <?php echo $form->textField($model, 'license_no', array('size' => 30, 'maxlength' => 30)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'adharecard_no'); ?>
        <?php echo $form->textField($model, 'adharecard_no', array('size' => 30, 'maxlength' => 30)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'passport_no'); ?>
        <?php echo $form->textField($model, 'passport_no', array('size' => 30, 'maxlength' => 30)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'description'); ?>
        <?php echo $form->textArea($model, 'description', array('rows' => 6, 'cols' => 50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'photos'); ?>
        <?php echo $form->textField($model, 'photos', array('size' => 60, 'maxlength' => 255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'room_rate'); ?>
        <?php echo $form->textField($model, 'room_rate'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'hotel_tax'); ?>
        <?php echo $form->textField($model, 'hotel_tax'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'advance_amount'); ?>
        <?php echo $form->textField($model, 'advance_amount'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'debit_amount'); ?>
        <?php echo $form->textField($model, 'debit_amount'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'created_by'); ?>
        <?php echo $form->textField($model, 'created_by'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'created_on'); ?>
        <?php echo $form->textField($model, 'created_on'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'updated_by'); ?>
        <?php echo $form->textField($model, 'updated_by'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'updated_on'); ?>
        <?php echo $form->textField($model, 'updated_on'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->