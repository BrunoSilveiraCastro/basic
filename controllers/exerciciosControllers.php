<?php
/**
 * Created by PhpStorm.
 * User: Bruno Silveira
 * Date: 01/03/2021
 * Time: 20:08
 */

namespace app\controllers;


use app\models\Pessoas;
use yii\web\Controller;

class exerciciosControllers extends Controller
{

    public function actionPessoas()
    {
        $pessoas = Pessoas::find()->orderBy('nome') ->all();

        echo '<pre>'; print_r($pessoas);
    }
}