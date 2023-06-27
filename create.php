<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */

$this->title = 'YII2 CRUD';
?>
<div class="site-index">

<h1>Employee Fill Your Details</h1>
    
        
    <div class="body-content">
<?php 
$form = ActiveForm::begin()?>
<div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'fname');?>
            </div>
        </div>
</div>

<div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'mname');?>
            </div>
        </div>
</div>

<div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'lname');?>
            </div>
        </div>
</div>

<div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'mobileno');?>
            </div>
        </div>
</div>

<div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'address');?>
            </div>
        </div>
</div>

<div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'pincode');?>
            </div>
        </div>
</div>

<div class="row">
        <div class="form-group" >
            <div class="col-lg-6" >
                <?= $form->field($post, 'joining_date');?>
            </div>
        </div>
</div>

<div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'leaving_date');?>
            </div>
        </div>
</div>

<div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'month_salary');?>
            </div>
        </div>
</div>

<div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'annual_salary');?>
            </div>
        </div>
</div>


<div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?php $items = ['Active' => 'Active', 'Inactive' => 'Inactive'];?>
                <?= $form->field($post, 'status')->dropDownList($items, ['prompt' => 'Select']);?>
            </div>
        </div>
</div>

<div class="row">
        <div class="form-group">
            <div class="col-lg-6">
             <div class="col-lg-3">
                <?= Html::submitButton('Submit', ['class'=>'btn btn-primary']);?>
             </div>
             <div class="col-lg-2"><span>
            <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary">Go Back</a></span>
             </div>
            </div>
        </div>
    </div>
            <?php ActiveForm::end() ?>
        </div>
</div>
