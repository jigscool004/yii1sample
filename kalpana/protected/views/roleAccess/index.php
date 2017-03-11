<?php
/* @var $this RoleAccessController */

$this->breadcrumbs=array(
	'Role Access',
);
?>
<div class='role'>
	<div class='box-header'>
		<h1 class='box-title'>Manage Role Access</h1>
		<div class="pull-right">
			<?php echo CHtml::link('<i class="fa fa-plus-square"></i> Add New Page',Yii::app()->createUrl('page/create'))?>
			<?php echo CHtml::link('<i class="fa fa-plus-square"></i> Add New Page Fields',Yii::app()->createUrl('pageFields/create'))?>
		</div>
	</div>
	<div class="panel-group col-md-11" id="accordion" role="tablist" aria-multiselectable="true">
		<?php

			$form = $this->beginWidget('CActiveForm', array(
				'id'=>'roleAccess',
				'enableAjaxValidation' => true,
				'enableClientValidation' => true,
				'clientOptions' =>  array('validateOnSubmit'=>true)
			));

			$pageArr = CHtml::listData($model,'id','page_name');
			foreach($pageGroupArr as $page_id => $page) { ?>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
					<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							<?php
								//echo "<pre>"; print_r($page); echo "</pre>"; exit;
								echo strtoupper(isset($pageArr[$page_id]) && $pageArr[$page_id] != "" ? $pageArr[$page_id] : "");
							?>
						</a>
					</h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					<div class="panel-body">
						<?php
							//$form->checkBoxList($model,)
						?>
					</div>
				</div>
			</div>
		<?php } ?>

	</div>
	<div class="clearfix"></div>
</div>
<?php $this->endWidget(); ?>
<script>
	$(document).ready(function(){
			$('.collapse').collapse({
				'toggle' : false
			});
	});
</script>