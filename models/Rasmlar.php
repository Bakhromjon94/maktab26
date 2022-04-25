<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rasmlar".
 *
 * @property int $id
 * @property string $rasm
 */
class Rasmlar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rasmlar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
        ];
    }
}
