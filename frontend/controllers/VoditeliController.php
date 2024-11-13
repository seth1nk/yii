<?php

namespace frontend\controllers;

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
     * @param int $Код_водителя Код Водителя
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Код_водителя)
    {
        return $this->render('view', [
            'model' => $this->findModel($Код_водителя),
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
                return $this->redirect(['view', 'Код_водителя' => $model->Код_водителя]);
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
     * @param int $Код_водителя Код Водителя
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Код_водителя)
    {
        $model = $this->findModel($Код_водителя);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Код_водителя' => $model->Код_водителя]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Voditeli model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Код_водителя Код Водителя
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Код_водителя)
    {
        $this->findModel($Код_водителя)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Voditeli model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Код_водителя Код Водителя
     * @return Voditeli the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Код_водителя)
    {
        if (($model = Voditeli::findOne(['Код_водителя' => $Код_водителя])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
