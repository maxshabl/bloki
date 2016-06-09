<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

\frontend\assets\SailorAsset::register($this);


/* @var $this \yii\web\View */
/* @var $content string */
?>
<?php $this->beginPage(); ?>
    <!DOCTYPE html>
    <html lang="ru">
    <head>

        <title><?=$this->title ?> </title>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <?=Html::csrfMetaTags() ?>
        <?php $this->head(); ?>
        </head>



<body>
<?php $this->beginBody() ?>


<div id="wrapper">
	<!-- start header -->
    <?=$this->render("//common/head") ?>
	<!-- end header -->
	<section id="featured" class="bg">
	<!-- start slider -->

			
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="main-slider flexslider">
            <ul class="slides">
              <li>
                <img src="/source/img/slides/flexslider/1.jpg" alt="" />

              </li>
              <li>
                <img src="/source/img/slides/flexslider/2.jpg" alt="" />

              </li>
              <li>
                <img src="/source/img/slides/flexslider/3.jpg" alt="" />

              </li>
                <li>
                    <img src="/source/img/slides/flexslider/4.jpg" alt="" />

                </li>
                <li>
                    <img src="/source/img/slides/flexslider/5.jpg" alt="" />

                </li>
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>
        <section id="content">
            <div class="container">
                <div class="row">

                    <?=$content ?>

                </div>
            </div>
         </section>




    <?=$this->render("//common/footer") ?>
</div>
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>