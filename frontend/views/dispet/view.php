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
<link rel="stylesheet" type="text/css" href="/css/2.css" />
<div class="dispet-view">

    <h1><?= Html::encode($this->title) ?></h1>


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
