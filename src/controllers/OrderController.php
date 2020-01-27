<?php

namespace src\controllers;

use core\View;
use src\models\Product;
use src\models\Checkout;

class OrderController
{
    public function checkout()
    {
        View::render('checkout.php', [

        ]);
    }
}