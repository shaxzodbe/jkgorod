<?php
/**
 * Class ${NAME}
 * @author <sulaymanovshaxzod@gmail.com>
 */

/** @var \common\models\Content $model */
$language = Yii::$app->session->get('language');

?>

<header>
    <div class="page-header min-vh-50 m-3 p-4 border-radius-xl py-9"
         style="background-image: url(<?php echo $model->getImageUrl() ?>);">
        <span class="mask bg-gradient-dark opacity-7"></span>
        <div class="container h-100">
            <div class="row">
                <div class="col-lg-5 mt-auto justify-content-bottom my-auto">

                    <h5 class="text-gradient text-warning fadeIn1 fadeInBottom text-warning mb-0 font-weight-bolder">
                        <?php echo $model['title_' . $language] ?>
                    </h5>
                    <h1 class="text-white fadeIn2 fadeInBottom mb-4 display-4 font-weight-bolder"
                        spellcheck="false"><?php echo $model['subtitle_' . $language] ?>
                    </h1>

                </div>
            </div>
        </div>
    </div>
</header>
