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

    <?= $form->field($model, 'Код_авто') ?>

    <?= $form->field($model, 'Регистрационный_номер_авто') ?>

    <?= $form->field($model, 'Название_авто') ?>

    <?= $form->field($model, 'Год_выпуска_авто') ?>

    <?= $form->field($model, 'Пробег') ?>

    <?php // echo $form->field($model, 'Категория') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
