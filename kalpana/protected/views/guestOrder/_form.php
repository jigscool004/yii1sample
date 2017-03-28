<?php
/* @var $this GuestOrderController */
/* @var $model GuestOrder */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'guest-order-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="col-lg-12">
		<?php echo $form->labelEx($model,'order_date', array('class' => 'col-lg-3')); ?>
		<div class="col-lg-7">
			<?php
				//echo $form->textField($model,'order_date');
			$this->widget('zii.widgets.jui.CJuiDatePicker',array(
					'name'=>'GuestOrder[checkin_date]',
					'value'=>date('d-m-Y'),
					'options'=>array(
						'showButtonPanel'=>true,
						'dateFormat' => 'dd-mm-yy',
						'changeMonth' => true,
						'changeYear' => true,
					),
					'htmlOptions'=>array(
						'class' => 'form-control'
					),
				));
			?>
			<?php echo $form->error($model,'order_date'); ?>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-lg-12">
		<?php echo $form->labelEx($model,'order_time', array('class' => 'col-lg-3')); ?>
		<div class="col-lg-7">
			<?php echo $form->textField($model,'order_time',array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'order_time'); ?>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-lg-12">
		<?php echo $form->labelEx($model,'order_name', array('class' => 'col-lg-3')); ?>
		<div class="col-lg-7">
			<?php echo $form->textField($model,'order_name',array('class' => 'form-control','size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'order_name'); ?>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-lg-12">
		<?php echo $form->labelEx($model,'qty', array('class' => 'col-lg-3')); ?>
		<div class="col-lg-7">
			<?php echo $form->textField($model,'qty',array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'qty'); ?>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-lg-12">
		<?php echo $form->labelEx($model,'price', array('class' => 'col-lg-3')); ?>
		<div class="col-lg-7">
			<?php echo $form->textField($model,'price',array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'price'); ?>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-lg-12">
		<?php echo $form->labelEx($model,'include_tax', array('class' => 'col-lg-3')); ?>
		<div class="col-lg-7">
			<?php echo $form->textField($model,'include_tax',array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'include_tax'); ?>
		</div>
	</div>
	<div class="clearfix"></div>
		<div class="buttons col-lg-12">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		</div>
	</div>



<?php $this->endWidget(); ?>

</div><!-- form -->
<div class="clearfix"></div>