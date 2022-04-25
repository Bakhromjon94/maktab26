<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sinflar".
 *
 * @property int $id
 */
class Sinflar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sinflar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
        ];
    }
}
