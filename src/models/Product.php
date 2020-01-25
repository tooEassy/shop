<?php


namespace src\models;

use core\Connection;

class Product
{
    public function getAll()
    {
        $objects = array();
        $con = new Connection();
        $allFromProduct = $con->db->query("SELECT * FROM products ")->fetchAll();
        foreach ($allFromProduct as $row) {
            $newRow = new self();
            $newRow->id = $row['id'];
            $newRow->title = $row['title'];
            $newRow->desc = $row['desc'];
            $newRow->sale_price = $row['sale_price'];
            $newRow->vendor_code = $row['vendor_code'];
            $newRow->available = $row['available'];
            $newRow->sail = $row['sail'];
            $newRow->main_image = $row['main_image'];
            $newRow->brand_id = $row['brand_id'];
            $newRow->created_at = $row['created_at'];
            $newRow->updated_at = $row['updated_at'];
            $objects[] = $newRow;

        }
        return $objects;
    }

    public function getByCategory($categoryId)
    {
        $objects = array();
        $con = new Connection();
        $query = "select products.* from products left join products_categories on products_categories.product_id = 
            products.id WHERE products_categories.category_id = $categoryId[0]";
        for ($i = 0; $i < count($categoryId); $i++) {
            if ($i>0) $query .= " OR products_categories.category_id = $categoryId[$i]";
        }
        $getProductByCategory = $con->db->query($query)->fetchAll();
        foreach ($getProductByCategory as $row) {
            $newRow = new self();
            $newRow->id = $row['id'];
            $newRow->title = $row['title'];
            $newRow->desc = $row['desc'];
            $newRow->sale_price = $row['sale_price'];
            $newRow->vendor_code = $row['vendor_code'];
            $newRow->available = $row['available'];
            $newRow->sail = $row['sail'];
            $newRow->main_image = $row['main_image'];
            $newRow->brand_id = $row['brand_id'];
            $newRow->created_at = $row['created_at'];
            $newRow->updated_at = $row['updated_at'];
            $objects[] = $newRow;
        }
        return $objects;
    }

    public function getById($allId)
    {
        $objects = array();
        $con = new Connection();
        foreach ($allId as $id) {
            $product = $con->db->query("SELECT * FROM products WHERE id = '$id'")->fetchAll();
            foreach ($product as $row) {
            $newRow = new self();
            $newRow->id = $row['id'];
            $newRow->title = $row['title'];
            $newRow->desc = $row['desc'];
            $newRow->sale_price = $row['sale_price'];
            $newRow->vendor_code = $row['vendor_code'];
            $newRow->available = $row['available'];
            $newRow->sail = $row['sail'];
            $newRow->main_image = $row['main_image'];
            $newRow->brand_id = $row['brand_id'];
            $newRow->created_at = $row['created_at'];
            $newRow->updated_at = $row['updated_at'];
            $objects[] = $newRow;
        }
        }
        return $objects;
    }
}