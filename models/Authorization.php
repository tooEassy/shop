<?php

class Authorization{

    public static function checkForm($userEmail, $userPassword){
        $email = self::getEmail();
        $password = self::getPassword();
        if($userEmail == $email && $userPassword == $password) return true;
        elseif ($userEmail != $email && $userPassword == $password) throw new wrongEmail('Email ' . $userEmail . ' does not exist.');
        elseif ($userPassword != $password && $userEmail == $email) throw new wrongPassword('Wrong password.');
        elseif ($userPassword != $password && $userEmail != $email) throw new wrongInfo('Wrong login information');
    }

    public static function getEmail(){
        return 'someEmail';
    }

    public static function getPassword(){
        return 'somePassword';
    }
}