<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "talimnidavomi".
 *
 * @property int $id
 * @property string $oliynomi
 */
class Talimnidavomi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'talimnidavomi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['oliynomi'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'oliynomi' => 'Oliynomi',
        ];
    }
}
