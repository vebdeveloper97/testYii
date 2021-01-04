<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tests}}".
 *
 * @property int $id
 * @property string|null $text
 * @property string|null $coment
 * @property string|null $date
 */
class Tests extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tests}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'coment'], 'string'],
            [['date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'text' => Yii::t('app', 'Text'),
            'coment' => Yii::t('app', 'Coment'),
            'date' => Yii::t('app', 'Date'),
        ];
    }
}
