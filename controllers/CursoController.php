<?php

namespace app\controllers;

class CursoController extends \yii\web\Controller
{
    public function actionIndex(){
        $nome = "Bruno Silveira";
        return $this->render('index', ['nome' => $nome]);
    }

    public function actionCreate()
    {
        return $this->render('create');
    }

    public function actionEdit()
    {
        return $this->render('edit');
    }

    public function actionDelete()
    {
        return $this->render('delete');
    }

}
