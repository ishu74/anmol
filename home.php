<?php
use yii\helpers\html;
/** @var yii\web\View $this */

$this->title = 'YII2 CRUD';
?>
<div class="site-index">
  <?php if(yii::$app->session->hasFlash('message')):?>
    <div class="alert alert-dismissible alert-success">
  <button type="button" class="btn-close" data-bs-dismiss="alert">&times;</button>
<?php echo yii::$app->session->getFlash('message');?>
</div>

    <?php endif; ?>

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 style="  color: #337ab7;">All Employee Details</h1>

    </div>
       <div class="row">
          <span style="margin-bottom: 20px;"><?= Html::a('Add New ', ['/site/create'], ['class' => 'btn btn-primary']) ?> </span>
       </div>   
    <div class="body-content">

        <div class="row">
        
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Middle Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Address</th>
      <th scope="col">Pincode</th>
      <th scope="col">Joining Date</th>
      <th scope="col">Leaving Date</th>
      <th scope="col">Month Salary</th>
      <th scope="col">Annual Salary</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
</thead>
<tbody>
    <?php if(count($posts) > 0): ?>
        <?php foreach($posts as $post): ?>
    <tr class="table-active">
        <th scope="row"><?php echo $post->id;?></th>
      <td><?php echo $post->fname;?></td>
      <td><?php echo $post->mname;?></td>
      <td><?php echo $post->lname;?></td>
      <td><?php echo $post->mobileno;?></td>
      <td><?php echo $post->address;?></td>
      <td><?php echo $post->pincode;?></td>
      <td><?php echo $post->joining_date;?></td>
      <td><?php echo $post->leaving_date;?></td>
      <td><?php echo $post->month_salary;?></td>
      <td><?php echo $post->annual_salary;?></td>
      <td><?php echo $post->status;?></td>
      <td>
<span><?= Html::a('View', ['view', 'id' => $post->id], ['class'=> 'label label-primary']) ?></span>
<span><?= Html::a('Update', ['update', 'id' => $post->id], ['class'=> 'label label-default']) ?></span>
<span><?= Html::a('Delete', ['delete', 'id' => $post->id], ['class'=> 'label label-danger']) ?></span>
      </td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td>No Records Found!</td>
        </tr>
        <?php endif; ?>
  </tbody>
</table>
        </div>

    </div>
    </div>