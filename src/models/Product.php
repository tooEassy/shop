<?php


namespace src\models;

use config\Connection;

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
    public function getByName($titles)
    {
        $objects = array();
        $con = new Connection();
        foreach ($titles as $title) {
            $product = $con->db->query("SELECT * FROM products WHERE title = '$title'")->fetchAll();
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