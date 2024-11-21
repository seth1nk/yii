<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Voditeli $model */

$this->title = 'Create Voditeli';
$this->params['breadcrumbs'][] = ['label' => 'Voditelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="voditeli-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
