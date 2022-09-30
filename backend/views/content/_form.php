<?php

use dosamigos\ckeditor\CKEditor;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Content $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="content-form">

    <?php $form = ActiveForm::begin([
            'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'title_uz')->textarea(['rows' => 1])->label('Название на узбекском') ?>

    <?= $form->field($model, 'title_ru')->textarea(['rows' => 1])->label('Название на русском') ?>

    <?= $form->field($model, 'subtitle_uz')->textarea(['rows' => 1])->label('Подзаголовок на узбекском') ?>

    <?= $form->field($model, 'subtitle_ru')->textarea(['rows' => 1])->label('Подзаголовок на русском') ?>

    <?= $form->field($model, 'imageFile', [
        'template' => '
             <div class="custom-file">
                {input}
                {label}
                {error}
             </div>
        ',
        'labelOptions' => ['class' => 'custom-file-label'],
        'inputOptions' => ['class' => 'custom-file-label']
    ])->textInput(['type' => 'file'])->label('Рисунок контента') ?>

    <?= $form->field($model, 'status')->checkbox()->label('Опубликован') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
