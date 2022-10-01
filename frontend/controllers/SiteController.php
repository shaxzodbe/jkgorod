<?php

namespace frontend\controllers;

use common\models\About;
use common\models\Article;
use common\models\Blog;
<<<<<<< HEAD
use common\models\Contact;
use common\models\Content;
use common\models\Sale;
use Yii;
use yii\web\BadRequestHttpException;
=======
use common\models\Content;
use common\models\LoginForm;
use common\models\Sale;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
>>>>>>> 59ea0495131e6a4a90e3da7e838037e08155b15b
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
<<<<<<< HEAD
     * @throws BadRequestHttpException
     */
=======
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

>>>>>>> 59ea0495131e6a4a90e3da7e838037e08155b15b
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
<<<<<<< HEAD
        $contactData = new Contact();

        if ($this->request->isPost) {
            if ($contactData->load($this->request->post()) && $contactData->save()) {
                return $this->refresh();
            }
        }
=======
>>>>>>> 59ea0495131e6a4a90e3da7e838037e08155b15b

        return $this->render('index', [
            'contentData' => $contentData,
            'aboutData' => $aboutData,
            'saleData' => $saleData,
            'articleData' => $articleData,
            'blogData' => $blogData,
<<<<<<< HEAD
            'contactData' => $contactData,
        ]);
    }

=======
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

>>>>>>> 59ea0495131e6a4a90e3da7e838037e08155b15b
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

