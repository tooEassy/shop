<?php
namespace src\controllers;
use src\models\Authorization;
use src\Session;
use src\wrongEmail;
use src\wrongPassword;
use src\wrongInfo;
class AuthorizationController{

    public function __construct()
    {

    }

    public function showForm()
    {
        include_once(ROOT.'/views/includes/header.php');
        include_once(ROOT.'/views/main/login.php');
        include_once(ROOT.'/views/includes/footer.php');
    }

    public function checkForm()
    {
        $userEmail = $_POST['email'];
        $userPassword = $_POST['password'];
        try {
            Session::start();
            if ($_SESSION['email']) {
                include_once(ROOT.'/views/includes/loggedHeader.php');
                include_once(ROOT.'/views/main/successfulLogin.php');
            }
            if(Authorization::checkForm($userEmail, $userPassword)) {
                    Session::set('email', $userEmail);
                    include_once(ROOT.'/views/includes/loggedHeader.php');
                    $success = include_once(ROOT.'/views/main/successfulLogin.php');
            }

        } catch (wrongEmail $e){
            $wrongEmail = $e->getMessage();
        } catch (wrongPassword $e){
            $wrongPassword = $e->getMessage();
        } catch (wrongInfo $e){
            $wrongInfo = $e->getMessage();
        }
        if(!$success) {
            include_once(ROOT.'/views/includes/header.php');
            include_once (ROOT.'/views/main/login.php');
        }
        include_once(ROOT.'/views/includes/footer.php');

    }
}