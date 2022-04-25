<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "boglanishform".
 *
 * @property int $id
 * @property string $ism
 * @property string $email
 * @property string $matn
 */
class Boglanishform extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'boglanishform';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ism', 'email', 'matn'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ism' => 'Ism',
            'email' => 'Email',
            'matn' => 'Matn',
        ];
    }
}
