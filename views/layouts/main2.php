<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<!--<html lang="ru">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <title>Комментарии</title>-->
<!---->
<!--    <link rel="stylesheet" href="/css/normalize.css">-->
<!--    <link rel="stylesheet" href="/css/main.css?1606389694">-->
<!--</head>-->

<body>
<?php $this->beginBody() ?>
<div class="page">
    <header class="header">
        <div class="header__left-container">
            <div class="header__contact-container">
                <p class="header__contact contact">Телефон: (499) 340-94-71</p>
                <p class="header__contact contact">Email: <a href="mailto:info@future-group.ru">info@future-group.ru</a></p>
            </div>
            <h1 class="header__title"><?= $this->title; ?></h1>
        </div>
        <img src="/img/logo.png" class="header__logo" alt="Future. Internet agency">
    </header>
    <main class="main">
        <div class="comments">
        <?= $content; ?>
        </div>
<!--        <hr class="hr">-->
<!--        <form class="form" id="form" action="#" method="post">-->
<!--            <h3 class="form__title">Оставьте комментарий</h3>-->
<!--            <div class="form__fields">-->
<!--                <label class="form__label" for="name-input">Ваше имя</label>-->
<!--                <input type="text" id="name-input" class="form__input form__input_type_name" name="name" minlength="1" maxlength="40" value="" required="">-->
<!--                <label class="form__label" for="comment-input">Ваш комментарий</label>-->
<!--                <textarea form="form" id="comment-input" class="form__input form__input_type_comment" name="comment" minlength="1" maxlength="500" wrap="soft" required=""></textarea>-->
<!--            </div>-->
<!--            <button type="submit" class="form__btn form__btn_type_submit">Отправить</button>-->
<!--        </form>-->
    </main>
    <footer class="footer">
        <img class="footer__logo" src="/img/logo.png" alt="Future. Internet agency">
        <div class="footer__right-container">
            <div class="footer__contact-container">
                <p class="footer__contact contact">Телефон: (499) 340-94-71</p>
                <p class="footer__contact contact">Email: <a href="mailto:info@future-group.ru">info@future-group.ru</a></p>
                <p class="footer__contact contact">Адрес: <a href="https://yandex.ru/maps/-/CCQ~50v5TC">115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</a></p>
            </div>
            <div class="footer__copyright">© 2010 — 2014 Future. Все права защищены</div>
        </div>
    </footer>
</div>
</body>
<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>