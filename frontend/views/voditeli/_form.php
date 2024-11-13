<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Voditeli $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="voditeli-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ФИО_водителя')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Стаж')->textInput() ?>

    <?= $form->field($model, 'Номер_паспорта')->textInput() ?>

    <?= $form->field($model, 'Место_прописки')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Телефон')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
