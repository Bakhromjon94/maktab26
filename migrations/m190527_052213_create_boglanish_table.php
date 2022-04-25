<?php

use yii\db\Migration;

/**
 * Handles the creation of table `boglanish`.
 */
class m190527_052213_create_boglanish_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('boglanish', [
            'id' => $this->primaryKey(),
            'pinterest'=>'text',
            'facebook'=>'text',
            'twitter'=>'text',
            'sayt'=>'text',
            'linkedin'=>'text',
            'location'=>'text',
            'tel'=>'VARCHAR(255)',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('boglanish');
    }
}
