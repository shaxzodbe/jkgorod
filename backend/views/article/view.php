<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Article $model */

$this->title = $model->title_ru;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'title_ru',
                'label' => 'Название'
            ],
            [
                'attribute' => 'description_uz',
                'label' => 'Описание на узбекском'
            ],
            [
                'attribute' => 'description_ru',
                'label' => 'Описание на русском'
            ],
            [
                'label' => 'Рисунок контента',
                'attribute' => 'image',
                'format' => ['html'],
                'value' => static fn($model) => Html::img($model->getImageUrl(), ['style' => 'width: 100px'])
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
        ],
    ]) ?>

</div>
