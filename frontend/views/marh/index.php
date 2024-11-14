<?php

use common\models\Marh;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\MarhSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Маршруты';
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" type="text/css" href="/css/2.css" />
<div class="marh-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'Код_маршрута',
            'Пункт_назначения',
            'Расстояние_до_пункта_назначения',
            [
                'class' => ActionColumn::className(),
                'template' => '{view}',
                'urlCreator' => function ($action, Marh $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Код_маршрута' => $model->Код_маршрута]);
                 }
            ],
        ],
    ]); ?>


</div>
