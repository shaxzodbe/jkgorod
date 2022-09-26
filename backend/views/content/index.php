<?php

use common\models\Content;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Контент';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-index">

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
                'attribute' => 'title_ru',
                'label' => 'Название'
            ],
            [
                'attribute' => 'subtitle_ru',
                'label' => 'Подзаголовок'
            ],
            [
                'label' => 'Рисунок',
                'attribute' => 'image',
                'content' => function ($model) {
                    /* @var Content $model */
                    return Html::img($model->getImageUrl(), ['style' => 'width: 100px']);
                }
            ],
            [
                'attribute' => 'status',
                'label' => 'Публикация',
                'content' => function ($model) {
                    return Html::tag('span', $model->status ? 'Активный' : 'Неактивный', [
                        'class' => $model->status ? 'badge badge-success' : 'badge badge-danger'
                    ]);
                },
                'contentOptions' => [
                    'style' => 'width: 220px'
                ]
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
                'urlCreator' => static function ($action, Content $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
