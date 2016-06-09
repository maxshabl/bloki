<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

use frontend\assets\SailorAsset;




SailorAsset::register($this);
?>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-lg-3">
                <div class="widget">
                    <h4>Навигация на сайте</h4>
                    <ul class="link-list">
                        <li ><a href="/site/index" >Главная</a></li>
                        <li ><a href="/site/about" >О нас</a></li>
                        <li ><a href="/site/contact" >Контакты</a></li>
                        <li ><a href="/site/delivery" >Доставка</a></li>
                        <li ><a href="/products/list" >Продукты</a></li>
                        <li "><a href="/posts/lenta" >Блог</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-3 col-lg-3">
                <div class="widget">
                    <h4>Наш адрес</h4>
                    <address>
                        <strong> </strong>Владимирская область,<br>
                        поселок Садовый (17-й МЮД), <br>ул. Графского, д.1<br>
                         </address>
                        <i class="icon-envelope-alt"></i><b>EMAIL</b> <br>tikhmenev@mail.rum
                </div>

            </div>
            <div class="col-sm-3 col-lg-3">
                <div class="widget">
                    <h4>Телефоны для связи:</h4>
                    <ul class="topleft-info">
                        <i class="fa fa-phone"></i>  +7 (4922) 60-30-36 <br>
                        <i class="fa fa-phone"></i>  +7 (904) 260-04-04<br>
                        <i class="fa fa-phone"></i>  +7 (920) 906-72-06<br>
                        <i class="fa fa-phone"></i>  +7 (903) 830-72-06<br>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 col-lg-3">
                <div class="widget">
                    <h4>Подписка</h4>
                    <p>Оставьте Ваш электронный адрес и получайте новости нашего сайта</p>
                    <div class="form-group multiple-form-group input-group">
                        <input type="email" name="email" class="form-control">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-theme btn-add">EMAIL</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>
							<span>&copy;  All right reserved. | <a href="http://JBI33.ru/">jbi33.ru</a>
                             <!--
                                All links in the footer should remain intact.
                                Licenseing information is available at: http://bootstraptaste.com/license/
                                You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Sailor
                            -->

                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="social-network">
                        <li><a href="https://vk.com/id22603258" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://vk.com/id22603258" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://vk.com/id22603258" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://vk.com/id22603258" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="https://vk.com/id22603258" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="/source/jsjs/jquery.cubeportfolio.min.js"></script>