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

    <?= $form->field($model, 'Код_авто') ?>

    <?= $form->field($model, 'Время_прибытия') ?>

    <?= $form->field($model, 'Время_отбытия') ?>

    <?= $form->field($model, 'Код_водителя') ?>

    <?= $form->field($model, 'Путевка') ?>

    <?php // echo $form->field($model, 'Товар') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
