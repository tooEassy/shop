<?php

namespace src\controllers;

use core\View;
use src\models\Product;
use src\models\Order;

class OrderController
{
    public function checkout()
    {
        View::render('checkout.php', []);
    }

    public function createOrder()
    {
        $order = new Order();
        $order->createOrder();
        View::render('endCheckout.php', []);
    }
}
