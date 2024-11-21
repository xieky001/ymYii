<?php

namespace backend\controllers;

use common\models\LoginForm;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;

/**
 * Site controller
 */
class TestController extends Controller
{
    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionTest()
    {
        YII::info("访问测试！info");
        YII::warning("访问测试！warning");
        YII::error("访问测试！error");
        return "GOOD";
    }
}
