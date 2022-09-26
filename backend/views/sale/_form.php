<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Sale $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="sale-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'cost')->textInput([
            'type' => 'number'
    ])->label('Стоимость') ?>

    <?= $form->field($model, 'info_uz')->textInput(['maxlength' => true])->label('Информация на узбекском') ?>

    <?= $form->field($model, 'info_ru')->textInput(['maxlength' => true])->label('Информация на русском') ?>

    <?= $form->field($model, 'surface')->textInput([
            'type' => 'number'
    ])->label('Площадь') ?>

    <?= $form->field($model, 'bedrooms')->textInput([
        'type' => 'number'
    ])->label('Спальни') ?>

    <?= $form->field($model, 'bathrooms')->textInput([
        'type' => 'number'
    ])->label('Ванная') ?>

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
