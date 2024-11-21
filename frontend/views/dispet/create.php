<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Dispet $model */

$this->title = 'Добавить Диспетчерскую';
$this->params['breadcrumbs'][] = ['label' => 'Диспетчерские', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" type="text/css" href="/css/2.css" />
<div class="dispet-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
