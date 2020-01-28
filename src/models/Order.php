<?php


namespace src\models;

use core\Connection;

class Order extends ActiveRecord
{
    public function createOrder()
    {
        $phoneNumder = strip_tags($_POST['phoneNumber']);
        $comment = strip_tags($_POST['comment']);
        $allPrice = $_POST['allPrice'];
            $userId = $_POST['userId'];  
        $this->con->db->query("UPDATE users SET `phone` = '$phoneNumder' WHERE `id` = $userId");
        var_dump("UPDATE users SET `phone` = '$phoneNumder' WHERE `id` = $userId");
        $this->con->db->query("INSERT INTO orders (`all_price`, `comment`, `status`, `user_id`, `created_at`, 
            `updated_at`) VALUES ($allPrice, '$comment', 'waiting', $userId, '2020-01-01 00:00:00', '2020-01-01 00:00:00')");
        var_dump("INSERT INTO orders (`all_price`, `comment`, `user_id`, `created_at`, 
            `updated_at`) VALUES ($allPrice, '$comment', $userId, '2020-01-01 00:00:00', '2020-01-01 00:00:00')");
    }
}