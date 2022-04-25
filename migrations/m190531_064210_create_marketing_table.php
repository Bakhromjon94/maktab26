<?php

use yii\db\Migration;

/**
 * Handles the creation of table `marketing`.
 */
class m190531_064210_create_marketing_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('marketing', [
            'id' => $this->primaryKey(),
            'matn'=>'text',
            'tolovlar'=>'VARCHAR(255)',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('marketing');
    }
}
