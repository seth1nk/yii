<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Marh $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="marh-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Пункт_назначения')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Расстояние_до_пункта_назначения')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
