<?php

namespace backend\controllers;

use common\models\Dispet;
use common\models\DispetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * DispetController implements the CRUD actions for Dispet model.
 */
class DispetController extends Controller
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
     * Lists all Dispet models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DispetSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Dispet model.
     * @param int $id_avto Id Avto
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_avto)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_avto),
        ]);
    }

    /**
     * Creates a new Dispet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Dispet();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_avto' => $model->id_avto]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Dispet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_avto Id Avto
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_avto)
    {
        $model = $this->findModel($id_avto);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_avto' => $model->id_avto]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Dispet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_avto Id Avto
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_avto)
    {
        $this->findModel($id_avto)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Dispet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_avto Id Avto
     * @return Dispet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_avto)
    {
        if (($model = Dispet::findOne(['id_avto' => $id_avto])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
