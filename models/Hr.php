<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%hr}}".
 *
 * @property int $id
 * @property string $fish
 * @property string|null $email
 * @property string|null $phone
 * @property int|null $age
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 */
class Hr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%hr}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fish'], 'required'],
            [['age', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['fish', 'email'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 25],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fish' => Yii::t('app', 'Fish'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'age' => Yii::t('app', 'Age'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }
}
