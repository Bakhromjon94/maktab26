<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "foydalisaytlar".
 *
 * @property int $id
 * @property string $nomi
 */
class Foydalisaytlar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'foydalisaytlar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomi'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomi' => 'Nomi',
        ];
    }
}
