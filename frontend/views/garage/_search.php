<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\GarageSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="garage-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Код_авто') ?>

    <?= $form->field($model, 'Тип_поломки') ?>

    <?= $form->field($model, 'Вид_запчасти') ?>

    <?= $form->field($model, 'Цена_запчасти') ?>

    <?= $form->field($model, 'Дата_начала_ремонта') ?>

    <?php // echo $form->field($model, 'Дата_конца_ремонта') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
