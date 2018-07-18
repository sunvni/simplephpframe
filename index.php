<?php
require_once('./src/autoLoad.php');
use src\controllers\BaseController;

$controller = new BaseController;
$controller->process();