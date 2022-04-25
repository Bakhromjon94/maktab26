<?php

use yii\db\Migration;

/**
 * Handles the creation of table `rivojlanish`.
 */
class m190531_064312_create_rivojlanish_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('rivojlanish', [
            'id' => $this->primaryKey(),
            'text'=>'text',
            'rasm'=>'text',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('rivojlanish');
    }
}
