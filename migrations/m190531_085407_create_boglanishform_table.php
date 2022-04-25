<?php

use yii\db\Migration;

/**
 * Handles the creation of table `boglanishform`.
 */
class m190531_085407_create_boglanishform_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('boglanishform', [
            'id' => $this->primaryKey(),
            'ism'=>'text',
            'email'=>'text',
            'matn'=>'text',
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('boglanishform');
    }
}
