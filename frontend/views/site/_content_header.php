<?php
/**
 * Class ${NAME}
 * @author <sulaymanovshaxzod@gmail.com>
 */

/** @var \common\models\Content $model */
$language = Yii::$app->session->get('language');

?>

<header>
    <div class="page-header border-radius-xl img-fluid border-radius-lg shadow m-3 p-4"
         style="background-image: url(<?php echo $model->getImageUrl() ?>); background-repeat: no-repeat;
                 background-size: contain; height: auto;
                 max-width: 100%; aspect-ratio: 1268/506; object-fit: contain">
<!--        <div class="mask"></div>-->
    </div>
</header>
