<?php
namespace src\controllers;
use src\Session;
use src\sessionStarted;
use src\sessionDeleteNotStarted;
class UserController {
    public function logout() {
        try{
            Session::start();
        } catch (sessionStarted $e){
            $catch = $e->getMessage();
        }

        if(!$catch) {
            try {
                Session::delete('email');
            } catch (sessionDeleteNotStarted $e) {
                $catch = $e->getMessage();
            }

            if(!$catch) header('Location: /');
        }
    }
}