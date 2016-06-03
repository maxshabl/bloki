<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<div class="container">
    <div class="spacer agents">
        <style>

            p {

                font-weight:bold;

                font-size: 11pt; /* Размер шрифта в пунктах */
                font-family: Tahoma;
            }
        </style>
        <div class="row">
            <div class="col-lg-8  col-lg-offset-2 col-sm-12">
                <!-- agents -->
            <?php foreach ($products as $product): ?>
                <div class="row">
                    <div class="col-lg-4 col-sm-4 "><a href="#"><img src=<?="/uploads/$product->id.jpg"?>  width="240" height="240"  alt="нет фото"></a></div>
                    <div class="col-lg-5 col-sm-5 "><h4 ><?=$product->title?></h4><p class="info"> <?= $product->dimention ?> </p><p><?= $product->descr ?></p></div>

                    <div class="col-lg-3 col-sm-3 "><a href="/site/contact"><b>Сделать заказ</b></a><br>
                         <b>Цена:</b>  <?= $product->price ?> рублей </div>
                </div>
            <?php endforeach; ?>
            <?= LinkPager::widget(['pagination' => $pagination]) ?>
                <!-- agents -->


            </div>
        </div>
    </div>
</div>