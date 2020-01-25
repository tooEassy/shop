<?php
namespace mvc;

use core\Router;

define('ROOT', dirname(__DIR__));
set_error_handler('mvc\error_handler');
function error_handler($errno, $errstr, $errfile, $errline) {
    $date = date('Y-m-d H:i:s');
    $f = fopen('error_log.txt', 'a');
    $err = "[$date]:  $errstr in $errfile on line $errline\r\n";
    fwrite($f, $err);
    fclose($f);
}

require_once(ROOT . '/core/autoload.php');
require_once(ROOT . '/core/Router.php');

$routes = new Router();
$routes->run();



