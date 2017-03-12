<?php
/* @var $this RoomController */
/* @var $model Room */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'room-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'room_no'); ?>
		<?php echo $form->textField($model,'room_no',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'room_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'floor_no'); ?>
		<?php echo $form->textField($model,'floor_no',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'floor_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'room_name'); ?>
		<?php echo $form->textField($model,'room_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'room_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'single_bed'); ?>
		<?php echo $form->textField($model,'single_bed'); ?>
		<?php echo $form->error($model,'single_bed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'double_bed'); ?>
		<?php echo $form->textField($model,'double_bed'); ?>
		<?php echo $form->error($model,'double_bed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'extra_bed'); ?>
		<?php echo $form->textField($model,'extra_bed'); ?>
		<?php echo $form->error($model,'extra_bed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'room_rate'); ?>
		<?php echo $form->textField($model,'room_rate'); ?>
		<?php echo $form->error($model,'room_rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'equipment_id'); ?>
		<?php echo $form->textField($model,'equipment_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'equipment_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'column_11'); ?>
		<?php echo $form->textField($model,'column_11'); ?>
		<?php echo $form->error($model,'column_11'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_on'); ?>
		<?php echo $form->textField($model,'created_on'); ?>
		<?php echo $form->error($model,'created_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_by'); ?>
		<?php echo $form->textField($model,'updated_by'); ?>
		<?php echo $form->error($model,'updated_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_on'); ?>
		<?php echo $form->textField($model,'updated_on'); ?>
		<?php echo $form->error($model,'updated_on'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->