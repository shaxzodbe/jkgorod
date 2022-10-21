<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\web\UploadedFile;

/**
 * This is the model class for table "sale".
 *
 * @property int $id
 * @property int|null $cost
 * @property string|null $info_uz
 * @property string|null $info_ru
 * @property int|null $surface
 * @property int|null $bedrooms
 * @property int|null $bathrooms
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string $image
 */
class Sale extends \yii\db\ActiveRecord
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
        return 'sale';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['info_uz', 'info_ru'], 'required'],
            [['cost', 'surface', 'bedrooms', 'bathrooms', 'created_at', 'updated_at'], 'default', 'value' => null],
            [['created_at', 'updated_at'], 'integer'],
            [['cost', 'surface', 'bedrooms', 'bathrooms'], 'number'],
            [['info_uz', 'info_ru'], 'string', 'max' => 25],
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
            'cost' => 'Cost',
            'info_uz' => 'Информация не может быть пустым.',
            'info_ru' => 'Информация не может быть пустым.',
            'imageFile' => 'Content image',
            'surface' => 'Surface',
            'bedrooms' => 'Bedrooms',
            'bathrooms' => 'Bathrooms',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\SaleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\SaleQuery(get_called_class());
    }

    public function getImageUrl()
    {
        return Yii::getAlias('/storage' . $this->image);
    }
}
