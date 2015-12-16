<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
?>
<body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
         <h1><?= Html::encode($this->title) ?></h1>
      </div><!-- /.login-logo -->

      <?php $form = ActiveForm::begin(); ?>
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="../../index2.html" method="post">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
               <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div><!-- /.col -->
          </div>
       <?php ActiveForm::end(); ?>
        </div>
    <!-- jQuery 2.1.4 -->
        <script>
    //   $(function () {
    //     $('input').iCheck({
    //       checkboxClass: 'icheckbox_square-blue',
    //       radioClass: 'iradio_square-blue',
    //       increaseArea: '20%' // optional
    //     });
    //   });
    // </script>
</body>