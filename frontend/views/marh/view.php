<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Marh $model */

$this->title = $model->id_marh;
$this->params['breadcrumbs'][] = ['label' => 'Marhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<link rel="stylesheet" type="text/css" href="/css/2.css" />
<div class="marh-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_marh',
            'mesto',
            'rasstoyanie',
        ],
    ]) ?>

</div>
