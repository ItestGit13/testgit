<?php

namespace backend\controllers;


use yii\web\Controller;


/**
 * Site controller
 */

 // Id: hello

class HomeController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
