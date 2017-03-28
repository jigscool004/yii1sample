<?php
/* @var $this PageFieldsController */
/* @var $model PageFields */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'page-fields-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <div class="col-lg-10" style='margin-bottom: 20px;'>
        <p class="note">Fields with <span class="required">*</span> are required.</p>
        <?php echo $form->errorSummary($model); ?>
    </div>
    <div class="clearfix"></div>

    <div class="col-lg-10">
        <?php echo $form->labelEx($model, 'page_id', array('class' => 'col-lg-2')); ?>
        <div class="col-lg-6">
            <?php echo $form->dropDownList($model, 'page_id', PageFieldsController::getPageDetail(), array('class' => 'form-control', 'empty' => '- Select -')); ?>
            <?php echo $form->error($model, 'page_id'); ?>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="col-lg-10">
        <?php echo $form->labelEx($model, 'field_name', array('class' => 'col-lg-2')); ?>
        <div class="col-lg-6">
            <?php echo $form->textField($model, 'field_name', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'field_name'); ?>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="col-lg-10">
        <?php echo $form->labelEx($model, 'status', array('class' => 'col-lg-2')); ?>
        <div class="col-lg-6">
            <?php echo $form->dropDownList($model, 'status', array('1' => 'Active', 0 => 'Inactive'), array('empty' => '- Select -', 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'status'); ?>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="buttons col-lg-10">
        <div class="col-lg-2"></div>
        <div class="col-lg-6">
            <?php
            echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary'));
            $link = Yii::app()->createUrl('pageFields/index');
            echo CHtml::link('Cancel', $link, array('class' => 'btn btn-danger ', 'style' => 'margin-left:10px;'));
            ?>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->