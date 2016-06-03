<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\MainAsset;
//use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

MainAsset::register($this);
?>

<!-- Header Starts -->
<div class="navbar-wrapper">

    <div class="navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">


                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">

                <?
                NavBar::begin([
                    'brandLabel' => 'JBI33.RU',

                    //'brandUrl' => Yii::$app->homeUrl,
                    'options' => [
                        'class' => 'navbar-nav navbar-right',
                    ],
                ]);
                $menuItems = [
                    ['label' => 'Главная', 'url' => ['/site/index']],
                    ['label' => 'О нас', 'url' => ['/site/about']],
                    ['label' => 'Блог', 'url' => ['/posts/lenta']],

                    //['label' => 'Контакты', 'url' => ['/site/contact']],
                ];
                if (Yii::$app->user->isGuest) {
                    //$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                    $menuItems[] = ['label' => 'Войти', 'url' => ['/site/login']];
                } else {
                    $menuItems[] = [
                        'label' => 'Выйти из (' . Yii::$app->user->identity->username . ')',
                        'url' => ['/site/logout'],
                        'linkOptions' => ['data-method' => 'post']
                    ];
                    $menuItems[] = ['label' => 'Добавить новость', 'url' => ['/posts/index']];
                }
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right nav'],
                    'items' => $menuItems,
                ]);
                NavBar::end();
                ?>
            </div>
            <!-- #Nav Ends -->

        </div>
    </div>

</div>
<!-- #Header Starts -->

<!-- #Header Starts -->


<style>

    span {

        font-size: 15pt; /* Размер шрифта в пунктах */
        margin-left: 1em;
    }
</style>


<div class="container">

    <!-- Header Starts -->
    <div class="header">

        <a href="/" ><img src="/images/logo.png"  alt="Realestate"></a>

        <?

        $menuItems = [];
        $guest = Yii::$app->user->isGuest;
        if($guest) {
            $menuItems[] =  ['label' => 'Наша продукция', 'url' => ['/products/list']];
            $menuItems[] =  ['label' => 'Доставка', 'url' => ['/site/delivery']];
            $menuItems[] =  ['label' => 'Контакты', 'url' => ['/site/contact']];
        }
        else{
            $menuItems[] =  ['label' => 'Наша продукция', 'url' => ['/products/list']];
            $menuItems[] =  ['label' => 'Доставка', 'url' => ['/site/delivery']];
            $menuItems[] =  ['label' => 'Контакты', 'url' => ['/site/contact']];
            $menuItems[] =  ['label' => 'Добавить товар', 'url' => ['/products/index']];
            // $menuItems[] =  ['label' => 'Добавить пост', 'url' => ['/posts/index']];


        }

        echo Nav::widget([
            'options' => ['class' => 'pull-right'],
            'items' => $menuItems,
        ]);
        ?>

    </div>
    <!-- #Header Starts -->
</div>
