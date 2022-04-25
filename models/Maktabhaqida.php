<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "maktabhaqida".
 *
 * @property int $id
 */
class Maktabhaqida extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'maktabhaqida';
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
