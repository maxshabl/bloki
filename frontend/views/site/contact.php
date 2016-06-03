<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Наши контакты';
//$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-contact">
    <h1></h1>

    <p class="col-lg-5"  >
        <b>
            Наш адрес: Владимирская область, поселок Садовый (17-й МЮД), ул. Графского, д.1 <br><br>

            Заказ можно сделать:<br><br>

                1. По телефонам:<br>

                60-30-36,<br>

                8(904)260-04-04,<br>

                8(920)906-72-06,<br>

                8(903)830-72-06<br><br>
                2. Заполнив форму на сайте<br><br>
                3. или со склада, расположенного на повороте на поселок Садовый

            (напротив ресторана Терем)<br>
        </b>
    </p>

    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?= $form->field($model, 'name')->label("Как к Вам обращаться") ?>
                <?= $form->field($model, 'email')->label("Ваш email") ?>
                <?= $form->field($model, 'number')->label("Ваш номер телефона") ?>
                <?= $form->field($model, 'subject')->label("Тема") ?>
                <?= $form->field($model, 'body')->textArea(['rows' => 6])->label("Сообщение") ?>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ])->label("Введите текст с картинки. Размер букв не важен. Если картинка нечитаема, то кликните по ней левой кнопкой мыши.") ?>
                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>