<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
?>

<div class="container">
    <div class="spacer blog">
        <div class="row">
            <div class="col-lg-8 col-sm-12 ">

                <?php foreach ($posts as $post): ?>
                <div class="row">

                    <div class="col-lg-8 col-sm-8 ">
                        <h3><?=$post->title?></h3>

                        <div class="info"><?=(date("d  F  Y "))?></div>
                        <p><?=$post->abstract?></p>

                        <?= Html::a('Читать далее', ['blog', 'id' => $post->id], ['class' => 'more']) ?>

                    </div>
                </div>

                <?php endforeach; ?>
                <?= LinkPager::widget(['pagination' => $pagination]) ?>
                <!-- agents -->


            </div>
        </div>
    </div>
</div>
