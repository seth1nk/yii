<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Dispet $model */

$this->title = $model->id_avto;
$this->params['breadcrumbs'][] = ['label' => 'Диспетчерские', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dispet-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id_avto' => $model->id_avto], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id_avto' => $model->id_avto], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_avto',
            'time_prib',
            'time_otb',
            'id_vod',
            'pytevka',
            'tovar',
        ],
    ]) ?>

</div>
