<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bitiruvchilar".
 *
 * @property int $id
 * @property string $fish
 * @property string $sinf
 */
class Bitiruvchilar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bitiruvchilar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fish'], 'string'],
            [['sinf'], 'string', 'max' => 255],
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
            'sinf' => 'Sinf',
        ];
    }
}
