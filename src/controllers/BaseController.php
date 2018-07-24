<?php
namespace src\controllers;
use src\views\BaseView;

class BaseController
{
    public $view = null;

    public function __construct()
    {
        $this->view = new BaseView;
    }

    public function process()
    {        
        $data = [
            'name' => 'Hieu',
            'menu' => 'menu'
        ];
        $this->render('home',$data);
    }
    public function render($view,$data)
    {
        $this->view->display($view,$data);
    }
}
