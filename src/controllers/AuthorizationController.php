<?php

namespace src\controllers;

use src\models\Authorization;
use src\models\User;
use src\Session;
use src\wrongEmail;
use src\wrongPassword;
use src\wrongInfo;

class AuthorizationController
{

    public function showForm()
    {
        include_once(ROOT . '/views/includes/header.php');
        include_once(ROOT . '/views/main/login.php');
        include_once(ROOT . '/views/includes/footer.php');
    }

    public function create()
    {
        $creating = new User();
        $creating->create();
        include_once(ROOT . '/views/includes/header.php');
        include_once(ROOT . '/views/main/login.php');
        include_once(ROOT . '/views/includes/footer.php');
    }
    public function checkForm()
    {
        $userEmail = $_POST['email'];
        $userPassword = $_POST['password'];

        try {
            Authorization::checkForm($userEmail, $userPassword);
            echo ("OK");
        } catch (wrongEmail $e) {
            echo ($e->getMessage());
        } catch (wrongPassword $e) {
            echo ($e->getMessage());
        } catch (wrongInfo $e) {
            echo ($e->getMessage());
        }
    }
}