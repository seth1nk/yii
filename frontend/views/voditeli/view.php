<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Voditeli $model */

$this->title = $model->id_vod;
$this->params['breadcrumbs'][] = ['label' => 'Водители', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<link rel="stylesheet" type="text/css" href="/css/2.css" />
<div class="voditeli-view">

    <h1><?= Html::encode($this->title) ?></h1>


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
