<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Garage $model */

$this->title = $model->id_avto;
$this->params['breadcrumbs'][] = ['label' => 'Garages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="garage-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_avto' => $model->id_avto], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_avto' => $model->id_avto], [
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
            'id_avto',
            'polomka',
            'zapchast',
            'cena_zapchast',
            'data_nachalo',
            'data_konec',
        ],
    ]) ?>

</div>
