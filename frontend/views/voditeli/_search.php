<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\VoditeliSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="voditeli-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_vod') ?>

    <?= $form->field($model, 'name_vod') ?>

    <?= $form->field($model, 'stazh') ?>

    <?= $form->field($model, 'number_pass') ?>

    <?= $form->field($model, 'adress') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
