<?php

use yii\helpers\Html;


$this->title = 'Create Rentals';
$this->params['breadcrumbs'][] = ['label' => 'rentals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rentals-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form', [
        'model' => $model,
    ]) ?>

</div>