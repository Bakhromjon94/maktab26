<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yangiliklar".
 *
 * @property int $id
 * @property string $rasm
 * @property string $title
 * @property string $content
 * @property string $fish
 * @property string $data
 */
class Yangiliklar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yangiliklar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', 'fish'], 'string'],
            [['data'], 'safe'],
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
            'rasm' => 'Rasm',
            'title' => 'Title',
            'content' => 'Content',
            'fish' => 'Fish',
            'data' => 'Data',
        ];
    }
}
