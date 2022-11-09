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
                <div href="" class="d-block">
                    <img src="<?php echo $value->getImageUrl() ?>"
                         class="img-fluid border-radius-lg shadow"
                         style="min-height: 212px;">

                </div>
            </div>

            <div class="card-body pt-3">
                <div class="d-flex align-items-center">
                    <div>
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
                            <div class="ms-xl-3 ms-1">
                                <p class="text-xs mb-0"><?=Yii::t('app','Surface')?></p>
                                <h6 class="font-weight-bolder mb-0"><?php echo $model[$item]['surface']?><?=Yii::t('app','m')?>
                                    <small class="position-absolute justify-align-top mt-n0">2</small>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-bed text-gradient text-warning text-lg mb-0" aria-hidden="true"></i>
                            <div class="ms-xl-3 ms-1">
                                <p class="text-xs mb-0"><?php echo ($model[$item]['bedrooms'] > 3) ? Yii::t('app','Hall') : Yii::t('app','Bedrooms') ?></p>
                                <h6 class="font-weight-bolder mb-0"><?php if ($model[$item]['bedrooms'] <= 3) { echo (int)$model[$item]['bedrooms']; } else if ($model[$item]['bedrooms'] > 3) { echo $model[$item]['bedrooms'] . Yii::t('app','m') . '<small class="position-absolute justify-align-top mt-n0">2</small>'; } ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-bath text-gradient text-warning text-lg mb-0"
                               aria-hidden="true"></i>
                            <div class="ms-xl-3 ms-1">
                                <p class="text-xs mb-0">
                                    <?php if ($model[$item]['bathrooms'] < 13) { echo Yii::t('app','Kitchen'); } else if (($model[$item]['bathrooms'] < 20) && ($model[$item]['bathrooms'] > 13)) { echo Yii::t('app','Hall'); } else { echo Yii::t('app','Balcony'); }?></p>
                                <h6 class="font-weight-bolder mb-0"><?php echo $model[$item]['bathrooms']?><?=Yii::t('app','m')?>
                                    <small class="position-absolute justify-align-top mt-n0">2</small>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
