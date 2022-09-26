<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\web\UploadedFile;

/**
 * This is the model class for table "content".
 *
 * @property int $id
 * @property string $title_uz
 * @property string $title_ru
 * @property string $subtitle_uz
 * @property string $subtitle_ru
 * @property string $image
 * @property int $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Content extends \yii\db\ActiveRecord
{
    public const STATUS_PUBLISHED = 1;
    /**
     * @var UploadedFile
     */
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'content';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_uz', 'title_ru', 'subtitle_uz', 'subtitle_ru', 'status'], 'required'],
            [['title_uz', 'title_ru'], 'string'],
            [['status', 'created_at', 'updated_at'], 'default', 'value' => null],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['subtitle_uz', 'subtitle_ru'], 'string', 'max' => 255],
            [['image'], 'string', 'max' => 2000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_uz' => 'Sarlavha',
            'title_ru' => 'Заголовок',
            'subtitle_uz' => 'Subtitr',
            'subtitle_ru' => 'Подзаголовок',
            'image' => 'Content image',
            'imageFile' => 'Content image',
            'status' => 'Published',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ContentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ContentQuery(get_called_class());
    }


    public function getImageUrl()
    {
        return Yii::getAlias('/storage' . $this->image);
    }

}
