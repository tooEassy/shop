<?php

include_once (ROOT.'/models/Session.php');
class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        $uri = $this->getURI();
//        echo $uri.'';

        foreach ($this->routes as $uriPattern => $path) {
//            echo "<br> $uriPattern -> $path";
            if (preg_match("~$uriPattern~", $uri)) {

//                echo $path.' ';
                $uri = Session::signBlock($uri);
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                $segments = explode('/', $internalRoute);
//                foreach ($segments as $one){
//                    if($segments[count($segments)-1])echo $one;
//                    else echo $one.', ';
//                };
//                echo '<pre>';
//                print_r($segments);
//                echo '</pre>';

                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);
//                echo $controllerName;
                $actionName =array_shift($segments);

                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                $parameters = $segments;
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }
//                echo '<br>Класс: '.$controllerName;
//                echo '<br>Метод: '.$actionName;
                $controllerObject = new $controllerName;
//                $result = $controllerObject->$actionName();
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                if($result != null) {
                    break;
                }
            }
        }
    }
}