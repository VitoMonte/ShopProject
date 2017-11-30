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
