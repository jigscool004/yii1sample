<?php
/* @var $this GuestOrderController */
/* @var $model GuestOrder */
/* @var $form CActiveForm */

	$cs=Yii::app()->clientScript;
	$baseUrl = Yii::app()->baseUrl;
	$cs->registerScriptFile($baseUrl . '/themes/kalpana/js/bootstrap-timepicker.js', CClientScript::POS_HEAD);

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'guest-order-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=> true,
	'enableClientValidation' => false,
	'clientOptions' => array(
			'validateOnSubmit' => true,
			'validateOnChange' => false,
			'afterValidate' => 'js:function(form,data,hasError) {
				if (!hasError) {
					$.ajax({
						url:"'.Yii::app()->createUrl($url,array("id" => $id)).'",
						type:"POST",
						data:form.serialize(),
						success:function(data) {
							if (data == 1) {
							  $("#myModal").hide();
							  $(".modal-backdrop").removeClass("in");
							    $(".orderHtml").hide();
							    $(".orderbody").html(" ");
							    refreshgrid();
							}
						}
					});
				}				
				return false;
			}'
			/*'beforeValidate' => 'js:function(form) {
				$.ajax({
					url:"'.Yii::app()->createUrl('guestOrder/create').'",
					type:"POST",
					data:form.serialize(),
					success:function(data) {
						if (data != "") {
                        $(".orderformview").html(data);
                    	}
					}
				});
			}',
			*/
	),

)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="col-xs-8 col-sm-8 col-md-4">
		<?php echo $form->labelEx($model,'order_date'); ?>
		<div class="">
			<?php
				$model->order_date = isset($model->order_date) && $model->order_date != "" ?
					   					date('d-m-Y',strtotime($model->order_date)) : '';

				echo $form->textField($model,'order_date',array('class' => 'form-control orderdate')); ?>
			<?php
				//echo $form->textField($model,'order_date');
			/*$this->widget('zii.widgets.jui.CJuiDatePicker',array(
					'name'=>'GuestOrder[order_date]',
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

				));*/
			?>
			<?php echo $form->error($model,'order_date'); ?>
		</div>
	</div>

	<div class="col-xs-8 col-sm-8 col-md-4">
		<?php echo $form->labelEx($model,'order_time', array('class' => '')); ?>

			<?php echo $form->textField($model,'order_time',array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'order_time'); ?>

	</div>
	<div class="col-xs-8 col-sm-8 col-md-4">
		<?php echo $form->labelEx($model,'order_name', array('class' => '')); ?>
			<?php echo $form->textField($model,'order_name',array('class' => 'form-control','size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'order_name'); ?>
	</div>

	<div class="clearfix"></div>
	<div class="col-xs-8 col-sm-8 col-md-4">
		<?php echo $form->labelEx($model,'qty', array('class' => ' ')); ?>

			<?php echo $form->textField($model,'qty',array('class' => 'form-control qty calculate')); ?>
			<?php echo $form->error($model,'qty'); ?>

	</div>
	
	<div class="col-xs-8 col-sm-8 col-md-4">
		<?php echo $form->labelEx($model,'price', array('class' => '')); ?>

			<?php echo $form->textField($model,'price',array('class' => 'form-control price calculate')); ?>
			<?php echo $form->error($model,'price'); ?>

	</div>

	<div class="col-xs-8 col-sm-8 col-md-4">
		<?php echo $form->labelEx($model,'include_tax', array('class' => '')); ?>

			<?php
				$taxRate = CHtml::listData(CommonController::getTaxRate(),'id','name');
				echo $form->dropDownList($model,'include_tax',$taxRate,array('class' => 'form-control tax calculate','empty' => '-Select-')); ?>
			<?php echo $form->error($model,'include_tax'); ?>

	</div>
	<div class="clearfix"></div>
	<div class="col-xs-8 col-sm-8 col-md-4">
		<label class="">Total</label>

			<?php echo CHtml::textField('total','',array('class' => 'form-control total')); ?>
			<?php //echo $form->error($model,'include_tax'); ?>
		</div>
	
	<div class="clearfix"></div>
	<div class="col-xs-8 col-sm-8 col-md-2">
		<label class=""></label>		
			<?php
				echo CHtml::hiddenField('GuestOrder[guest_id]',$id);
				echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary'));
			?>
	</div>
	</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<div class="clearfix"></div>
<?php
	$baseUrl = Yii::app()->baseUrl;
	$cs = Yii::app()->getClientScript();

	$cs->registerScriptFile($baseUrl . '/themes/kalpana/js/bootstrap-datepicker.js');
	$cs->registerScriptFile($baseUrl . '/themes/kalpana/js/bootstrap-timepicker.js');
?>
<script>
	$(document).ready(function(){
		jQuery('.orderdate').datepicker({
			'format' : 'dd-mm-yyyy',
			'autoclose' : true,
			'startDate' : '01-01-1990'
		});
		$('#GuestOrder_order_time').timepicker({
			template:'dropdown',
			showSeconds:true,
			showMeridian:false
		});

		$('.calculate').on('change, keyup',function() {
			var qty = Number($('.qty').val()),
				price = Number($('.price').val()),
				tax = Number($('.tax').val()),
				total = $('.total'),
				totalAmt = 0;
			subTotal = qty * price;
			totalAmt = (subTotal * tax / 100) + subTotal;
			$("#total").val(totalAmt);
		});
	})
</script>