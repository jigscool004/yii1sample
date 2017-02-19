<?php
/* @var $this RoleController */
/* @var $model Role */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'role-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=> true,
)); ?>
    <div class="col-lg-10" style='margin-bottom: 20px;'>
        <p class="note">Fields with <span class="required">*</span> are required.</p>
        <?php echo $form->errorSummary($model); ?>    
    </div>
    <div class="clearfix"></div>
	<div class="col-lg-6">
		<?php echo $form->labelEx($model,'role',array('class' => 'col-lg-2')); ?>
		<div class="col-lg-4">
			<?php echo $form->textField($model,'role',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'role'); ?>	
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-lg-6">
		<?php echo $form->labelEx($model,'status',array('class' => 'col-lg-2')); ?>
		<div class="col-lg-4">
			<?php 
				$statusArr = array( 1 => 'Active', 0 => 'Inactive');
				echo $form->radioButtonList($model,'status',$statusArr,array(
                        'template' => '{label}{input}','separator' => '','style' => 'margin:0px 5px;'  
                    )
                );
			?>
			<?php echo $form->error($model,'status'); ?>
		</div>
	</div>
    <div class="clearfix"></div>
	<div class="buttons col-lg-6">
        <div class="col-lg-2"></div>
        <div class="col-lg-4">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class' => 'btn btn-primary'));
            
                echo CHtml::link('Cancel','#',array('class' => 'btn btn-danger pull-right'));
            ?>
        </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->