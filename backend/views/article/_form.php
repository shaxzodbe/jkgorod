<?php

use dosamigos\ckeditor\CKEditor;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Article $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="content-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'title_uz')->textarea(['rows' => 1])->label('Название на узбекском') ?>

    <?= $form->field($model, 'title_ru')->textarea(['rows' => 1])->label('Название на русском') ?>

    <?= $form->field($model, 'description_uz')->textarea(['rows' => 1])->label('Описание на узбекском') ?>

    <?= $form->field($model, 'description_ru')->textarea(['rows' => 1])->label('Описание на русском') ?>

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

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
