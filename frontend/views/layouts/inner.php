<?
use yii\helpers\Html;
use yii\bootstrap\Nav;

\frontend\assets\SailorAsset::register($this);
?>
<?
  $this->beginPage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$this->title ?> </title>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link id="t-colors" href="/source/skins/default.css" rel="stylesheet" />


    <!-- boxed bg -->
    <link id="bodybg" href="/source/bg1.css" rel="stylesheet" type="text/css" />
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>

<body>

<?
 $this->beginBody();
?>

<!-- Header Starts -->
  <? echo $this->render("//common/head") ?>
<!-- #Header Starts -->


<section id="content">
    <div class="container">
        <div class="row">

                <div class="col-lg-8">

                    <p><?=$content ?></p>
                </div>

        </div>
    </div>
</section>



<? echo $this->render("//common/footer") ?>

<?
$this->endBody();
?>


</body>
</html>

<?
$this->endPage();
?>

