<?php
/**
 * Class ${NAME}
 * @author <sulaymanovshaxzod@gmail.com>
 */

/** @var \common\models\Blog $model */
$language = Yii::$app->session->get('language');

?>

<div class="col-lg-8 col-md-8 text-start me-auto card-blog">
    <div class="text-white mb-lg-0 mb-5">
        <p>Архитектура и современный дизайн с нотками исторического искусства сочетают в себе наш новый Жилой Комплекс «GOROD».
        Главным критерием при строительстве является КАЧЕСТВО, и мы несем полную ответственность за строительство и будущее наших жителей.
        Мы всегда смотрим и движемся только вперед – в будущее, совершенствуемся, развиваемся и увеличиваем количество качественных предложений на рынке жилой и коммерческой (торговой) недвижимости.
        Жилой комплекс «GOROD» крепкий дом для крепкой семьи!</p>
        <b><i>Выбирая нас, Вы делаете правильный выбор!</i></b>
    </div>
</div>
<div class="col-lg-3 col-sm-12 align-self-center">
    <a href="<?php echo $model->getImageUrl() ?>"
       type="button"
       target="_blank"
       class="btn bg-gradient-warning mb-0 ms-lg-3 ms-sm-2 mb-sm-0 mb-2 me-auto w-100 d-block">
        <?= Yii::t('app', 'Download Now') ?>
    </a>
</div>

