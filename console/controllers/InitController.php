<?php
namespace console\controllers;

use common\models\User;

class InitController extends \yii\console\Controller{
    public function actionAdd(){
        $model = new User();
        $model->username="admin";
        $model->setPassword("admin");
        $model->email="yj05@ymsino.com";
        $model->generateAuthKey();
        $model->status = 10;
        if($model->save()){

        }
    }
}

