<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Avto $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="avto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Регистрационный_номер_авто')->textInput() ?>

    <?= $form->field($model, 'Название_авто')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Год_выпуска_авто')->textInput() ?>

    <?= $form->field($model, 'Пробег')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Категория')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
