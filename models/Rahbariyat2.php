<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rahbariyat2".
 *
 * @property int $id
 * @property string $rasm
 * @property string $fish
 * @property string $lavozimi
 */
class Rahbariyat2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rahbariyat2';
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
