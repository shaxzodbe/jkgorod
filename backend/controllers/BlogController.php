<?php

namespace backend\controllers;

use common\models\Blog;
use common\models\Content;
use Yii;
use yii\base\Exception;
use yii\data\ActiveDataProvider;
use yii\helpers\FileHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * BlogController implements the CRUD actions for Blog model.
 */
class BlogController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Blog models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Blog::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Blog model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Content model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     * @throws Exception
     */
    public function actionCreate()
    {
        $model = new Blog();
        $model->inputFile = UploadedFile::getInstance($model, 'inputFile');

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {

                if ($model->inputFile) {

                    $model->file = '/blogs/' .Yii::$app->security->generateRandomString(12) . '/' .  $model->inputFile->baseName . '.' .$model->inputFile->extension;

                    $fullPath = \Yii::getAlias('@frontend/web/storage'. $model->file);
                    $dir = dirname($fullPath);
                    if (!FileHelper::createDirectory($dir)) {
                        FileHelper::createDirectory($fullPath);
                    }

                    $model->inputFile->saveAs($fullPath);
                }
                if ($model->save()) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }

        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Blog model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->inputFile = UploadedFile::getInstance($model, 'inputFile');

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                if ($model->inputFile) {

                    $model->file = '/blogs/' .Yii::$app->security->generateRandomString(12) . '/' .  $model->inputFile->baseName . '.' .$model->inputFile->extension;

                    $fullPath = \Yii::getAlias('@frontend/web/storage'. $model->file);
                    $dir = dirname($fullPath);
                    if (!FileHelper::createDirectory($dir)) {
                        FileHelper::createDirectory($fullPath);
                    }

                    $model->inputFile->saveAs($fullPath);
                }
                if ($model->save()) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }

        } else {
            $model->loadDefaultValues();
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Blog model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Blog model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Blog the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Blog::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
