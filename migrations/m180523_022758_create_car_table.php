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
            'name'=> $this->string(100)->notNull(),
            'model' => $this->string(255),
            'type'=>$this->string()->notNull(),
            'color' =>$this->string()->notNull(),
            'ppd' =>$this->money(),

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
