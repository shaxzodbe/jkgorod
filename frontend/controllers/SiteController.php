<?php

namespace frontend\controllers;

use common\models\About;
use common\models\Article;
use common\models\Blog;
use common\models\Contact;
use common\models\Content;
use common\models\LoginForm;
use common\models\Sale;
use Yii;
use yii\web\BadRequestHttpException;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{

    public function beforeAction($action)
    {
        if (!Yii::$app->session->has('language')) {
            Yii::$app->session->set('language', 'ru');
        }
        Yii::$app->language = Yii::$app->session->get('language');
        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        $contentData = Content::find()->published()->one();
        $aboutData = About::find()->all();
        $saleData = Sale::find()->all();
        $articleData = Article::find()->all();
        $blogData = Blog::find()->one();
        $contactData = new Contact();

        if ($this->request->isPost) {
            if ($contactData->load($this->request->post()) && $contactData->save()) {
                return $this->refresh();
            }
        }

        return $this->render('index', [
            'contentData' => $contentData,
            'aboutData' => $aboutData,
            'saleData' => $saleData,
            'articleData' => $articleData,
            'blogData' => $blogData,
            'contactData' => $contactData,
        ]);
    }

    public function actionLanguage($language)
    {
        if ($language == 'ru') {
            Yii::$app->session->set('language', 'ru');
            return $this->goBack();
        }

        Yii::$app->session->set('language', 'uz');
        return $this->goBack();
    }
}

