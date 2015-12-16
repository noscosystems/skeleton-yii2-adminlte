<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\web\HttpException;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

$user = Yii::$app->user->getIdentity();

$profileImage = Yii::$app->request->baseurl . "/images/profile_image_holder.png";

$controllerName = Yii::$app->controller->id;
$actionName = Yii::$app->controller->action->id;


AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl; ?>/favicon.ico" type="image/x-icon" />
    <?= Html::csrfMetaTags() ?>
    <title>Project Title :: <?= $this->title ?></title>
    <?php $this->head() ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body class="hold-transition login-page">
<?php $this->beginBody() ?>

	<!-- Content Wrapper. Contains page content -->
        <section class="content" style="height:100%">
            <?= $content ?>
        </section>

    <footer class="main-footer">
        <strong>Copyright &copy; <?= date("Y"); ?> <?= Html::a("Nosco Systems", 'http://www.noscosystems.co.uk'); ?>
    </footer>

    <script>
    $(document).ready( function() {
        $("#treeview-<?= $controllerName ?>").addClass("active");
        $("#menu-<?= $controllerName ?>-<?= $actionName ?>").addClass("active");
    })
    </script>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
