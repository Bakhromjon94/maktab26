<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $nomi
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomi'], 'required'],
            [['nomi'], 'string', 'max' => 100],
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
