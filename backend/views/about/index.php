<?php

use common\models\About;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'О нас';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-index">

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
                'attribute' => 'icon',
                'label' => 'Иконка'
            ],
            [
                'attribute' => 'title_ru',
                'label' => 'Название'
            ],

            [
                'attribute' => 'description_ru',
                'label' => 'Описание'
            ],
            [
                'attribute' => 'created_at',
                'format' => ['datetime'],
                'label' => 'Создан'
            ],
            [
                'attribute' => 'created_at',
                'format' => ['datetime'],
                'label' => 'Обновлен'
            ],
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, About $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
