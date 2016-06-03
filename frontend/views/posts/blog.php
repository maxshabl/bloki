<style>
    h1, h2, h3, h4, h5, h6, div, p, span {
        text-indent: 0em;


    }
</style>
<?php $this->registerMetaTag(['name' => 'keywords', 'content' => $post->keywords]);

?>

<?=$post->title?>
<div class="info">Опубликовано <?=$post->date?></div> <br>
<?=$post->text?>








