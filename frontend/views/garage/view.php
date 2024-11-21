<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Garage $model */

$this->title = $model->id_avto;
$this->params['breadcrumbs'][] = ['label' => 'Гаражи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<link rel="stylesheet" type="text/css" href="/css/2.css" />
<div class="garage-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_avto',
            'polomka',
            'zapchast',
            'cena_zapchast',
            'data_nachalo',
            'data_konec',
        ],
    ]) ?>

</div>
