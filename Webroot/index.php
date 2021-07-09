<?php
echo 'done';
require('../vendor/autoload.php');

define('WEBROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_NAME"]));
//webroot = /mvc/
define('ROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]));
//root = C:/xampp/htdocs/mvc/

use MVC\Dispatcher;
echo 'index<br>';
$dispatch = new Dispatcher();
$dispatch->dispatch();