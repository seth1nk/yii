<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\DispetSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="dispet-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_avto') ?>

    <?= $form->field($model, 'time_prib') ?>

    <?= $form->field($model, 'time_otb') ?>

    <?= $form->field($model, 'id_vod') ?>

    <?= $form->field($model, 'pytevka') ?>

    <?php // echo $form->field($model, 'tovar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
