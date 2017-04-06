<?php
/* @var $this GuestDetailController */
/* @var $model GuestDetail */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'guest-detail-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => true,
        'enableClientValidation' => false,
        'clientOptions' => array('validateOnSubmit' => true),
        'htmlOptions' => array('enctype' => 'multipart/form-data'),

    ));
    ?>

    <div class="col-lg-10" style='margin-bottom: 20px;'>
        <p class="note">Fields with <span class="required">*</span> are required.</p>
        <?php //echo $form->errorSummary($model); ?>
    </div>
    <div class="clearfix"></div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">Room Details</div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-2">
                        <div class="form-group">
                            <?php

                                $totalAmount = '';
                                if (isset($model->room_rate,$model->hotel_tax) && $model->room_rate != '' && $model->hotel_tax != '') {
                                    $totalAmount = ($model->room_rate * $model->hotel_tax / 100) + $model->room_rate;
                                }


                            $roomDetails = GuestDetailController::getRoomDetails($model->room_id);

                            $roomDetailArr = array();
                            foreach ($roomDetails as $key => $rdetail) {
                                if (isset($model->room_id) && $model->room_id == $rdetail->id) {
                                      if ($model->room_rate != $rdetail->room_rate) {
                                          $rdetail->room_rate = $model->room_rate;
                                      }
                                }
                                $roomDetailArr[$rdetail->id] = array(
                                    'id' => $rdetail->id,
                                    'room_no' => $rdetail->room_no,
                                    'room_name' => $rdetail->room_name,
                                    'single_bed' => $rdetail->single_bed,
                                    'double_bed' => $rdetail->double_bed,
                                    'equipment' => $rdetail->equipment_name,
                                    'description' => stripslashes($rdetail->description) ,
                                    'room_rate' => $rdetail->room_rate,
                                    'floor_no' => $rdetail->floor_no,
                                );


                            }

                            $roomArr = CHtml::listData($roomDetails, 'id', 'room_no');
                            echo $form->labelEx($model, 'room_id', array('class' => ''));
                            echo '<br>';
                            $this->widget('ext.ESelect2.ESelect2', array(
                                'name' => 'GuestDetail[room_id]',
                                'value' => $model->room_id,
                                'htmlOptions' => array(
                                    'class' => '',
                                    'placeholder' => 'Select room'
                                ),
                                'data' => $roomArr,
                            ));
                            ?>
                            <?php echo $form->error($model, 'room_id'); ?>
                        </div>

                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-2 roomSelection">
                        <label>Floor No</label>
                        <?php
                        echo CHtml::textField('floor_no', '', array('class' => 'form-control', 'readonly' => 'readonly'));
                        ?>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-2 roomSelection">
                        <label>Single Bed</label>
                        <?php
                            echo CHtml::textField('single_bed', '', array('class' => 'form-control', 'readonly' => 'readonly'));
                        ?>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-2 roomSelection">
                        <label>Double Bed</label>
                        <?php
                            echo CHtml::textField('double_bed', '', array('class' => 'form-control', 'readonly' => 'readonly'));
                        ?>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-2 roomSelection">
                        <label>Extra Bed</label>
                        <?php
                            echo CHtml::textField('extra_bed', '', array('class' => 'form-control', 'readonly' => 'readonly'));
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-md-6 col-md-4">
                        <label>Room Name</label>
                        <?php
                            echo CHtml::textField('room_name', '', array('class' => 'form-control', 'readonly' => 'readonly'));
                        ?>
                    </div>
                    <div class="col-xs-6 col-md-6 col-md-6">
                        <label>Equipment's</label>
                        <?php
                            echo CHtml::textField('equipment', '', array('class' => 'form-control', 'readonly' => 'readonly'));
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-md-10">
                        <label>Description</label>
                        <?php
                            echo CHtml::textArea('description', '', array('class' => 'form-control', 'readonly' => 'readonly'));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">Reservation Details</div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class='col-xs-6 col-sm-4 col-md-2'>
                        <div class="form-group">
                            <?php
                                echo $form->labelEx($model, 'checkin_date',array('label' => '<i class="fa fa-calendar"></i> Checkin Date'));
                                $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                    'name'=>'GuestDetail[checkin_date]',
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
                            <?php echo $form->error($model, 'checkin_date'); ?>
                        </div>
                    </div>
                    <div class='col-xs-6 col-sm-4 col-md-2'>
                        <div class="form-group input-group bootstrap-timepicker timepicker">
                            <?php echo $form->labelEx($model, 'checkin_time',array('label' => '<i class="fa fa-clock-o"></i> Checkin Time'));
                            ?>
                            <?php echo $form->textField($model, 'checkin_time', array('class' => 'form-control', 'maxlength' => 50,'placeholder' => 'HH:MM:SS')); ?>
                            <?php


  /*                              $this->widget( 'ext.EJuiTimePicker.EJuiTimePicker', array(
                                    'model' => $model, // Your model
                                    'attribute' => 'checkin_time', // Attribute for input
                                    'options' => array(
                                         'timeFormat' => 'hh:mm:ss'
                                    ),
                                    'timeOptions' => array('showOn' => 'focus'),
                                    'htmlOptions'=>array(
                                        'class' => 'form-control'
                                    )
                                ));*/
                            echo $form->error($model, 'checkin_time'); ?>
                        </div>
                    </div>
                    <div class='col-xs-6 col-sm-4 col-md-2'>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'adult'); ?>
                            <?php


                                $counterArr = array(1,2,3,4,5,6,7,8,9,10);
                                $this->widget('ext.ESelect2.ESelect2', array(
                                    'name' => 'GuestDetail[adult]',
                                    'value' => $model->adult,
                                    'htmlOptions' => array(
                                        'class' => 'form-control',
                                        'placeholder' => 'Select no of adults'
                                    ),
                                    'data' => $counterArr,
                                ));
                            ?>
                            <?php echo $form->error($model, 'adult'); ?>
                        </div>
                    </div>
                    <div class='col-xs-6 col-sm-4 col-md-2'>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'child'); ?>
                            <?php


                                $counterArr = array(1,2,3,4,5,6,7,8,9,10);
                                $this->widget('ext.ESelect2.ESelect2', array(
                                    'name' => 'GuestDetail[child]',
                                    'value' => $model->child,
                                    'htmlOptions' => array(
                                        'class' => 'form-control',
                                        'placeholder' => 'Select no of child'
                                    ),
                                    'data' => $counterArr,
                                ));
                            ?>
                            <?php echo $form->error($model, 'child'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
    <div class="clearfix"></div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">Reservation Details</div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class='col-xs-6 col-sm-6 col-md-4'>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'first_name'); ?>
                            <?php echo $form->textField($model, 'first_name', array('class' => 'form-control', 'maxlength' => 50)); ?>
                            <?php echo $form->error($model, 'first_name'); ?>
                        </div>
                    </div>
                    <div class='col-xs-6 col-sm-6 col-md-4'>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'last_name'); ?>
                            <?php echo $form->textField($model, 'last_name', array('class' => 'form-control', 'maxlength' => 50)); ?>
                            <?php echo $form->error($model, 'last_name'); ?>
                        </div>
                    </div>
                    <div class='col-xs-6 col-sm-6 col-md-4'>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'mobile_no'); ?>
                            <?php echo $form->textField($model, 'mobile_no', array('class' => 'form-control', 'maxlength' => 13)); ?>
                            <?php echo $form->error($model, 'mobile_no'); ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class='col-xs-6 col-sm-6 col-md-4'>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'landline_no'); ?>
                            <?php echo $form->textField($model, 'landline_no', array('class' => 'form-control', 'maxlength' => 13)); ?>
                            <?php echo $form->error($model, 'landline_no'); ?>
                        </div>
                    </div>
                    <div class='col-xs-6 col-sm-6 col-md-4'>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'gender'); ?>
                            <?php 
                                ///echo $form->textField($model, 'gender', array('class' => 'form-control', 'maxlength' => 50));
                                echo $form->dropDownList($model,'gender',array(1 => 'Male', 2 => 'Female'),array('class' => 'form-control','empty' => '-Select-'));
                            ?>
                            <?php echo $form->error($model, 'gender'); ?>
                        </div>
                    </div>
                    <div class='col-xs-6 col-sm-6 col-md-4'>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'address_line1'); ?>
                            <?php echo $form->textField($model, 'address_line1', array('class' => 'form-control', 'maxlength' => 50)); ?>
                            <?php echo $form->error($model, 'address_line1'); ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class='col-xs-6 col-sm-6 col-md-4'>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'address_line2'); ?>
                            <?php echo $form->textField($model, 'address_line2', array('class' => 'form-control', 'maxlength' => 50)); ?>
                            <?php echo $form->error($model, 'address_line2'); ?>
                        </div>
                    </div>
                    <div class='col-xs-6 col-sm-6 col-md-4'>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'zipcode'); ?>
                            <?php echo $form->textField($model, 'zipcode', array('class' => 'form-control', 'maxlength' => 6)); ?>
                            <?php echo $form->error($model, 'zipcode'); ?>
                        </div>
                    </div>
                    <div class='col-xs-6 col-sm-6 col-md-4'>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'state'); ?>
                            <?php echo $form->textField($model, 'state', array('class' => 'form-control', 'maxlength' => 50)); ?>
                            <?php echo $form->error($model, 'state'); ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class='col-xs-6 col-sm-6 col-md-4'>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'email_id'); ?>
                            <?php echo $form->textField($model, 'email_id', array('class' => 'form-control', 'maxlength' => 50)); ?>
                            <?php echo $form->error($model, 'email_id'); ?>
                        </div>
                    </div>
                    <div class='col-xs-6 col-sm-6 col-md-4'>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'license_no'); ?>
                            <?php echo $form->textField($model, 'license_no', array('class' => 'form-control', 'maxlength' => 50)); ?>
                            <?php echo $form->error($model, 'license_no'); ?>
                        </div>
                    </div>
                    <div class='col-xs-6 col-sm-6 col-md-4'>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'adharecard_no'); ?>
                            <?php echo $form->textField($model, 'adharecard_no', array('class' => 'form-control', 'maxlength' => 50)); ?>
                            <?php echo $form->error($model, 'adharecard_no'); ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class='col-xs-6 col-sm-6 col-md-4'>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'passport_no'); ?>
                            <?php echo $form->textField($model, 'passport_no', array('class' => 'form-control', 'maxlength' => 50)); ?>
                            <?php echo $form->error($model, 'passport_no'); ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class='col-xs-6 col-sm-6 col-md-8'>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'description'); ?>
                            <?php echo $form->textArea($model, 'description', array('class' => 'form-control', 'maxlength' => 255)); ?>
                            <?php echo $form->error($model, 'description'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">Upload Images</div>
            </div>
            <div class="panel-body">
                <div class='col-xs-6 col-sm-6 col-md-4'>
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'photos'); ?>
                        <?php
                            $this->widget('CMultiFileUpload', array(
                                'model'=> $model,
                                'attribute'=>'photos',
                                'accept'=>'jpg|gif|png',
                                'options'=>array(
                                    'class' => 'form-control'
                                    // 'onFileSelect'=>'function(e, v, m){ alert("onFileSelect - "+v) }',
                                    // 'afterFileSelect'=>'function(e, v, m){ alert("afterFileSelect - "+v) }',
                                    // 'onFileAppend'=>'function(e, v, m){ alert("onFileAppend - "+v) }',
                                    // 'afterFileAppend'=>'function(e, v, m){ alert("afterFileAppend - "+v) }',
                                    // 'onFileRemove'=>'function(e, v, m){ alert("onFileRemove - "+v) }',
                                    // 'afterFileRemove'=>'function(e, v, m){ alert("afterFileRemove - "+v) }',
                                ),
                                'denied' =>'File is not allowed',
                                'max'=> 5, // max 10 files
                            ));
                        ?>
                        <?php echo $form->error($model, 'photos'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">Guest Amount Details</div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-3">
                        <?php echo $form->labelEx($model, 'room_rate'); ?>
                        <?php echo $form->textField($model, 'room_rate', array('class' => 'form-control calculateRate', 'maxlength' => 10)); ?>
                        <?php echo $form->error($model, 'room_rate'); ?>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3">
                        <?php echo $form->labelEx($model, 'hotel_tax'); ?>
                        <?php echo $form->textField($model, 'hotel_tax', array('class' => 'form-control calculateRate', 'maxlength' => 4)); ?>
                        <?php echo $form->error($model, 'hotel_tax'); ?>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3">
                        <?php echo $form->labelEx($model, 'advance_amount'); ?>
                        <?php echo $form->textField($model, 'advance_amount', array('class' => 'form-control calculateRate', 'maxlength' => 10)); ?>
                        <?php echo $form->error($model, 'advance_amount'); ?>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3">
                        <?php echo $form->labelEx($model, 'debit_amount'); ?>
                        <?php echo $form->textField($model, 'debit_amount', array('class' => 'form-control calculateRate debit_amount', 'maxlength' => 10)); ?>
                        <?php echo $form->error($model, 'debit_amount'); ?>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-xs-6 col-sm-6 col-md-3">
                        <label>Total Amount</label>
                        <?php
                            echo CHtml::textField('total_amount',$totalAmount,array('class' => 'form-control calculateRate total_amount','maxlength' => 10));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>

    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-xs-6 col-sm-4 col-md-2">
                    <div class="from-group">
                        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create ' : 'Save',array('class' => 'btn btn-block btn-info')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div>
<?php //Yii::app()->clientScript->registerScriptFile("https://maps.googleapis.com/maps/api/js?key=AIzaSyDUYNK3CJJMliMuE-eTPD4zK3n2xKdcnF8&libraries=places"); ?>
<script>
    $(document).ready(function() {
        <?php if ($model->room_id > 0) { ?>
            displayValue('<?php echo $model->room_id; ?>');
        <?php }?>
        $('#GuestDetail_checkin_time').timepicker({
            template:'dropdown',
            showSeconds:true,
            showMeridian:false
        }).on('show.timepicker',function(e) {
            console.log(e.time);
        });

        $("#GuestDetail_room_id").on('change',function(){
            var $thisValue = $(this).val();
            displayValue($thisValue);
        });

        $('#GuestDetail_checkin_date').datepicker({
            autoclose: true
        });

        $('.calculateRate').on('keyup',function() {

            var roomRate = $('#GuestDetail_room_rate').val() || 0,
                discount = $('#GuestDetail_hotel_tax').val() || 0,
                advanceAmount = $('#GuestDetail_advance_amount').val() || 0,
                debitAmount = $('#GuestDetail_debit_amount').val() || 0,
                totalAmount = $('#total_amount').val(),
                currentValue = $(this).val();

                interest = (Number(roomRate) * Number(discount)) / 100;
                totalAmt = Number(roomRate) + Number(interest);

                dbtAmt = Number(totalAmt) - Number(advanceAmount);
              $('#GuestDetail_debit_amount').val(dbtAmt);
              $('#total_amount').val(totalAmt);
                
        });

        function displayValue($thisValue) {
            selectedValue = <?php echo json_encode($roomDetailArr,true); ?>;
            data = selectedValue[$thisValue];
            $('#floor_no').val(data.floor_no);
            $('#single_bed').val(data.single_bed);
            $('#double_bed').val(data.double_bed);
            $('#extra_bed').val(data.extra_bed);
            $('#description').val(data.description);
            $('#equipment').val(data.equipment);
            $('#room_name').val(data.room_name);
            $('#GuestDetail_room_rate').val(data.room_rate);
        }
        function initialize() {
            var options = {
                types: ['(cities)']
            };
            var input = document.getElementById('GuestDetail_state');
            var autocomplete = new google.maps.places.Autocomplete(input, options);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    });


    /*function calculateAmount() {


        
    }*/
</script>





