<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\About $model */

$this->title = $model->title_ru;
$this->params['breadcrumbs'][] = ['label' => 'Abouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="about-view">

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
                'attribute' => 'title_uz',
                'label' => 'Название на узбекском'
            ],
            [
                'attribute' => 'title_ru',
                'label' => 'Название на русском'
            ],
            [
                'attribute' => 'icon',
                'format' => ['html'],
                'label' => 'Иконка'
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
