<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Marh $model */

$this->title = $model->id_marh;
$this->params['breadcrumbs'][] = ['label' => 'Marhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="marh-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_marh' => $model->id_marh], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_marh' => $model->id_marh], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_marh',
            'mesto',
            'rasstoyanie',
        ],
    ]) ?>

</div>
