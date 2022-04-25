<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rahbariyat".
 *
 * @property int $id
 * @property string $rasm
 * @property string $fish
 * @property string $lavozimi
 */
class Rahbariyat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rahbariyat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fish', 'lavozimi'], 'string'],
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
            'fish' => 'Fish',
            'lavozimi' => 'Lavozimi',
        ];
    }
}
