<?php
return array(
    'cart' => 'storage/cart',
    'products/list' => 'storage/getProguctList',
    'show/([0-9]+)' => 'storage/get_good/$1',
    'signin' => 'authorization/showForm',
    'enter' => 'authorization/checkForm',
    'logout' => 'user/logout',
    'register' => 'authorization/create',
    '' => 'storage/get_products_list',
);
