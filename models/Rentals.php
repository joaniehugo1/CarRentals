<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rentals".
 *
 * @property int $id
 * @property int $car_id
 * @property int $customers_id
 * @property string $dueDate
 * @property string $dateRented
 *
 * @property Car $car
 * @property Customers $customers
 */
class Rentals extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rentals';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['car_id', 'customers_id','amount'], 'required'],
            [['car_id', 'customers_id'], 'integer'],
            [['dueDate', 'dateRented'], 'safe'],
            [['car_id'], 'exist', 'skipOnError' => true, 'targetClass' => Car::className(), 'targetAttribute' => ['car_id' => 'id']],
            [['customers_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customers::className(), 'targetAttribute' => ['customers_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'car_id' => 'Car ID',
            'customers_id' => 'Customers ID',
            'dueDate' => 'Due Date',
            'dateRented' => 'Date Rented',
            'amount' => 'Amount',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCar()
    {
        return $this->hasOne(Car::className(), ['id' => 'car_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomers()
    {
        return $this->hasOne(Customers::className(), ['id' => 'customers_id']);
    }
}
