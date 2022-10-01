<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $username
 * @property int $number
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number', 'username'], 'required'],
            [['number'], 'string', 'max' => 255],
            [['username'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'number' => 'Number',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ContactQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ContactQuery(get_called_class());
    }
}
