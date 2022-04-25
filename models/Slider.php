<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property int $id
 * @property string $rasm
 * @property string $content
 * @property string $text
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rasm', 'content', 'text'], 'required'],
            [['content', 'text'], 'string'],
            [['rasm'], 'string', 'max' => 255],
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
            'content' => 'Content',
            'text' => 'Text',
        ];
    }
}
