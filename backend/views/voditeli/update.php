<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Voditeli $model */

$this->title = 'Изменить водителя: ' . $model->Код_водителя;
$this->params['breadcrumbs'][] = ['label' => 'Voditelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Код_водителя, 'url' => ['view', 'Код_водителя' => $model->Код_водителя]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<link rel="stylesheet" type="text/css" href="/css/1.css" />
<div class="voditeli-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
