<?php

namespace backend\controllers;

use denchotsanov\rbac\filter\AccessControl;
use Yii;
use yii\filters\VerbFilter;

class TranslateController extends MainController
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    '*'=> ['GET','POST'],
                ],
            ],
        ];
    }
    public function beforeAction($action)
    {
        $this->view->title = Yii::t('admin','Translate');
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }

    public function actionIndex(){
        return $this->render('index');
    }

}