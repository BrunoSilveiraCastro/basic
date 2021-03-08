<?php

namespace app\controllers;

class UsuarioController extends \yii\web\Controller
{
    public function actionCadastro()
    {
        return $this->render('cadastro');
    }

    public function actionLogin()
    {
        return $this->render('login');
    }

}
