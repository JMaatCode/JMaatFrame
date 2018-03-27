<?php
/**
 * Created by PhpStorm.
 * User: qqdd
 * Date: 2018/3/19
 * Time: 21:11
 */

namespace app\controllers;

use app\models\ActicleModel;
use services\Mail;
use services\Redis;
use services\View;

class HomeController extends BaseController
{
    public function home(){
        echo "<h1>控制器成功!</h1>";
    }

    public function getActivity(){
        $data = ActicleModel::first();
        require dirname(__FILE__).'/../views/activity.php';
    }

    public function showView()
    {
        $this->view = View::make('view')->with('acticle',ActicleModel::first())
            ->withTitle('JMaatFrame :-D');
    }

    public function sms()
    {
        $this->mail = Mail::to(['1350840813@qq.com'])
            ->from('JMaat <it_hjm@sina.com>')
            ->title('Fuck Me!')
            ->content('<h1>Hello~~</h1>');
    }

    public function redis()
    {
        Redis::set('key321','value321',10,'ms');
        echo Redis::get('key321');
    }
}