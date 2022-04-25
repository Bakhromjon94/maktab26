<?php

use yii\db\Migration;

/**
 * Handles the creation of table `talimnidavomi`.
 */
class m190531_064430_create_talimnidavomi_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('talimnidavomi', [
            'id' => $this->primaryKey(),
            'oliynomi'=>'text',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('talimnidavomi');
    }
}
