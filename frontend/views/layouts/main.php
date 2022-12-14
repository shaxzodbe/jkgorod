<?php

/** @var \yii\web\View $this */
/** @var \yii\data\ActiveDataProvider $dataProvider */
/** @var  \common\models\Content $model */

/** @var string $content */

use frontend\assets\AppAsset;
use yii\bootstrap5\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link rel="apple-touch-icon" sizes="180x180" href="@web/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="@web/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="@web/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <nav class="navbar navbar-expand-lg bg-transparent py-3 shadow-none" id="home">
        <div class="container">
            <a class="navbar-brand w-8" href="" data-config-id="brand">
                <?php echo Html::img('@web/image/logo3.png', ['alt' => 'logo', 'class' => 'thing', 'style' => 'width: 70px']) ?>
            </a>
            <ul class="language d-flex align-items-center justify-content-sm-center mb-0 ms-auto">
                <li class="nav-item mx-2" style="list-style-type: none">
                    <?= Html::a(Yii::t('app', 'RU'), ['site/language', 'language' => 'ru', 'class' => 'nav-link ps-2 cursor-pointer']) ?>
                </li>
                |
                <li class="nav-item mx-2" style="list-style-type: none">
                    <?= Html::a(Yii::t('app', 'UZ'), ['site/language', 'language' => 'uz', 'class' => 'nav-link ps-2 cursor-pointer']) ?>
                </li>
            </ul>


            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                    aria-label="Toggle navigation" style="border: none !important">
                <span class="navbar-toggler-icon">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse w-100 pb-2 py-lg-0" id="navigation">
                <ul class="navbar-nav navbar-nav-hover ms-auto">
                    <li class="nav-item mx-2">
                        <a href="#home" class="nav-link ps-2 cursor-pointer">
                            <?= Yii::t('app', 'Home') ?>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="#about-us" class="nav-link ps-2 cursor-pointer"><?= Yii::t('app', 'About Us') ?></a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="#sale" class="nav-link ps-2 cursor-pointer"><?= Yii::t('app', 'Sale') ?></a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="#article" class="nav-link ps-2 cursor-pointer"><?= Yii::t('app', 'Blog') ?></a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="#contact" class="nav-link ps-2 cursor-pointer"><?= Yii::t('app', 'Contact') ?></a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="tel:+998983359999" class="btn mb-0 bg-gradient-warning cursor-pointer">
                            <?= Yii::t('app', 'Contact Us') ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $content ?>

    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <h6 class="text-uppercase mb-2"><?= Yii::t('app', 'Houses') ?></h6>
                    <p class="mb-4 pb-2"><?= Yii::t('app', 'Find your next home.') ?></p>
                </div>
                <div class="col-md-2 col-6 ms-lg-auto mb-md-0 mb-4">
                    <h6 class="text-sm">Company</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#about-us">
                                About Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="">
                                Careers
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="">
                                Press
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="">
                                Blog
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-2 col-6 mb-md-0 mb-4">
                    <h6 class="text-sm">Pages</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="">
                                Login
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="">
                                Register
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="">
                                Add list
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-2 col-6 mb-md-0 mb-4">
                    <h6 class="text-sm">Legal</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="">
                                Terms
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="">
                                About Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="">
                                Team
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="">
                                Privacy
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-2 col-6 mb-md-0 mb-4">
                    <h6 class="text-sm">Resources</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="">
                                Blog
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="">
                                Service
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="">
                                Product
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="">
                                Pricing
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="horizontal dark mt-lg-5 mt-4 mb-sm-4 mb-1">
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
