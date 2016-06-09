<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
?>
<!-- end header -->

<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--<h4 class="heading">Recent Works</h4>-->

                <div id="filters-container" class="cbp-l-filters-button">
                   <!-- <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All<div class="cbp-filter-counter"></div></div>
                    <div data-filter=".identity" class="cbp-filter-item">Identity<div class="cbp-filter-counter"></div></div>
                    <div data-filter=".web-design" class="cbp-filter-item">Web Design<div class="cbp-filter-counter"></div></div>
                    <div data-filter=".graphic" class="cbp-filter-item">Graphic<div class="cbp-filter-counter"></div></div>
                    <div data-filter=".logo" class="cbp-filter-item">Logo<div class="cbp-filter-counter"></div></div>-->
                </div>


                <div id="grid-container" class="cbp-l-grid-projects">
                    <ul>
                        <?php foreach ($products as $product): ?>
                        <li class="cbp-item graphic">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src=<?="/uploads/$product->id.jpg"?> alt="" />
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <?= Html::a('Читать далее', ['item', 'id' => $product->id], ['class' => 'cbp-l-caption-buttonRight']) ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-l-grid-projects-title"><?=$product->title?></div>
                            <div class="cbp-l-grid-projects-desc"><?= $product->dimention ?></div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!--<div class="cbp-l-loadMore-button">
                     <?= Html::a('Читать далее', ['blog', 'id' => $post->id], ['class' => 'more']) ?>
                </div>-->>

            </div>
        </div>
    </div>
</section>


<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

