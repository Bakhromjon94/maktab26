<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reytingnatija".
 *
 * @property int $id
 * @property string $sinf
 * @property string $fish
 * @property string $chorak
 * @property string $natija
 */
class Reytingnatija extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reytingnatija';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fish'], 'string'],
            [['sinf', 'chorak', 'natija'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sinf' => 'Sinf',
            'fish' => 'Fish',
            'chorak' => 'Chorak',
            'natija' => 'Natija',
        ];
    }
}
