<?php

use common\models\Sale;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Продажа';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sale-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать контент', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'attribute' => 'id',
                'contentOptions' => [
                    'style' => 'width: 60px'
                ]
            ],
            [
                'attribute' => 'cost',
                'format' => ['currency'],
                'label' => 'Стоимость'
            ],
            [
                'attribute' => 'info_ru',
                'label' => 'Информация'
            ],
            [
                'label' => 'Рисунок',
                'attribute' => 'image',
                'content' => function ($model) {
                    /* @var Sale $model */
                    return Html::img($model->getImageUrl(), ['style' => 'width: 100px']);
                }
            ],
            [
                'attribute' => 'surface',
                'label' => 'Площадь'
            ],
            [
                'attribute' => 'bedrooms',
                'label' => 'Спальни'
            ],
            [
                'attribute' => 'bathrooms',
                'label' => 'Ванная'
            ],
            [
                'attribute' => 'created_at',
                'label' => 'Создан',
                'format' => ['datetime'],
                'contentOptions' => ['style' => 'white-space:nowrap; width: 220px']
            ],
            [
                'attribute' => 'updated_at',
                'label' => 'Обновлен',
                'format' => ['datetime'],
                'contentOptions' => ['style' => 'white-space:nowrap; width: 220px']
            ],
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Sale $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
