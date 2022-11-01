<?php
/**
 * Class ${NAME}
 * @author <sulaymanovshaxzod@gmail.com>
 */

/** @var \common\models\Content $model */

use coderius\swiperslider\SwiperSlider;

$language = Yii::$app->session->get('language');

?>

<header>
    <div class="page-header border-radius">
        <!--        <div class="mask"></div>-->

        <?php echo \coderius\swiperslider\SwiperSlider::widget([
            'showScrollbar' => false,
            'slides' => [
                '<img style="border-radius: 10px !important;" src="/storage/contents/PKoOY1XRJnU0/вариант-1.png">',
                '<img style="border-radius: 10px !important;" src="/storage/contents/lN_NdIJhCwLA/вариант2.png">',
                '<img style="border-radius: 10px !important;" src="/storage/contents/Qf_zu3Q6Wf-h/вариант-3.png">',
            ],
            // 'assetFromCdn' => true,
            'clientOptions' => [
                'slidesPerView' => 1,
                'spaceBetween' => 0,
                'centeredSlides' => true,
                'pagination' => [
                    'clickable' => true,
                ],
            ],

            //Global styles to elements. If create styles for all slides
            'options' => [
                'styles' => [
                    \coderius\swiperslider\SwiperSlider::CONTAINER => ["height" => "506px"],
                    \coderius\swiperslider\SwiperSlider::CONTAINER => ["min-height" => "calc(100vh - 133px)"],
                    \coderius\swiperslider\SwiperSlider::CONTAINER => ["width" => "1268px"],
                    \coderius\swiperslider\SwiperSlider::CONTAINER => ["min-width" => "300px"],
                    \coderius\swiperslider\SwiperSlider::CONTAINER => ["max-width" => "1400px"],
                    \coderius\swiperslider\SwiperSlider::SLIDE => ["text-align" => "center"],
                    "background-repeat" => "no-repeat",
                    "background-size" => "cover",
                    "height" => "auto",
                    "max-width" => "100%",
                ],
            ],

        ]); ?>
</header>

