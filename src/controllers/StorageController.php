<?php

namespace src\controllers;

use PHPUnit\Util\Log\JSON;
use src\models\Product;
use src\Session;
use src\models\Storage;
use src\No_good;
use src\sessionStarted;
use src\sessionGetNotStarted;

class StorageController
{
    public function get_products_list()
    {
        try {
            Session::start();
        } catch (sessionStarted $e) {
            $catch = $e->getMessage();
        }

        if (!$catch) {
            try {
                $good = new Product();
                $all = $good->getAll();
                $userEmail = Session::get('email');
            } catch (sessionGetNotStarted $e) {
                $catch = $e->getMessage();
            }

            if (!$catch) {
                if ($userEmail) include_once(ROOT . '/views/includes/loggedHeader.php');
                else include_once(ROOT . '/views/includes/header.php');
                include_once(ROOT . '/views/main/main.php');
                include_once(ROOT . '/views/includes/footer.php');
            }
        }
    }

    public function getProguctList()
    {
        try {
            Session::start();
        } catch (sessionStarted $e) {
            $catch = $e->getMessage();
        }

        if (!$catch) {
            try {
                $good = new Product();
                $all = $good->getAll();
                $userEmail = Session::get('email');
            } catch (sessionGetNotStarted $e) {
                $catch = $e->getMessage();
            }

            if (!$catch) {
                if ($userEmail) include_once(ROOT . '/views/includes/loggedHeader.php');
                else include_once(ROOT . '/views/includes/header.php');
                include_once(ROOT . '/views/main/listProducts.php');
                include_once(ROOT . '/views/includes/footer.php');
            }
        }
    }
    public function get_good($name)
    {
        try {
            Session::start();
        } catch (sessionStarted $e) {
            $catch = $e->getMessage();
        }

        if (!$catch) {
            try {
                $goods = new Product();
                $goods->getById($name);
                $productArray[] = $goods;
                $userEmail = Session::get('email');
            } catch (No_good $e) {
                $catch = $e->getMessage();
            }

            if (!$catch) {
                if ($userEmail) include_once(ROOT . '/views/includes/loggedHeader.php');
                else include_once(ROOT . '/views/includes/header.php');
                include_once(ROOT . '/views/main/main.php');
                include_once(ROOT . '/views/includes/footer.php');
            }
        }
    }
    public function cart()
    {
        $allCart = new Product();
        $cart = $allCart->getByName($_POST['data']);
        echo json_encode($cart);
    }
}