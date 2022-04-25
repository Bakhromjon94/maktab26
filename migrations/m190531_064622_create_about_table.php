<?php

use yii\db\Migration;

/**
 * Handles the creation of table `about`.
 */
class m190531_064622_create_about_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('about', [
            'id' => $this->primaryKey(),
            'haqida'=>'text',
            'rasm'=>'VARCHAR(255)',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('about');
    }
}
