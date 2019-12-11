<?php

include_once('exceptions.php');

class Storage{
    public static function get_products_list(){
        return include_once(ROOT . '/storage.php');
    }

    public static function get_good($name) {
        $goods = include_once(ROOT . '/storage.php');
        foreach ($goods as $key => $good) {
            if ($good['id'] == $name) {
                return array($key => $good);
            }
        }

        throw new No_good("Product " . $name . " doesn't exist.");
    }
}