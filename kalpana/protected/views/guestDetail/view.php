<div id="ajax-modal" class="modal hide fade" tabindex="-1"></div>
<?php
/* @var $this GuestDetailController */
/* @var $model GuestDetail */

$this->breadcrumbs = array(
    'Guest Details' => array('index'),
    $model->first_name . ' ' . $model->last_name,
);

$this->menu = array(
    array('label' => 'List GuestDetail', 'url' => array('index')),
    array('label' => 'Create GuestDetail', 'url' => array('create')),
    array('label' => 'Update GuestDetail', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete GuestDetail', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage GuestDetail', 'url' => array('admin')),
);
?>
<style>
    .form-group label {display:block;}
</style>

<div class='checkinView'>
    <?php /*
    <div class='box-header'>
        <h1 class='box-title'>Guest Details #<?php echo $model->first_name . ' ' . $model->last_name; ?></h1>
        <div class="pull-right">
            <?php echo CHtml::link('<i class="fa fa-plus-square"></i> Back', Yii::app()->createUrl('guestDetail/')) ?>
        </div>
    </div>
    */?>

      <div class="panel panel-default" >
          <div class="panel-heading">
              <div class="panel-title">Guest Detail 
                <div class="pull-right">
                  <?php echo CHtml::link('<i class="fa fa-plus-square"></i> Back', Yii::app()->createUrl('guestDetail/')) ?>
                </div>
              </div>
          </div>
          <div class="panel-body">
            <div class="col-xs-6 col-sm-6 col-md-3">
              <div class="form-group">
                <label >Guest Id</label>
                <span><?php echo $model->guest_id; ?></span>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
              <div class="form-group">
                <label >Guest Name</label>
                <span><?php echo $model->first_name . ' ' . $model->last_name; ?></span>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
              <div class="form-group">
                <label >Mobile no</label>
                <span><?php echo $model->mobile_no; ?></span>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
              <div class="form-group">
                <label >Landline no</label>
                <span><?php echo $model->landline_no; ?></span>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
              <div class="form-group">
                <label >Address line 1</label>
                <span>
                    <?php echo $model->address_line1 ;
                    ?>
                </span>
              </div>
            </div>
              <div class="col-xs-6 col-sm-6 col-md-3">
                  <div class="form-group">
                      <label >Address line 2</label>
                <span>
                    <?php echo $model->address_line2 ;
                    ?>
                </span>
                  </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-3">
                  <div class="form-group">
                      <label>Zipcode</label>
                      <span><?php echo $model->zipcode; ?></span>
                  </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-3">
                  <div class="form-group">
                      <label>State</label>
                      <span><?php echo $model->state; ?></span>
                  </div>
              </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                  <div class="form-group">
                      <label>E-mail</label>
                      <span><?php echo $model->email_id; ?></span>
                  </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                  <div class="form-group">
                      <label>Licence No</label>
                      <span><?php echo $model->license_no; ?></span>
                  </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
              <div class="form-group">
                  <label>Adharcard no</label>
                  <span><?php echo $model->adharecard_no; ?></span>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
              <div class="form-group">
                  <label>Passport no</label>
                  <span><?php echo $model->passport_no; ?></span>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <label>Comments</label>
                <div class="clearfix"></div>
                <span><?php echo $model->description?></span>
            </div>
          </div>
      </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">Reservation Details</div>
        </div>
        <div class="panel-body">
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label>Checkin Date</label>
                    <span><?php echo isset($model->checkin_date) && $model->checkin_date != '' ? date('d-m-Y',strtotime($model->checkin_date)) : 'N/A';?></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label>Checkin Time</label>
                    <span><?php echo isset($model->checkin_time) && $model->checkin_time != ''? $model->checkin_time : 'N/A';?></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label>Checkout Date</label>
                    <span><?php echo isset($model->checkout_date) && $model->checkout_date != '' ? date('d-m-Y',strtotime($model->checkout_date)) : 'N/A';?></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label>Checkout Time</label>
                    <span><?php echo isset($model->checkout_time) && $model->checkout_time != '' ? $model->checkout_time : 'N/A'?></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label>Adults</label>
                    <span><?php echo isset($model->adult) && $model->adult != '' ? $model->adult : '0'?></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label>Child</label>
                    <span><?php echo isset($model->child) && $model->child != '' ? $model->child : '0'?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default" >
        <div class="panel-heading">
            <div class="panel-title">Guest Amount Details</div>
        </div>
        <div class="panel-body">
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label>Room Rate</label>
                    <span><?php echo $model->room_rate; ?></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label>Hotel Tax</label>
                    <span><?php echo $model->hotel_tax; ?></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label>Advance Amount</label>
                    <span><?php echo $model->advance_amount; ?></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label>Debit Amount</label>
                    <span><?php echo $model->debit_amount; ?></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label>Total Amount (Net)</label>
                    <span>
                        <?php
                            echo $model->room_rate + ($model->room_rate * $model->hotel_tax / 100);
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default" >
        <div class="panel-heading">
            <div class="panel-title">Room Details</div>
        </div>
        <div class="panel-body">
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label>Room No</label>
                    <span>
                        <?php
                            echo $model->Room->room_no;
                        ?>
                    </span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label>Room Name</label>
                    <span>
                        <?php
                            echo $model->Room->room_name;
                        ?>
                    </span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label>Floor No</label>
                    <span>
                        <?php
                            echo $model->Room->floor_no;
                        ?>
                    </span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label>Single Bed</label>
                    <span>
                        <?php
                            echo $model->Room->single_bed;
                        ?>
                    </span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label>Double Bed</label>
                    <span>
                        <?php
                            echo $model->Room->double_bed;
                        ?>
                    </span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label>Extra Bed</label>
                    <span>
                        <?php
                            echo $model->Room->extra_bed;
                        ?>
                    </span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label>Equipments</label>
                    <span>
                        <?php
                            if (isset($model->Room->equipment_id) && $model->Room->equipment_id != '') {
                                $criteria = new CDbCriteria();
                                $criteria->select = 'GROUP_CONCAT(name) AS name';
                                $criteria->addCondition('id IN ('.$model->Room->equipment_id.')');
                                $equipments = Equipment::model()->find($criteria);
                                if (isset($equipments->name)) {
                                    echo $equipments->name;
                                } else {
                                    echo "Not available";
                                }
                            } else {
                                echo "Not available";
                            }
                        ?>
                    </span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="">Description</label>
                    <span>
                        <?php echo $model->Room->description?>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default" >
        <div class="panel-heading">
            <div class="panel-title">Upload Images</div>
        </div>
        <div class="panel-body">
            <?php
                //echo ;
                $photos = $model->photos;
                $path = Yii::app()->baseUrl .'/upload/guest_photos/';
                    ///Yii::getPathOfAlias('webroot') .

                if ($photos != '') {
                    foreach (explode(',',$photos) as $key => $photo) {
                       ?>
                  <div class="col-sm-3">
                      <img src="<?php echo $path . $photo?>" alt="Image" class="img-responsive">
                  </div>
            <?php
                    }
                }

            ?>
        </div>
    </div>
    <div class="panel panel-default orderHtml">

    </div>

    <div class="panel panel-default" >
        <div class="panel-heading">

            <div class="panel-title"><i class="fa fa-glass"></i> Guest Order Details
                <div class="pull-right">
                    <button type="button" class="btn btn-primary btn-xs" id="addorder" data-toggle="modal" data-target="#myModal">
                        <i class="fa fa-plus-square"></i> Add order
                    </button>
                    <button class="updategrid btn btn-primary btn-xs"  value="update grid">Refresh Order</button>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <?php $this->renderPartial('_orderview', array('orderModel' => $orderModel)); ?>
        </div>
    </div>
 </div>
