<?php
/* @var $this TaxCategoryController */
/* @var $model TaxCategory */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'tax-category-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => true,
        'enableClientValidation' => true,
        'clientOptions' => array('validateOnSubmit' => true),
    ));
    ?>
    <div class="col-lg-10" style='margin-bottom: 20px;'>
        <p class="note">Fields with <span class="required">*</span> are required.</p>
        <?php echo $form->errorSummary($model); ?>    
    </div>

    <div class="col-lg-6">
        <?php echo $form->labelEx($model, 'name', array('class' => 'col-lg-3')); ?>
        <div class="col-lg-8">
            <?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'name'); ?>    
        </div>
    </div>
    <div class="clearfix"></div>


    <div class="col-lg-6">
        <?php echo $form->labelEx($model, 'category', array('class' => 'col-lg-3')); ?>
        <div class="col-lg-8">
            <?php
            $taxCatArr = array(
                1 => 'Guest Check in Tax',
                2 => 'Guest Check out Tax',
            );
            echo $form->dropDownList($model, 'category', $taxCatArr, array('empty' => '- Select -', 'class' => 'form-control'));
            ?>
            <?php echo $form->error($model, 'category'); ?>
        </div>

    </div>

    <div class="clearfix"></div>
    <div class="col-lg-6">
        <?php echo $form->labelEx($model, 'status', array('class' => 'col-lg-3')); ?>
        <div class="col-lg-8">
            <?php
            $statusArr = array(1 => 'Active', 0 => 'Inactive');
            echo $form->radioButtonList($model, 'status', $statusArr, array(
                'template' => '{label}{input}', 'separator' => '', 'style' => 'margin:0px 5px;'
                    )
            );
            //echo $form->textField($model,'status',array('class' => 'form-control')); 
            ?>
            <?php echo $form->error($model, 'status'); ?>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-lg-6 buttons ">
        <div class="col-lg-3"></div>
        <div class="col-lg-4">
            <?php
            echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary'));
            echo CHtml::link('Cancel', Yii::app()->createUrl('TaxCategory/index'), array('class' => 'btn btn-danger pull-right'))
            ?>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->