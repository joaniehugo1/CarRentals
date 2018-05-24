<?php 

use yii\helpers\Html;


$this->title = "RENTALS";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-right">Please <?= Html::a('login',['/site/login'])?> to create Rental.</span>
<?php else: ?>
        <?= Html::a('Create Rentals', ['create'], ['class' => 'btn btn-success']) ?>
<?php endif; ?> 
<table class="table table-bordered">
    <tr>
        <th>Car ID</th>
        <th>Customer ID</th>
        <th>Due Date</th>
        <th>Date Rented</th>
        <th>Amount</th>


    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->car_id, ['/rentals/view', 'id'=>$model->id]); ?>
            <td><?= $model->customers_id ?></td>
            <td><?= $model->dueDate ?></td>
            <td><?= $model->dateRented ?></td>
            <td><?= $model->amount ?></td>
            
        </td> 
    </tr>
    <?php endforeach; ?>
</table>
