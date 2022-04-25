<?php

use yii\db\Migration;

/**
 * Handles the creation of table `foydalisaytlar`.
 */
class m190531_064535_create_foydalisaytlar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('foydalisaytlar', [
            'id' => $this->primaryKey(),
            'nomi'=>'text',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('foydalisaytlar');
    }
}
