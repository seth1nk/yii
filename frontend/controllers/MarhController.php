<?php

namespace frontend\controllers;

use common\models\Marh;
use common\models\MarhSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * MarhController implements the CRUD actions for Marh model.
 */
class MarhController extends Controller
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
     * Lists all Marh models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MarhSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Marh model.
     * @param int $id_marh Id Marh
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_marh)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_marh),
        ]);
    }

    /**
     * Creates a new Marh model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Marh();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_marh' => $model->id_marh]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Marh model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_marh Id Marh
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_marh)
    {
        $model = $this->findModel($id_marh);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_marh' => $model->id_marh]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Marh model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_marh Id Marh
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_marh)
    {
        $this->findModel($id_marh)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Marh model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_marh Id Marh
     * @return Marh the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_marh)
    {
        if (($model = Marh::findOne(['id_marh' => $id_marh])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
