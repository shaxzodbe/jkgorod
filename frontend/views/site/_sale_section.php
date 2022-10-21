<?php
/**
 * Class ${NAME}
 * @author <sulaymanovshaxzod@gmail.com>
 */

/** @var \common\models\Sale $model */
$language = Yii::$app->session->get('language');

?>

<?php foreach ($model as $item => $value): ?>
    <div class="col-lg-4 mb-lg-3 mb-4">
        <div class="card">
            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                <a href="javascript:;" class="d-block">
                    <img src="<?php echo $value->getImageUrl() ?>"
                         class="img-fluid border-radius-lg shadow"
                         style="min-height: 212px;">
                </a>
            </div>

            <div class="card-body pt-3">
                <div class="d-flex align-items-center">
                    <div>
<!--                        <a href="javascript:;"-->
<!--                           class="card-title h4 d-block text-darker font-weight-bolder mb-0">-->
<!--                            --><?php //echo $model[$item]['cost'] ?><!-- USD-->
<!--                        </a>-->
                        <p class="card-description mb-4 text-sm">
                            <?php echo $model[$item]['info_'.$language]?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-sitemap text-gradient text-warning text-lg mb-0"
                               aria-hidden="true"></i>
                            <div class="ms-3">
                                <p class="text-xs mb-0"><?=Yii::t('app','Surface')?></p>
                                <h6 class="font-weight-bolder mb-0"><?php echo $model[$item]['surface']?>m
                                    <small class="position-absolute text-xs justify-align-top mt-n0">2</small>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-bed text-gradient text-warning text-lg mb-0" aria-hidden="true"></i>
                            <div class="ms-3">
                                <p class="text-xs mb-0"><?=Yii::t('app','Bedrooms')?></p>
                                <h6 class="font-weight-bolder mb-0"><?php echo $model[$item]['bedrooms']?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-bath text-gradient text-warning text-lg mb-0"
                               aria-hidden="true"></i>
                            <div class="ms-3">
                                <p class="text-xs mb-0"><?=Yii::t('app','Bathrooms')?></p>
                                <h6 class="font-weight-bolder mb-0"><?php echo $model[$item]['bathrooms']?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>

