<?php
/* @var $this PageController */
/* @var $model Page */
/* @var $form CActiveForm */
?>

<div class="form">

<?php

	$form=$this->beginWidget('CActiveForm', array(
	'id'=>'page-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation' => true,
	'enableClientValidation' => true,
	'clientOptions' =>  array('validateOnSubmit'=>true)
)); ?>

	<div class="col-lg-10" style='margin-bottom: 20px;'>
		<p class="note">Fields with <span class="required">*</span> are required.</p>
		<?php echo $form->errorSummary($model); ?>
	</div>
	<div class="clearfix"></div>

	<div class="col-lg-10">
		<?php echo $form->labelEx($model,'page_name',array('class' => 'col-lg-3')); ?>
		<div class="col-lg-7">
			<?php echo $form->textField($model,'page_name',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'page_name'); ?>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-lg-10">
		<?php echo $form->labelEx($model,'controller_name',array('class' => 'col-lg-3')); ?>
		<div class="col-lg-7">
			<?php echo $form->textField($model,'controller_name',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'controller_name'); ?>
		</div>
	</div>
	<div class="clearfix"></div>
	<?php /*<div class="col-lg-10">
		<?php echo $form->labelEx($model,'actions',array('class' => 'col-lg-3')); ?>
		<div class="col-lg-7">
			<?php echo $form->textArea($model,'actions',array('rows'=>6, 'cols'=>50,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'actions'); ?>
		</div>
	</div>
	<div class="clearfix"></div>

	<div class="col-lg-10">
		<?php echo $form->labelEx($model,'default_action',array('class' => 'col-lg-3')); ?>
		<div class="col-lg-7">
			<?php echo $form->textArea($model,'default_action',array('rows'=>6, 'cols'=>50,'class' => 'form-control')); ?>

			<?php echo $form->error($model,'default_action'); ?>
		</div>

	</div>
	<div class="clearfix"></div> */ ?>

	<div class="col-lg-10">
		<?php echo $form->labelEx($model,'status',array('class' => 'col-lg-3')); ?>
		<div class="col-lg-7">
			<?php echo $form->dropDownList($model,'status',array( 1 => 'Active', 0 => 'Inactive'),array('empty' => '- Select -','class' => 'form-control')); ?>
			<?php echo $form->error($model,'status'); ?>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="buttons col-lg-10">
		<div class="col-lg-3"></div>
		<div class="col-lg-7">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class' => 'btn btn-primary'));
				$link = Yii::app()->createUrl('page/index');
				echo CHtml::link('Cancel',$link,array('class' => 'btn btn-danger','style' => 'margin-left:10px;'));
			?>
		</div>
	</div>
	<div class="clearfix"></div>
<?php $this->endWidget(); ?>

</div><!-- form -->