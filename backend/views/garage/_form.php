<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Garage $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="garage-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_avto')->textInput() ?>

    <?= $form->field($model, 'polomka')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zapchast')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cena_zapchast')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_nachalo')->textInput() ?>

    <?= $form->field($model, 'data_konec')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