<!-- Modal -->
<!--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add new order</h4>
            </div>
            <div class="modal-body orderformview">

            </div>
        </div>
    </div>
</div>-->
<div id="ajax-modal" class="modal fade" tabindex="-1"></div>

<script type="text/javascript">

    $(document).ready(function(){
        $('.updategrid').on('click',function(){
            $('#guest-order-grid').yiiGridView('update')
        });

        $('.updateOrder').on('click',function (e) {
            e.preventDefault();
            var href = $(this).attr('href');
          //  $('.orderHtml').html('');
            $.ajax({
                'url':href,
                'type':'post',
                'success':function(data) {
                    if (data != '') {
                        $('.orderHtml').show().html(data);
                    }
                }
            });
            /*var href = $(this).attr('href');
            //var model = '<div id="ajax-modal" class="modal hide fade" tabindex="-1"></div>';
            //$('body').append(model);
            $('#ajax-modal').load(href,function(){
                $('#ajax-modal').modal('show');
            });*/
        });
        
        $("#addorder").on('click',function(){

            $.ajax({
                'url':'<?php echo Yii::app()->createUrl('guestOrder/create',array('id' => $model->id));?>',
                'type':'post',
                'success':function(data) {
                    if (data != '') {
                        $('.orderHtml').html(data);
                    }
                }
            });
        });
    });
</script>