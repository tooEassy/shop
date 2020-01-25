<?php

namespace src\controllers;

use src\models\Authorization;
use src\models\User;
use core\wrongEmail;
use core\wrongPassword;
use core\wrongInfo;
use core\View;

class AuthorizationController
{

    public function showForm()
    {
        View::render('login.php');
    }

    public function create()
    {
        $creating = new User();
        $creating->create();
        View::render('login.php', [
            'creating' => $creating,
        ]);
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