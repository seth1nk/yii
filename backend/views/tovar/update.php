<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Tovar $model */

$this->title = 'Изменить товар: ' . $model->Код_товара;
$this->params['breadcrumbs'][] = ['label' => 'Tovars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Код_товара, 'url' => ['view', 'Код_товара' => $model->Код_товара]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<link rel="stylesheet" type="text/css" href="/css/1.css" />
<div class="tovar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
