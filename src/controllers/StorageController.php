<?php

namespace src\controllers;

use PHPUnit\Util\Log\JSON;
use src\models\Category;
use src\models\Product;

class StorageController
{

    public function getProductsGrid()
    {
        $good = new Product();
        $category = new Category();
        $allProducts = $good->getAll();
        $allCategories = $category->getAll();
        include_once(ROOT . '/views/includes/header.php');
        include_once(ROOT . '/views/main/main.php');
        include_once(ROOT . '/views/includes/footer.php');
    }

    public function getProguctList()
    {
        $good = new Product();
        $all = $good->getAll();
        include_once(ROOT . '/views/includes/header.php');
        include_once(ROOT . '/views/main/listProducts.php');
        include_once(ROOT . '/views/includes/footer.php');
    }

    public function getProductByCategory()
    {
        $allProducts = new Product();
        $categoryProducts = $allProducts->getByCategory($_POST['checked']);
        echo json_encode($categoryProducts);
    }

    public function cart()
    {
        $allCart = new Product();
        $cart = $allCart->getById($_POST['data']);
        echo json_encode($cart);
    }
}