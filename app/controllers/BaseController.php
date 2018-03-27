<?php
/**
 * Created by PhpStorm.
 * User: qqdd
 * Date: 2018/3/19
 * Time: 21:10
 */

namespace app\controllers;

use Nette\Mail\SmtpMailer;
use services\Mail;
use services\View;

class BaseController
{
    protected $view;
    protected $mail;

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
        $mail = $this->mail;
        if ( $mail instanceof Mail){
            $mailer = new SmtpMailer($mail->config);
            return $mailer->send($mail);
        }
    }
}