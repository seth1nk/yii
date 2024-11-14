<?php

use common\models\Tovar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\TovarSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" type="text/css" href="/css/2.css" />
<div class="tovar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить товар', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'Код_товара',
            'Наименование_товара',
            'Количество_товара',
            'Цена_товара',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tovar $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Код_товара' => $model->Код_товара]);
                 }
            ],
        ],
    ]); ?>


</div>
