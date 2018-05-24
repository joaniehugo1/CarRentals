<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = "View Customer $model->name";
$this->params['breadcrumbs'][] = ['label'=>'Customers', 'url'=>['/customers/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title; ?></h1>
<p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this Customer?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'name',
        'phone',
        'address',
        'genderFull'
    ]
]);