<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Dispet $model */

$this->title = 'Измнить Диспетчерскую: ' . $model->id_avto;
$this->params['breadcrumbs'][] = ['label' => 'Dispets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_avto, 'url' => ['view', 'id_avto' => $model->id_avto]];
$this->params['breadcrumbs'][] = 'Изменение';
?>
<div class="dispet-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
