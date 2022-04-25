<?php

use yii\db\Migration;

/**
 * Handles the creation of table `ixtirochilar`.
 */
class m190531_064608_create_ixtirochilar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ixtirochilar', [
            'id' => $this->primaryKey(),
            'fish'=>'text',
            'data'=>'date',
            'text'=>'text',
            'rasm'=>'VARCHAR(255)',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('ixtirochilar');
    }
}
