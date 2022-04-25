<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rivojlanish".
 *
 * @property int $id
 * @property string $text
 * @property string $rasm
 */
class Rivojlanish extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rivojlanish';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'rasm'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'rasm' => 'Rasm',
        ];
    }
}
