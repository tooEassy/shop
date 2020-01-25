<?php

namespace src\controllers;

use PHPUnit\Util\Log\JSON;
use src\models\Category;
use src\models\Product;
use core\View;

class StorageController
{

    public function getProductsGrid()
    {
        $good = new Product();
        $category = new Category();
        $allProducts = $good->getAll();
        $allCategories = $category->getAll();
        View::render('main.php', [
            'allCategories' => $allCategories,
            'allProducts' => $allProducts,
        ]);
    }

    public function getProguctList()
    {
        $good = new Product();
        $all = $good->getAll();
        View::render('listProducts.php', [
            'all' => $all,
        ]);
    }

    public function getProductByCategory()
    {
        $allProducts = new Product();
        $categoryProducts = $allProducts->getByCategory($_POST['checked']);
        echo json_encode($categoryProducts);
    }

    public function getProductByTitle()
    {
        $allProducts = new Product();
        $productByTitle = $allProducts->getByTitle($_POST['search']);
        View::render('main.php', [
            'allProducts' => $productByTitle,
        ]);
    }

    public function cart()
    {
        $allCart = new Product();
        $cart = $allCart->getById($_POST['data']);
        echo json_encode($cart);
    }
}