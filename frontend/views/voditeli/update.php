<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Voditeli $model */

$this->title = 'Update Voditeli: ' . $model->id_vod;
$this->params['breadcrumbs'][] = ['label' => 'Voditelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_vod, 'url' => ['view', 'id_vod' => $model->id_vod]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="voditeli-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
