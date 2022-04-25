<?php

use yii\db\Migration;

/**
 * Handles the creation of table `sinflar`.
 */
class m190531_094355_create_sinflar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('sinflar', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('sinflar');
    }
}
