<?php

use yii\db\Migration;

/**
 * Class m240207_230540_precio_table
 */
class m240207_230540_precio_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%precio}}', [
            'id' => $this->primaryKey(),
            'producto' => $this->string(40),
            'cantidad' => $this->decimal(5,2),
            
        ], );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable('{{%precio}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240207_230540_precio_table cannot be reverted.\n";

        return false;
    }
    */
}
