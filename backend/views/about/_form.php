<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\About $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="about-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="d-flex align-items-center">
        <?= $form->field($model, 'icon')
            ->dropDownList([
                '1' => 'box-3d-50',
                '2' => 'customer support',
                '3' => 'spaceship',
                '4' => 'credit-card'
            ],
                [
                    'prompt' => 'Выберите иконку',
                    'class' => 'dropdown bg-white py-1 rounded',
                ],
            )
            ->label('Иконка', [
                'class' => 'mr-4',
                'id' => 'changeValueDropdownIcon'
            ]) ?>

    </div>

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true])->label('Название на узбекском') ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true])->label('Название на русском') ?>

    <?= $form->field($model, 'description_uz')->textInput(['maxlength' => true])->label('Описание на узбекском') ?>

    <?= $form->field($model, 'description_ru')->textInput(['maxlength' => true])->label('Описание на русском') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <script>
        $("#changeValueDropdownIcon").change(function () {
            $(this).find("option:selected").each(function () {
                if ($(this).attr("value") == "1") {
                    $(".box").not(".1").hide();
                    $(".1").show();
                } else if ($(this).attr("value") == "2") {
                    $(".box").not(".2").hide();
                    $(".2").show();
                } else if ($(this).attr("value") == "3") {
                    $(".box").not(".3").hide();
                    $(".3").show();
                } else {
                    $(".box").hide();
                }
            });
        }).change();
        })
        ;
    </script>

</div>
