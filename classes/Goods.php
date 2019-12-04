<?php
class No_good extends Exception {}
class Goods {
    private $goods;
    public function __construct($goods) {
        $this->goods = $goods;
    }
    public function get_good($name) {
        if (array_key_exists($name, $this->goods)) return $this->goods[$name];
        else throw new No_good("Product ".$name." doesn't exist.");
    }
}
