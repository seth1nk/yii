<?php

use common\models\Voditeli;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\VoditeliSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Водители';
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" type="text/css" href="/css/2.css" />
<div class="voditeli-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Voditeli', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_vod',
            'name_vod',
            'stazh',
            'number_pass',
            'adress',
            'phone',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Voditeli $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_vod' => $model->id_vod]);
                 }
            ],
        ],
    ]); ?>


</div>
