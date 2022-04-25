<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "boglanish".
 *
 * @property int $id
 * @property string $pinterest
 * @property string $facebook
 * @property string $twitter
 * @property string $sayt
 * @property string $linkedin
 * @property string $location
 * @property string $tel
 */
class Boglanish extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'boglanish';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pinterest', 'facebook', 'twitter', 'sayt', 'linkedin', 'location'], 'string'],
            [['tel'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pinterest' => 'Pinterest',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'sayt' => 'Sayt',
            'linkedin' => 'Linkedin',
            'location' => 'Location',
            'tel' => 'Tel',
        ];
    }
}
