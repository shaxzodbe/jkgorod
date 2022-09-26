<?php
/**
 * Class ${NAME}
 * @author <sulaymanovshaxzod@gmail.com>
 */

/** @var \common\models\Blog $model */
$language = Yii::$app->session->get('language');

?>

<div class="col-lg-5 col-md-8 m-auto text-start">
    <h5 class="text-white mb-lg-0 mb-5">
        <?php echo $model['text_'.$language] ?>

    </h5>
</div>
<div class="col-lg-6 m-auto">
    <div class="row">
        <div class="col-sm-4 col-6 ps-sm-0 ms-auto">
            <a href="<?php echo $model->getImageUrl() ?>"
               type="button"
               target="_blank"
               class="btn bg-gradient-warning mb-0 ms-lg-3 ms-sm-2 mb-sm-0 mb-2 me-auto w-100 d-block">
                <?=Yii::t('app','Download Now')?>
            </a>
        </div>
    </div>
</div>