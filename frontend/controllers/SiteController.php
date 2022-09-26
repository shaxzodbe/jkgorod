<?php

namespace frontend\controllers;

use common\models\About;
use common\models\Article;
use common\models\Blog;
use common\models\Content;
use common\models\LoginForm;
use common\models\Sale;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', 'language'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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

        return $this->render('index', [
            'contentData' => $contentData,
            'aboutData' => $aboutData,
            'saleData' => $saleData,
            'articleData' => $articleData,
            'blogData' => $blogData,
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
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

