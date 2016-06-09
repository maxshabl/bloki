<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<div class="container">
    <div class="spacer agents">



                <!-- agents -->
            <?php foreach ($products as $product): ?>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-3 col-sm-5"><a href="#"><img src=<?="/uploads/$product->id.jpg"?>  width="250" height="250"  alt="нет фото"></a></div>
                    <div class="col-lg-5 col-sm-4"><h4 ><?=$product->title?></h4><p class="info"> <?= $product->dimention ?> </p><p><?= $product->descr ?></p></div>

                    <div class="col-lg-2 col-sm-3"><a href="/site/contact"><b>Сделать заказ</b></a><br>
                         <b>Цена:</b>  <?= $product->price ?> рублей </div>
                    <br><br>

                </div>
                <hr class="">
            <?php endforeach; ?>
            <?= LinkPager::widget(['pagination' => $pagination]) ?>
                <!-- agents -->



    </div>
</div>