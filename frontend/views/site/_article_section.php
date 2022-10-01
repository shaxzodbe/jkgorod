<?php
/**
 * Class ${NAME}
 * @author <sulaymanovshaxzod@gmail.com>
 */

/** @var \common\models\Article $model */
$language = Yii::$app->session->get('language');
?>

<?php foreach ($model as $item => $value): ?>

    <div class="col-lg-4 col-md-6">
        <div class="card card-blog card-plain">
            <div class="position-relative">
                <a class="d-block blur-shadow-image">
                    <img src="<?php echo $value->getImageUrl() ?>"
                         alt="img-blur-shadow"
                         class="img-fluid shadow border-radius-lg"
                         style="width: 100%; height: auto; aspect-ratio: 16/9"
                    >
                </a>
            </div>
            <div class="card-body px-1 pt-3">
                <a href="javascript:;">
                    <h5>
                        <?php echo $model[$item]['title_'.$language] ?>
                    </h5>
                </a>
                <p>
                    <?php echo $model[$item]['description_'.$language]?>
                </p>
            </div>
        </div>
    </div>

<?php endforeach ?>

