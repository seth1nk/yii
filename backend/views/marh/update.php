<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Marh $model */

$this->title = 'Update Marh: ' . $model->id_marh;
$this->params['breadcrumbs'][] = ['label' => 'Marhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_marh, 'url' => ['view', 'id_marh' => $model->id_marh]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="marh-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
