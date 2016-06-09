<?
use yii\bootstrap\Nav;
use yii\helpers\Html;
?>

<header>


    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="/source/img/logo.png" alt="" width="199" height="52" /></a>
            </div>

            <div class="navbar-collapse collapse ">
                <?
                $menuItems = [
                    ['label' => 'Главная', 'url' => ['/site/index']],
                    ['label' => 'О нас', 'url' => ['/site/about']],

                    ['label' => 'Наша продукция', 'url' => ['/products/list']],
                    ['label' => 'Доставка', 'url' => ['/site/delivery']],
                    ['label' => 'Контакты', 'url' => ['/site/contact']],
                    //['label' => 'Блог', 'url' => ['/posts/lenta']]
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
                    $menuItems[] =  ['label' => 'Добавить товар', 'url' => ['/products/index']];
                }
                echo Nav::widget([
                    'options' => ['class' => 'nav navbar-nav'],
                    'items' => $menuItems,
                ]);


                ?>
            </div>
        </div>
    </div>
</header>
