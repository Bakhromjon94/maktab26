<?php

use yii\db\Migration;

/**
 * Handles the creation of table `qoshimchadarslar`.
 */
class m190531_064550_create_qoshimchadarslar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('qoshimchadarslar', [
            'id' => $this->primaryKey(),
            'rasm'=>'VARCHAR(255)',
            'nomi'=>'text',
            'fish'=>'text',
            'sana'=>'date',
            'matn'=>'text',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('qoshimchadarslar');
    }
}
