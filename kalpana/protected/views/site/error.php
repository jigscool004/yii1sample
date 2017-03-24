<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle = Yii::app()->name . ' - Error';
$this->breadcrumbs = array(
    'Error',
);
?>



<div class="box-header with-border">
    <h3 class="box-title">Error <?php echo $code; ?></h3>
</div>
<div class="box-body">
    <div class="error">
        <?php echo CHtml::encode($message); ?>
    </div>
</div>