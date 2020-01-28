<?php

namespace src\controllers;

use PHPUnit\Util\Log\JSON;
use src\models\Category;
use src\models\Product;
use core\View;
use src\components\Pagination;

class StorageController
{

    public function getProductsGrid()
    {
        $product = new Product();
        $category = new Category();
        $productPerPage = 3;
        $allCategories = $category->getAll();
        $pagination = new Pagination();
        if(array_key_exists('page', $_POST)) $pageNum = $_POST['page'];
        else $pageNum = 1;
        $offset = ($pageNum - 1) * $productPerPage;
        $allProducts = $product->getByPage($offset, $productPerPage);
        $pages = $pagination->pages($pageNum, $productPerPage);
        View::render('main.php', [
            'allCategories' => $allCategories,
            'allProducts' => $allProducts,
            'pages' => $pages,
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
        $category = new Category();
        $allCategories = $category->getAll();
        $productByTitle = $allProducts->getByTitle($_POST['search']);
        View::render('main.php', [
            'allCategories' => $allCategories,
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