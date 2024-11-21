<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Garage $model */

$this->title = 'Update Garage: ' . $model->id_avto;
$this->params['breadcrumbs'][] = ['label' => 'Garages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_avto, 'url' => ['view', 'id_avto' => $model->id_avto]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="garage-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
