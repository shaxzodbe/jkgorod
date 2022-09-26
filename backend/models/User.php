<?php
/**
 * Class User
 * @package backend\models
 * @author <sulaymanovshaxzod@gmail.com>
 */

namespace backend\models;

class User extends \yii\web\User
{
    public function getUsername()
    {
        return \Yii::$app->user->identity->username;
    }

    public function getUserEmail()
    {
        return \Yii::$app->user->identity->email;
    }

}