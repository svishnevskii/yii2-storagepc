<?php

namespace svishnevsii\controllers;

use Yii;
use yii\web\Controller;

class TestController extends Controller
{
    public $layout = 'main';
    public function actionIndex()
    {
        // регистрируем ресурсы:
        // \svishnevsii\controllers\TestsAssetsBundle::register($this->view);
        echo 123;
        return 123;
        return $this->render('index',[
            'datas' => $datas
        ]);
    }
}