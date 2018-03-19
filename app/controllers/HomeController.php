<?php
/**
 * Created by PhpStorm.
 * User: qqdd
 * Date: 2018/3/19
 * Time: 21:11
 */

namespace app\controllers;

use app\models\ActicleModel;

class HomeController extends BaseController
{
    public function home(){
        echo "<h1>控制器成功!</h1>";
    }

    public function getActivity(){
        $data = ActicleModel::first();
        require dirname(__FILE__).'/../views/activity.php';
    }
}