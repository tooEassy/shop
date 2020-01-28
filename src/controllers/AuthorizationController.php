<?php

namespace src\controllers;

use src\models\Authorization;
use src\models\User;
use core\wrongEmail;
use core\wrongPassword;
use core\wrongInfo;
use src\models\Category;
use src\models\Product;
use core\View;

class AuthorizationController
{

    public function create()
    {
        $creating = new User();
        $good = new Product();
        $category = new Category();
        $creating->create();
        $allProducts = $good->getAll();
        $allCategories = $category->getAll();
        View::render('main.php', [
            'allCategories' => $allCategories,
            'allProducts' => $allProducts,
        ]);
    }

    public function checkForm()
    {
        $userEmail = $_POST['email'];
        $userPassword = $_POST['password'];

        try {
            echo Authorization::checkForm($userEmail, $userPassword);
        } catch (wrongEmail $e) {
            echo json_encode([
                'message' => $e -> getMessage(),
            ]);
        } catch (wrongPassword $e) {
            echo json_encode([
                'message' => $e -> getMessage(),
            ]);
        } catch (wrongInfo $e) {
            echo json_encode([
                'message' => $e -> getMessage(),
            ]);
        }
    }


}