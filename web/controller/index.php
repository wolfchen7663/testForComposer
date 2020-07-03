<?php

namespace web\controller;

use core\View;
use Gregwar\Captcha\CaptchaBuilder;

class Index
{
    protected $view;
    public function __construct()
    {
        $this->view = new View();
    }
    public function show()
    {
        return $this->view->make("index")->with('version', '1.0');
    }
    public function login()
    {
        // output($_SESSION);
        return $this->view->make("login");
    }
    public function code()
    {
        $builder = new CaptchaBuilder;
        $builder->build();
        header('Content-type: image/jpeg');
        $builder->output();
        $_SESSION['phrase'] = $builder->getPhrase();
    }
}
