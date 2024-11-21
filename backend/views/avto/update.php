<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Avto $model */

$this->title = 'Изменить Автомобиль: ' . $model->id_avto;
$this->params['breadcrumbs'][] = ['label' => 'Автомобили', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_avto, 'url' => ['view', 'id_avto' => $model->id_avto]];
$this->params['breadcrumbs'][] = 'Изменение';
?>
<div class="avto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
