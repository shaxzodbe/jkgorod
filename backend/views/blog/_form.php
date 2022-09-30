<?php

use dosamigos\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Blog $model */
/** @var \yii\bootstrap5\ActiveForm $form */
?>

<div class="blog-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'text_uz')->textarea(['rows' => 1])->label('Текст на узбекском') ?>

    <?= $form->field($model, 'text_ru')->textarea(['rows' => 1])->label('Текст на русском') ?>

    <?= $form->field($model, 'inputFile', [
        'template' => '
             <div class="custom-file">
                {input}
                {label}
                {error}
             </div>
        ',
        'labelOptions' => ['class' => 'custom-file-label'],
        'inputOptions' => ['class' => 'custom-file-label']
    ])->textInput(['type' => 'file'])->label('Файл в формате .pdf') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
