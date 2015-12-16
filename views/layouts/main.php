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
    <title>Project :: <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>
<div class="wrapper">
    <header class="main-header">
        <?= Html::a('<span class="logo-mini"><b>PT</b></span><span class="logo-lg"><b>Project Title</b></span>', ['/'], ['class' => 'logo']); ?>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">X</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have X messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <!-- <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="<?= $profileImage ?>" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                AdminLTE Design Team
                                                <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li> -->
                                </ul>
                            </li>
                            <li class="footer">
                                <?= Html::a("Go to Inbox", ['inbox']); ?>
                            </li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">X</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have X notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <!-- <ul class="menu">
                                    <li>
                                        <a href="#">
                                            Example
                                        </a>
                                    </li>
                                </ul> -->
                            </li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">X</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have X tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <!-- <li>
                                        <a href="#">
                                            <h3>
                                                Make beautiful transitions
                                                <small class="pull-right">80%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">80% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li> -->
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?= $profileImage ?>" class="user-image" alt="User Image">
                            <span class="hidden-xs">Username</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?= $profileImage ?>" class="img-circle" alt="User Image">
                                <p>
                                    Username
                                    <small>User Rank</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                                <!-- <li class="user-body">
                                <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </li> -->
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <?= Html::a("Log Out", ['/site/logout'], ['class' => 'btn btn-default btn-flat']); ?>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?= $profileImage ?>" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Username</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <!-- <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form> -->
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">SECTION HEADER</li>
                <li id="menu-section-direct"><?= Html::a('<i class="fa fa-dashboard"></i> <span>Direct Link</span>', ['section/direct']); ?></li>
                <li class="treeview" id="treeview-treeview">
                    <a href="#">
                        <i class="fa fa-treeview"></i> <span>Treeview</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li id="menu-treeview-link1"><?= Html::a('<i class="fa fa-circle-o"></i> Link 1</a></li>', ['treeview/link1']); ?></li>
                        <li id="menu-treeview-link2"><?= Html::a('<i class="fa fa-circle-o"></i> Link 2</a></li>', ['treeview/link2']); ?></li>
                        <li id="menu-treeview-link3"><?= Html::a('<i class="fa fa-circle-o"></i> Link 3</a></li>', ['treeview/link3']); ?></li>
                    </ul>
                </li>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content" style="height:100%">
            <?= $content ?>
        </section>
    </div>

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
