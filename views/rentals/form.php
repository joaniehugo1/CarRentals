<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Customers;
use app\models\Car;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use dosamigos\datepicker\DatePicker;

?>

<div class="rentals-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'car_id')->dropDownList(ArrayHelper::map(
            Car::find()->all(), 'id','name'))?>

    <?= $form->field($model, 'customers_id')->dropDownList(ArrayHelper::map(
            Customers::find()->asArray()->all(), 'id','name'))?>

     <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>
    


 <div class="form-group">
    <label for="dueDate">Due Date</label>
    <?= DatePicker::widget([
        'model' => $model,
        'attribute' => 'dueDate',
        'template' => '{addon}{input}',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);
    ?>

    <div class="form-group">
    <label for="dateRented">Date Rented</label>
    <?= DatePicker::widget([
        'model' => $model,
        'attribute' => 'dateRented',
        'template' => '{addon}{input}',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);
    ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
	