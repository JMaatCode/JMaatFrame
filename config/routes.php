<?php

// NoahBuscher/Macaw
use NoahBuscher\Macaw\Macaw;

Macaw::get('fuck',function(){
    echo '成功';
});

Macaw::get('','app\\controllers\\HomeController@home');
Macaw::get('/home/activity','app\\controllers\\HomeController@getActivity');
Macaw::get('/home/view','app\\controllers\\HomeController@showView');
Macaw::get('/home/sms','app\\controllers\\HomeController@sms');
Macaw::get('/home/redis','app\\controllers\\HomeController@redis');

Macaw::get('(:all)',function ($fu){
//    echo '未匹配到路由<br>'.$fu;
    throw new Exception("路由无匹配项 404 Not Found");
});

Macaw::dispatch();

/*
// laravel框架的illuminate/routing路由怎么剥离laravel使用？
use Illuminate\Routing\Router;

$route = new Router();
$route->get('home',function(){
    echo 'illuminate/routing';
});*/