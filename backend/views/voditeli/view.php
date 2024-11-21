<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Voditeli $model */

$this->title = $model->id_vod;
$this->params['breadcrumbs'][] = ['label' => 'Voditelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="voditeli-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_vod' => $model->id_vod], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_vod' => $model->id_vod], [
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
            'id_vod',
            'name_vod',
            'stazh',
            'number_pass',
            'adress',
            'phone',
        ],
    ]) ?>

</div>
