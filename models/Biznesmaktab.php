<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "biznesmaktab".
 *
 * @property int $id
 * @property string $matn
 * @property string $rasm
 */
class Biznesmaktab extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'biznesmaktab';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['matn'], 'string'],
            [['rasm'], 'varchar', 'max' => 255],
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
            'rasm' => 'Rasm',
        ];
    }
}
