<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Avto $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="avto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'registration_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_avto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'god')->textInput() ?>

    <?= $form->field($model, 'probeg')->textInput() ?>

    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
