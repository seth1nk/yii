<?php

use common\models\Dispet;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\DispetSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Диспетчерские';
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" type="text/css" href="/css/2.css" />
<div class="dispet-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить диспетчерскую', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'Код_авто',
            'Время_прибытия',
            'Время_отбытия',
            'Код_водителя',
            'Путевка',
            'Товар',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Dispet $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Код_авто' => $model->Код_авто]);
                 }
            ],
        ],
    ]); ?>


</div>
