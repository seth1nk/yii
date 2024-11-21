<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Voditeli $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="voditeli-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_vod')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stazh')->textInput() ?>

    <?= $form->field($model, 'number_pass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
