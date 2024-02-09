<?php

use yii\db\Migration;

/**
 * Class m240207_234800_altertableprecio
 */
class m240207_234800_altertableprecio extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%precio}}', 'idcliente', $this->integer(11));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%precio}}', 'idcliente');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240207_234800_altertableprecio cannot be reverted.\n";

        return false;
    }
    */
}
