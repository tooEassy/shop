<?php

define('ROOT', dirname(__FILE__));
require_once (ROOT.'/src/components/Router.php');
use Router\Router;

set_error_handler('error_handler');
function error_handler($errno, $errstr, $errfile, $errline) {
    $date = date('Y-m-d H:i:s');
    $f = fopen('error_log.txt', 'a');
    $err = "[$date]:  $errstr in $errfile on line $errline\r\n";
    fwrite($f, $err);
    fclose($f);
}


$routes = new Router();
$routes->run();
