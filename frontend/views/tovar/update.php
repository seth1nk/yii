<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Tovar $model */

$this->title = 'Update Tovar: ' . $model->id_tovar;
$this->params['breadcrumbs'][] = ['label' => 'Tovars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tovar, 'url' => ['view', 'id_tovar' => $model->id_tovar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tovar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
