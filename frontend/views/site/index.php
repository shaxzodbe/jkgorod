<?php
/**
 * @author <sulaymanovshaxzod@gmail.com>
 */

/** @var \frontend\controllers\SiteController $contentData */
/** @var \frontend\controllers\SiteController $aboutData */
/** @var \frontend\controllers\SiteController $saleData */
/** @var \frontend\controllers\SiteController $articleData */
/** @var \frontend\controllers\SiteController $blogData */

/** @var \frontend\controllers\SiteController $contactData */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = "jkgorod"
?>

<?= $this->render('_content_header', [
    'model' => $contentData,
]) ?>

<section class="py-5" id="about-us">
    <div class="container">
        <div class="row text-center">
            <div class="col-12" >
                <h3 class="mb-5" spellcheck="false"><?=Yii::t('app','About our activities')?></h3>
            </div>
            <?= $this->render('_about_section', [
                'model' => $aboutData,
            ]) ?>
        </div>
    </div>
</section>

<section class="py-6 bg-gray-100" id="sale">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h3 class="mb-5" spellcheck="false"><?=Yii::t('app','View Properties for Sale')?></h3>
            </div>
            <?= $this->render('_sale_section', [
                'model' => $saleData,
            ]) ?>
        </div>
<!--        <div class="col-12 mt-5 text-center">-->
<!--            <a href="javascript:" class="btn bg-gradient-dark">View All</a>-->
<!--        </div>-->

    </div>
</section>

<section class="pt-5 pb-0" id="article">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="mb-5" spellcheck="false"><?=Yii::t('app','Blog')?></h3>
            </div>

            <?= $this->render('_article_section', [
                  'model' => $articleData
            ]) ?>
        </div>
    </div>
</section>

<section class="my-5 py-5 bg-gradient-dark position-relative"
         style="background-image:url(https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/nastuh.jpg)">
    <span class="mask bg-gradient-dark opacity-8"></span>
    <div class="container position-relative z-index-2">
        <div class="row">
            <?= $this->render('_blog_section', [
                'model' => $blogData
            ]) ?>
        </div>
    </div>
</section>

<section class="py-5" id="contact-us">
    <div class="container">
        <div class="col-12">
            <h3 class="mb-5 text-center" spellcheck="false"><?= Yii::t('app', 'Contacts') ?></h3>
        </div>
        <div class="row justify-content-between">

            <div class="col-lg-4 col-sm-12 mb-lg-3 mb-4">
                <h5><?=Yii::t('app','Leave a request')?></h5>

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($contactData, 'username')->textInput(['autofocus' => true])->label(Yii::t('app','Username')) ?>

                <?= $form->field($contactData, 'number')->textInput(['type' => 'number'])->label(Yii::t('app','Telephone number')) ?>

                <div class="form-group">
                    <?= Html::submitButton(Yii::t('app','Submit'), ['class' => 'btn btn-primary btn-block m-auto', 'name' => 'login-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
            <div class="col-lg-8 col-sm-12 mb-lg-3 mb-4" style="overflow: hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.752130862991!2d69.31827281582403!3d41.31425557927105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef531308f9705%3A0x97214ee2fbf81605!2z0JzQsNCy0LvQvtC90L4g0KDQuNGR0LfQuNC5IDI!5e0!3m2!1sru!2s!4v1664520251701!5m2!1sru!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>

    </div>
</section>
