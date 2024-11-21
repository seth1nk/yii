<?php

use common\models\Garage;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\GarageSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Гаражи';
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" type="text/css" href="/css/2.css" />
<div class="garage-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Garage', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_avto',
            'polomka',
            'zapchast',
            'cena_zapchast',
            'data_nachalo',
            'data_konec',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Garage $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_avto' => $model->id_avto]);
                 }
            ],
        ],
    ]); ?>


</div>
