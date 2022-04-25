<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $haqida
 * @property string $rasm
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['haqida'], 'string'],
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
            'haqida' => 'Haqida',
            'rasm' => 'Rasm',
        ];
    }
}
