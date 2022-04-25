<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "darsliklar".
 *
 * @property int $id
 * @property string $nomi
 */
class Darsliklar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'darsliklar';
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
