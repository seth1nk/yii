<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Marh $model */

$this->title = 'Изменить маршрут: ' . $model->Код_маршрута;
$this->params['breadcrumbs'][] = ['label' => 'Marhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Код_маршрута, 'url' => ['view', 'Код_маршрута' => $model->Код_маршрута]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<link rel="stylesheet" type="text/css" href="/css/1.css" />
<div class="marh-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
