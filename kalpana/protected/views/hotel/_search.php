<?php
/* @var $this HotelController */
/* @var $model Hotel */
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
        <?php echo $form->label($model, 'hotel_name'); ?>
        <?php echo $form->textField($model, 'hotel_name', array('size' => 60, 'maxlength' => 255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'owner_name'); ?>
        <?php echo $form->textField($model, 'owner_name', array('size' => 60, 'maxlength' => 100)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'address_line_one'); ?>
        <?php echo $form->textField($model, 'address_line_one', array('size' => 60, 'maxlength' => 100)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'address_line_two'); ?>
        <?php echo $form->textField($model, 'address_line_two', array('size' => 60, 'maxlength' => 100)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'zip_code'); ?>
        <?php echo $form->textField($model, 'zip_code', array('size' => 10, 'maxlength' => 10)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'address_other'); ?>
        <?php echo $form->textField($model, 'address_other', array('size' => 60, 'maxlength' => 255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'mobile_no'); ?>
        <?php echo $form->textField($model, 'mobile_no', array('size' => 15, 'maxlength' => 15)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'hotel_phone_no'); ?>
        <?php echo $form->textField($model, 'hotel_phone_no', array('size' => 15, 'maxlength' => 15)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'reservation_no'); ?>
        <?php echo $form->textField($model, 'reservation_no', array('size' => 15, 'maxlength' => 15)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'email'); ?>
        <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 60)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'website'); ?>
        <?php echo $form->textField($model, 'website', array('size' => 50, 'maxlength' => 50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'check_in'); ?>
        <?php echo $form->textField($model, 'check_in'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'check_out'); ?>
        <?php echo $form->textField($model, 'check_out'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'creatd_on'); ?>
        <?php echo $form->textField($model, 'creatd_on'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'created_by'); ?>
        <?php echo $form->textField($model, 'created_by'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'updated_on'); ?>
        <?php echo $form->textField($model, 'updated_on'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'updated_by'); ?>
        <?php echo $form->textField($model, 'updated_by'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->