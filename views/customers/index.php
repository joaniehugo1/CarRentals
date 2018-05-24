<?php 

use yii\helpers\Html;


$this->title = "Customers";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-right">Please <?= Html::a('login',['/site/login'])?> to create Customer.</span>
<?php else: ?>
        <?= Html::a('Create Customer', ['create'], ['class' => 'btn btn-success']) ?>
<?php endif; ?> 
<table class="table table-bordered">
    <tr>
         <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Gender</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->id, ['/customers/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->name ?></td>
        <td><?= $model->address ?></td>
        <td><?= $model->phone ?></td>
        <td><?= $model->gender ?></td>
    </tr>
    <?php endforeach; ?>
</table>

