<?php

use yii\db\Migration;

/**
 * Handles the creation of table `maktabhaqida`.
 */
class m190531_064405_create_maktabhaqida_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('maktabhaqida', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('maktabhaqida');
    }
}
