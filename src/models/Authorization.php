<?php

namespace src\models;

use src\wrongEmail;
use src\wrongPassword;
use src\wrongInfo;
use config\Connection;

class Authorization
{

    public static function checkForm($userEmail, $userPassword)
    {
        $con = new Connection();
        $email = self::getEmail($userPassword);
        $password = self::getPassword($userEmail);
        $emailExist = $con->db->query("SELECT `e-mail` FROM `users` WHERE `e-mail` = '$userEmail'")->fetchColumn();
        $passwordExist = $con->db->query("SELECT `password` FROM `users` WHERE `password` = '$userPassword'")->fetchColumn();
        if ($userEmail == $emailExist && $userPassword == $passwordExist) return true;
        elseif ($userEmail != $emailExist && $userPassword == $passwordExist) throw new wrongEmail('Email ' . $userEmail . ' does not exist.');
        elseif ($userPassword != $passwordExist && $userEmail == $emailExist) throw new wrongPassword('Wrong password.');
        elseif ($userPassword != $passwordExist && $userEmail != $emailExist) throw new wrongInfo('Wrong login information');
    }

    public static function getEmail($password)
    {
        $con = new Connection();
        $userEmail = $con->db->query("SELECT `e-mail` FROM `users` WHERE `password` = '$password'")->fetchColumn();
        return $userEmail;
    }

    public static function getPassword($email)
    {
        $con = new Connection();
        $password = $con->db->query("SELECT `password` FROM `users` WHERE `e-mail` = '$email'")->fetchColumn();
        return $password;
    }
}