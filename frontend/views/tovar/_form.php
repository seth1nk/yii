<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Tovar $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tovar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_tovar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kolvo_tovar')->textInput() ?>

    <?= $form->field($model, 'cena_tovar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
