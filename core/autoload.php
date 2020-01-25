<?php

spl_autoload_register(function ($class) {
    $path = ROOT . '/' . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($path)) require $path;

    else {
        $path = ROOT . '/core/exceptions.php';
        require $path;
    }
});
