<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\TovarSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tovar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_tovar') ?>

    <?= $form->field($model, 'name_tovar') ?>

    <?= $form->field($model, 'kolvo_tovar') ?>

    <?= $form->field($model, 'cena_tovar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
