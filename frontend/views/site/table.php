<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Таблицы';
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" type="text/css" href="/css/1.css" />
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

        <div class="contact-list">
            <div class="contact-item">
            <img src="/img/avto.jpg" width="40%">
                <a href='/index.php?r=avto%2Findex'>
                <h2>Автомобили</h2></a>
            </div>
            <div class="contact-item">
            <img src="/img/marh.jpg" width="40%">
                <a href='/index.php?r=marh%2Findex'>
                <h2>Маршруты</h2></a>
            </div>
            <div class="contact-item">
            <img src="/img/dispet.jpg" width="40%">
                <a href='/index.php?r=dispet%2Findex'>
                <h2>Диспетчерская</h2></a>
            </div>
            <div class="contact-item">
            <img src="/img/tovar.jpeg" width="40%">
                <a href='/index.php?r=tovar%2Findex'>
                <h2>Товары</h2></a>
            </div>
            <div class="contact-item">
            <img src="/img/garage.jpg" width="40%">
                <a href='/index.php?r=garage%2Findex'>
                <h2>Гаражи</h2></a>
            </div>
            <div class="contact-item">
            <img src="/img/voditeli.jpg" width="40%">
                <a href='/index.php?r=voditeli%2Findex'>
                <h2>Водители</h2></a>
            </div>
        </div>
    </div>


</div>
