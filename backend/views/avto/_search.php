<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\AvtoSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="avto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_avto') ?>

    <?= $form->field($model, 'registration_number') ?>

    <?= $form->field($model, 'name_avto') ?>

    <?= $form->field($model, 'god') ?>

    <?= $form->field($model, 'probeg') ?>

    <?php // echo $form->field($model, 'category') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
