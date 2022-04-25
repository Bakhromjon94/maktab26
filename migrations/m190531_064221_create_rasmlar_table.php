<?php

use yii\db\Migration;

/**
 * Handles the creation of table `rasmlar`.
 */
class m190531_064221_create_rasmlar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('rasmlar', [
            'id' => $this->primaryKey(),
            'rasm'=>'VARCHAR(255)'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('rasmlar');
    }
}
