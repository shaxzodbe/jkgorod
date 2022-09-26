<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Sale $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sale-view">

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
                'attribute' => 'cost',
                'label' => 'Стоимость'
            ],
            [
                'attribute' => 'info_uz',
                'label' => 'Информация на узбекском'
            ],
            [
                'attribute' => 'info_ru',
                'label' => 'Информация на русском'
            ],
            [
                'attribute' => 'image',
                'label' => 'Рисунок контента',
                'format' => ['html'],
                'value' => static fn($model) => Html::img($model->getImageUrl(), ['style' => 'width: 100px'])
            ],
            [
                'attribute' => 'surface',
                'label' => 'Площадь'
            ],
            [
                'attribute' => 'cost',
                'label' => 'Спальни'
            ],
            [
                'attribute' => 'bedrooms',
                'label' => 'Ванная'
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
