<?php


namespace src\models;

use core\Connection;
use src\models\ActiveRecord;

class User extends ActiveRecord
{
    public function getTableName()
    {
        return $this->tableName = 'users';
    }

    public function create()
    {
        $firstName = strip_tags(trim($_POST['firstName']));
        $lastName = strip_tags(trim($_POST['lastName']));
        $username = strip_tags(trim($_POST['username']));
        $email = strip_tags(trim($_POST['email']));
        $password = strip_tags(trim($_POST['password']));
        $this->con->db->query("INSERT INTO `users`(`first_name`, `last_name`, `username`, `password`, 
            `e-mail`, `role_id`) VALUES ('$firstName', '$lastName', '$username', '$password', '$email', 2)");
    }
}