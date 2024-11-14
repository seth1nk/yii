<?php

use common\models\Avto;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\AvtoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Автомобили';
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" type="text/css" href="/css/2.css" />
<div class="avto-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'Код_авто',
            'Регистрационный_номер_авто',
            'Название_авто',
            'Год_выпуска_авто',
            'Пробег',
            //'Категория',
            [
                'class' => ActionColumn::className(),
                'template' => '{view}',
                'urlCreator' => function ($action, Avto $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Код_авто' => $model->Код_авто]);
                 }
            ],
        ],
    ]); ?>


</div>
