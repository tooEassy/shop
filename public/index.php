<?php
namespace mvc;

define('ROOT', dirname(__DIR__));
set_error_handler('mvc\error_handler');
function error_handler($errno, $errstr, $errfile, $errline) {
    $date = date('Y-m-d H:i:s');
    $f = fopen('error_log.txt', 'a');
    $err = "[$date]:  $errstr in $errfile on line $errline\r\n";
    fwrite($f, $err);
    fclose($f);
}

require_once (ROOT.'/src/components/autoload.php');
require_once (ROOT.'/src/components/Router.php');
use src\components\Router;

//require_once ('vendor/autoload.php');
//require_once ('vendor/too-easy/fir/src/Test.php');
//use Test\First_package;
//class My_package extends First_package{
//}
//$new = new My_package('logger_name');
//$new->hey('my text.');

$routes = new Router();
$routes->run();



