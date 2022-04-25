<?php

use yii\db\Migration;

/**
 * Handles the creation of table `yangiliklar`.
 */
class m190531_064522_create_yangiliklar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('yangiliklar', [
            'id' => $this->primaryKey(),
            'rasm'=>'VARCHAR(255)',
            'title'=>'text',
            'content'=>'text',
            'fish'=>'text',
            'data'=>'date',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('yangiliklar');
    }
}
