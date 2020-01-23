<?php

namespace src\models;

use config\Connection;

class Category
{
    public function getAll()
    {
        $objects = array();
        $con = new Connection();
        $allFromCategories = $con->db->query("SELECT * FROM categories ")->fetchAll();
        foreach ($allFromCategories as $row) {
            $newRow = new self();
            $newRow->id = $row['id'];
            $newRow->title = $row['title'];
            $newRow->created_at = $row['created_at'];
            $newRow->updated_at = $row['updated_at'];
            $objects[] = $newRow;
        }
        return $objects;
    }
}