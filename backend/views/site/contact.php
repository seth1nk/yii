<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" type="text/css" href="/css/1.css" />
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>&nbsp;&nbsp;&nbsp;Предоставим помощь в кредитовании и лизинге Автосалон "АВТО-НЕЙЗ" аккредитован во всех федеральных банках, 
предоставляющих услуги кредитования, а так же во всех компаниях, осуществляющих лизинг для клиентов.</p>
<p>&nbsp;&nbsp;&nbsp;Процентная ставка по кредиту составляет от <u>11,9% годовых без первоначального взноса!</u>
Возможна дистанционная подача заявки. И только по двум документам удостоверяющим личность (подробности уточняйте 
у менеджеров).</p>
<b style="color:white">
Ответ от банков поступает в течении 15 минут!
</b>
        <div class="contact-list">
            <div class="contact-item">
                <img src="/img/1.jpg" alt="Иванов Иван Иванович" width="40%">
                <h2>Иванов Иван Иванович</h2>
                <p>Должность: Генеральный директор</p>
            </div>
            <div class="contact-item">
                <img src="/img/2.jpg" alt="Петров Петр Петрович" width="40%">
                <h2>Петров Петр Петрович</h2>
                <p>Должность: Заместитель директора</p>
            </div>
            <div class="contact-item">
                <img src="/img/3.jpg" alt="Сидорова Анна Михайловна" width="40%">
                <h2>Сидорова Анна Михайловна</h2>
                <p>Должность: Секретарь</p>
            </div>
            <div class="contact-item">
                <img src="/img/4.jpg" alt="Кузнецов Алексей Сергеевич" width="40%">
                <h2>Кузнецов Алексей Сергеевич</h2>
                <p>Должность: Технический специалист</p>
            </div>
            <div class="contact-item">
                <img src="/img/6.jpg" alt="Николаева Елена Викторовна" width="40%">
                <h2>Николаева Елена Викторовна</h2>
                <p>Должность: Бухгалтер</p>
            </div>
            <div class="contact-item">
                <img src="/img/5.jpg" alt="Смирнов Дмитрий Александрович" width="40%">
                <h2>Смирнов Дмитрий Семенович</h2>
                <p>Должность: Менеджер</p>
            </div>
        </div>
    </div>


</div>
