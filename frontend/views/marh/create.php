<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Marh $model */

$this->title = 'Create Marh';
$this->params['breadcrumbs'][] = ['label' => 'Marhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marh-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
