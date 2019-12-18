<?php
namespace src\models;
use src\models\Storage;
use src\No_good;

class Product
{
    public $id;
    public $name;
    public $photo;
    public $price;
    public function getById($id)
    {
        $storage = new Storage();
        $product = $storage -> get_good($id);
        $prod = $product;
        $this->id = $prod['id'];
        $this->name = $prod['name'];
        $this->photo = $prod['photo'];
        $this->price = $prod['price'];
    }
}