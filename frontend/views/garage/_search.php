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

    <?= $form->field($model, 'id_avto') ?>

    <?= $form->field($model, 'polomka') ?>

    <?= $form->field($model, 'zapchast') ?>

    <?= $form->field($model, 'cena_zapchast') ?>

    <?= $form->field($model, 'data_nachalo') ?>

    <?php // echo $form->field($model, 'data_konec') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
