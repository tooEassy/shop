<?php

namespace src\components;

use core\Connection;
use src\models\Product;

class Pagination
{
    public function pages($pageNum, $productPerPage)
    {
        $con = new Connection();
        $product = new Product();
        $pagesQuant = ceil($product->getProductQuant()/$productPerPage);
        if($pageNum > 1) {
            $pages = "<label for=\"pre-page\" class=\"page-numbers\"><i class=\"icon fa fa-angle-left\" aria-hidden=
                     \"true\"></i></label>
                    <input id=\"pre-page\" type=\"submit\" class=\"hidden\" value=\"" . ($pageNum - 1) . "\" 
                        name=\"page\">";
        }
        for($i = 1; $i <= $pagesQuant; $i++) {
            if ($i == $pageNum) $pages .= "<input type=\"submit\" class=\"page-numbers current\" value=\"$i\" 
                                                name=\"page\">";
            else $pages .= "<input type=\"submit\" class=\"page-numbers\" value=\"$i\" name=\"page\">";
        }
        if ($pageNum < $pagesQuant) {
            $pages .= "<label for=\"after-page\" class=\"page-numbers\"><i class=\"icon fa fa-angle-right\" aria-hidden=
                        \"true\"></i></label>
                        <input id=\"after-page\" type=\"submit\" class=\"hidden\" value=\"" . ($pageNum + 1) . "\" 
                        name = \"page\">";
        }
        return $pages;
    }
}