<?
use yii\helpers\Html;
use yii\bootstrap\Nav;
\frontend\assets\MainAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$this->title ?> </title>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?=Html::csrfMetaTags() ?>
    <?php $this->head() ?>

</head>

<body>
<?php $this->beginBody() ?>

<?=$this->render("//common/head") ?>
<div class="">


    <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">

            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                 <div class="sl-slide-inner">
                      <div class="bg-img bg-img-1"></div>
                     <!-- <h2><a href="/products/list">Кольца из Владимира от производителя</a></h2>
                     <blockquote>
                         <p class="location"><a href="/products/contact"> Будем рады вашему звонку</a></p>
                         <p></p>
                       <cite>$ 20,000,000</cite> -->
                      </blockquote>
                 </div>
             </div>

             <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                 <div class="sl-slide-inner">
                     <div class="bg-img bg-img-2"></div>
                     <!--  <h2><a href="/products/list">Ознакомьтесь с нашей продукцией </a></h2>
                       <blockquote>
                           <p class="location"> <a href="/products/contact"> Наши контакты по ссылке</a></p>
                           <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
                           <cite>$ 20,000,000</cite>
                       </blockquote>-->
                  </div>
              </div>

              <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                  <div class="sl-slide-inner">
                      <div class="bg-img bg-img-3"></div>
                      <!--  <h2><a href="/products/list">Лучшее качество по низким ценам</a></h2>
                      <blockquote>
                          <p class="location"><a href="/products/contact"> Будем рады вашему звонку</a></p>
                           <p></p>
                            <cite>$ 20,000,000</cite> -->
                      </blockquote>
                   </div>
               </div>

               <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
                   <div class="sl-slide-inner">
                       <div class="bg-img bg-img-4"></div>
                       <!--<h2><a href="/products/list">Ознакомьтесь с нашей продукцией </a></h2>
                       <blockquote>
                            <p class="location"> <a href="/products/contact"> Наши контакты по ссылке</a></p>
                           <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
                           <cite>$ 20,000,000</cite>
                       </blockquote>-->
                   </div>
               </div>

               <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
                   <div class="sl-slide-inner">
                       <div class="bg-img bg-img-5"></div>
                       <!--<h2><a href="/products/list">Кольца из Владимира от производителя</a></h2>
                       <blockquote>
                           <p class="location"><a href="/products/contact"> Будем рады вашему звонку</a></p>
                           <p></p>
                            <cite>$ 20,000,000</cite> -->
                       </blockquote>
                   </div>
               </div>
           </div><!-- /sl-slider -->



        <nav id="nav-dots" class="nav-dots">
            <span class="nav-dot-current"></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </nav>

    </div><!-- /slider-wrapper -->
</div>

<?=$content ?>



<?=$this->render("//common/footer") ?>


<!-- Modal -->
<div id="loginpop" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="row">
                <div class="col-sm-6 login">
                    <h4>Login</h4>
                    <form class="" role="form">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success">Sign in</button>
                    </form>
                </div>
                <div class="col-sm-6">
                    <h4>New User Sign Up</h4>
                    <p>Join today and get updated with all the properties deal happening around.</p>
                    <button type="submit" class="btn btn-info"  onclick="window.location.href='register.html'">Join Now</button>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /.modal -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>



