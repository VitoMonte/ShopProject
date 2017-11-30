<?php 

//FRONT CONTROLLER

// 1. General settings
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. include files
define('ROOT', dirname(__FILE__));
require_once(ROOT. '/components/Router.php');

// 3. database connect

// 4. router call

/*$dt = date('d-m-Y', time());


$pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
$replacement = 'Год $3, месяц $2, день $1';
echo preg_replace($pattern, $replacement, $dt);*/
$a = new Router();

$a->run();