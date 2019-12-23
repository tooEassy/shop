<?php
return array(
    '' => 'storage/get_products_list',
    'show/([0-9]+)' => 'storage/get_good/$1',
    'signin' => 'authorization/showForm',
    'enter' => 'authorization/checkForm',
    'logout' => 'user/logout',
);
