<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\form\LoginForm;

class PublicController extends Controller
{
    public function init() {
        $this->layout = "public";
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['/site/index']);
        }

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}