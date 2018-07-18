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
        $this->view->display('home',$data);
    }
}
