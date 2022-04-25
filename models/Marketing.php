<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "marketing".
 *
 * @property int $id
 * @property string $matn
 * @property string $tolovlar
 */
class Marketing extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'marketing';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['matn'], 'string'],
            [['tolovlar'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'matn' => 'Matn',
            'tolovlar' => 'Tolovlar',
        ];
    }
}
