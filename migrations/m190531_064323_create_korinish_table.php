<?php

use yii\db\Migration;

/**
 * Handles the creation of table `korinish`.
 */
class m190531_064323_create_korinish_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('korinish', [
            'id' => $this->primaryKey(),
            'rasm'=>'text',
            'text'=>'text'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('korinish');
    }
}
