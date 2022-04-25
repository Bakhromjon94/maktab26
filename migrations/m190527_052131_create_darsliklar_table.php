<?php

use yii\db\Migration;

/**
 * Handles the creation of table `darsliklar`.
 */
class m190527_052131_create_darsliklar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('darsliklar', [
            'id' => $this->primaryKey(),
            'nomi'=>'text'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('darsliklar');
    }
}
