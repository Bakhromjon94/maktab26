<?php

use yii\db\Migration;

/**
 * Handles the creation of table `rahbariyat`.
 */
class m190527_052156_create_rahbariyat_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('rahbariyat', [
            'id' => $this->primaryKey(),
            'rasm'=>'VARCHAR(255)',
            'fish'=>'text',
            'lavozimi'=>'text',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('rahbariyat');
    }
}
