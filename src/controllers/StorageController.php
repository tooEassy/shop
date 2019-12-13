<?php
namespace src\controllers;

use src\Session;
use src\models\Storage;
use src\No_good ;
use src\sessionStarted;
use src\sessionGetNotStarted;
class StorageController {
    public function get_products_list()
    {
        try{
            Session::start();
        } catch (sessionStarted $e) {
            $catch = $e->getMessage();
        }

        if(!$catch) {
            try {
                $goods = Storage::get_products_list();
                $userEmail = Session::get('email');
            } catch(sessionGetNotStarted $e) {
                $catch = $e->getMessage();
            }

            if(!$catch){
                if($userEmail) include_once(ROOT.'/views/includes/loggedHeader.php');
                else include_once(ROOT.'/views/includes/header.php');
                include_once(ROOT.'/views/main/main.php');
                include_once(ROOT.'/views/includes/footer.php');
            }
        }
    }

    public function get_good($name) {
        try {
            Session::start();
        } catch (sessionStarted $e) {
            $catch = $e->getMessage();
        }

        if(!$catch){
            try {
                $goods = Storage::get_good($name);
                $userEmail = Session::get('email');
            } catch (No_good $e) {
                $catch = $e->getMessage();
            }

            if(!$catch){
                if($userEmail) include_once (ROOT.'/views/includes/loggedHeader.php');
                else include_once(ROOT.'/views/includes/header.php');
                include_once(ROOT.'/views/main/main.php');
                include_once(ROOT.'/views/includes/footer.php');
            }
        }
    }
}