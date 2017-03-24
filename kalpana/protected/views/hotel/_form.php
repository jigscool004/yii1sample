<?php
/* @var $this HotelController */
/* @var $model Hotel */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'hotel-form',
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
    <div class="clearfix"></div>

    <div class="col-lg-8">
        <?php echo $form->labelEx($model, 'hotel_name', array('class' => 'col-lg-3')); ?>
        <div class="col-lg-5">
            <?php echo $form->textField($model, 'hotel_name', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'hotel_name'); ?>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-lg-8">
        <?php echo $form->labelEx($model, 'owner_name', array('class' => 'col-lg-3')); ?>
        <div class="col-lg-5">
            <?php echo $form->textField($model, 'owner_name', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'owner_name'); ?>
        </div>

    </div>
    <div class="clearfix"></div>

    <div class="col-lg-8">
        <?php echo $form->labelEx($model, 'address_line_one', array('class' => 'col-lg-3')); ?>
        <div class="col-lg-5">
            <?php echo $form->textField($model, 'address_line_one', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'address_line_one'); ?>
        </div>

    </div>
    <div class="clearfix"></div>

    <div class="col-lg-8">
        <?php echo $form->labelEx($model, 'address_line_two', array('class' => 'col-lg-3')); ?>
        <div class="col-lg-5">
            <?php echo $form->textField($model, 'address_line_two', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'address_line_two'); ?>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="col-lg-8">
        <?php echo $form->labelEx($model, 'zip_code', array('class' => 'col-lg-3')); ?>
        <div class="col-lg-5">
            <?php echo $form->textField($model, 'zip_code', array('size' => 8, 'maxlength' => 10, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'zip_code'); ?>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="col-lg-8">
        <?php echo $form->labelEx($model, 'address_other', array('class' => 'col-lg-3')); ?>
        <div class="col-lg-5">
            <?php echo $form->textField($model, 'address_other', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control', "spellcheck" => "false")); ?>
            <?php echo $form->error($model, 'address_other'); ?>
        </div>

    </div>
    <div class="clearfix"></div>

    <div class="col-lg-8">
        <?php echo $form->labelEx($model, 'mobile_no', array('class' => 'col-lg-3')); ?>
        <div class="col-lg-5">
            <?php echo $form->textField($model, 'mobile_no', array('size' => 15, 'maxlength' => 15, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'mobile_no'); ?>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="col-lg-8">
        <?php echo $form->labelEx($model, 'hotel_phone_no', array('class' => 'col-lg-3')); ?>
        <div class="col-lg-5">
            <?php echo $form->textField($model, 'hotel_phone_no', array('size' => 15, 'maxlength' => 15, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'hotel_phone_no'); ?>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="col-lg-8">
        <?php echo $form->labelEx($model, 'reservation_no', array('class' => 'col-lg-3')); ?>
        <div class="col-lg-5">
            <?php echo $form->textField($model, 'reservation_no', array('size' => 15, 'maxlength' => 15, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'reservation_no'); ?>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="col-lg-8">
        <?php echo $form->labelEx($model, 'email', array('class' => 'col-lg-3')); ?>
        <div class="col-lg-5">
            <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 60, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'email'); ?>    
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="col-lg-8">
        <?php echo $form->labelEx($model, 'website', array('class' => 'col-lg-3')); ?>
        <div class="col-lg-5">
            <?php echo $form->textField($model, 'website', array('size' => 50, 'maxlength' => 50, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'website'); ?>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="col-lg-8">
        <?php echo $form->labelEx($model, 'check_in', array('class' => 'col-lg-3')); ?>
        <div class="col-lg-5">
            <?php echo $form->textField($model, 'check_in', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'check_in'); ?>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="col-lg-8">
        <?php echo $form->labelEx($model, 'check_out', array('class' => 'col-lg-3')); ?>
        <div class="col-lg-5">
            <?php echo $form->textField($model, 'check_out', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'check_out'); ?>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="buttons col-lg-8">
        <div class="col-lg-3"></div>
        <div class="col-lg-5">
            <?php
            echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary'));

            echo CHtml::link('Cancel', '#', array('class' => 'btn btn-danger', 'style' => 'margin-left:5px;'));
            ?>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
<?php Yii::app()->clientScript->registerScriptFile("https://maps.googleapis.com/maps/api/js?key=AIzaSyDUYNK3CJJMliMuE-eTPD4zK3n2xKdcnF8&libraries=places"); ?>


<script type="text/javascript">
    function initialize() {
        var options = {
            types: ['(cities)']
        };
        var input = document.getElementById('Hotel_address_other');
        var autocomplete = new google.maps.places.Autocomplete(input, options);
        console.log(autocomplete);
    }
    google.maps.event.addDomListener(window, 'load', initialize);

</script>