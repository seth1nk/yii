<?php

namespace frontend\controllers;

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
     * @param int $Код_авто Код Авто
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Код_авто)
    {
        return $this->render('view', [
            'model' => $this->findModel($Код_авто),
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
                return $this->redirect(['view', 'Код_авто' => $model->Код_авто]);
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
     * @param int $Код_авто Код Авто
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Код_авто)
    {
        $model = $this->findModel($Код_авто);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Код_авто' => $model->Код_авто]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Dispet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Код_авто Код Авто
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Код_авто)
    {
        $this->findModel($Код_авто)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Dispet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Код_авто Код Авто
     * @return Dispet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Код_авто)
    {
        if (($model = Dispet::findOne(['Код_авто' => $Код_авто])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
