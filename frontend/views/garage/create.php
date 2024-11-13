<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Garage $model */

$this->title = 'Добавить гараж';
$this->params['breadcrumbs'][] = ['label' => 'Гаражи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" type="text/css" href="/css/1.css" />
<div class="garage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
