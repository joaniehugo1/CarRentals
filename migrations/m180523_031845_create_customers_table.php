<?php

use yii\db\Migration;

/**
 * Handles the creation of table `customers`.
 */
class m180523_031845_create_customers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('customers', [
            'id' => $this->primaryKey(),
            'name' =>$this->string(191)->notNull(),
            'address' =>$this->string(255)->notNull(),
            'phone'=>$this->string(11),
            'gender'=>$this->string(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('customers');
    }
}
