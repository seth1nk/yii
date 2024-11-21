<?php

namespace backend\controllers;

use common\models\Voditeli;
use common\models\VoditeliSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * VoditeliController implements the CRUD actions for Voditeli model.
 */
class VoditeliController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['index'],
                'rules' => [
                    [
                        'actions' => ['index'],
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

    /**
     * Lists all Voditeli models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new VoditeliSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Voditeli model.
     * @param int $id_vod Id Vod
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_vod)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_vod),
        ]);
    }

    /**
     * Creates a new Voditeli model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Voditeli();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_vod' => $model->id_vod]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Voditeli model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_vod Id Vod
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_vod)
    {
        $model = $this->findModel($id_vod);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_vod' => $model->id_vod]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Voditeli model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_vod Id Vod
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_vod)
    {
        $this->findModel($id_vod)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Voditeli model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_vod Id Vod
     * @return Voditeli the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_vod)
    {
        if (($model = Voditeli::findOne(['id_vod' => $id_vod])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
