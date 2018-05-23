<?php

use yii\db\Migration;

/**
 * Handles the creation of table `car`.
 */
class m180523_022758_create_car_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('car', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('car');
    }
}
