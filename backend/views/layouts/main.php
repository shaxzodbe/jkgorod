<?php

/** @var \yii\web\View $this */

/** @var string $content */

use backend\assets\AppAsset;
use yii\bootstrap5\Html;
use yii\helpers\Url;

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
        <?php $this->head() ?>
    </head>

    <body id="page-top">
    <?php $this->beginBody() ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
               href="<?php echo Yii::$app->getHomeUrl() ?>">
                <div class="sidebar-brand-icon">
                    <?php echo Html::img('@web/img/2022-09-26_14-10.png' ,['style' => 'width: 30px']) ?>
                </div>
                <div class="sidebar-brand-text mx-3">gorod</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo Url::to(['/site/index']) ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Главная</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link " href="<?php echo Url::to(['/content/index']) ?>">
                    <i class="fas fa-solid fa-pen-nib"></i>
                    <span>Контент</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link " href="<?php echo Url::to(['/about/index']) ?>">
                    <i class="fas fa-solid fa-address-card"></i>
                    <span>О нас</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="<?php echo Url::to(['/sale/index']) ?>">
                    <i class="fas fa-solid fa-dollar-sign"></i>
                    <span>Продажа</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="<?php echo Url::to(['/article/index']) ?>">
                    <i class="fas fa-duotone fa-bookmark"></i>
                    <span>Статья</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="<?php echo Url::to(['/blog/index']) ?>">
                    <i class="fas fa-solid fa-file"></i>
                    <span>Блог</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Messages -->
                        <li class="nav-item" role="button">
                            <a class="nav-link" href="<?php echo Url::to(['site/logout']); ?>">
                                <span class="mr-lg-2 d-lg-inline text-gray-600 small">
                                    Выйти
                                </span>
                            </a>
                        </li>

                        <div class="topbar-divider d-sm-block mx-1 mr-lg-2"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item">
                            <a class="nav-link" role="button">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php echo get_current_user() ?>
                                </span>
                                <?php echo Html::img('@web/img/undraw_profile.svg', [
                                    'class' => 'img-profile rounded-circle'
                                ]) ?>
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="p-3">
                    <?php echo $content ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout  Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
