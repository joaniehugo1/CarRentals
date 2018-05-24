<?php
use yii\widgets\DetailView;
use yii\helpers\Html;

$this->title = "Rentals: $model->car_id";
$this->params['breadcrumbs'][] = ['label'=>'Rentals', 'url'=>['/rentals/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title; ?></h1>
<p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this Rentals?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'car_id',
        'customers_id',
        'amount',
        'dueDate',
        'dateRented'
    ]
]);