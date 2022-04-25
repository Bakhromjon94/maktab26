<?php

use yii\db\Migration;

/**
 * Handles the creation of table `iqtidorlilar`.
 */
class m190531_064247_create_iqtidorlilar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('iqtidorlilar', [
            'id' => $this->primaryKey(),
            'fish'=>'text',
            'rasm'=>'VARCHAR(255)',
            'matn'=>'text'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('iqtidorlilar');
    }
}
