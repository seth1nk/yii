<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Dispet $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="dispet-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_avto')->textInput() ?>

    <?= $form->field($model, 'time_prib')->textInput() ?>

    <?= $form->field($model, 'time_otb')->textInput() ?>

    <?= $form->field($model, 'id_vod')->textInput() ?>

    <?= $form->field($model, 'pytevka')->textInput() ?>

    <?= $form->field($model, 'tovar')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
