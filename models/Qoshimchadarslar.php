<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "qoshimchadarslar".
 *
 * @property int $id
 * @property string $rasm
 * @property string $nomi
 * @property string $fish
 * @property string $sana
 * @property string $matn
 */
class Qoshimchadarslar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'qoshimchadarslar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomi', 'fish', 'matn'], 'string'],
            [['sana'], 'safe'],
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
            'nomi' => 'Nomi',
            'fish' => 'Fish',
            'sana' => 'Sana',
            'matn' => 'Matn',
        ];
    }
}
