<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Avto $model */

$this->title = 'Добавить Автомобиль';
$this->params['breadcrumbs'][] = ['label' => 'Автомобили', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
