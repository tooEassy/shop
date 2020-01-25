<?php


namespace core;


class View
{
    protected static $path = '/src/views/main/';

    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        $file = dirname(__DIR__) . static::$path . $view;
        if (file_exists($file)) {
            require_once $file;
        } else {
            var_dump("File " . $view .  " not found.");
        }
    }
}