<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
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
    
	<div class="col-lg-6">
		<?php echo $form->labelEx($model,'name',array('class' => 'col-lg-3')); ?>
        <div class="col-lg-8">
            <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
            <?php echo $form->error($model,'name'); ?>    
        </div>
	</div>
    <div class="clearfix"></div>
	<div class="col-lg-6">
		<?php echo $form->labelEx($model,'login_username',array('class' => 'col-lg-3')); ?>
        <div class="col-lg-8">
            <?php echo $form->textField($model,'login_username',array('size'=>40,'maxlength'=>40,'class' => 'form-control')); ?>
            <?php echo $form->error($model,'login_username'); ?>
        </div>
	</div>
    <div class="clearfix"></div>
    <?php if ($model->isNewRecord) : ?>
	<div class="col-lg-6">
		<?php echo $form->labelEx($model,'hash_password',array('class' => 'col-lg-3')); ?>
        <div class="col-lg-8">
            <?php echo $form->passwordField($model,'hash_password',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
            <?php echo $form->error($model,'hash_password'); ?>
        </div>
		
	</div>
    <div class="clearfix"></div>
    <div class="col-lg-6">
		<?php echo $form->labelEx($model,'confirmpassword',array('class' => 'col-lg-3')); ?>
        <div class="col-lg-8">
            <?php echo $form->passwordField($model,'confirmpassword',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
            <?php echo $form->error($model,'confirmpassword'); ?>
        </div>
		
	</div>
    <div class="clearfix"></div>
    <?php endif;?>
    <div class="col-lg-6">
		<?php echo $form->labelEx($model,'email',array('class' => 'col-lg-3')); ?>
        <div class="col-lg-8">
            <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
            <?php echo $form->error($model,'email'); ?>    
        </div>
	</div>
    <div class="clearfix"></div>

	<div class="col-lg-6">
		<?php echo $form->labelEx($model,'mobile_no',array('class' => 'col-lg-3')); ?>
        <div class="col-lg-8">
            <?php echo $form->textField($model,'mobile_no',array('size'=>20,'maxlength'=>20,'class' => 'form-control')); ?>
            <?php echo $form->error($model,'mobile_no'); ?>
        </div>
		
	</div>
    <div class="clearfix"></div>
	<div class="col-lg-6">
		<?php echo $form->labelEx($model,'role_id',array('class' => 'col-lg-3')); ?>
        <div class="col-lg-8">
            <?php
                $criteria = new CDbCriteria();
                $criteria->select = 'id,role';
                $criteria->compare('status',1);
                $roleAttr = CHtml::listData(Role::model()->findAll($criteria),'id','role');
                echo $form->dropDownList($model,'role_id', $roleAttr,array('empty' => '- Select -','class' => 'form-control'));
            ?>
            <?php echo $form->error($model,'role_id'); ?>
        </div>
	</div>
    <div class="clearfix"></div>

	

	<div class="col-lg-6">
		<?php echo $form->labelEx($model,'status',array('class' => 'col-lg-3')); ?>
        <div class="col-lg-8">
            <?php 
            $statusArr = array( 1 => 'Active', 0 => 'Inactive');
				echo $form->radioButtonList($model,'status',$statusArr,array(
                        'template' => '{label}{input}','separator' => '','style' => 'margin:0px 5px;'  
                    )
                );
            //echo $form->textField($model,'status',array('class' => 'form-control')); ?>
            <?php echo $form->error($model,'status'); ?>
        </div>
	</div>
    <div class="clearfix"></div>
	<div class="col-lg-6 buttons ">
        <div class="col-lg-3"></div>
        <div class="col-lg-4">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class' => 'btn btn-primary'));
                echo CHtml::link('Cancel',Yii::app()->createUrl('user/index'),array('class' => 'btn btn-danger pull-right'))
            ?>
        </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->