<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Avto $model */

$this->title = 'Изменить автомобиль: ' . $model->Код_авто;
$this->params['breadcrumbs'][] = ['label' => 'Avtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Код_авто, 'url' => ['view', 'Код_авто' => $model->Код_авто]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<link rel="stylesheet" type="text/css" href="/css/1.css" />
<div class="avto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
