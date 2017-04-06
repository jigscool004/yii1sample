<div class="panel-heading">
    <div class="panel-title ordertitle">
        Add new order
    </div>
</div>
<div class="panel-body orderbody">
    <?php 
    $this->renderPartial('_form', array('model'=>$model,'id' => $id,'url' => 'guestOrder/create')); ?>
</div>
