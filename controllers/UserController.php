<?php
include_once(ROOT.'/models/Session.php');
include_once(ROOT.'/exceptions.php');

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