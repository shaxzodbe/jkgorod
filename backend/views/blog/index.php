<?php

use common\models\Blog;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Blogs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-index">

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
                'attribute' => 'text_ru',
                'format' => ['html'],
                'label' => 'Текст'
            ],
            [
                'attribute' => 'file',
                'label' => 'Файл',
                'content' => function ($model) {
                    return \yii\bootstrap5\Html::a('Download', $model->getImageUrl(),
                        ['class' => 'btn btn-primary', 'target'=>'_blank']);
                },
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
                'urlCreator' => function ($action, Blog $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
