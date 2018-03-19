<?php

// NoahBuscher/Macaw
use NoahBuscher\Macaw\Macaw;

Macaw::get('fuck',function(){
    echo '成功';
});

Macaw::get('/home','app\\controllers\\HomeController@home');
Macaw::get('/home/activity','app\\controllers\\HomeController@getActivity');

Macaw::get('(:all)',function ($fu){
    echo '未匹配到路由<br>'.$fu;
});

Macaw::dispatch();

/*
// laravel框架的illuminate/routing路由怎么剥离laravel使用？
use Illuminate\Routing\Router;

$route = new Router();
$route->get('home',function(){
    echo 'illuminate/routing';
});*/