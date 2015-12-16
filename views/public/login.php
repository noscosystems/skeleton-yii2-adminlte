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
            <h1><b>Project</b> Title</h1>
        </div><!-- /.login-logo -->

        <?php $form = ActiveForm::begin(); ?>
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <div class="form-group has-feedback">
                    <?= $form->field($model, 'username', ['inputOptions' => ['class' => 'form-control', 'placeholder' => 'Username']])->label(false) ?>
                    <span class="fa fa-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <?= $form->field($model, 'password', ['inputOptions' => ['class' => 'form-control', 'placeholder' => 'Username']])->passwordInput()->label(false) ?>
                    <span class="fa fa-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-flat form-control', 'name' => 'login-button']) ?>
                    </div><!-- /.col -->
                </div>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
</body>