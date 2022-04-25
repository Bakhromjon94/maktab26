<?php

use yii\db\Migration;

/**
 * Handles the creation of table `biznesmaktab`.
 */
class m190531_064141_create_biznesmaktab_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('biznesmaktab', [
            'id' => $this->primaryKey(),
            'matn'=>'text',
            'rasm'=>'VARCHAR(255)'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('biznesmaktab');
    }
}
