<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Dispet $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="dispet-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Код_авто')->textInput() ?>

    <?= $form->field($model, 'Время_прибытия')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Время_отбытия')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Код_водителя')->textInput() ?>

    <?= $form->field($model, 'Путевка')->textInput() ?>

    <?= $form->field($model, 'Товар')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
