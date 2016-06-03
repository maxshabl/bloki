<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

use frontend\assets\MainAsset;




MainAsset::register($this);
?>


<div class="footer">

    <div class="container">



        <div class="row">
            <div class="row">
                <div class="col-lg-3 col-sm-3">
                    <h4>Разделы сайта</h4>
                    <ul class="row">
                        <li class="col-lg-12 col-sm-12 col-xs-3"><a href="/site/index" >Главная</a></li>
                        <li class="col-lg-12 col-sm-12 col-xs-3"><a href="/site/about" >О нас</a></li>
                        <li class="col-lg-12 col-sm-12 col-xs-3"><a href="/site/contact" >Контакты</a></li>
                        <li class="col-lg-12 col-sm-12 col-xs-3"><a href="/site/delivery" >Доставка</a></li>
                        <li class="col-lg-12 col-sm-12 col-xs-3"><a href="/products/list" >Продукты</a></li>
                        <li class="col-lg-12 col-sm-12 col-xs-3"><a href="/posts/lenta" >Блог</a></li>
                        <?if (Yii::$app->user->isGuest) {
                            echo '<li class="col-lg-12 col-sm-12 col-xs-3"><a href="/site/login" >Войти</a></li>';
                        } else {
                           // echo '<li class="col-lg-12 col-sm-12 col-xs-3"><a href="/site/logout" >Выйти</a></li>';
                        }?>
                    </ul>
                </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Подписаться</h4>
                <p>Оставте свой email, чтобы получать последние новости о нас, нашей продукции и новых публикациях на нашем сайте.</p>
                <form class="form-inline" role="form">
                    <input type="text" placeholder="Enter Your email address" class="form-control">
                    <button class="btn btn-success" type="button">Notify Me!</button></form>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Найти нас</h4>
                <a href="#"><img src="/images/facebook.png"  alt="facebook"></a>
                <a href="#"><img src="/images/twitter.png"  alt="twitter"></a>
                <a href="#"><img src="/images/linkedin.png"  alt="linkedin"></a>
                <a href="#"><img src="/images/instagram.png"  alt="instagram"></a>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Связаться с нами</h4>
                <p><br>
                    <b> Адрес: Владимирская область, поселок Садовый (17-й МЮД), ул. Графского, д.1 <br><br>
                    hello@bootstrapreal.com<br><br>
                    Телефон для связи: <br>
                    60-30-36,<br>

                    8(904)260-04-04 <br>

                    8(920)906-72-06<br>

                    8(903)830-72-06</b></p>
            </div>
        </div>
        <p class="copyright">Copyright 2016. All rights reserved by JBI 33.ru 	</p>


    </div></div>