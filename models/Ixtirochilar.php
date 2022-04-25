<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ixtirochilar".
 *
 * @property int $id
 * @property string $fish
 * @property string $data
 * @property string $text
 * @property string $rasm
 */
class Ixtirochilar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ixtirochilar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fish', 'text'], 'string'],
            [['data'], 'safe'],
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
            'fish' => 'Fish',
            'data' => 'Data',
            'text' => 'Text',
            'rasm' => 'Rasm',
        ];
    }
}
