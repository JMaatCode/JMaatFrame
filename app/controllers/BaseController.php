<?php
/**
 * Created by PhpStorm.
 * User: qqdd
 * Date: 2018/3/19
 * Time: 21:10
 */

namespace app\controllers;

use services\View;

class BaseController
{
    protected $view;

    public function __construct()
    {

    }

    public function __destruct()
    {
        $view = $this->view;
        if ( $view instanceof View){
            extract($view->data);
            require $view->view;
        }
    }
}