<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use app\models\Categoria;

class CategoriaController extends \yii\web\Controller
{
    public function actionIndex(){
        // Criando Query
        $query = Categoria::find();
        $pagination = new Pagination([
            'defaultPageSize' => 20,
            'totalCount'      => $query->count(),
        ]);

        $categories = $query->orderBy('nome')
                            ->offset($pagination->offset)
                            ->limit($pagination->limit)
                            ->all();

    return $this->render('index' ,[
                'categories' => $categories,
                'pagination' => $pagination
    ]);
    }

    public function actionCreate()
    {
        return $this->render('create');

    }

}
