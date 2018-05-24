<?php 

use yii\helpers\Html;


$this->title = "Car";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create Car', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Model</th>
        <th>Type</th>
        <th>Color</th>
        <th>PPD</th>

    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->id, ['/car/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->name ?></td>
        <td><?= $model->model ?></td>
        <td><?= $model->type ?></td>
        <td><?= $model->color ?></td>
        <td><?= $model->ppd ?></td>
    </tr>
    <?php endforeach; ?>
</table>
