<?php
namespace src\models;
use src\No_good;
class Storage{
    public static function get_products_list()
    {
        return include(ROOT . '/data/storage.php');
    }

    public static function get_good($name)
    {
        $goods = include(ROOT . '/data/storage.php');
        foreach ($goods as $key => $good) {
            if ($good['id'] == $name) {
                $good['name'] = $key;
                return $good;
            }
        }

        throw new No_good("Product " . $name . " doesn't exist.");
    }
}