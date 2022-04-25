<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "korinish".
 *
 * @property int $id
 * @property string $rasm
 * @property string $text
 */
class Korinish extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'korinish';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rasm', 'text'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rasm' => 'Rasm',
            'text' => 'Text',
        ];
    }
}
