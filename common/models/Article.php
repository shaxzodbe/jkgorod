<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\web\UploadedFile;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property string $title_uz
 * @property string $title_ru
 * @property string $description_uz
 * @property string $description_ru
 * @property string $image
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

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
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_uz', 'title_ru', 'description_uz', 'description_ru', 'image'], 'required'],
            [['created_at', 'updated_at'], 'default', 'value' => null],
            [['created_at', 'updated_at'], 'integer'],
            [['title_uz', 'title_ru', 'description_uz', 'description_ru'], 'string', 'max' => 255],
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
            'title' => 'Title',
            'description' => 'Description',
            'image' => 'Image',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ArticleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ArticleQuery(get_called_class());
    }

    public function getImageUrl()
    {
        return Yii::getAlias('/storage' . $this->image);
    }
}
