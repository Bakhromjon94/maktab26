<?php

use yii\db\Migration;

/**
 * Handles the creation of table `bitiruvchilar`.
 */
class m190531_064345_create_bitiruvchilar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('bitiruvchilar', [
            'id' => $this->primaryKey(),
            'fish'=>'text',
            'sinf'=>'VARCHAR(255)'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('bitiruvchilar');
    }
}
