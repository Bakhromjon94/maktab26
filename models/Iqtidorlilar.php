<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iqtidorlilar".
 *
 * @property int $id
 * @property string $fish
 * @property string $rasm
 * @property string $matn
 */
class Iqtidorlilar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'iqtidorlilar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fish', 'matn'], 'string'],
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
            'rasm' => 'Rasm',
            'matn' => 'Matn',
        ];
    }
}
