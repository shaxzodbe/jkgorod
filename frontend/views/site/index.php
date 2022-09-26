<?php
/**
 * @author <sulaymanovshaxzod@gmail.com>
 */

/** @var \frontend\controllers\SiteController  $contentData */
/** @var \frontend\controllers\SiteController  $aboutData */
/** @var \frontend\controllers\SiteController  $saleData */
/** @var \frontend\controllers\SiteController  $articleData */
/** @var \frontend\controllers\SiteController  $blogData */

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
