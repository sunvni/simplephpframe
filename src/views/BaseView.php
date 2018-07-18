<?php
namespace src\views;
use src\libs\Common;

class BaseView
{

    public function __construct()
    {
        # code...
    }

    public function display($view,$data)
    {
        if(file_exists("./publics/$view.php"))
            include("./publics/$view.php");
        else {
            throw new Exception("View not found", 1);
        }
    }
    
}
