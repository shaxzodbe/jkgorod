<?php

namespace common\models;

use common\models\query\AboutQuery;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $title_uz
 * @property string $title_ru
 * @property string $icon
 * @property string $description_uz
 * @property string $description_ru
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class About extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            TimestampBehavior::class
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_uz', 'title_ru', 'icon', 'description_uz', 'description_ru'], 'required'],
            [['created_at', 'updated_at'], 'default', 'value' => null],
            [['created_at', 'updated_at'], 'integer'],
            [['title_uz', 'title_ru'], 'string', 'max' => 255],
            [['icon'], 'string', 'max' => 25],
            [['description_uz', 'description_ru'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'icon' => 'Icon',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * {@inheritdoc}
     * @return AboutQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AboutQuery(get_called_class());
    }
}
