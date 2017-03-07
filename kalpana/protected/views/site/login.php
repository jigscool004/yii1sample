<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="login-logo">Login to start access</div>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="form-group has-feedback">
		<?php //echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('class' => 'form-control','placeholder' => 'Username')); ?>
		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="form-group has-feedback">
		<?php #echo $form->labelEx($model,'password'); ?>
		<?php
			 $model->password = '';
			echo $form->passwordField($model,'password',array('class' => 'form-control','placeholder' => 'Password')); ?>
		<span class="glyphicon glyphicon-lock form-control-feedback"></span>

		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="form-group has-feedback rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="form-group has-feedback buttons">
		<?php echo CHtml::submitButton('Login',array('class' => 'btn btn-primary btn-block btn-flat')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
