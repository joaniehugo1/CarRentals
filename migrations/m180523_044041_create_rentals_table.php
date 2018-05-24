<?php

use yii\db\Migration;

/**
 * Handles the creation of table `rentals`.
 */
class m180523_044041_create_rentals_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('rentals', [
            'id' => $this->primaryKey(),
            'car_id'=>$this->integer(11)->notNull(),
            'customers_id'=>$this->integer(11)->notNull(),
            'dueDate'=>$this->date("DATE"),
            'dateRented'=>$this->date("DATE"),
            'amount'=>$this->integer(11)->notNull()
        ]);
        $this->createIndex('idx-rentals-car_id', 'rentals', 'car_id');
        $this->addForeignKey('fk-rentals-car', 'rentals','car_id', 'car', 'id','CASCADE');

        $this->createIndex('idx-rentals-customers_id', 'rentals', 'customers_id');
        $this->addForeignKey('fk-rentals-customers', 'rentals','customers_id', 'customers','id','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-rentals-car','rentals');
        $this->dropForeignKey('fk-rentals-customers','rentals');
        $this->dropIndex('idx-rentals-car_id','rentals');
        $this->dropIndex('idx-rentals-customers_id','rentals');
        $this->dropTable('rentals');
    }
}
