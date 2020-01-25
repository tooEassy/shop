<?php


namespace src\models;

use core\Connection;

class Product extends ActiveRecord
{
    public function getTableName()
    {
        return $this->tableName = 'products';
    }

    public function getAll()
    {
        $allProducts = array();
        foreach ($this->con->db->query("SELECT * FROM " . $this->getTableName())->fetchAll() as $row) {
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
            $allProducts[] = $newRow;

        }
        return $allProducts;
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
        $productsById = array();
        foreach ($allId as $id) {
            foreach ($this->con->db->query("SELECT * FROM " . $this->getTableName() . " WHERE id = " . $id)->
            fetchAll() as $row) {
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
                $productsById[] = $newRow;
            }
        }
        return $productsById;
    }
    public function getByTitle($title)
    {
        $productsByTitle = array();
        foreach ($this->con->db->query("SELECT * FROM " . $this->getTableName() . " WHERE title = '$title'")->
            fetchAll() as $row) {
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
            $productsByTitle[] = $newRow;
        }
        return $productsByTitle;
    }
}