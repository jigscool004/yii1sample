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
	'enableAjaxValidation' => true,
    'enableClientValidation' => true,
    'clientOptions' =>  array('validateOnSubmit'=>true),
));

	$roleAccess = RoleController::roleAccess();
	$roleAccessGroupArr = CHtml::listData($roleAccess,'field_id','field_name','id');
	$pageArr = CHtml::listData($roleAccess,'id','page_name');
?>
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
	<div class="col-lg-12">
		<div class=" panel panel-default">
			<div class="panel-heading" style="padding: 1px 8px;">
				<h5 class="page-title" style="font-weight: bold">
					Role Access
				</h5>
			</div>
			<div class="panel-body">
				<?php
					if (count($roleAccessGroupArr) > 0) {
						foreach($roleAccessGroupArr as $page_id => $pageArr) {
							?>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne<?php echo $page_id?>">
									<h6 class="panel-title">
										<a role="button" data-toggle="collapse<?php echo $page_id?>" class='accordian' data-parent="#accordion" href="#collapseOne<?php echo $page_id?>" aria-expanded="true" aria-controls="collapseOne" style="font-size: 13px;">
											<?php
												//echo "<pre>"; print_r($page); echo "</pre>"; exit;
												echo strtoupper(isset($pageArr[$page_id]) && $pageArr[$page_id] != "" ? $pageArr[$page_id] : "");


											?>
										</a>
										<?php echo CHtml::checkBox('page_id','',array('class' => 'checkallpage checkallpage'.$page_id,'id' => $page_id));?>
									</h6>
								</div>
								<div id="collapseOne<?php echo $page_id?>" class="panel-collapse collapse collapse<?php echo $page_id?> in" role="tabpanel" aria-labelledby="headingOne<?php echo $page_id?>">
									<div class="panel-body">
										<?php
											 $isCheckedArr = array();
											 if (isset($roleAccessArr[$page_id])) {
												$isCheckedArr = $roleAccessArr[$page_id];
											 }
											echo CHtml::checkBoxList('Role[page_field_id]['.$page_id.'][]',$isCheckedArr,$pageArr,array(
												'template' => '{input}{label}','separator' => '','style' => 'margin:0px 5px;line-height:10px;',
												'class' => 'pageField'. $page_id
											));
										?>
									</div>
								</div>
							</div>
				<?php
						}
					}
				?>
			</div>
		</div>
	</div>
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
<script>
	$(document).ready(function(){


		$(".checkallpage").on('click',function(){
			var id = $(this).attr('id');
			if ($(this).prop('checked') == true) {
				$(".pageField" + id).prop('checked',true);
			} else {
				$(".pageField" + id).prop('checked',false);
			}
		});

		$(".accordian").on('click',function(){
			var LinkId = $(this).attr("href");
			$(LinkId).toggle('slow');
		});

		$('.collapse').collapse({
			'toggle' : false
		});
	});

</script>