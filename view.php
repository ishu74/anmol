<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */

$this->title = 'YII2 CRUD';
?>
<div class="site-index">

<h1>View Employee Details</h1>
<ul class="list-group">
    <p1>First Name</p1>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $post->fname; ?>
  </li>
  <p1>Middle Name</p1>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $post->mname; ?>
  </li>
  <p1>Last Name</p1>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $post->lname; ?>
  </li>
  <p1>Mobile No</p1>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $post->mobileno; ?>
  </li>
  <p1>Address</p1>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $post->address; ?>
  </li>
  <p1>Pincode</p1>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $post->pincode; ?>
  </li>
  <p1>Joining Date</p1>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $post->joining_date; ?>
  </li>
  <p1>Leaving Date</p1>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $post->leaving_date; ?>
  </li>
  <p1>Month Salary</p1>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $post->month_salary; ?>
  </li>
  <p1>Annual Salary</p1>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $post->annual_salary; ?>
  </li>
  <p1>Status</p1>
  <li class="list-group-item d-flex justify-content-between align-items-center">
   <?php echo $post->status; ?>
  </li>
</ul>
        
    <div class="body-content">
    <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary">Go Back</a>
        </div>
</div>
