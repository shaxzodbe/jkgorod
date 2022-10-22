<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Blog $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="blog-view">

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
                'attribute' => 'text_ru',
                'format' => ['html'],
                'label' => 'Текст'
            ],
            [
                'attribute' => 'file',
                'label' => 'Файл'
            ],
            [
                'attribute' => 'created_at',
                'label' => 'Создан',
                'format' => ['datetime'],
            ],
            [
                'attribute' => 'created_at',
                'label' => 'Обновлен',
                'format' => ['datetime'],
            ],
        ],
    ]) ?>

</div>
