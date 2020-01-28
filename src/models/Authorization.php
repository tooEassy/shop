<?php

namespace src\models;

use core\wrongEmail;
use core\wrongPassword;
use core\wrongInfo;
use core\Connection;

class Authorization
{

    public static function checkForm($userEmail, $userPassword)
    {
        $con = new Connection();
        $email = self::getEmail($userPassword);
        $password = self::getPassword($userEmail);
        $userData = $con->db->query("SELECT `id`, `e-mail` FROM `users` WHERE `e-mail` = '$userEmail'")->fetchAll()[0];
        $passwordExist = $con->db->query("SELECT `password` FROM `users` WHERE `password` = '$userPassword'")->fetchColumn();
        if ($userEmail == $userData['e-mail'] && $userPassword == $passwordExist) return json_encode([
            'id' => $userData['id'],
            'message' => 'OK'
        ]);
        elseif ($userEmail != $userData['e-mail'] && $userPassword == $passwordExist) throw new wrongEmail(
            'Email ' . $userEmail . ' does not exist.');
        elseif ($userPassword != $passwordExist && $userEmail == $userData['e-mail']) throw new wrongPassword
            ('Wrong password.');
        elseif ($userPassword != $passwordExist && $userEmail != $userData['e-mail']) throw new wrongInfo
            ('Wrong login information');
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