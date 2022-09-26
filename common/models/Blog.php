<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\web\UploadedFile;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $text_uz
 * @property string $text_ru
 * @property string $file
 * @property int|null $created_at
 * @property-read mixed $imageUrl
 * @property int|null $updated_at
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $inputFile;

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
        return 'blog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_uz', 'text_ru', 'file'], 'required'],
            [['created_at', 'updated_at'], 'default', 'value' => null],
            [['created_at', 'updated_at'], 'integer'],
            [['text_uz', 'text_ru', 'file'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'file' => 'File',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\BlogQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\BlogQuery(get_called_class());
    }

    public function getImageUrl()
    {
        return Yii::getAlias('/storage' . $this->file);
    }
}
