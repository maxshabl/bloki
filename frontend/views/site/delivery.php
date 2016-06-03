<style>
    h1, h2, h3, h4, h5, h6, div, p, span {
        text-indent: 0em;


    }
</style>
<?php $this->registerMetaTag(['name' => 'keywords', 'content' => $post->keywords]);?>
<div class="container">
    <div class="spacer">
        <div class="row">
            <div class="col-lg-9  col-lg-offset-2">
                <?=$post->title?>
                <?=$post->text?>



            </div>

        </div>
    </div>
</div>




