<?php
namespace backend\controllers;


use Yii;
use yii\web\Controller;

class MainController extends Controller
{

    public function beforeAction($action)
    {
        $this->view->title = Yii::$app->name;
        return parent::beforeAction($action);
    }

}