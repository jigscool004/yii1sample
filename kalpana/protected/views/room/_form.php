<?php
/* @var $this RoomController */
/* @var $model Room */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'room-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
        'enableClientValidation' => true,
        'clientOptions' => array('validateOnSubmit' => true),
    ));
    ?>

    <div class="col-lg-10" style='margin-bottom: 20px;'>
        <p class="note">Fields with <span class="required">*</span> are required.</p>
        <?php echo $form->errorSummary($model); ?>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-4">
        <div class="form-group">
            <?php echo $form->labelEx($model, 'room_no'); ?>
            <?php echo $form->textField($model, 'room_no', array('size' => 20, 'maxlength' => 50, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'room_no'); ?>
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-4">
        <div class="form-group">
            <?php echo $form->labelEx($model, 'floor_no'); ?>
            <?php echo $form->textField($model, 'floor_no', array('size' => 20, 'maxlength' => 50, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'floor_no'); ?>
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-4">
        <div class="form-group">
            <?php echo $form->labelEx($model, 'room_name'); ?>
            <?php echo $form->textField($model, 'room_name', array('size' => 50, 'maxlength' => 50, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'room_name'); ?>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-xs-6 col-sm-6 col-md-2">
        <?php echo $form->labelEx($model, 'single_bed'); ?>
        <?php
        $bedArr = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        echo $form->dropDownList($model, 'single_bed', $bedArr, array('class' => 'form-control'));
        ?>
        <?php echo $form->error($model, 'single_bed'); ?>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-2">
        <?php echo $form->labelEx($model, 'double_bed'); ?>
        <?php echo $form->dropDownList($model, 'double_bed', $bedArr, array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'double_bed'); ?>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-2">
        <?php echo $form->labelEx($model, 'extra_bed'); ?>
        <?php echo $form->dropDownList($model, 'extra_bed', $bedArr, array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'extra_bed'); ?>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-2">
        <?php echo $form->labelEx($model, 'room_rate'); ?>
        <?php echo $form->textField($model, 'room_rate', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'room_rate'); ?>
    </div>
    <div class="clearfix"></div>
    <div class="col-xs-6 col-sm-6 col-md-8">
        <?php echo $form->labelEx($model, 'description'); ?>
        <?php echo $form->textArea($model, 'description', array('rows' => 3, 'cols' => 50, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'description'); ?>
    </div>

    <div class="clearfix"></div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <?php echo $form->labelEx($model, 'equipment_id'); ?>

        <?php
        //echo $form->textField($model,'equipment_id',array('size'=>20,'maxlength'=>12,'class' => 'form-control'));
        echo CHtml::textField('Room[equipment_id]', '', array('class' => 'form-control', 'id' => 'equipmentId'));

        $this->widget('ext.ESelect2.ESelect2', array(
            'selector' => '#equipmentId',
            'options' => array(
                'class' => 'form-control',
                'placeholder' => 'Search a equipment',
                'multiple' => 'multiple',
                'minimumInputLength' => 2,
                'ajax' => array(
                    'url' => Yii::app()->createUrl('room/getEquipment'),
                    'dataType' => 'json',
                    'data' => 'js: function(term,page) {
									return {
										name: term, 
										page_limit: 10,
									};
								}',
                    'results' => 'js:function(data,page){
									  if (data != "") {
									     var eq = new Array();
									  	 $.each(data,function(k,item){
									  	 	eq.push({
									  	 		id:item.id,
									  	 		text:item.name
									  	 	});
									  	 });
									  	 
									  } else {
									     eq = {id:"",text:"no result found"};
									  }
									  return {results:eq};
								}'
                ),
                'initSelection' => 'js:function(element,callback){
                            alert("hello");
                            console.log("hello",element);
                        }'
            ),
        ));
        ?>
        <?php echo $form->error($model, 'equipment_id'); ?>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-lg-6 buttons">
            <div class="col-lg-4">
                <?php
                echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary'));
                echo CHtml::link('Cancel', Yii::app()->createUrl('TaxCategory/index'), array('class' => 'btn btn-danger pull-right'))
                ?>
            </div>
        </div>
    </div>


    <?php $this->endWidget(); ?>

</div><!-- form -->