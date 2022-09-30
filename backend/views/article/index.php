<?php

use common\models\Article;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Статьи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

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
                'label' => 'Название',
                'attribute' => 'title_ru',
            ],
            [
                'label' => 'Рисунок',
                'attribute' => 'image',
                'content' => function ($model) {
                    /* @var Article $model */
                    return Html::img($model->getImageUrl(), ['style' => 'width: 100px']);
                }
            ],
            [
                'label' => 'Описание',
                'format' => ['html'],
                'attribute' => 'description_ru',
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
                'urlCreator' => function ($action, Article $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
